<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SppStudent extends Model
{
    protected $fillable = ['id','student_id','spp_id','user_id','status'];
}