<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'status'
    ];

    protected $casts = [
        'status' => 'string'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function previous()
    {
        return static::where('status', 'published')
            ->where('created_at', '<', $this->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    public function next()
    {
        return static::where('status', 'published')
            ->where('created_at', '>', $this->created_at)
            ->orderBy('created_at', 'asc')
            ->first();
    }
}
