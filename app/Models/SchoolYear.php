<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    public $fillable = ['start_year', 'end_year', 'status'];
    public function studentGrade()
    {
      return $this->hasMany(StudentGrade::class);
    }
}
