<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spp;
use App\Models\Student;
use Yajra\Datatables\Datatables;
use Form;
use App\Http\Controllers\Admin\Auth;

class SppsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax = route('spp.dbtb');
        return view('admin.spps.index', compact('ajax'));
    }

    public function dbTables(Request $request)
    {
        $data = Spp::where('status', 1)->get();
        return Datatables::of($data)
        ->editColumn('status',function($index){
            if ($index->status == 1) {
              return "<span class='badge badge-pill badge-primary'>Lunas</span>";
            } else {
              return "<span class='badge badge-pill badge-primary'>Belum Lunas</span>";
            }
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('spp.show', $index->id), "method" => "PUT", "class" => "text-right"]);
            $tag    .= "<a href=". route('spp.show', $index->id) ." class='btn btn-primary btn-sm'>Detail</a> ";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'status', 'action'
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
        $data = Student::all();
        return view('admin.spps.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Spp;
        $data->users_id = auth()->user()->id;
        $data->students_id = $request->students_id;
        $data->total = $request->total;
        $data->status = $request->status;
        $data->save();

        return redirect('/spp');
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
