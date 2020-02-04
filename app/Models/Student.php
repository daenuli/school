<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'nis', 'nik', 'nisn', 'name', 'birth_place', 'birth_date', 'position', 'level', 'child_status', 'avatar', 'email', 'phone', 'gender', 'status', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'street'];

    public function hafalans()
    {
        return $this->hasMany(Hafalan::class);
    }
}
