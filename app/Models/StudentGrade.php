<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    public $fillable = ['id', 'school_year_id', 'grade_id', 'student_id', 'status'];
    public function grade()
    {
      return $this->belongsTo(Grade::class);
    }
    public function student()
    {
      return $this->belongsTo(Student::class);
    }
    public function schoolYear()
    {
      return $this->belongsTo(SchoolYear::class);
    }
}
