<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class OrderProduct extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['order_id', 'product_id'];

    public function orders()
    {
    }

    public function products()
    {

    }
}
