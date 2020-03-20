<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SppPayment extends Model
{
    protected $fillable = ['id', 'student_id', 'total', 'pay_month', 'user_id'];
}
