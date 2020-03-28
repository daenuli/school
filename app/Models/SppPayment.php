<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SppPayment extends Model
{
    protected $fillable = ['id', 'student_id', 'total', 'pay_month', 'user_id'];

    public function sppPayment()
    {
        return $this->belongsTo(Student::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function setTotalAttribute($val)
    {
        $this->attributes['total'] = str_replace('.','',$val);
    }
}
