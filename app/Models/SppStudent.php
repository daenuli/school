<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class SppStudent extends Model
{
    protected $fillable = ['id','student_id','spp_id','user_id','status'];

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
