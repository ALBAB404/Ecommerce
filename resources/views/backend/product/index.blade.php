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
                        <form action="{{ route('admin.product.store') }}" method="post" id="addProductForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">@</span>
                                                <input type="text" class="form-control" name="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" name="price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Selling Price</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="selling_price">
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
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <select name="category_id" id="category_id" class="form-select">
                                                <option value="">Select Parent Product</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Sub Category</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <select name="sub_category_id" id="sub_category_id" class="form-select">
                                                {{-- <option value="">Select Sub Cateory</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Color</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <select name="category_id" id="category_id" class="form-select">
                                                <option value="">Select Product Color</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
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
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <select name="category_id" id="category_id" class="form-select">
                                                <option value="">Select Product Size</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-email">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control" id="image">
                                            <img id="showImage" class="showImage" alt="" width="100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Status</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <select name="statis" id="statis" class="form-select">
                                                <option value="">Select Product Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
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
                                                            <input type="text" class="form-control" name="sub_category[]" placeholder="Title">
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success" id="addNewRow"><i class='bx bxs-message-square-add'></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <h5 class="card-header">Product Featuries</h5>
                                        <div class="card-body">
                                            <div class="col-md">
                                                <small class="text-light fw-semibold d-block">Inline Radio</small>
                                                <div class="form-check form-check-inline mt-3">
                                                  <input class="form-check-input" type="radio" name="is_featured" id="inlineRadio1" value="option1">
                                                  <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="is_featured" id="inlineRadio2" value="option2">
                                                  <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                              </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Long Description</label>
                                    <div id="editor">
                                        <p>This is the Short Description.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Long Description</label>
                                    <div id="editor2">
                                        <p>This is the Short Description.</p>
                                    </div>
                                </div>
                                <button type="submit" id="formButton" class="btn btn-success my-3">Send</button>
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
                    <input type="text" class="form-control" name="sub_category[]" placeholder="Title">
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
