<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOrder extends Model
{
    use SoftDeletes;
    protected $fillable = ['order_id', 'product_id'];

    public function orders()
    {

    }

    public function products()
    {

    }
}
