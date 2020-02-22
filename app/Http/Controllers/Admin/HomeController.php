<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Grade;
use App\User;

class HomeController extends Controller
{
	private $folder = 'admin.home';
    private $uri = 'home';
	private $title = 'Dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$data['title'] = $this->title;
        $student = Student::where('status', 1)->get();
        $teacher = Teacher::all();
        $user = User::all();
        $grade = Grade::all();

        // chart student
        $studentGender['lk'] = Student::where('status', 1)->where('gender', 1)->count();
        $studentGender['pr'] = Student::where('status', 1)->where('gender', 0)->count();

        // chart student
        $teacherGender['lk'] = Teacher::where('gender', 1)->count();
        $teacherGender['pr'] = Teacher::where('gender', 0)->count();

        return view($this->folder.'.index', $data, compact('student', 'teacher', 'user', 'grade', 'studentGender', 'teacherGender'));
    }
}
