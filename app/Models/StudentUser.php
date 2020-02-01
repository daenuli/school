<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    protected $fillable = ['id', 'user_id', 'student_id'];
}
