<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerId = auth()->id();

        dd($customerId);
        $cartItems = Cart::where('customer_id', $customerId)->with('product')->get();
        return response()->json($cartItems);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customerId = auth()->id();
        $cartItems = Cart::where('customer_id', $customerId)->with('product')->get();
        return view('frontend.modules.cart.index', compact('cartItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer_id = auth()->id();
        $product_id = $request->product_id;
        $product_quantity = $request->product_quantity;

        $carts =    Cart::where('customer_id',$customer_id)->where('product_id',$product_id)->first();

        if(!$carts){
            Cart::create([
                'customer_id' => $customer_id,
                'product_id' => $product_id,
                'quantity' => $product_quantity,
            ]);
        }else{
            $carts->increment('quantity', $product_quantity);
        }

        return response()->json($carts);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer_id = auth()->id();
        $product_quantity = $request->product_quantity;
        $cartItem =  Cart::with('product')->where('customer_id',$customer_id)->where('product_id', $id)->first();
        // dd($cartItem);
        if($cartItem){
            $cartItem->update(['quantity' => $product_quantity]);
            $newCarts = $cartItem->quantity * $cartItem->product->productInfo->sell_price;
            return response()->json($newCarts);
        }else{
            return response()->json(['error' => 'Product not found in cart'], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $cartItem = Cart::findOrfail($id);
        $cartItem->delete();

        return response()->json(['message' => 'Cart item deleted successfully']);

    }
}