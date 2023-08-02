<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =  Category::latest()->get();
        return response()->json($categories);
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
            'title' => 'required|unique:categories,title',
            'image' => 'required|mimes:png,jpg',
            'status' => 'required',
        ]);

       $category =  Category::create([
            'title' => $request->title,
            'status' => $request->status,
            'slug' => Str::slug($request->title),
            'image' => File::upload($request->image,'category'),
        ]);

        if($category){
            return response()->json([
                "status" => true,
                "message" => "Data inserted!",
                "data" => $category
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', "unique:categories,title,{$category->id}"],
            'status' => ['required', Rule::in([0, 1])], // Validate status as either 0 or 1
        ]);

        if ($request->has('image')) {
            $request->validate([
                "image" => ['required', "mimes:png,jpg"],
            ]);

            $oldImg = $category->image;

            $category->update([
                "title" => $request->title,
                "slug" => Str::slug($request->title),
                "status" => $request->status,  // Update status field
                "image" => File::upload($request->image, "category"),
            ]);

            File::deleteFile($oldImg);
        } else {
            $category->update([
                "title" => $request->title,
                "slug" => Str::slug($request->title),
                "status" => $request->status,  // Update status field
            ]);
        }

        return response()->json([
            "success" => true
        ]);
    }

    public function delete(Category $category)
{
    $img = $category->image;
    if ($category->delete()) {
        File::deleteFile($img);
        return response()->json([
            'success' => true
        ]);
    }
}

}
    /**
     * Remove the specified resource from storage.
     */