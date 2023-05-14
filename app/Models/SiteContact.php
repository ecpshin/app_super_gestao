<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class SiteContact extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'subject_id',
        'mensagem'
    ];

    public function subject (): BelongsTo
    {
        return $this->belongsTo(Subject::class);
        //return $this->belongsTo('App\Models\Subject', 'subject_id');
    }
}
