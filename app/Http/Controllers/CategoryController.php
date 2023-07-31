<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        ]);

       $category =  Category::create([
            'title' => $request->title,
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

    }

}
    /**
     * Remove the specified resource from storage.
     */