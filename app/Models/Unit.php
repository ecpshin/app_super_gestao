<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Unit extends Model
{
    use Notifiable, SoftDeletes;
    
    protected $fillable = [
        'unit_name',
        'description'
    ];

    public function products () {
        return $this->hasMany(Product::class);
    }
    
    public function productDetails () {
        return $this->hasMany(ProductDetail::class);
    }
}
