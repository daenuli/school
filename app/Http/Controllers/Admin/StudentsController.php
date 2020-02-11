<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;
use App\Models\StudentUser;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\SchoolHistory;
use App\Models\IllnessHistory;
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
        $ajax = route('student.dbtb');
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
        $provinsi = Provinsi::all();
        return view('admin.students.create', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    return redirect()->route('student.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $illness = IllnessHistory::where('student_id', $id)->get();
        $parents = Parents::where('student_id', $id)->get();
        $father = Parents::where([['student_id', $id], ['role', 1]])->first();
        $mother = Parents::where([['student_id', $id], ['role', 2]])->first();
        $wali = Parents::where([['student_id', $id], ['role', 3]])->first();
        $guardian = Parents::where([['student_id', $id], ['is_guardian', 0]])->first();
        $school = SchoolHistory::where('student_id', $id)->get();

        return view('admin.students.show', compact('student', 'illness', 'parents', 'school', 'father', 'mother', 'wali', 'guardian'));
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
