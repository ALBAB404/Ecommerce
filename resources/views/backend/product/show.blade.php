@extends('backend.layouts.master')
@section('title', 'Product Show')
@section('content')
<div class="card m-5">
    <h5 class="card-header">Product Show</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                         <th>SL</th>
                         <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                         <th>Name</th>
                         <td>{{ $product->name }}</td>
                    </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $product->productInfo->price }}</td>
                    </tr>
                    <tr>
                            <th>Sell Price</th>
                            <td>{{ $product->productInfo->sell_price }}</td>
                    </tr>
                    <tr>
                            <th>Category</th>
                            <td>{{ $product->category->title }}</td>
                    </tr>
                    <tr>
                            <th>Sub Category</th>
                            <td>{{ $product->Subcategory->title }}</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>{{ $product->color->title }}</td>
                   </tr>
                   <tr>
                        <th>Size</th>
                        <td>{{ $product->size->title }}</td>
                   </tr>
                    <tr>
                            <th>Image</th>
                            <td><img src="{{ asset($product->productInfo->image) }}" width="100px" alt=""></td>
                    </tr>
                    <tr>
                            <th>Slider Image</th>
                            @foreach ($product->productSlider as $sliders)
                              <td><img src="{{ asset($sliders->image) }}" width="100px" alt=""></td>
                            @endforeach
                    </tr>
                    <tr>
                         <th>Status</th>
                         <td>
                            <span class="badge {{ $product->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                {{ $product->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                 </tr>
        </tbody>
    </table>
</div>
</div>
<a href="{{ route('admin.product.index') }}" class="btn btn-success ">Back</a>
  </div>
@endsection
