<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    //Type
    public function productTypes(): BelongsToMany
    {
        return $this->belongsToMany(ProductType::class, 'products_products_type', 'product_type_id', 'product_id');
    }
}
