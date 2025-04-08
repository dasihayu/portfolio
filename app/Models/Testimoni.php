<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = [
        'name',
        'position',
        'company',
        'content',
        'image',
        'rating',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating' => 'integer'
    ];
}
