<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\Category;
use App\Models\product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
         $banners = banner::latest()->get();
         $categories =  Category::withCount('product')->latest()->get();
         $featured_products = product::with('productInfo')->activeFeatured()->take(8)->get();

         $newArrivals = product::with('productInfo')->NewArrivals()->get();
         $latestProduct = product::with('productInfo')->LatestProduct()->get();
         $trending = product::with('productInfo')->TrandingProduct()->get();
         $toprated = product::with('productInfo')->TopProduct()->get();
        //   dd($toprated);
         $active_products = product::with('productInfo')->activeProduct()->take(8)->get();
        return view('frontend.layouts.master', compact('categories','newArrivals','latestProduct','trending','toprated','featured_products','active_products','banners'));
    }
}