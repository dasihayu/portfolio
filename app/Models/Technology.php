<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model
{
    protected $fillable = ['name', 'icon'];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
