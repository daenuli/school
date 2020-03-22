<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Yajra\Datatables\Datatables;
use Form;
use App\Models\Departement;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-gurus'))return $next($request);
            abort(403);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax = route('teacher.dbtb');
        return view('admin.teachers.index', compact('ajax'));
    }

    public function dbTables(Request $request)
    {
        $data = Teacher::orderBy('created_at', 'desc')->get();
        return Datatables::of($data)
        ->editColumn('gender',function($index){
            if ($index->gender == 1) {
              return "<span class='badge badge-pill badge-primary'>Laki-laki</span>";
            } else {
              return "<span class='badge badge-pill badge-primary'>Perempuan</span>";
            }
        })
        ->editColumn('department_id',function($index){
            $departement = Departement::all();
            foreach ($departement as $value) {
              if ($index->department_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('teacher.destroy', $index->id), "method" => "DELETE"]);
            $tag    .= "<div class='d-flex justify-content-end'>";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            $tag    .= Form::open(["url"=>route('teacher.edit', $index->id), "method" => "GET"]);
            $tag    .= "<button type='submit' class='btn btn-success btn-sm' >Edit</button>";
            $tag    .= "</div>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'gender', 'department_id', 'action'
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
        $departement = Departement::all();
        return view('admin.teachers.create', compact('departement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create($request->all());

        return redirect('/teacher');
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
        $data = Teacher::find($id);
        $departement = Departement::all();
        return view('admin.teachers.edit', compact('data', 'departement'));
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
        Teacher::find($id)->update($request->all());
        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect('/teacher');
    }
}
