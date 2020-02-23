<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['id','nik','name','gender','department_id','phone'];
    public function grades()
    {
      return $this->hasMany(Grade::class);
    }
}
