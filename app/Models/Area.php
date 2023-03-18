<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Area extends Model
{
    use HasFactory;

    public function competencies(): HasMany
    {
        return $this->hasMany(Competency::class);
    }

    public function achievements(): HasManyThrough
    {
        return $this->hasManyThrough(Achievement::class, Metric::class);
    }
}
