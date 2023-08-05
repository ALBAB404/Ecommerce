<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors =  Color::latest()->get();
        return response()->json($colors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.color.index');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:colors,title',
        ]);

       $color =  Color::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);

        if($color){
            return response()->json([
                "status" => true,
                "message" => "Data inserted!",
                "data" => $color
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return $color;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $request->validate([
            'title' => ['required', "unique:colors,title,{$color->id}"],
        ]);

            $color->update([
                "title" => $request->title,
                "slug" => Str::slug($request->title),
            ]);


        return response()->json([
            "success" => true
        ]);
    }

    public function delete(Color $color)
        {
            $img = $color->image;
            if ($color->delete()) {
                return response()->json([
                    'success' => true
                ]);
            }
        }

}