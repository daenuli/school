<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFault extends Model
{
	protected $fillable = ['id', 'student_id', 'name', 'type', 'description'];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
