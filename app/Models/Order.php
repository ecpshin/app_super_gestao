<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_orders')->withPivot('id', 'quantidade', 'created_at', 'updated_at');
    }
}
