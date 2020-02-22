<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'nis', 'nik', 'nisn', 'name', 'birth_place', 'birth_date', 'position', 'level', 'child_status', 'avatar', 'email', 'phone', 'gender', 'status', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'street'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }
    public function hafalans()
    {
        return $this->hasMany(Hafalan::class);
    }
}
