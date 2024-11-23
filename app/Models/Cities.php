<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = ['name','state_id'];

    public function state(): BelongsTo
    {
        return $this->belongsTo(States::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Cars::class);
    }
}
