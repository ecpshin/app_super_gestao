<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ItemDetail extends Model
{
    use Notifiable, SoftDeletes;

    protected $table = 'product_details';

    protected $fillable = [
        'product_id',
        'unit_id',
        'dimensoes',
    ];

    public function item () 
    {
        return $this->belongsTo('App\Models\Item', 'product_id', 'id');
    }
    
    public function unit () 
    {
        return $this->belongsTo(Unit::class);
    }
}