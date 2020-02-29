<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonaturStudent extends Model
{
    protected $fillable = ['id', 'donatur_id', 'student_id'];
    public function donatur()
    {
        return $this->belongsTo(Donatur::class, "donatur_id");
    }
    public function student()
    {
        return $this->belongsTo(Student::class, "student_id");
    }
}
