<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function getfirstNameAttribute($value)
    {
        return strtoupper($value);
    }
    
}

