<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $fillable = ['id', 'student_id', 'name', 'birth_date', 'gender', 'last_education', 'job', 'salary', 'phone', 'role', 'is_guardian']
}
