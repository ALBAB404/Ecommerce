<?php

namespace App\Http\Controllers;

use App\Models\instragramfeed;
use App\Services\File;
use Illuminate\Http\Request;

class InstragramfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instragramfeeds =  instragramfeed::latest()->get();
        // dd($banners);
        return response()->json($instragramfeeds);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.productETCSection.instragramfeed.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $instragramfeeds = instragramfeed::create([
            'image' => File::upload($request->image,'instragramfeed/'),
        ]);

        return response()->json($instragramfeeds);
    }

    /**
     * Display the specified resource.
     */
    public function show(instragramfeed $instragramfeed)
    {
        return $instragramfeed;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(instragramfeed $instragramfeed)
    {
        return $instragramfeed;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, instragramfeed $instragramfeed)
    {
        if ($request->has('image')) {
            $request->validate([
                "image" => ['required', "mimes:png,jpg"],
            ]);

            $oldImg = $instragramfeed->image;

            $instragramfeed->update([
                "image" => File::upload($request->image, 'instragramfeed/'),
            ]);

            File::deleteFile($oldImg);
        }
        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(instragramfeed $instragramfeed)
    {
        $img = $instragramfeed->image;
        if ($instragramfeed->delete()) {
            File::deleteFile($img);
            return response()->json([
                'success' => true
            ]);
        }
    }
}