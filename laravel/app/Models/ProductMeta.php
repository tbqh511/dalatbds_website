<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    protected $table = 'products_meta';
    protected $fillable = ["*"];
    protected $casts = [
        'meta_value' => 'array' // hoặc 'json'
    ];

    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
