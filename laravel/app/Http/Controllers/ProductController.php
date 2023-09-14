<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocationsStreet;
use App\Models\LocationsWard;
use App\Models\ProductType;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::with('locationsStreet','locationsWard')->where('slug',$slug)->first();

        $districtCode = config('location.district_code');
        if($districtCode!=null)
        {
            $locationsWards = LocationsWard::where('district_code', $districtCode)->get();
        }
        else
        {
            $locationsWards = LocationsWard::all();
        }

        //$productTypes = ProductType::all();

        $newestProducts = Product::with('locationsStreet','locationsWard')->latest()->take(6)->get();
        return view('product',[
            'product'=> $product,
            //'locationsStreets' => $locationsStreets,
            //'locationsWards' => $locationsWards,
            //'productTypes' => $productTypes,
            'newestProducts' => $newestProducts,
        ]);
    }
}
