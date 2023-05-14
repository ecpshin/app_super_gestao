<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Item extends Model
{
    use Notifiable, SoftDeletes;
    
    protected $table = 'products';

    protected $fillable = ['unit_id', 'nome', 'descricao', 'peso'];
    
    public function productDetail () {
        return $this->hasOne('App\Models\ItemDetail', 'product_id', 'id');
    }
    
    public function unit () {
        return $this->belongsTo(Unit::class);
    }

    public function supplier()
    {
        $this->belongsTo('App\Models\Supplier');
    }
}