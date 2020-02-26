<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\SppStudent;
use App\Models\Hafalan;
use Yajra\Datatables\Datatables;

class ParentStudentController extends Controller
{
    public function search()
    {
    	return view('parent_student.search');
    }

    public function result(Request $request)
    {
    	$student = Student::where([
    		['nis', "=", $request->nis],
    		['birth_date', "=", $request->birth_date]
    	])->first();
    	if ($student == null) {
    		return redirect()->back()->with('notif', 'Data yang anda masukkan salah!');
    	} else {
	    	$ajaxSpp = route('search.spp', $student->id);
	    	$ajaxHafalan = route('search.hafalan', $student->id);
    		return view('parent_student.result', compact('student', 'ajaxSpp', 'ajaxHafalan'));
    	}
    }

    public function sppTables(Request $request, $id)
    {
    	$data = SppStudent::where('student_id', 1)->get();
        return Datatables::of($data)
        ->editColumn('created_at', function($index){
            return $index->created_at->format('d M Y');
        })
        ->editColumn('spp_id', function($index){
            return "Rp ".number_format($index->spp->total,0,",",".");
        })
        ->editColumn('status',function($index){
            if ($index->status == 1) {
                return "<span class='badge badge-pill badge-success'>Lunas</span>";
            }else {
                return "<span class='badge badge-pill badge-warning'>Belum Lunas</span>";
            }
        })
        ->rawColumns([
            'id', 'status'
        ])
        ->make(true);
    }

    public function hafalanTables(Request $request, $id)
    {
    	$data = Hafalan::where('student_id', 1)->get();
        return Datatables::of($data)
        ->editColumn('created_at', function($index){
            return $index->created_at->format('d M Y');
        })
        ->editColumn('surah', function($index){
            return $index->surah->name;
        })
        ->editColumn('user', function($index){
            return $index->user->name;
        })
        ->editColumn('ayat', function($index){
            return $index->ayat_start." - ".$index->ayat_end;
        })
        ->editColumn('status',function($index){
            if ($index->status == 1) {
                return "<span class='badge badge-pill badge-success'>Lunas</span>";
            }else {
                return "<span class='badge badge-pill badge-warning'>Belum Lunas</span>";
            }
        })
        ->rawColumns([
            'id', 'status'
        ])
        ->make(true);
    }
}
