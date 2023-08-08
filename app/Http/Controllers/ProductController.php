<?php

namespace App\Http\Controllers;

use App\Http\Requests\productStoreRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\product;
use App\Models\productSlider;
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
        return view('backend.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = Category::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();

        // dd($product);
        return view('backend.product.edit',compact('product','categories','colors','sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        // dd($product);
        // Update product general information
        $product->update([
            "name" => $request->edit_name,
            "slug" => Str::slug($request->edit_name),
            "category_id" => $request->edit_category_id,
            "subcategory_id" => $request->edit_sub_category_id,
            "color_id" => $request->edit_color_id,
            "size_id" => $request->edit_size_id,
            "short_des" => $request->edit_short_desc,
            "long_des" => $request->edit_long_desc,
        ]);

        // Update product info
        $product->productInfo()->update([
            "is_featured" => $request->edit_is_featured,
            "is_active" => $request->edit_status,
            "price" => $request->edit_price,
            "sell_price" => $request->edit_selling_price,
        ]);

        // Update Old Main Image
        if ($request->file('edit_image')) {
            $oldImage = $product->productInfo->image;
            $product->productInfo()->update([
                "image" => File::upload($request->file('edit_image'), "product"),
            ]);
            File::deleteFile($oldImage);
        }

        // Upload Slider Images
        if ($request->hasFile("edit_slider_images")) {
            foreach ($request->file("edit_slider_images") as $image) {
                $product->productSlider()->create([
                    "image" => File::upload($image, "product"),
                ]);
            }
        }

        // Delete Old Slider Images
        if ($request->edit_slider_delete_image) {
            foreach ($request->edit_slider_delete_image as $id) {
                $slider = ProductSlider::find($id);
                File::deleteFile($slider->image);
                // dd($slider);
                $slider->delete();
            }
        }

        session()->flash('success', 'Product data updated successfully!');
        return redirect()->route('admin.product.index');
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
            foreach($sliders as $slide){
                File::deleteFile($slide->image);
            }

         return redirect()->back();

     }
}