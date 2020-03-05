<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\DonaturStudent;
use App\Models\Donatur;
use App\Models\SppStudent;
use App\Models\Spp;
use App\Models\StudentGrade;
use App\User;
use Yajra\Datatables\Datatables;
use Form;
use Kris\LaravelFormBuilder\FormBuilder;

class DonaturStudentController extends Controller
{
    private $folder = 'donatur_student';
    private $uri = 'donaturStudent';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->folder.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $donatur = Donatur::where([
            ['nik', "=", $request->nik],
            ['date_birth', "=", $request->date_birth]
        ])->first();
        if ($donatur == null) {
            return redirect()->back()->with('notif', 'Data yang anda masukkan Salah!');
        } else {
            $ajax = route('donaturStudent.dbtb', $donatur->id);
            return view($this->folder.'.show', compact('ajax', 'donatur'));
        }
    }

    public function dbTables(Request $request, $id)
    {
        $data = DonaturStudent::where('donatur_id', "=", $id)->get();
        
        return Datatables::of($data)
        ->addColumn('nis', function($index){
            return $index->student->nis;
        })
        ->addColumn('name', function($index){
            return $index->student->name;
        })
        ->addColumn('birth', function($index){
            return $index->student->birth_place.", ".date('d M Y', strtotime($index->birth_date));
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('donaturStudent.sppdtl', $index->id), "method" => "GET", "class" => "text-right"]);
            $tag    .= "<button type='submit' class='btn btn-success btn-sm' >SPP</button>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'id', 'nis', 'name', 'birth', 'action'
        ])
        ->make(true);
    }

    public function sppStudent(Request $request, $id)
    {
        $spps = SppStudent::find($id);
        $std = DonaturStudent::where('id', $id)->get('donatur_id');
        $dnt = Donatur::where('id', $std->toArray())->get();
        // return response()->json($dnt);
        $ajax = route('donaturStudent.spptb', $id);

        return view($this->folder.'.spp', compact('ajax', 'spps', 'dnt'));
    }

    public function sppTables(Request $request, $id)
    {
        $data = SppStudent::where('student_id', $id)->get();
        return Datatables::of($data)
        ->editColumn('spp_id', function($index){
            $spp = Spp::all();
            foreach ($spp as $value) {
              if ($index->spp_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->editColumn('user_id', function($index){
            $user = User::all();
            foreach ($user as $value) {
              if ($index->user_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->editColumn('created_at', function($index){
            return date('d F Y', strtotime($index->created_at));
        })
        ->editColumn('status',function($index){
            if ($index->status == 1) {
                return "<span class='badge badge-pill badge-success'>Lunas</span>";
            }else {
                return "<span class='badge badge-pill badge-warning'>Belum Lunas</span>";
            }
        })
        ->rawColumns([
            'spp_id', 'user_id', 'created_at', 'status', 'action'
        ])
        ->make(true);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
