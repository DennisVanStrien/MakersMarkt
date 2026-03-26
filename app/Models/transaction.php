<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'product_id',
    ];

    protected $casts = [
        'from_user_id',
        'to_user_id',
        'product_id',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
