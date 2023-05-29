<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOrder extends Model
{
    use SoftDeletes;
    protected $fillable = ['order_id', 'product_id', 'quantidade'];

    public function orders()
    {

    }

    public function products()
    {
        
    }
}
