<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
         $categories =  Category::withCount('product')->latest()->get();
         $featured_products = product::with('productInfo')->activeFeatured()->take(8)->get();
        //  dd($featured_products);
        $active_products = product::with('productInfo')->activeProduct()->take(8)->get();
        return view('frontend.layouts.master', compact('categories','featured_products','active_products'));
    }
}
