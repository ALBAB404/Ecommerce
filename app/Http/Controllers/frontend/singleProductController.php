<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class singleProductController extends Controller
{
    public function singleProduct(product $product)
    {
        $categories =  Category::withCount('product')->with('Subcategory')->latest()->get();
        $featured_products = product::with('productInfo')->activeFeatured()->take(8)->get();
        $active_products = product::with('productInfo')->activeProduct()->latest()->take(8)->get();
        //  dd($active_products);
        return view('frontend.modules.product.singleProduct', compact('product','categories','featured_products','active_products'));
    }
}