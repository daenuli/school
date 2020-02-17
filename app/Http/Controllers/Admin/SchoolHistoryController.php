<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolHistory;
use App\Models\Student;
use App\Models\Provinsi;

class SchoolHistoryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $school = SchoolHistory::where('student_id', $id)->first();
        $provinsi = Provinsi::all();
        return view('admin.students.editSchool', compact('student', 'school', 'provinsi'));
    }

    public function update(Request $request, $id)
    {
        SchoolHistory::find($request->school_id)->update([
            'name' => $request->school_name,
            'graduate' => $request->school_graduate,
            'nasional_exam_number' => $request->school_exam_number,
            'npsn' => $request->school_npsn,
            'provinsi_id' => $request->school_provinsi_id,
            'kabupaten_id' => $request->school_kabupaten_id,
            'kecamatan_id' => $request->school_kecamatan_id,
            'street' => $request->school_street
        ]);
        return redirect()->route('student.show', $id)->with('notif', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        //
    }
}
