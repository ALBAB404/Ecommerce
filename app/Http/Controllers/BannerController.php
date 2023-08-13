<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use App\Services\File;
use Illuminate\Validation\Rule;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners =  banner::latest()->get();
        // dd($banners);
        return response()->json($banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.productETCSection.banner.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $banner = banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'status' => $request->status,
            'image' => File::upload($request->image,'banner-slider/'),
        ]);

        return response()->json($banner);

    }

    /**
     * Display the specified resource.
     */
    public function show(banner $banner)
    {
        return $banner;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banner $banner)
    {
        return $banner;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banner $banner)
    {

        // dd($request->all());

        if ($request->has('image')) {
            $request->validate([
                "image" => ['required', "mimes:png,jpg"],
            ]);

            $oldImg = $banner->image;

            $banner->update([
                "title" => $request->title,
                "subtitle" => $request->subtitle,
                "price" => $request->price,
                "content" => $request->content,
                "button_text" => $request->button_text,
                "button_link" => $request->button_link,
                "image" => File::upload($request->image, 'banner-slider/'),
            ]);

            File::deleteFile($oldImg);
        } else {
            $banner->update([
                "title" => $request->title,
                "subtitle" => $request->subtitle,
                "price" => $request->price,
                "content" => $request->content,
                "button_text" => $request->button_text,
                "button_link" => $request->button_link,
                "status" => $request->status,  // Update status field
            ]);
        }

        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(banner $banner)
    {
        $img = $banner->image;
        if ($banner->delete()) {
            File::deleteFile($img);
            return response()->json([
                'success' => true
            ]);
        }
    }
}