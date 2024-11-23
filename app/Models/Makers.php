<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Makers extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function models(): HasMany
    {
        return $this->hasMany(Models::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Cars::class);
    }
}
