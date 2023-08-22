<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupon =  Coupon::latest()->get();
        return response()->json($coupon);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Coupon.index');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:Coupons,title',
            'expired' => 'required|date|after_or_equal:today',
        ]);

       $coupon =  Coupon::create([
            'title' => $request->title,
            'expired' => $request->expired,
            'status' => $request->status,
            'type' => $request->coupon_type,
            'discount' => $request->discount,
        ]);

        if($coupon){
            return response()->json([
                "status" => true,
                "message" => "Data inserted!",
                "data" => $coupon
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        return $coupon;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
            $coupon->update([
                'title' => $request->title,
                'expired' => $request->expired,
                'status' => $request->status,
                'type' => $request->coupon_type,
                'discount' => $request->discount,
            ]);


        return response()->json([
            "success" => true
        ]);
    }

    public function delete(Coupon $coupon)
        {
            if ($coupon->delete()) {
                return response()->json([
                    'success' => true
                ]);
            }
        }

        public function applyCoupon(Request $request)
        {
            $request->validate([
                'applyCoupon' => 'required|exists:coupons,title',
            ]);

            $couponCode =  Coupon::where('title', $request->applyCoupon)->first();
            if(!$couponCode){
                return back()->withErrors('Invalid coupon code!');
            }
            if($couponCode < now()){
                return back()->withErrors('This coupon has expired!');
            }


            if($couponCode->type == 0 ){
                $response = [
                    'type' => 'flat',
                    'value' => $couponCode->discount,

                ];
                return response()->json($response);
            }
            if($couponCode->type == 1 ){
                $response = [
                    'type' => 'percentage',
                    'value' => $couponCode->discount / 100,

                ];
                return response()->json($response);
            }



            // dd($couponCode);

        }
}