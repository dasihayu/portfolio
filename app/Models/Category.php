<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
