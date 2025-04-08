<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'skills',
        'years_experience',
        'completed_projects',
        'happy_clients',
        'is_active'
    ];

    protected $casts = [
        'skills' => 'array',
        'is_active' => 'boolean',
        'years_experience' => 'integer',
        'completed_projects' => 'integer',
        'happy_clients' => 'integer'
    ];
}
