<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolHistory extends Model
{
    protected $fillable = [
        'id','student_id','name','graduate','nasional_exam_number',
        'npsn','provinsi_id','kabupaten_id','kecamatan_id','street'
    ];
}
