<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Branch extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'nome',
        'site',
        'email',
        'uf'
    ];
}
