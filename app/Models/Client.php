<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['nome'];

    public function address()
    {
        return $this->hasOne('App\Models\Address', 'client_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'client_id', 'id');
    }
}
