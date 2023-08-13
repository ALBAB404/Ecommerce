
@extends('backend.layouts.master')
@section('title', 'Offer Section')
@section('content')
    <div class="row p-4">
        <div class="col-md-4">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Instragram Feed Section</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="addCategoryForm">
                            @csrf
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
            axios.get('/admin/instragramfeed/').then((res)=>{
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
                <td>
                    <div class="image-container">
                        <img src="{{ asset('${items.image}') }}" class="img-thumbnail" alt="">
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
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
                let imageInput = document.getElementById('image');
                let showImage = document.getElementById('showImage');

                let data = new FormData();
                data.append('image', imageInput.files[0]);

                axios.post("/admin/instragramfeed", data)
                    .then((res) => {
                        getAllCategory();
                        iziToast.success({
                            title: 'Successfully Data Inserted!',
                            message: "{{ Session::get('success') }}",
                        });
                        showImage.src = '';
                        imageInput.value = ''; // Reset file input
                    })
                    .catch(err => {
                        console.error(err);
                    });
            });
        // Insert Method End
        //edit Methd Start
        $('body').on('click','.editBtn', function(e){
            e.preventDefault()
            let id = $(this).data('id')
            let url = generateAdminURL("instragramfeed/show") + id
            axios.get(url).then((res)=>{
                let category =  res.data
                let html = `
                <form action="" id="editCategoryForm">
                    @csrf
                    <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Image</label>
                <div class="input-group">
                    <input type="file" name="image" class="form-control" id="editImage">
                    <img src="{{ asset('${category.image}') }}" id="editPreviewImage" class="editImage mt-2 img-fluid" alt="">
                </div>
            </div>
            <div class="mb-3">
                            <input type="hidden" name="title" class="form-control" id="editId" value="${category.id}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
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
            let editId = $('#editId').val();
            const url = generateAdminURL("instragramfeed/update") + editId ;

            if ($('#editImage').val()) {
                let data = new FormData();
                data.append('image', document.getElementById('editImage').files[0]);

                //

                axios.post(`${url}`, data).then(res => {
                    document.getElementById('editImage').value = null;
                    getAllCategory();
                    $('#editCenter').modal('toggle');
                }).catch(err => {
                    if (err.response.data.errors.image) {
                        imageError.text(err.response.data.errors.image[0]);
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
                const url = generateAdminURL('instragramfeed/delete') + id;
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
