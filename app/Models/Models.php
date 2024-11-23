<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Models extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'maker_id'];

    public function maker(): HasMany
    {
        return $this->hasMany(Makers::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Cars::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(Cities::class);
    }
}
