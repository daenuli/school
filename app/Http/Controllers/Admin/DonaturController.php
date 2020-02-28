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
use App\Models\DonaturStudent;
use App\Models\Student;

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
        ->editColumn('date_birth', function($index){
          return date('d F Y', strtotime($index->date_birth));
        })
        ->addColumn('alamat', function($index){
            $kecamatan = Kecamatan::all();
            foreach ($kecamatan as $value) {
              if ($index->kecamatan_id == $value->id) {
                $kec = $value->nama;
              }
            }

            $kabupaten = Kabupaten::all();
            foreach ($kabupaten as $value) {
              if ($index->kabupaten_id == $value->id) {
                $kab = $value->nama;
              }
            }

            $provinsi = Provinsi::all();
            foreach ($provinsi as $value) {
              if ($index->provinsi_id == $value->id) {
                $prov = $value->nama;
              }
            }

            return $index->street.', '.$kec.', '.$kab.', '.$prov;
        })
        ->addColumn('action', function($index){
            $tag    = "<div class='d-flex justify-content-end'>";
            $tag    .= Form::open(["url"=>route('donatur.destroy', $index->id), "method" => "DELETE"]);
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            $tag    .= "<a href='".route('donatur.edit', $index->id)."' class='btn btn-success btn-sm'>Edit</a>";
            $tag    .= "<a href='".route('donatur.show', $index->id)."' class='btn btn-info btn-sm'>Show</a>";
            $tag    .= "</div>";
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
        $kec = Kecamatan::all();
        $kab = Kabupaten::all();
        $prov = Provinsi::all();
        return view('admin.donaturs.create', compact('kec','kab','prov'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Donatur::create($request->all());
        return redirect('/donatur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donatur = Donatur::where('id', $id)->get();
        $student = Student::all();
        $id;
        $ajax = route('donatur.donaturDetail', $id);
        return view('admin.donaturs.show', compact('ajax','donatur','id','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Donatur::find($id);
        $kec = Kecamatan::all();
        $kab = Kabupaten::all();
        $prov = Provinsi::all();
        return view('admin.donaturs.edit', compact('data','kec','kab','prov'));
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
        Donatur::find($id)->update($request->all());
        return redirect('/donatur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donatur::find($id)->delete();
        return redirect('/donatur');
    }

    public function donaturDetail(Request $request, $id)
    {
        $data = DonaturStudent::where('donatur_id', $id)->get();
        return Datatables::of($data)
        ->editColumn('nis',function($index){
            $student = Student::all();
            foreach ($student as $value) {
              if ($index->student_id == $value->id) {
                return $value->nis;
              }
            }
        })
        ->editColumn('student_id',function($index){
            $student = Student::all();
            foreach ($student as $value) {
              if ($index->student_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('donatur.destroyStudent', $index->id), "method" => "DELETE"]);
            $tag    .= "<div class='d-flex justify-content-end'>";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'nis', 'student_id', 'action'
        ])
        ->make(true);
    }

    public function createStudent($id)
    {
        $student = Student::all();
        $id;
        return view('admin.donaturs.add', compact('student','id'));
    }

    public function storeStudent(Request $request, $id)
    {
        DonaturStudent::create($request->all());
        return redirect()->route('donatur.show', $id);
    }

    public function destroyStudent($id)
    {
        DonaturStudent::find($id)->delete();
        return redirect()->back();
    }
}
