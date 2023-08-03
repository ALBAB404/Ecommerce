@extends('backend.layouts.master')
@section('title', 'Admin')
@section('content')
    <div class="row p-4">
        <div class="col-md-4">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Sub-Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sub-category.store') }}" method="post" id="addCategoryForm">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Parent Category</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">Select Parent Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title :</label>
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
                                            {{-- <tr>
                                                <td colspan="4">
                                                    <input type="text" class="form-control" name="sub_cat[]" placeholder="Title">
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger removeRow" ><i class='bx bx-trash' ></i></button>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-phone">Status</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class='bx bx-user-circle'></i></span>
                                    <select name="status" id="status" class="form-select">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                              @php $sl = 1 @endphp
                                @foreach($sub_categories as $sub_category)
                                        <tr>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $sl++ }}</strong>
                                            </td>
                                            <td>{{ $sub_category->category->title }}</td>
                                            <td>{{ $sub_category->title }}</td>
                                            <td>
                                                <span class="badge {{ $sub_category->status == 1 ? 'bg-success' : 'bg-danger'}}">{{ $sub_category->status == 1 ? 'Active' : 'Inactive'}}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="me-2 text-center">
                                                        <a href="" data-bs-toggle="modal" class="viewBtn" data-bs-target="#modalCenter" data-slug="">
                                                            <span class="btn btn-sm btn-warning"><i class='bx bx-show-alt'></i></span>
                                                        </a>
                                                    </div>

                                                    <div class="me-2">
                                                        <a href="" data-bs-toggle="modal" class="editBtn" data-bs-target="#editCenter" data-slug="">
                                                            <span class="btn btn-sm btn-success"><i
                                                                    class='bx bxs-message-square-edit'></i></span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <form action="#" class="deleteRow" data-slug="">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Modal -->
<div class="modal fade" id="subCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subCategoryModalTitle">Sub-Category Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody id="subCategoryData">
                        <!-- Data will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editCenter" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Sub-Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editSlug" name="slug">
                    <div class="mb-3">
                        <label class="form-label" for="editCategory">Parent Category</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-user"></i></span>
                            <select name="edit_category_id" id="editCategory" class="form-select">
                                <option value="">Select Parent Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editTitle">Title :</label>
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" name="edit_title" id="editTitle" placeholder="Title">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editStatus">Status</label>
                        <div class="input-group input-group-merge">
                            <select name="edit_status" id="editStatus" class="form-select">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script>

//   form insert start

$(document).ready(function () {
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





    // Handle form submission
    $('body').on('submit', '#addCategoryForm', function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        axios.post("{{ route('admin.sub-category.store') }}", formData)
            .then(response => {
                // Clear input fields
                $('#category_id').val('');
                $('.dynamic_field input').val('');
                $('#status').val('');

                 // Remove dynamic rows
                 $('.dynamic-column').remove();
                // Fetch and update the updated data
                getData();
            })
            .catch(error => {
                console.error(error);
            });
    });
    //   form insert end
    // Fetch  data start
    function getData() {
        axios.get("{{ route('admin.sub-category.index') }}")
            .then(response => {

                let subCategories = response.data; // Assuming the returned data has a 'sub_categories' key
                TableData(subCategories);
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Update table content
    function TableData(data) {
        console.log(data);
        $('#myTable').empty();
        let sl = 1;
        data.forEach(subCategory => {
            $('#myTable').append(`
                <tr>
                    <td>
                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                        <strong>${sl++}</strong>
                    </td>
                    <td>${subCategory.category.title}</td>
                    <td>${subCategory.title}</td>
                    <td>
                        <span class="badge ${subCategory.status == 1 ? 'bg-success' : 'bg-danger'}">${subCategory.status == 1 ? 'Active' : 'Inactive'}</span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="me-2 text-center">
                                <a href="" data-bs-toggle="modal" class="viewBtn" data-bs-target="#subCategoryModal" data-slug="${subCategory.slug}">
                                    <span class="btn btn-sm btn-warning"><i class='bx bx-show-alt'></i></span>
                                </a>
                            </div>

                            <div class="me-2">
                                <a href="" data-bs-toggle="modal" class="editBtn" data-bs-target="#editCenter" data-slug="${subCategory.slug}">
                                    <span class="btn btn-sm btn-success"><i
                                            class='bx bxs-message-square-edit'></i></span>
                                </a>
                            </div>
                            <div>
                                <form action="#" class="deleteRow" data-slug="${subCategory.slug}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            `);
        });
    }
    getData();
    // Fetch data end
    // delete data start
    $('body').on('submit', '.deleteRow', function (e) {
                e.preventDefault();

                const deleteForm = $(this);
                const slug = deleteForm.data('slug');
                const url = generateAdminURL('sub-category/delete') + slug;

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
                        // Send delete request using Axios
                        axios.delete(url, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }).then((res) => {
                            if (res.data.success) {
                                // Update table after delete
                                getData();
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
    // delete data end
    // Edit data Start
    // Open the edit modal and populate with data
            $('body').on('click', '.editBtn', function (e) {
                e.preventDefault();
                const slug = $(this).data('slug');
                const editUrl = generateAdminURL('sub-category/edit') + slug;
                axios.get(editUrl)
                    .then(response => {
                        const subCategory = response.data;
                        $('#editSlug').val(subCategory.slug);
                        $('#editCategory').val(subCategory.category_id);
                        $('#editTitle').val(subCategory.title);
                        $('#editStatus').val(subCategory.status);

                        // Open the modal
                        $('#editCenter').modal('show');
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });

            // Handle edit form submission
            $('body').on('submit', '#editForm', function (e) {
                e.preventDefault();
                const requestData = {
                    edit_category_id: $('#editCategory').val(),
                    edit_title: $('#editTitle').val(),
                    edit_status: $('#editStatus').val(),
                };
                const slug =  $('#editSlug').val();
                const editUrl = generateAdminURL('sub-category/update') + slug;
                axios.post(editUrl, requestData)
                    .then(response => {
                        // Close the edit modal
                        $('#editCenter').modal('hide');

                        // Clear input fields
                        $('#editCategory').val('');
                        $('#editTitle').val('');
                        $('#editStatus').val('');

                        // Fetch and update the updated data
                        getData();
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });

    // Edit data end
    // show data start
    $('body').on('click', '.viewBtn', function(e) {
    e.preventDefault();

    let slug = $(this).data('slug');
    let url = generateAdminURL('sub-category') + slug;

    axios.get(url).then((res) => {
        let subCategory = res.data;
        console.log(subCategory);
        // Check if subCategory.category exists and has a title property
        if (subCategory.category && subCategory.category.title) {
            let html = `
                <tr>
                    <th>ID</th>
                    <td>${subCategory.id}</td>
                </tr>
                <tr>
                    <th>Parent Category</th>
                    <td>${subCategory.category.title}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>${subCategory.title}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge ${subCategory.status == 1 ? 'bg-success' : 'bg-danger'}">
                            ${subCategory.status == 1 ? 'Active' : 'Inactive'}
                        </span>
                    </td>
                </tr>
            `;
            $('#subCategoryData').html(html);

            // Open the sub-category modal
            $('#subCategoryModal').modal('show');
        } else {
            console.error('Category information is missing or invalid.');
        }
    }).catch((error) => {
        console.error(error);
    });
});

    // show data end
});



    </script>
@endpush
