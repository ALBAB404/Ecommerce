<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth('customer')->user();
        $orders = $user->load('order');
        // dd($orders);
        return view('frontend.modules.customer.order_history', compact('orders'));
    }
    public function order_tracking()
    {
        return view('frontend.modules.customer.order_tracking');
    }
    public function wishlist()
    {
        return view('frontend.modules.customer.wishlist');
    }
    public function user_invoice()
    {
        return view('frontend.modules.customer.user_invoice');
    }
}