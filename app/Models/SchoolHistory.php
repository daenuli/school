<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolHistory extends Model
{
    protected $fillable = [
        'id','student_id','name','graduate','nasional_exam_number',
        'npsn','provinsi_id','kabupaten_id','kecamatan_id','street'
    ];

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
}
