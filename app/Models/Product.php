<?php

namespace App\Models;

use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'category',
        'description',
        'care_instructions',
        'size_id',
        'is_purchased',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_purchased' => 'boolean',
    ];

    public function size(): HasMany
    {
        return $this->hasMany(Size::class, 'product_id');
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
