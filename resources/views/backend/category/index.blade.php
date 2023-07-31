@extends('backend.layouts.master')
@section('title', 'Admin')
@section('content')
    <div class="row p-4">
        <div class="col-md-4">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="post" id="addCategoryForm">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Slug</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Image</label>
                                <div class="input-group">
                                    <input type="file" name="image" class="form-control" id="image">
                                    <img id="showImage" class="showImage" alt="">
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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
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
            <h5 class="modal-title" id="modalCenterTitle">CAtegories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="showData">
            <div class="row">

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


        //Slug .......................................................................................................................
        $(document).ready(function() {
            // Function to generate slug from the title
            function generateSlug(title) {
                return title
                    .toLowerCase() // Convert to lowercase
                    .trim() // Remove leading and trailing whitespaces
                    .replace(/\s+/g, '-') // Replace spaces with dashes
                    .replace(/[^a-z0-9-]/g, '') // Remove non-alphanumeric characters except dashes
                    .replace(/--+/g, '-'); // Remove consecutive dashes
            }

            // Function to update the slug field when the title field changes
            function updateSlug() {
                var title = $('#title').val();
                var slug = generateSlug(title);
                $('#slug').val(slug);
            }

            // Listen for changes in the title input
            $('#title').on('input', updateSlug);
        });

        //Slug .......................................................................................................................


        //Category CRUD .......................................................................................................................
        //image Show Form feild
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

        // Fetch Method start
       const getAllCategory = () =>{
            axios.get('/admin/category/index').then((res)=>{
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
                <td><img src="{{ asset('${items.image}') }}" width="100px" alt=""></td>
                <td>
                    <span class="badge ${items.status == 1 ? 'bg-success' : 'bg-danger'}">${items.status == 1 ? 'Active' : 'Inactive'}</span>
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
                            {!! Form::open() !!}
                            {!! Form::button("<i class='bx bx-trash'></i>", ['class'=>'btn btn-sm btn-danger', 'type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </td>
            </tr>
            `
        }).join("")
        $('#myTable').html(loop)
       }
        // Fetch Method end
        // Insert MEthod start
        $('#addCategoryForm').on('submit', function(e){
            e.preventDefault()
            let title = $('#title')
            let status = $('#status')

            let data =  new FormData()

            data.append('title', title.val())
            data.append('status', status.val())
            data.append('image', document.getElementById('image').files[0])

            axios.post("/admin/category/store",data).then((res) => {
                getAllCategory();
                iziToast.success({
                    title: 'Successfully Data Inserted!',
                    message: "{{ Session::get('success') }}",
                });
            })
            .catch(err => {
                console.error(err);
            })

        })
        // Insert MEthod End

        // Show MEthod start



        // Show MEthod End

        //edit Methd Start

        //edit Methd End

        //update Methd start

        //update Methd End

        //Category CRUD .......................................................................................................................
    </script>
@endpush
