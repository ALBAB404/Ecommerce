@extends('backend.layouts.master')
@section('title', 'Admin')
@section('content')
    <div class="row p-4">
        <div class="col-md-12">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Product</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="post" id="addProductForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">@</span>
                                                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                                            </div>
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" value="{{ old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror">
                                            </div>
                                            @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Selling Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" value="{{ old('selling_price') }}" class="form-control @error('selling_price') is-invalid @enderror" name="selling_price">
                                            </div>
                                            @error('selling_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
                                            <select name="category_id" value="{{ old('category_id') }}" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                                <option value="">Select Parent Product</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Sub Category</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="sub_category_id" id="sub_category_id" class="form-select @error('sub_category_id') is-invalid @enderror">

                                            </select>
                                        </div>
                                        @error('sub_category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Color</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="color_id" value="{{ old('color_id') }}" id="color_id" class="form-select @error('color_id') is-invalid @enderror">
                                                <option value="">Select Product Color</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('color_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Size</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="size_id" value="{{ old('size_id') }}" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                                <option value="">Select Product Size</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-email">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                            <img id="showImage" class="showImage" alt="" width="100px">
                                        </div>
                                        @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Status</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select name="status" value="{{ old('status') }}" id="status" class="form-select @error('status') is-invalid @enderror">
                                                <option value="">Select Product Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
                                                            <input type="file" class="form-control @error('slider_images.*') is-invalid @enderror" name="slider_images[]" placeholder="Title">
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success" id="addNewRow"><i class='bx bxs-message-square-add'></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @error('slider_images.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
                                                    <input  class="form-check-input @error('is_featured') is-invalid @enderror" type="radio" name="is_featured" id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input  class="form-check-input @error('is_featured') is-invalid @enderror" type="radio" name="is_featured" id="inlineRadio2" value="0">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </div>
                                            @error('is_featured')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Long Description</label>
                                        <textarea name="long_desc"  id="editor" cols="30" rows="10" class="@error('long_desc') is-invalid @enderror"></textarea>
                                        @error('long_desc')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Short Description</label>
                                        <textarea name="short_desc" id="editor2" cols="30" rows="10" class="@error('short_desc') is-invalid @enderror"></textarea>
                                        @error('short_desc')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

@push('js')
    <script>
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

         $('#category_id').on('change', function(){
            let categories =  $(this).val()
            getAllCategory(categories)
         })

         const getAllCategory = (categories) =>{
            axios(`${base_url}/get-all-subCategory/${categories}`).then((res)=>{
                let subCategory =  res.data;
                $('#sub_category_id').empty()
                subCategory.map((items)=>{
                    $('#sub_category_id').append(`
                         <option value="${items.id}">${items.title}</option>
                    `)
                })
            })
         }
    </script>
@endpush
