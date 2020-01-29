<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'name', 'birth_place', 'birth_date', 'avatar', 'email', 'phone', 'gender', 'status', 'registration_date', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'fahter_name', 'mother_name'];
}
