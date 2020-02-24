<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonaturStudent extends Model
{
    protected $fillable = ['id', 'donatur_id', 'student_id'];
}
