<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['id', 'teacher_id', 'name'];
    public function teacher()
    {
      return $this->belongsTo(Teacher::class);
    }
}
