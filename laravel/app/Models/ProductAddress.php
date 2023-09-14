<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductAddress extends Model
{
    use HasFactory;
    protected $table = 'products_address';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function locationStreet()
    {
        return $this->belongsTo(LocationsStreet::class, 'street_code', 'code');
    }

    public function locationWard()
    {
        return $this->belongsTo(LocationsWard::class, 'ward_code', 'code');
    }
}
