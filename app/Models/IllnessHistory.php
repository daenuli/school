<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IllnessHistory extends Model
{
    protected $fillable = ['id', 'student_id', 'name', 'total', 'therapy'];
}
