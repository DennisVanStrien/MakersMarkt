<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'status',
        'type',
        'image',
        'marked_for_moderation',
    ];

    protected $casts = [
        'user_id',
        'specification_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'portfolios')->using(Portfolio::class);
    }

    public function specification(): HasOne
    {
        return $this->hasOne(Specification::class);
    }

    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
