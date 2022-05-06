<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner()
    {
        return $this->hasOneThrough('App\Models\Owner','App\Models\Car');
    }
    public function car()
    {
        return $this->hasMany('App\Models\Car');
    }
}
