<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all()
    {
       return Category::latest()->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories',
            'slug' => 'required|string|max:255|unique:categories',
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::slug($request->input('slug'));
            $height = 400;
            $width = 1000;
            $thumb_height = 150;
            $thumb_width = 300;
            $path = 'image/Original/';
            $thumbnail_path = 'image/Thumbnail/';

            $post_data['image'] =  PhotoUploadController::imageUpload($name,$height,$width,$path,$file);
                                   PhotoUploadController::imageUpload($name,$thumb_height,$thumb_width,$thumbnail_path,$file);
        }

        $category = new Category();
        $category->title = $request->input('title');
        $category->slug = Str::slug($request->input('slug', '-'));
        $category->status = $request->input('status');
        $category->image = $post_data['image'];

        // Handle the image upload and save the image path to the database if required
        // ...

        $category->save();

        return response()->json(['message' => 'Category created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}