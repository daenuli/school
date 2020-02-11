<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ['id', 'kabupaten_id', 'nama'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function kabupaten()
    {
    	return $this->belongsTo(Kabupaten::class,'kabupaten_id', 'id');
    }
}
