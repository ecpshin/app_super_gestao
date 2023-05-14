<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable, SoftDeletes;
    
    protected $fillable = ['supplier_id','unit_id', 'nome', 'descricao', 'peso'];
    
    public function productDetail () {
        return $this->hasOne('App\Models\ProductDetail');
    }
    
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function unit () {
        return $this->belongsTo('App\Models\Unit');
    }
    
}