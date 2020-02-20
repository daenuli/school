<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;
use App\Models\StudentUser;
use App\Models\Provinsi;
use App\Models\Hafalan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\SchoolHistory;
use App\Models\IllnessHistory;
use Yajra\Datatables\Datatables;
use Form;
use App\Models\SppStudent;

class StudentsController extends Controller
{
    public function index()
    {
        $ajax = route('student.dbtb');
        return view('admin.students.index', compact('ajax'));
    }

    public function dbTables(Request $request)
    {
        $data = Student::where('status', 1)->get();
        return Datatables::of($data)
        ->editColumn('name', function($index){
            return "<a href=".route('student.show', $index->id)." class='text-dark underline'>".$index->name."</a>";
        })
        ->editColumn('gender',function($index){
            if ($index->gender == 1) {
                return "<span class='badge badge-pill badge-primary'>Laki-Laki</span>";
            }else {
                return "<span class='badge badge-pill badge-info'>Perempuan</span>";
            }
        })
        ->addColumn('hafalan', function($index){
            $hafalan = Hafalan::where('student_id', $index->id)->get()->sortByDesc('id')->first();
            if ($hafalan) {
                return "<span class='badge badge-pill badge-success'><a href='' class='text-white'>".$hafalan->count." Juz</a></span>";
            } else {
                return "<span class='badge badge-pill badge-warning'><a href='' class='text-white'>Belum Setor</a></span>";
            }
        })
        ->addColumn('birth', function($index){
            return $index->birth_place.", ".date('d M Y', strtotime($index->birth_date));
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('sppStudent.sppdtl', $index->id), "method" => "GET", "class" => "text-right"]);
            $tag    .= "<button type='submit' class='btn btn-success btn-sm' >SPP</button>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'id', 'name', 'gender', 'hafalan', 'action'
        ])
        ->make(true);
    }

    public function create()
    {
        $provinsi = Provinsi::all();
        return view('admin.students.create', compact('provinsi'));
    }

    public function store(Request $request)
    {
        $student = new Student;
        $studentUser = new StudentUser;

        // auto make new NIS Student
        $students = Student::max('nis');
        $plus = $students + 1;

        // input in student table
        $student->nis = $plus;
        $student->nik = $request->nik;
        $student->nisn = $request->nisn;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->position = $request->position;
        $student->sibling = $request->sibling;
        $student->level = $request->level;
        $student->child_status = $request->child_status;
        $student->provinsi_id = $request->provinsi_id;
        $student->kabupaten_id = $request->kabupaten_id;
        $student->kecamatan_id = $request->kecamatan_id;
        $student->street = $request->street;
        $ava = $request->file('avatar');
        if ($ava) {
            $ava_path     = $ava->store('ava_student', 'public');
            $student->avatar = $ava_path;
        }
        $student->save();

        //find new student in database
        $findStudent = Student::max('id');

        // input in student school history
        $school = new SchoolHistory;
        $school->student_id = $findStudent;
        $school->name = $request->school_name;
        $school->graduate = $request->school_graduate;
        $school->nasional_exam_number = $request->school_exam_number;
        $school->npsn = $request->school_npsn;
        $school->provinsi_id = $request->school_provinsi_id;
        $school->kabupaten_id = $request->school_kabupaten_id;
        $school->kecamatan_id = $request->school_kecamatan_id;
        $school->street = $request->school_street;
        $school->save();

        // input in student parent
        $countParent = count($request->parent_name);
        for ($i=0; $i < $countParent; $i++) {
            $parent = new Parents;
            // $parent_salary = str_replace('.','',$request->parent_salary[$i]);
            $parent->student_id = $findStudent;
            $parent->name = $request->parent_name[$i];
            $parent->birth_date = $request->parent_birth_date[$i];
            $parent->gender = $request->parent_gender.$i;
            $parent->last_education = $request->parent_last_education[$i];
            $parent->job = $request->parent_job[$i];
            $parent->salary = $request->parent_salary[$i];
            $parent->phone = $request->parent_phone[$i];
            $parent->role = $request->parent_role[$i];
            $parent->is_guardian = $request->parent_is_guardian.$i;
            $parent->save();
        }

        // input in student illness history
        $countIllness = count($request->illness_name);
        for ($i=0; $i < $countIllness; $i++) {
            $illness = new IllnessHistory;
            $illness->student_id = $findStudent;
            $illness->name = $request->illness_name[$i];
            $illness->total = $request->illness_total[$i];
            $illness->therapy = $request->illness_therapy[$i];
            $illness->save();
        }

    return redirect()->route('student.index')->with('notif', 'Data berhasil ditambah!');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $illness = IllnessHistory::where('student_id', $id)->get();
        $parents = Parents::where('student_id', $id)->get();
        $father = Parents::where([['student_id', $id], ['role', 1]])->first();
        $mother = Parents::where([['student_id', $id], ['role', 2]])->first();
        $wali = Parents::where([['student_id', $id], ['role', 3]])->first();
        $guardian = Parents::where([['student_id', $id], ['is_guardian', 1]])->first();
        $school = SchoolHistory::where('student_id', $id)->first();

        // for update
        $provinsi = Provinsi::all();

        return view('admin.students.show', compact('student', 'illness', 'parents', 'school', 'father', 'mother', 'wali', 'guardian', 'provinsi'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $provinsi = Provinsi::all();
        return view('admin.students.edit', compact('student', 'provinsi'));
    }

    public function update(Request $request, $id)
    {
        Student::find($id)->update([
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'name' => $request->name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'position' => $request->position,
            'sibling' => $request->sibling,
            'level' => $request->level,
            'child_status' => $request->child_status,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'kecamatan_id' => $request->kecamatan_id,
            'street' => $request->street,
            'status' => $request->status,
            'email' => $request->email
        ]);
        return redirect()->route('student.show', $id)->with('notif', 'Data berhasil diubah!');
    }

    public function updateAva(Request $request, $id)
    {
        $data     = Student::findOrFail($id);
        $ava      = $request->file('avatar');
        if ($ava) {
            if ($data->avatar && file_exists(storage_path('app/public/'.$data->avatar)) ) {
                \Storage::delete('public/'.$data->avatar);
            }
            $ava_path = $ava->store('ava_student', 'public'); //$ava->store('nama_folder', 'bersifat public')
            $data->avatar = $ava_path;
        }
        $data->save();
        return redirect()->route('student.show', $id)->with('notif', 'Poto Profil berhasil diubah');
    }

    public function historySchoolUpdate(Request $request, $id)
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

    public function sppStudent($id)
    {
        $ajax = route('sppStudent.spptb', $id);
        // return response()->json($ajax);
        return view('admin.sppStudents.index', compact('ajax'));
    }

    public function sppTables(Request $request, $id)
    {
        $data = SppStudent::where('student_id', $id)->get();
        return Datatables::of($data)
        ->make(true);
    }
}
