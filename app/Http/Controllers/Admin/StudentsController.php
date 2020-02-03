<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Yajra\Datatables\Datatables;
use Form;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax     = route('student.dbtb');
        return view('admin.students.index', compact('ajax'));
    }

    public function dbTables(Request $request)
    {
        $data = Student::where('status', 1)->get();
        return Datatables::of($data)
        ->editColumn('gender',function($index){
            if ($index->gender == 1) {
                return "<span class='badge badge-pill badge-primary'>Laki-Laki</span>";
            }else {
                return "<span class='badge badge-pill badge-info'>Perempuan</span>";
            }
        })
        ->addColumn('birth', function($index){
            return $index->birth_place.", ".date('d M Y', strtotime($index->birth_date));
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('student.show', $index->id), "method" => "PUT", "class" => "text-right"]);
            $tag    .= "<a href=". route('student.show', $index->id) ." class='btn btn-primary btn-sm'>Detail</a> ";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'id', 'gender', 'action'
        ])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
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
