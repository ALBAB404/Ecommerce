<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = Subcategory::with('category')->latest()->get();
        return response()->json($sub_categories);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $sub_categories = Subcategory::with('category')->latest()->get();
        $categories = Category::latest()->get();
        return view('backend.sub_category.index', compact('sub_categories','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->sub_category as $subCategory) {
            Subcategory::create([
                'title' => $subCategory,
                'slug' => Str::slug($subCategory),
                'category_id' => $request->category_id,
                'status' => $request->status,
            ]);
        }

        return response()->json(['message' => 'Subcategories created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subCategory)
    {
        $subcategory = SubCategory::with('category')->find($subCategory->id);
        return response()->json($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subCategory)
    {
        return response()->json($subCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update([
            'category_id' => $request->edit_category_id,
            'title' => $request->edit_title,
            'status' => $request->edit_status,
        ]);

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Subcategory $subCategory)
        {
            if ($subCategory->delete()) {
                return response()->json([
                    'success' => true
                ]);
            }
        }
}