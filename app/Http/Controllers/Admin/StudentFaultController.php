<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentFault;
use Form;
use Yajra\Datatables\Datatables;

class StudentFaultController extends Controller
{
    private $folder = 'admin.student_fault';
    private $uri = 'student_fault';
    private $title = 'Pelanggaran Santri';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function student_fault($id)
    {
        $title = $this->title;
        $ajax = route('student_fault.faulttb', $id);
        $id;
        $student = Student::where('id', $id)->get();
        $point = StudentFault::where('student_id', $id)->get();
        // return response()->json($ajax);
        return view($this->folder.'.index', compact('ajax', 'id', 'title', 'student', 'point'));
    }

    public function faultTables(Request $request, $id)
    {
        $data = StudentFault::where('student_id', $id)->get();
        return Datatables::of($data)
        ->addColumn('type', function($index){
            if ($index->type == 1) {
                return "<span class='badge badge-pill badge-info'>Ringan</span>";
            }else if ($index->type == 2) {
                return "<span class='badge badge-pill badge-primary '>Sedang</span>";
            }else {
                return "<span class='badge badge-pill badge-danger'>Berat</span>";
            }
        })
        ->addColumn('action', function($index){
            return '<form action="'. route($this->uri.'.destroy', $index->id) .'" method="POST" class="text-right">
            <a href="' . route($this->uri.'.edit', $index->id) . '" class="btn btn-sm btn-success"><i class="material-icons">create</i> Edit </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="'. csrf_token() .'">
            <button type="submit" class="btn btn-sm btn-danger btn-label" onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="material-icons">delete</i> Hapus </button>
            </form>
            ';
        })
        ->rawColumns(['id', 'type', 'action'])
        ->make(true);
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        StudentFault::create($request->all());
        return redirect()->route($this->uri.'.fault', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = $this->title;
        $student = StudentFault::find($id);
        $id; 
        return view($this->folder.'.edit', compact('student', 'id', 'title'));
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
        $student = $request->student_id;
        StudentFault::find($id)->update($request->all());
        return redirect()->route($this->uri.'.fault', $student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentFault::find($id)->delete();
        return redirect()->back();
    }
}
