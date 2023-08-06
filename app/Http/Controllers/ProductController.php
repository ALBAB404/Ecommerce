<?php

namespace App\Http\Controllers;

use App\Http\Requests\productStoreRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\product;
use App\Models\Size;
use App\Services\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'Subcategory', 'productInfo'])->latest()->get();
        // dd($products);
        return view('backend.product.index', compact('products'));

        // dd($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        return view('backend.product.create',compact('categories','colors','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productStoreRequest $request)
    {
        // dd($request->all());

        DB::transaction(function() use($request){
            $product =  product::create([
                'name' =>                    $request->name,
                'slug' =>                    Str::slug( $request->name),
                'category_id' =>             $request->category_id,
                'subcategory_id' =>          $request->sub_category_id,
                'color_id' =>                   $request->color_id,
                'size_id' =>                    $request->size_id,
                'long_des' =>               $request->long_desc,
                'short_des' =>              $request->short_desc,
            ]);

            if($product){
                $product->productInfo()->create([
                    'is_featured' =>        $request->is_featured,
                    'is_active' =>          $request->status,
                    'price' =>              $request->price,
                    'sell_price' =>         $request->selling_price,
                    'view' =>               0,
                    'image' =>              File::upload($request->file('image'),'product'),
                ]);

                foreach($request->file('slider_images') as $image){
                    $product->productSlider()->create([
                        "image" => File::upload($image, 'product')
                    ]);
                }

            }
        });

        session()->flash('success', 'Product data inserted successfully!');

        return redirect()->route('admin.product.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(product $product)
     {
         $sliders = [];
         $img = $product->productInfo->image;
         foreach($product->productSlider as $index => $slider){
             array_push($sliders,$slider);
            }
            // dd($sliders);
         $product->delete();
         File::deleteFile($img);
         foreach($sliders as $slider){
             File::deleteFile($slider);
         }

         return redirect()->back();

     }
}