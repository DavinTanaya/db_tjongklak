<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'product_id',
        'chest',
        'waist',
        'hip',
        'length',
    ];

    protected $casts = [
        'chest' => 'float',
        'waist' => 'float',
        'hip' => 'float',
        'length' => 'float',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
