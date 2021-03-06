<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Hafalan extends Model
{
    protected $fillable = ['user_id', 'student_id', 'surah_id', 'juz', 'ayat_start', 'ayat_end','note'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function surah()
    {
        return $this->belongsTo(Surah::class);
    }
}
