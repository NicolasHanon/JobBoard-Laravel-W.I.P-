<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'title',
        'contract',
        'more',
        'location',
        'salary',
        'companies_id',
    ];

    public function compagnie(): BelongsTo
    {
        return $this->belongsTo(Compagnies::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Applications::class);
    }
}
