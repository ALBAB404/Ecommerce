<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\Category;
use App\Models\instragramfeed;
use App\Models\offerDeal;
use App\Models\product;

class homeController extends Controller
{
    public function home()
    {
         $banners = banner::latest()->get();
         $instragramfeeds = instragramfeed::latest()->get();
         $offerDeals = offerDeal::latest()->get();
         $categories =  Category::withCount('product')->latest()->get();


         $featured_products = Product::with('productInfo')->activeFeatured(1)->take(8)->get(); // Active Featured
         $newArrivals = Product::with('productInfo')->activeFeatured(3)->get(); // New Arrivals
         $latestProduct = Product::with('productInfo')->activeFeatured(2)->get(); // Latest Products
         $trends = Product::with('productInfo')->activeFeatured(4)->get(); // Trending Products
         $toprateds = Product::with('productInfo')->activeFeatured(5)->get(); // Top Rated Products
        //   dd($featured_products);
         $active_products = product::with('productInfo')->activeProduct()->take(8)->get();
        return view('frontend.layouts.master', compact('categories','instragramfeeds','offerDeals','newArrivals','latestProduct','trends','toprateds','featured_products','active_products','banners'));
    }
}