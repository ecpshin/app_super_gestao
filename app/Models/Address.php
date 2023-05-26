<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Address extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'client_id',
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'localidade',
        'uf'
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }
}
