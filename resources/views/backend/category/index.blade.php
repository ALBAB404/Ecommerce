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
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="row align-items-center pt-3 ps-4 pe-4">
                    <div class="col-md-2 pb-3">
                        <h5 class="mb-0">Admins Table</h5>
                    </div>
                    <div class="col-md-8 pb-3">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" id="myInput" class="form-control" placeholder="Search..."
                                aria-label="Search..." aria-describedby="basic-addon-search31">
                        </div>
                    </div>
                    <div class="col-md-2 pb-3 text-end">
                        <div>
                            <a href="{{ route('admin.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Name</th>
                                    <th>slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @php $sl = 1 @endphp
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $sl++ }}</strong>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class=" me-1">
                                        </span>
                                    </td>
                                    <td>
                                        <span class="">
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="me-2 text-center">
                                                <a href="">
                                                    <span class="btn btn-warning"><i class='bx bx-show-alt'></i></span>
                                                </a>
                                            </div>
                                            <div class="me-2">
                                                <a href="">
                                                    <span class="btn btn-success"><i
                                                            class='bx bxs-message-square-edit'></i></span>
                                                </a>
                                            </div>
                                            <div>
                                                {{-- {!! Form::open(['route'=>['admin.delete'],'method'=>'post']) !!}
                                    {!! Form::button("<i class='bx bx-trash'></i>", ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!} --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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

        // Insert MEthod start

        $('#addCategoryForm').on('submit', function(e) {
            e.preventDefault();

            let title = $('#title').val();
            let slug = $('#slug').val();
            let status = $('#status').val();

            let data = new FormData();

            data.append('title', title);
            data.append('slug', slug);
            data.append('status', status);
            data.append('image', document.getElementById('image').files[0]);

            axios.post("{{ route('admin.category.store') }}", data).then((res) => {

                iziToast.success({
                    title: 'Success',
                    message: 'Successfully inserted record!',
                });

                $('#title').val('');
                $('#slug').val('');
                $('#status').val('');
                document.getElementById('image').value = null;
            }).catch((error) => {
                console.error(error);
            });
        });

        // Insert MEthod End


        // Fetch MEthod start

        const getCategory = () => {
            axios.get("{{ route('admin.category.all') }}").then((res) => {
                let categories = res.data
                let sl =1
                categories.map((data, index) => {
                    $('#myTable').append(`
                                 <tr>
                                    <td>
                                        <i class = "fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>${sl++}</strong>
                                    </td>
                                    <td>${data.title}</td>
                                    <td>${data.slug}</td>
                                    <td>
                                        <img class="img-thumbnail post-image" src="{{ url('image/Thumbnail/'+${data.image}) }}" alt="{{ $post->title }}">
                                    </td>
                                    <td>
                                        <span class = "">${data.status}</span>
                                    </td>
                                    <td>
                                        <div  class = "d-flex justify-content-center">
                                        <div  class = "me-2 text-center">
                                        <a    href  = "">
                                        <span class = "btn btn-warning"><i class = 'bx bx-show-alt'></i></span>
                                                </a>
                                            </div>
                                            <div  class = "me-2">
                                            <a    href  = "">
                                            <span class = "btn btn-success"><i
                                                  class = 'bx bxs-message-square-edit'></i></span>
                                                </a>
                                            </div>
                                            <div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                    `)
                })
            }).catch((error) => {
                console.error(error);
            });
        }

        getCategory();

        // Fetch MEthod End



        //Category CRUD .......................................................................................................................
    </script>
@endpush
