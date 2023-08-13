
@extends('backend.layouts.master')
@section('title', 'Offer Section')
@section('content')
    <div class="row p-4">
        <div class="col-md-4">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Product Offer</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="addCategoryForm">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Title here" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" name="title" class="form-control" id="description"
                                        placeholder="Title here" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Price</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="number" name="content" id="price" class="form-control"
                                        placeholder="Main Content Here" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Old_Price</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="number" name="content" id="old_price" class="form-control"
                                        placeholder="Main Content Here" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Discount</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="number" name="content" id="discount" class="form-control"
                                        placeholder="Main Content Here" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Sold_Count</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="number" name="sold_count" id="sold_count" class="form-control"
                                        placeholder="Main Content Here" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Available_Count</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="number" name="available_count" id="available_count" class="form-control"
                                        placeholder="Main Content Here" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Image</label>
                                <div class="input-group">
                                    <input type="file" name="" class="form-control" id="image">
                                    <img id="showImage" class="showImage" alt="">
                                </div>
                            </div>
                            <button type="submit" id="formButton" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="row align-items-center pt-3 ps-4 pe-4">
                    <div class="col-md-4 pb-3">
                        <h5 class="mb-0">Admins Table</h5>
                    </div>
                    <div class="col-md-8 pb-3">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" id="myInput" class="form-control" placeholder="Search..."
                                aria-label="Search..." aria-describedby="basic-addon-search31">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>old_price</th>
                                    <th>discount</th>
                                    <th>sold_count</th>
                                    <th>available_count</th>
                                    <th>Image</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Show Categories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <table class="table table-bordered">
                    <tbody id="showData">

            </tbody>
        </table>
            </div>
        </div>
    </div>
 </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editCenter" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Edit Categories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="editData">
            <div class="row">

            </div>
        </div>
    </div>
 </div>
</div>

@endsection
@push('js')
    <script>
        //table searching.......................................................................................................................
        $('#myInput').on('keyup', function() {
            let val = $(this).val().toLowerCase();
            $('#myTable tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(val) > -1);
            });
        });
        //table searching.......................................................................................................................
        //Category CRUD .......................................................................................................................
        //image Show Form feild start
        let imageInput = document.getElementById('image');
        let showImage = document.getElementById('showImage');
        previewImage(imageInput, showImage);
        //image Show Form feild end
        // Fetch Method start
       const getAllCategory = () =>{
            axios.get('/admin/offerDeal/').then((res)=>{
                table_data_show(res.data);
            })
        }
        getAllCategory();


       const table_data_show = (categories) => {
        let sl = 1;
        let loop =  categories.map(items =>{
            return `
            <tr>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                    <strong>${sl++}</strong>
                </td>
                <td>${items.title}</td>
                <td>${items.description}</td>
                <td>${items.price}</td>
                <td>${items.old_price}</td>
                <td>${items.discount}</td>
                <td>${items.sold_count}</td>
                <td>${items.available_count}</td>
                <td>
                    <div class="image-container">
                        <img src="{{ asset('${items.image}') }}" class="img-thumbnail" alt="">
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="me-2 text-center">
                            <a href="" data-bs-toggle="modal" class="viewBtn" data-bs-target="#modalCenter" data-id="${items.id}">
                                <span class="btn btn-sm btn-warning"><i class='bx bx-show-alt'></i></span>
                            </a>
                        </div>

                        <div class="me-2">
                            <a href="" data-bs-toggle="modal" class="editBtn" data-bs-target="#editCenter" data-id="${items.id}">
                                <span class="btn btn-sm btn-success"><i
                                        class='bx bxs-message-square-edit'></i></span>
                            </a>
                        </div>
                        <div>
                            <form action="#" class="deleteRow" data-id="${items.id}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            `
        }).join("")
        $('#myTable').html(loop)
       }
        // Fetch Method end
        // Insert Method start
            $('#addCategoryForm').on('submit', function(e) {
                e.preventDefault();
                let title = $('#title');
                let description = $('#description');
                let price = $('#price');
                let old_price = $('#old_price');
                let discount = $('#discount');
                let sold_count = $('#sold_count');
                let available_count = $('#available_count');
                let imageInput = document.getElementById('image');
                let showImage = document.getElementById('showImage');

                let data = new FormData();
                data.append('title', title.val());
                data.append('description', description.val());
                data.append('price', price.val());
                data.append('old_price', old_price.val());
                data.append('discount', discount.val());
                data.append('sold_count', sold_count.val());
                data.append('available_count', available_count.val());
                data.append('image', imageInput.files[0]);

                axios.post("/admin/offerDeal", data)
                    .then((res) => {
                        getAllCategory();
                        iziToast.success({
                            title: 'Successfully Data Inserted!',
                            message: "{{ Session::get('success') }}",
                        });

                        // Reset form fields
                        title.val('');
                        description.val('');
                        available_count.val('');
                        sold_count.val('');
                        discount.val('');
                        old_price.val('');
                        price.val('');
                        showImage.src = '';
                        imageInput.value = ''; // Reset file input
                    })
                    .catch(err => {
                        console.error(err);
                    });
            });
        // Insert Method End
        // Show MEthod start
        $('body').on('click','.viewBtn', function(e){
            e.preventDefault()
            let id = $(this).data('id')
            let url = generateAdminURL('offerDeal/show')+ id
            axios.get(url).then((res)=>{
                let category =  res.data
                let html = `
                <tr>
                    <th>SL</th>
                    <td>${category.id}</td>
                </tr>
                    <tr>
                        <th>Ttile</th>
                        <td>${category.title}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>${category.description}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${category.price}</td>
                    </tr>
                    <tr>
                        <th>Old Price</th>
                        <td>${category.old_price}</td>
                    </tr>
                    <tr>
                        <th>Discount</th>
                        <td>${category.discount}</td>
                    </tr>
                    <tr>
                        <th>Sold-Count</th>
                        <td>${category.sold_count}</td>
                    </tr>
                    <tr>
                        <th>Available-Count</th>
                        <td>${category.available_count}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><img src="{{ asset('${category.image}') }}" width="150px" alt=""></td>
                    </tr>
                `
                $('#showData').html(html)
            })
        })
        // Show MEthod End
        //edit Methd Start
        $('body').on('click','.editBtn', function(e){
            e.preventDefault()
            let id = $(this).data('id')
            let url = generateAdminURL("offerDeal/show") + id
            axios.get(url).then((res)=>{
                let category =  res.data
                let html = `
                <form action="" id="editCategoryForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Title</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="editTitle" value="${category.title}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                            <input type="hidden" name="title" class="form-control" id="editId" value="${category.id}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Price</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="editPrice" value="${category.price}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">edit_old_price</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edit_old_price" value="${category.old_price}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">discount</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edit_discount" value="${category.discount}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">description</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edit_description" value="${category.description}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Sold_Count</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edit_sold_count" value="${category.sold_count}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">available_count</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edit_available_count" value="${category.available_count}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Image</label>
                <div class="input-group">
                    <input type="file" name="image" class="form-control" id="editImage">
                    <img src="{{ asset('${category.image}') }}" id="editPreviewImage" class="editImage mt-2 img-fluid" alt="">
                </div>
            </div>
                    <button type="submit" id="editButton" class="btn btn-primary">Update</button>
                </form>
                `
                $('#editData').html(html)
                 // Call the image preview function for the edit form
                let imageInput = document.getElementById('editImage');
                let previewImageElement = document.getElementById('editPreviewImage');
                previewImage(imageInput, previewImageElement);
            })
        })
        //edit Methd End
        //update Methd start
        $('body').on('submit', '#editCategoryForm', function (e) {
            e.preventDefault();
            let title = $('#editTitle');
            let editId = $('#editId').val();
            let description = $('#edit_description');
            let price = $('#editPrice');
            let old_price = $('#edit_old_price');
            let discount = $('#edit_discount');
            let sold_count = $('#edit_sold_count');
            let available_count = $('#edit_available_count');

            const url = generateAdminURL("offerDeal/update") + editId ;

            if ($('#editImage').val()) {
                let data = new FormData();
                data.append('title', title.val());
                data.append('description', description.val());
                data.append('price', price.val());
                data.append('old_price', old_price.val());
                data.append('discount', discount.val());
                data.append('sold_count', sold_count.val());
                data.append('available_count', available_count.val());  // Add status to FormData
                data.append('image', document.getElementById('editImage').files[0]);

                //

                axios.post(`${url}`, data).then(res => {
                    document.getElementById('editImage').value = null;
                    getAllCategory();
                    $('#editCenter').modal('toggle');
                    title.val(null);
                }).catch(err => {
                    if (err.response.data.errors.title) {
                        titleError.text(err.response.data.errors.title[0]);
                    }
                    if (err.response.data.errors.image) {
                        imageError.text(err.response.data.errors.image[0]);
                    }
                    if (err.response.data.errors.status) {  // Handle status error
                        statusError.text(err.response.data.errors.status[0]);
                    }
                });
            } else {
                axios.post(`${url}`, {
                    'title': title.val(),
                    'description': description.val(),
                    'price': price.val(),
                    'old_price': old_price.val(),
                    'discount': discount.val(),
                    'sold_count': sold_count.val(),
                    'available_count': available_count.val(),
                }).then(res => {

                    getAllCategory();
                    $('#editCenter').modal('toggle');
                    title.val(null);
                }).catch(err => {
                    if (err.response.data.errors.title) {
                        titleError.text(err.response.data.errors.title[0]);
                    }
                    if (err.response.data.errors.status) {  // Handle status error
                        statusError.text(err.response.data.errors.status[0]);
                    }
                });
            }
        });
        //update Methd end
     // Delete Method start
     $('body').on('submit', '.deleteRow', function (e) {
                e.preventDefault();

                const deleteForm = $(this);
                const id = deleteForm.data('id');
                const url = generateAdminURL('offerDeal/delete') + id;
                console.log(url);

                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(url).then((res) => {
                            if (res.data.success) {
                                getAllCategory();
                                Swal.fire({
                                    title: 'Deleted!',
                                    text: 'Your data has been deleted.',
                                    icon: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            }
                        }).catch((err) => {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Failed to delete the data.',
                                icon: 'error',
                                timer: 2000,
                                showConfirmButton: false
                            });
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire('Cancelled', 'Your data is safe :)', 'error');
                    }
                });
        });

    // Delete Method end
        //Category CRUD .......................................................................................................................
    </script>
@endpush
