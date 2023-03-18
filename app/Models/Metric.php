<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Metric extends Model
{
    use HasFactory;

    public function achievements(): BelongsToMany
    {
        return $this->belongsToMany(Achievement::class);
    }

    public function competency(): BelongsTo
    {
        return $this->belongsTo(Competency::class);
    }
}
