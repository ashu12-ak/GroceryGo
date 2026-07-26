<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'quantity',
        'description',
        'image',
    ];

    // Product belongs to one Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Product can be added to many Cart items
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}