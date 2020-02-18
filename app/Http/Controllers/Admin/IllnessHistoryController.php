<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IllnessHistory;
use App\Models\Student;

class IllnessHistoryController extends Controller
{
    public function index()
    {
        //
    }

    public function createIllness($id)
    {
        $student = Student::find($id);
        return view('admin.students.illness.create', compact('student'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $illness = new IllnessHistory;
        $illness->student_id = $request->student_id;
        $illness->name = $request->illness_name;
        $illness->total = $request->illness_total;
        $illness->therapy = $request->illness_therapy;
        $illness->save();
        return redirect()->route('student.show', $request->student_id)->with('notif', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $illness = IllnessHistory::find($id);
        $student = Student::find($illness->student_id);
        return view('admin.students.illness.edit', compact('illness', 'student'));
    }

    public function update(Request $request, $id)
    {
        IllnessHistory::find($request->illness_id)->update([
            'name' => $request->illness_name,
            'total' => $request->illness_total,
            'therapy' => $request->illness_therapy
        ]);
        return redirect()->route('student.show', $id)->with('notif', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $illness = IllnessHistory::findOrFail($id);
        $student_id = $illness->student_id;
        $illness->delete();
        return redirect()->route('student.show', $student_id)->with('notif', 'Data berhasil dihapus!');
    }
}
