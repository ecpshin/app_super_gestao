<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class BranchProduct extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'branch_id',
        'product_id',
        'preco_venda',
        'estoque_min',
        'estoque_max',
    ];

    
}
