<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ProductDetail extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'product_id',
        'unit_id',
        'dimensoes',
    ];

    public function product () 
    {
        return $this->belongsTo('App\Models\Product');
    }
    
    public function unit () 
    {
        return $this->belongsTo('App\Models\Unit');
    }
}