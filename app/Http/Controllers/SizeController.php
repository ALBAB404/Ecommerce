<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes =  Size::latest()->get();
        return response()->json($sizes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.size.index');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:sizes,title',
        ]);

       $size =  Size::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);

        if($size){
            return response()->json([
                "status" => true,
                "message" => "Data inserted!",
                "data" => $size
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        return $size;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        $request->validate([
            'title' => ['required', "unique:sizes,title,{$size->id}"],
        ]);

            $size->update([
                "title" => $request->title,
                "slug" => Str::slug($request->title),
            ]);


        return response()->json([
            "success" => true
        ]);
    }

    public function delete(Size $size)
        {
            if ($size->delete()) {
                return response()->json([
                    'success' => true
                ]);
            }
        }

}