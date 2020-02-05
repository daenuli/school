<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Student;
use App\Models\Hafalan;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;
use App\Forms\HafalanForm;
use Illuminate\Support\Facades\Auth;

class HafalanController extends Controller
{
    protected $folder = 'admin.hafalan';
    protected $route = 'hafalan.';
    protected $rdr = '/hafalan';
    protected $title = 'Hafalan';
    protected $storeUrl = 'hafalan.store';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['create'] = route($this->route.'create');
        $data['title'] = $this->title;
        return view($this->folder.'.index', $data);
    }

    public function dbTables(Request $request)
    {
        $data = Hafalan::all();
        return Datatables::of($data)
            ->editColumn('user_id', function($index){
                return $index->user->name;
            })
            ->editColumn('student_id', function($index){
                return $index->student->name;
            })
            ->addColumn('action', function($index){
                $tag = Form::open(["url" => route($this->route.'destroy', $index->id), "method" => "PUT", "class" => "text-right"]);
                $tag .= "<a href=". route($this->route.'edit', $index->id) ." class='btn btn-primary btn-sm'>Detail</a> ";
                $tag .= "<button type='submit' class='btn btn-danger btn-sm' onclick='javascript:return confirm(`Apakah anda yakin ingin menghapus data ini?`)'>Hapus</button>";
                $tag .= Form::close();
                return $tag;
            })
            ->rawColumns(['id', 'action'])
            ->make(true);
    }

    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = $this->title;
        $data['back'] = route($this->route.'index');
        $data['form'] = $formBuilder->create(\App\Forms\HafalanForm::class, ['method'=>'POST', 'url'=> route($this->storeUrl)]);
        return view($this->folder.'.create', $data);
    }

    public function store(Request $request, FormBuilder $formBuilder)
    {
        $request->validate(['student_id' => 'required','count' => 'required|max:2','note' => 'required']);
        $form = $formBuilder->create(\App\Forms\HafalanForm::class);
        if(!$form->isValid()){return redirect()->back()->withErrors($form->getErrors())->withInput();};
        if ($request->count <= 30) {
            Hafalan::create(['user_id' => Auth::id(), 'student_id' => $request->student_id, 'count' => $request->count, 'note' => $request->note]);
            return redirect($this->rdr)->with('Success', trans('Data anda telah berhasil di Input !'));
        }else {
            return redirect()->back()->with('alert', 'Jumlah Hafalan maximal 30 Juz')->withInput();
        }
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['form'] = $formBuilder->create(\App\Forms\HafalanForm::class, [
            'method'    => 'PUT',
            'url'       => route($this->route.'update', $id),
        ]);
        $data['h'] = Hafalan::findOrFail($id);
        $data['title'] = $this->title;
        $data['back'] = route($this->route.'index');
        return view($this->folder.'.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $h = Hafalan::findOrFail($id);
        $h->delete();
        return redirect($this->rdr)->with('Success', trans('Data anda telah berhasil di Hapus !'));
    }
}
