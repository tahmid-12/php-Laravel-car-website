<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImages extends Model
{
    use HasFactory;

    protected $table = 'cars_images';

    protected $fillable = ['image_path', 'position'];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Cars::class);
    }
}
