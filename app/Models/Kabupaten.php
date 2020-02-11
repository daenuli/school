<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $fillable = ['id', 'provinsi_id', 'nama'];

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }

    public function provinsi()
    {
    	return $this->belongsTo(Provinsi::class,'provinsi_id', 'id');
    }
}
