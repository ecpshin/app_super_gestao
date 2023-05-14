<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class LogAccess extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['log'];
}
