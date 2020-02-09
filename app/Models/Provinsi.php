<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [];

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
