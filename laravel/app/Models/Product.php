<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// use App\Models\ProductAddress;
// use App\Models\LocationsStreet;
// use App\Models\LocationsWard;
// use App\Models\ProductLegal;
// use App\Models\ProductType;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'area', 'prices', 'commissions', 'description', 'legals_id', 'latitude', 'longitude'];

    //Avatar image
    public function avatarImage()
    {
        return $this->hasOne(ProductMeta::class, 'product_id')->where('meta_key', 'avatar_image_link');
    }

    //Product image
    public function images()
    {
        return $this->hasOne(ProductMeta::class,'product_id')->where('meta_key', 'image_link');
    }

    //Product view count
    public function viewCount()
    {
        return $this->hasOne(ProductMeta::class,'product_id')->where('meta_key', 'view_count');
    }


    //Address
    public function address()
    {
        return $this->hasOne(ProductAddress::class);
    }

    //Legal
    public function legal()
    {
        return $this->belongsTo(ProductLegal::class, 'legals_id');
    }

    //Type
    public function productTypes(): BelongsToMany
    {
        return $this->belongsToMany(ProductType::class, 'products_products_type', 'product_id', 'product_type_id');
    }

    // //Product Meta
    // public function productMetas()
    // {
    //     return $this->hasMany(ProductMeta::class,'product_id');
    // }

    //Street
    public function locationsStreet()
    {
        return $this->hasOneThrough(LocationsStreet::class, ProductAddress::class,'product_id','code','id','street_code');
    }

    //Ward
    public function locationsWard()
    {
        return $this->hasOneThrough(LocationsWard::class, ProductAddress::class,'product_id','code','id','ward_code');
    }
}
