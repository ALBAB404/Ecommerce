@extends('backend.layouts.master')
@section('title', 'Update Product')
@section('content')
    <div class="row p-4">
        <div class="col-md-12">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Product</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product.update', $product->slug) }}" enctype="multipart/form-data" method="post" id="addProductForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">@</span>
                                                <input type="text" value="{{ $product->name }}" value="{{ old('name') }}" class="form-control " name="edit_name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" value="{{ $product->productInfo->price }}" value="{{ old('price') }}" name="edit_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Selling Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" value="{{ $product->productInfo->sell_price }}" value="{{ old('selling_price') }}" class="form-control " name="edit_selling_price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="edit_category_id" value="{{ old('category_id') }}" id="category_id" class="form-select ">
                                                <option value="">Select Parent Product</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" @if($product->category->title == $category->title) selected @endif>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Sub Category</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="edit_sub_category_id" id="sub_category_id" class="form-select">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Color</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="edit_color_id" value="{{ old('color_id') }}" id="color_id" class="form-select ">
                                                <option value="">Select Product Color</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}" @if($product->color->title == $color->title) selected @endif>{{ $color->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Size</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="edit_size_id" value="{{ old('size_id') }}" id="category_id" class="form-select ">
                                                <option value="">Select Product Size</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}" @if($product->size->title == $size->title) selected @endif>{{ $size->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-email">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="edit_image" class="form-control" id="image">
                                            <img id="showImage" src="{{ asset($product->productInfo->image) }}" class="showImage" alt="" width="100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Status</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="edit_status" value="{{ old('status') }}" id="status" class="form-select">
                                                <option value="">Select Product Status</option>
                                                <option value="1" {{ $product->productInfo->is_active == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $product->productInfo->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname"> :</label>
                                        <div class="input-group input-group-merge">
                                            <table class="table table-bordered text-center">
                                                <tbody class="dynamic_field">
                                                    <tr>
                                                        <td colspan="4">
                                                            <input type="file" class="form-contro" name="edit_slider_images[]" placeholder="Title">

                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success" id="addNewRow"><i class='bx bxs-message-square-add'></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tr>
                                                    @foreach ($product->productSlider as $slider)
                                                        <td>
                                                            <div class="slider-cell">
                                                                <div class="image-container">
                                                                    <input type="hidden" name="edit_slider_delete_image[]" value="{{ $slider->id }}" class="slider-checkbox">
                                                                    <img src="{{ asset($slider->image) }}" alt="" width="100px">
                                                                    <button class="remove-button text-light" data-slider-id="{{ $slider->id }}">✕</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <h5 class="card-header">Product Features</h5>
                                        <div class="card-body">
                                            <div class="col-md">
                                                <small class="text-light fw-semibold d-block">Inline Radio</small>
                                                <div class="form-check form-check-inline mt-3">
                                                    <input  class="form-check-input " type="radio" name="edit_is_featured" id="inlineRadio1" value="1" {{ $product->productInfo->is_featured == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input  class="form-check-input " type="radio" name="edit_is_featured" id="inlineRadio2" value="0" {{ $product->productInfo->is_featured == 0 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Long Description</label>
                                        <textarea name="edit_long_desc" id="editor" cols="30" rows="10">
                                            {{ $product->long_des }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Short Description</label>
                                        <textarea name="edit_short_desc" id="editor2" cols="30" rows="10">
                                            {{ $product->short_des }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="formButton" class="btn btn-success my-3">Send</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
<style>
    .slider-cell {
        display: inline-block;
        margin-right: 10px;
        vertical-align: top;
    }

    .image-container {
        position: relative;
    }

    .remove-button {
        position: absolute;
        top: 5px;
        right: 5px;
        font-weight: 700;
        background: none;
        border: none;
        background-color: red;
        color: white !importent ;
        cursor: pointer;
        font-size: 18px;
        border-radius : 50%;
    }
</style>
@endpush
@push('js')
    <script>

        $('.remove-button').on('click', function(e) {
            e.preventDefault()
            const sliderId = $(this).data('slider-id');
            const sliderCell = $(this).closest('.slider-cell');
            const checkbox = $(`[value="${sliderId}"]`);

            if (checkbox.length > 0) {
                sliderCell.remove();
            }
        });
         // add new feild for button
       $('#addNewRow').on('click', function(e){
            e.preventDefault()
            $('.dynamic_field').append(`
            <tr class="dynamic-column">
                <td colspan="4">
                    <input type="file" class="form-control" name="slider_images[]" placeholder="Title">
                </td>
                <td>
                    <button class="btn btn-sm btn-danger removeRow" ><i class='bx bx-trash' ></i></button>
                </td>
            </tr>
            `)
        })

         // remove old feild for button

         $('body').on('click','.removeRow',function(e){
            e.preventDefault();
            this.parentElement.parentElement.remove();
         })

          //image Show Form feild start
        let imageInput = document.getElementById('image');
        let showImage = document.getElementById('showImage');
        previewImage(imageInput, showImage);
        //image Show Form feild end

         //dependence drop down

// ...

// Wait for the document to be ready
$(document).ready(function() {
    // Fetch the selected subcategory ID from the product data
    var selectedSubCategoryID = "{{ $product->sub_category_id }}";

    // Fetch the selected category ID from the category dropdown
    var selectedCategoryID = "{{ $product->category_id }}";

    // Populate subcategory dropdown based on selected category
    getAllCategory(selectedCategoryID, selectedSubCategoryID);

    // Attach event listener to the category dropdown
    $('#category_id').on('change', function() {
        let categories = $(this).val();
        getAllCategory(categories, selectedSubCategoryID);
    });
});

// Function to populate subcategory dropdown
const getAllCategory = (categories, selectedSubCategoryID) => {
    axios(`${base_url}/get-all-subCategory/${categories}`).then((res) => {
        let subCategory = res.data;
        $('#sub_category_id').empty();

        subCategory.forEach((item) => {
            let selectedAttribute = (item.id == selectedSubCategoryID) ? 'selected' : '';
            $('#sub_category_id').append(`
                <option value="${item.id}" ${selectedAttribute}>${item.title}</option>
            `);
        });
    });
};

    </script>
@endpush
