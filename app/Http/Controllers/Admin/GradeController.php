<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\StudentGrade;
use App\Models\SchoolYear;
use App\Models\Teacher;
use App\Models\Student;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;

class GradeController extends Controller
{
    private $folder = 'admin.grade';
    private $uri = 'grade';
    private $title = 'Kelas';

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['create'] = route($this->uri.'.create');
        return view($this->folder.'.index',$data);
    }
    public function dbTables()
    {
        $users = Grade::all();
        return DataTables::of($users)
        ->editColumn('teacher_id', function($index){
          return isset($index->teacher->name)?$index->teacher->name:'-';
        })
        ->editColumn('name', function($index){
          return '<a href="'.route($this->uri.'.show', $index->id).'" class="btn btn-sm btn-info">'.$index->name.'</a>';
        })
        ->addColumn('action', function ($index) {
            return '<form action="'. route($this->uri.'.destroy', $index->id) .'" method="POST" class="text-center">
            <a href="' . route($this->uri.'.edit', $index->id) . '" class="btn btn-sm btn-success"><i class="material-icons">create</i> Edit </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="'. csrf_token() .'">
            <button type="submit" class="btn btn-sm btn-danger btn-label" onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="material-icons">delete</i> Hapus </button>
            </form>
            ';
        })
        ->rawColumns(['id', 'name', 'action'])
        ->make(true);
    }
    public function studentDbtb($id)
    {
      $s = StudentGrade::where([['status', 1],['grade_id', $id]])->get();
      return DataTables::of($s)
      ->addColumn('nis', function($index){
        return $index->student->nis;
      })
      ->addColumn('name', function($index){
        return $index->student->name;
      })
      ->addColumn('action', function($index){
        $tag = Form::open(["url" => route($this->uri.'.destroy', $index->id), "method" => "DELETE"]);
        $tag .= "<button type='submit' class='btn btn-sm btn-danger btn-label' onclick='javascript:return confirm(\'Apakah anda yakin ingin menghapus data ini?\')'>Hapus</button>";
        $tag .= Form::close();
        return $tag;
      })
      ->rawColumns(['id', 'action'])
      ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = $this->title;
        $data['form'] = $formBuilder->create('App\Forms\GradeForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['back'] = route($this->uri.'.index');
        $data['years'] = SchoolYear::all();
        $data['std'] = Student::all();
        return view($this->folder.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required',
            'name' => 'required',
        ]);
        $data = new Grade;
        $data->teacher_id = $request->teacher_id;
        $data->name = $request->name;
        $data->save();
        foreach ($request->student_id as $s) {
          $k = new StudentGrade;
          $k->school_year_id = $request->school_year_id;
          $k->grade_id = $data->id;
          $k->student_id = $s;
          $k->status = 1;
          $k->save();
        }
        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Input !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['title'] = $this->title;
      $data['back'] = route($this->uri.'.index');
      $data['kelas'] = Grade::findOrFail($id);
      $data['std'] = Student::where('status',1)->whereHas('studentGrades', function($q){
            $q->where('status',0);
        })->get();
      return view($this->folder.'.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['title'] = $this->title;
        $data['form'] = $formBuilder->create('App\Forms\GradeForm', [
            'method' => 'PUT',
            'url' => route($this->uri.'.update', $id)
        ]);
        $data['back'] = route($this->uri.'.index');
        $data['h'] = Grade::find($id);
        return view($this->folder.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          'teacher_id' => 'required',
          'name' => 'required'
        ]);
        Grade::findOrFail($id)->update([
          'teacher_id' => $request->teacher_id,
          'name' => $request->name
        ]);
        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Edit !'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grade::find($id)->delete();
        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Hapus !'));
    }
}
