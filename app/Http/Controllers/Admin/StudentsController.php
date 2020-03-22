<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;
use App\Models\StudentUser;
use App\Models\StudentGrade;
use App\Models\Provinsi;
use App\Models\Hafalan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\SchoolHistory;
use App\Models\SchoolYear;
use App\Models\IllnessHistory;
use Yajra\Datatables\Datatables;
use Form;
use App\Models\SppStudent;
use App\Models\Spp;
use App\Models\SppPayment;
use App\User;
use Carbon\Carbon;

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
            $tag    .= "<a href='' class='btn btn-danger text-white btn-sm'>Fault</a>";
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
        $spp = Spp::all();
        return view('admin.students.create', compact('provinsi', 'spp'));
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
        $student->spp_id = $request->spp_id;
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
        $data['student'] = Student::find($id);
        $data['illness'] = IllnessHistory::where('student_id', $id)->get();
        $data['parents'] = Parents::where('student_id', $id)->get();
        $data['father'] = Parents::where([['student_id', $id], ['role', 1]])->first();
        $data['mother'] = Parents::where([['student_id', $id], ['role', 2]])->first();
        $data['wali'] = Parents::where([['student_id', $id], ['role', 3]])->first();
        $data['guardian'] = Parents::where([['student_id', $id], ['is_guardian', 1]])->first();
        $data['school'] = SchoolHistory::where('student_id', $id)->first();
        $data['hafalan'] = Hafalan::where('student_id',$id)->orderBy('created_at', 'desc')->get();

        // for update
        $provinsi = Provinsi::all();

        return view('admin.students.show', $data);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $provinsi = Provinsi::all();
        $spp = Spp::all();
        return view('admin.students.edit', compact('student', 'provinsi', 'spp'));
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
            'spp_id' => $request->spp_id,
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

        return redirect()->route('student.show', $id)->with('nosubmittif', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        //
    }

    //bagian adib spp santri

    public function sppStudent($id)
    {
        $spp = Spp::all();
        $spps = SppStudent::find($id);
        $ajax = route('sppStudent.spptb', $id);
        $id;
        // return response()->json($ajax);
        return view('admin.sppStudents.index', compact('ajax','spp','spps','id'));
    }

    public function sppTables(Request $request, $id)
    {
        $data = SppStudent::where('student_id', $id)->get();
        return Datatables::of($data)
        ->editColumn('spp_id', function($index){
            $spp = Spp::all();
            foreach ($spp as $value) {
              if ($index->spp_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->editColumn('user_id', function($index){
            $user = User::all();
            foreach ($user as $value) {
              if ($index->user_id == $value->id) {
                return $value->name;
              }
            }
        })
        ->editColumn('created_at', function($index){
            return date('d F Y', strtotime($index->created_at));
        })
        ->editColumn('status', function($index){
            if ($index->status == 1) {
              return 'Lunas';
            } else {
              return 'Belum Lunas';
            }
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('sppStudent.sppdestroy', $index->id), "method" => "DELETE"]);
            $tag    .= "<div class='d-flex justify-content-end'>";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            $tag    .= Form::open(["url"=>route('sppStudent.sppedt', $index->id), "method" => "GET"]);
            $tag    .= "<button type='submit' class='btn btn-sm btn-success pull-right'>Edit</button>";
            $tag    .= "</div>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'spp_id', 'user_id', 'created_at', 'status', 'action'
        ])
        ->make(true);
    }

    public function sppCreate()
    {
        $spp = Spp::all();
        return view('admin.sppStudents.create', compact('spp'));
    }

    public function sppStore(Request $request, $id)
    {
        SppStudent::create($request->all());
        return redirect()->route('sppStudent.sppdtl', $id);
    }

    public function sppEdit($id)
    {
        $spp = Spp::all();
        $spps = SppStudent::find($id);
        return view('admin.sppStudents.edit', compact('spp','spps'));
    }

    public function sppUpdate(Request $request, $id)
    {
        $spp = $request->student_id;
        SppStudent::find($id)->update($request->all());
        return redirect()->route('sppStudent.sppdtl', $spp);
    }

    public function sppDestroy($id)
    {
        SppStudent::find($id)->delete();
        return redirect()->back();
    }

    // Spp Payment

    public function sppPaymentDetail($id)
    {
        $spp = Spp::all();
        $spps = SppPayment::find($id);
        $ajax = route('sppPayment.sppTable', $id);
        $id;
        // return response()->json($ajax);
        return view('admin.spp_payment.index', compact('ajax','spp','spps','id'));
    }

    public function sppPaymentTables(Request $request, $id)
    {
        $student = Student::find($id);
        $studentGrade = StudentGrade::where('student_id', $id)->first();
        $schoolYear = SchoolYear::where('id', $studentGrade->school_year_id)->first();
        $sppPayment = SppPayment::where([['student_id', $id], ['pay_month', 'like', $schoolYear->start_year."%"]])->get();
        // dd($sppPayment);
        $spp = Spp::all();
        $month = [
          [
            'id' => 1,
            'name' => 'Januari'
          ],
          [
            'id' => 2,
            'name' => 'Februari'
          ],
          [
            'id' => 3,
            'name' => 'Maret'
          ],
          [
            'id' => 4,
            'name' => 'April'
          ],
          [
            'id' => 5,
            'name' => 'Mei'
          ],
          [
            'id' => 6,
            'name' => 'Juni'
          ],
          [
            'id' => 7,
            'name' => 'Juli'
          ],
          [
            'id' => 8,
            'name' => 'Agustus'
          ],
          [
            'id' => 9,
            'name' => 'September'
          ],
          [
            'id' => 10,
            'name' => 'Oktober'
          ],
          [
            'id' => 11,
            'name' => 'November'
          ],
          [
            'id' => 12,
            'name' => 'Desember'
          ]
        ];
        return Datatables::of($month)
        ->addColumn('category', function($index) use($student) {
          if ($student->spp_id == 1) {
            $sppCategory = "<span class='badge badge-pill badge-success'>Mampu</span>";
          } else {
            $sppCategory = "<span class='badge badge-pill badge-primary'>Tidak Mampu</span>";
          }
          return $sppCategory;
        })
        ->addColumn('total', function($index) use($student) {
          return 'Rp '.number_format($student->spp->total, 0, "", ".");
        })
        ->addColumn('pay_date', function($index) {
          return date('d M Y');
        })
        ->addColumn('status', function($index) {
          $spp = 1500000;
          $pay = 1000000;
          if ($pay <= $spp) {
            $status = "<span class='badge badge-pill badge-success'>Lunas</span>";
          } else {
            $status = "<span class='badge badge-pill badge-warning'>Belum Lunas</span>";
          }
          return $status;
        })
        ->addColumn('action', function($index){
            $tag     = Form::open(["url"=>route('sppStudent.sppdestroy', $index['id']), "method" => "DELETE"]);
            $tag    .= "<div class='d-flex justify-content-end'>";
            $tag    .= "<button type='submit' class='btn btn-danger btn-sm' >Hapus</button>";
            $tag    .= Form::close();
            $tag    .= Form::open(["url"=>route('sppStudent.sppedt', $index['id']), "method" => "GET"]);
            $tag    .= "<button type='submit' class='btn btn-sm btn-success pull-right'>Edit</button>";
            $tag    .= "</div>";
            $tag    .= Form::close();
            return $tag;
        })
        ->rawColumns([
            'category', 'status', 'action'
        ])
        ->make(true);
    }
}
