<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'status', 'image', 'live_url', 'github_url'];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
