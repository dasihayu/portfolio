<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'greeting',
        'name',
        'title',
        'description',
        'image',
        'github_url',
        'linkedin_url',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
