<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    protected $fillable = ['user_id', 'student_id', 'count', 'note'];
}
