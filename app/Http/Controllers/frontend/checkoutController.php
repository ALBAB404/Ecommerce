<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\checkout;
use App\Models\order;
use App\Models\orderDetails;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
require_once app_path('cart.php');
class checkoutController extends Controller
{

    protected $order;
    protected $payment;
    protected $checkout;

    public function index()
    {
        $customerId = auth()->id();
        // dd($customerId);
        $cartItems = Cart::where('customer_id', $customerId)->with('product')->get();
        return view('frontend.modules.checkout.index', compact('cartItems'));
    }



    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required|string|max:500',
            'city' => 'required',
            'state' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'postalcode' => 'required',
        ]);


        if($request->paymentMethod === "bksh"){
            if(!$request->trans_id){
                return back();
            }else{
                DB::transaction(function () use ($request) {
                    //Checkout

                   $this->checkout = Checkout::create([
                       'firstname' => $request->firstname,
                       'lastname' => $request->lastname,
                       'address' => $request->address,
                       'city' => $request->city,
                       'email' => $request->email,
                       'state' => $request->state,
                       'phone' => $request->phone,
                       'country' => $request->country,
                       'postalcode' => $request->postalcode,
                   ]);

                   //Payment

                   $this->payment = Payment::create([
                       'paymentMethod' => $request->paymentMethod,
                       'totalAmount' => getAmountWithDiscount(),
                       'trans_id' => $request->trans_id ? $request->trans_id : null,
                       'coupon' => $request->discountCouponPrice ? $request->discountCouponPrice : null,
                       'discount' => $request->totalAmount ? $request->totalAmount : null,
                   ]);


                   //Order

                   $this->order =  Order::create([
                       'unique_id' => uniqid(),
                       'checkout_id' => $this->checkout->id,
                       'payment_id' => $this->payment->id,
                       'customer_id' => auth('customer')->id(),
                       'total' => getAmountWithDiscount(),
                   ]);

                   //OrderItems

                   $cartItems =  cart_products();
                //    dd($cartItems);
                   foreach($cartItems as $item){
                       orderDetails::create([
                           'order_id' => $this->order->id,
                           'product_id' => $item->product->id,
                           'price' => $item->product->productInfo->sell_price,
                           'quantity' => $item->quantity,
                       ]);
                       $item->delete();
                   }
                   // delete coupon
                   deleteCoupon();
               });
            }
            return $this->order;
        }



    }
}