<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->morphOne('App\Models\Profile','profileable');
    }
}
