<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;
use Yajra\Datatables\Datatables;
use Form;

class ParentsController extends Controller
{
    public function index()
    {
        
    }

    public function createParent($id)
    {
        $student = Student::find($id);
        return view('admin.students.parents.create', compact('student'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $parent = new Parents;
        $parent->student_id = $request->student_id;
        $parent->name = $request->parent_name;
        $parent->birth_date = $request->parent_birth_date;
        $parent->gender = $request->parent_gender;
        $parent->last_education = $request->parent_last_education;
        $parent->job = $request->parent_job;
        $parent->salary = $request->parent_salary;
        $parent->phone = $request->parent_phone;
        $parent->role = $request->parent_role;
        $parent->is_guardian = $request->parent_is_guardian;
        $parent->save();
        return redirect()->route('student.show', $request->student_id)->with('notif', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $parents = Parents::where('student_id', $id)->get();
        $student = Student::find($id);
        return view('admin.students.parents.show', compact('parents', 'student'));
    }

    public function edit($id)
    {
        $parent = Parents::find($id);
        return view('admin.students.parents.edit', compact('parent'));
    }

    public function update(Request $request, $id)
    {
        Parents::find($id)->update([
            'name' => $request->parent_name,
            'birth_date' => $request->parent_birth_date,
            'gender' => $request->parent_gender,
            'last_education' => $request->parent_last_education,
            'job' => $request->parent_job,
            'salary' => $request->parent_salary,
            'phone' => $request->parent_phone,
            'role' => $request->parent_role,
            'is_guardian' => $request->parent_is_guardian
        ]);        
        return redirect()->route('student.show', $request->student_id)->with('notif', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $parent = Parents::findOrFail($id);
        $student_id = $parent->student_id;
        $parent->delete();
        return redirect()->route('student.show', $student_id)->with('notif', 'Data berhasil dihapus!');
    }
}
