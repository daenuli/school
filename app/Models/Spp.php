<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
	// protected $table = 'spps';
    protected $fillable = ['id','users_id','name','total','created_at','update_at'];
    public function spp()
    {
        return $this->hasMany(SppStudent::class);
    }
}
