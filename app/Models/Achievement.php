<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Achievement extends Model
{
    use HasFactory;

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function metrics(): BelongsToMany
    {
        return $this->belongsToMany(Metric::class);
    }
}
