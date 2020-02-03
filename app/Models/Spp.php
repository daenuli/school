<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
	// protected $table = 'spps';
    protected $fillable = ['id','users_id','students_id','total', 'status', 'created_at','update_at'];
}
