<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\product;
use App\Models\Size;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shopPage()
    {
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        $categories = Category::latest()->get();
       $products =  product::activeProduct()->latest()->paginate(8);
    //    dd($products);
        return view('frontend.modules.product.shopPage', compact('products','sizes','categories','colors'));
    }
    public function getProduct($id)
    {

        if($id == 1){
            $products = Product::with('productInfo')->activeFeatured(1)->take(8)->get();
        }
        if($id == 2){
            $products = Product::with('productInfo')->activeFeatured(2)->get();
        }
        if($id == 3){
            $products = Product::with('productInfo')->activeFeatured(3)->get();
        }
        if($id == 4){
            $products = Product::with('productInfo')->activeFeatured(4)->get();
        }
        if($id == 5){
            $products = Product::with('productInfo')->activeFeatured(5)->get();
        }
        // if ($id == 6) {
        //     $products = Product::with('productInfo')->orderBy('price', 'asc')->get();
        // }
        // if ($id == 7) {
        //     $products = Product::with('productInfo')->orderBy('price', 'desc')->get();
        // }

        return response()->json($products);
    }
    public function shopCategory($id)
    {
        $products =  product::where('category_id', $id)->latest()->get();
        // dd($products);
        return response()->json($products);
    }
    public function shopSize($id)
    {
        $products =  product::where('size_id', $id)->latest()->get();
        // dd($products);
        return response()->json($products);
    }
    public function shopPrice($lowPrice, $highPrice)
    {
        $products = Product::with('productInfo')
            ->whereHas('productInfo', function ($query) use ($highPrice, $lowPrice) {
                $query->whereBetween('sell_price', [$lowPrice, $highPrice]);
            })
            ->get();
            return response()->json($products);
        // dd($products);
    }
}
