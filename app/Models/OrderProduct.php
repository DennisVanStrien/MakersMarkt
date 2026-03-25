<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    protected $casts = [
        'order_id',
        'product_id',
    ];

    public $incrementing = true;
    public $timestamps = true;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
