<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donatur;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Yajra\DataTables\DataTables;
use Form;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax = route('donatur.dbtb');
        return view('admin.donaturs.index', compact('ajax'));
    }

    public function dbTables(Request $request)
    {
        $data = Donatur::orderBy('created_at', 'desc')->get();
        return DataTables::of($data)
        ->addColumn('alamat', function($index){
          return $index->provinsi_id.', '.$index->kabupaten_id;
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
            'alamat','action'
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
        //
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
