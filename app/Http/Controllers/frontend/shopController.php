<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shopPage()
    {
       $products =  product::activeProduct()->latest()->paginate(8);
    //    dd($products);
        return view('frontend.modules.product.shopPage', compact('products'));
    }
}