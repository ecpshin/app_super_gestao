<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Subject extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['description'];

    public function contacts (): HasMany
    {
        return $this->hasMany(SiteContact::class);
    }
}
