<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $fillable = ['id','nik','name','date_birth','email','provinsi_id','kabupaten_id','kecamatan_id','street'];

    public function provinsi()
    {
      return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
      return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
      return $this->belongsTo(Kecamatan::class);
    }
}
