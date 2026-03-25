<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specification extends Model
{
    protected $fillable = [
        // 'product_id',
        'materials',
        'production_time',
        'complexity',
        'sustainability',
        'unique_properties',
    ];

    // protected $casts = [
    //     'product_id',
    // ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
