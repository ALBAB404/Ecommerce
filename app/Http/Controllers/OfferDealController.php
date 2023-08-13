<?php

namespace App\Http\Controllers;

use App\Models\offerDeal;
use Illuminate\Http\Request;
use App\Services\File;
use Illuminate\Support\Facades\Storage;
class OfferDealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offerDeals =  offerDeal::latest()->get();
        // dd($banners);
        return response()->json($offerDeals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.productETCSection.offer.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'old_price' => 'required',
            'discount' => 'required',
            'sold_count' => 'required',
            'available_count' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $offerDeals = offerDeal::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'discount' => $request->discount,
            'sold_count' => $request->sold_count,
            'available_count' => $request->available_count,
            'image' => File::upload($request->image,'offer-image/'),
        ]);

        return response()->json($offerDeals);
    }

    /**
     * Display the specified resource.
     */
    public function show(offerDeal $offerDeal)
    {
        return $offerDeal;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offerDeal $offerDeal)
    {
        return $offerDeal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, offerDeal $offerDeal)
    {
        //  dd($offerDeal);

         if ($request->has('image')) {
            $request->validate([
                "image" => ['required', "mimes:png,jpg"],
            ]);

            $oldImg = $offerDeal->image;

            $offerDeal->update([
                "title" => $request->title,
                "description" => $request->description,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "discount" => $request->discount,
                "sold_count" => $request->sold_count,
                "available_count" => $request->available_count,
                "image" => File::upload($request->image, 'offer-image/'),
            ]);

            File::deleteFile($oldImg);
        } else {
            $offerDeal->update([
                "title" => $request->title,
                "description" => $request->description,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "discount" => $request->discount,
                "sold_count" => $request->sold_count,
                "available_count" => $request->available_count,
            ]);
        }

        return response()->json([
            "success" => true
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(offerDeal $offerDeal)
    {
        $img = $offerDeal->image;
        if ($offerDeal->delete()) {
            File::deleteFile($img);
            return response()->json([
                'success' => true
            ]);
        }
    }
}