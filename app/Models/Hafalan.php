<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    protected $fillable = ['user_id', 'student_id', 'surah_id', 'juz', 'ayat_start', 'ayat_end','note'];
}
