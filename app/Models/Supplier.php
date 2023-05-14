<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['nome', 'site', 'email', 'uf'];

    public function products () {
        return $this->hasMany('App\Models\Product', 'supplier_id', 'id');
        //return $this->hasMany('App\Models\Product');
    }
}