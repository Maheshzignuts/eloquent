<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function product()
    {
        return $this->hasOne('App\Models\Product')->OfMany('product_price','min');
    }
    public function currentPricing()
    {
        return $this->hasOne('App\Models\Product')->ofMany([
            'created_at'=>'max',
            'id'=>'max'

        ],function($query){
            $query->where('created_at','<=',now());
        });
    }
}
