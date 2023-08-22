@extends('backend.layouts.master')
@section('title', 'coupon')
@section('content')
    <div class="row p-4">
        <div class="col-md-4">
            <div class="col-xl mt-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Coupon</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="post" id="addCategoryForm">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                                <label class="form-label" for="basic-icon-default-fullname">Coupon Type</label>
                                <div class="input-group input-group-merge">
                                    <select name="coupon_type" id="coupon_type" class="form-control">
                                        <option value="0">Flat Discount</option>
                                        <option value="1">Percentage Discount</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Amount</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="number" name="discount" class="form-control" id="discount"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Expired Date</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="date" name="expired" class="form-control" id="expired" placeholder="John Doe"
                                        aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Status</label>
                                <div class="input-group input-group-merge">
                                    <select name="status" id="status" class="form-control">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
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
                        <h5 class="mb-0">Coupons Table</h5>
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
                                    <th>TITLE</th>
                                    <th>COUPON TYPE</th>
                                    <th>AMOUNT</th>
                                    <th>STATUS</th>
                                    <th>EXPIRED DATE</th>
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
            <h5 class="modal-title" id="modalCenterTitle">Show Sizes</h5>
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
            <h5 class="modal-title" id="modalCenterTitle">Edit Sizes</h5>
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
        //Coupon CRUD .......................................................................................................................
        // Fetch Method start
       const getAllCategory = () =>{
            axios.get('/admin/coupon/index').then((res)=>{
                table_data_show(res.data);
            })
        }
        getAllCategory();


       const table_data_show = (sizes) => {
        let sl = 1;
        const sizeClasses =  ['bg-primary', 'bg-success', 'bg-info', 'bg-warning', 'bg-danger'];

        const getRandomClass = () => {
            const randomIndex = Math.floor(Math.random() * sizeClasses.length);
            return sizeClasses[randomIndex];
        };

        let loop =  sizes.map(items =>{
            return `
            <tr>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                    <strong>${sl++}</strong>
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <span class="">${items.title}</span>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <span class="${items.type === '0' ? 'badge bg-success' : 'badge bg-info'}">
                            ${items.type === '0' ? 'Flat' : 'Percentage'}
                        </span>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <span class="">${items.discount}</span>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <span class="${items.status == '1' ? 'badge bg-success' : 'badge bg-danger'}">
                            ${items.status == '1' ? 'Active' : 'Inactive'}
                        </span>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <span class="">${items.expired}</span>
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
                let title = $('#title');
                let status = $('#status');
                let expired = $('#expired');
                let discount = $('#discount');
                let coupon_type = $('#coupon_type');
                console.log();

                let data = new FormData();
                data.append('title', title.val());
                data.append('status', status.val());
                data.append('expired', expired.val());
                data.append('discount', discount.val());
                data.append('coupon_type', coupon_type.val());

                axios.post("/admin/coupon/store", data)
                    .then((res) => {
                        getAllCategory();
                        iziToast.success({
                            title: 'Successfully Data Inserted!',
                            message: "{{ Session::get('success') }}",
                        });

                        // Reset form fields
                        title.val('');
                        status.val('');
                        expired.val('');
                        discount.val('');
                        coupon_type.val('');
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
            console.log(id);
            let url = generateAdminURL("coupon") + id
            axios.get(url).then((res)=>{
                let coupon =  res.data
                let html = `
                <form action="" id="editCategoryForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Title</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="title" class="form-control" id="edittitle" value="${coupon.title}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Coupon Type</label>
                        <div class="input-group input-group-merge">
                            <select name="coupon_type" id="editcoupon_type" class="form-control">
                                <option ${coupon.type == 0 ? 'selected' : ''} value="0"  >Flat Discount</option>
                                <option ${coupon.type == 1 ? 'selected' : ''} value="1">Percentage Discount</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">DISCOUNT</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="discount" class="form-control" id="editdiscount" value="${coupon.discount}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Expired Date</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" name="expired" class="form-control" id="editexpired" value="${coupon.expired}"
                                placeholder="John Doe" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Status</label>
                        <div class="input-group input-group-merge">
                            <select name="status" id="editstatus" class="form-control">
                                <option ${coupon.status == 0 ? 'selected' : ''} value="0">Inactive</option>
                                <option ${coupon.status == 1 ? 'selected' : ''} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" id="editid" class="form-control"value="${coupon.id}"
                        placeholder="john.doe" aria-label="john.doe"
                        aria-describedby="basic-icon-default-email2">
                    </div>
                    <button type="submit" id="editButton" class="btn btn-primary">Update</button>
                </form>
                `
                $('#editData').html(html)
            })
        })
        //edit Methd End
        //update Methd start
            $('body').on('submit', '#editCategoryForm', function (e) {
            e.preventDefault();

            let title = $('#edittitle');
            let coupon_type = $('#editcoupon_type');
            let discount = $('#editdiscount');
            let expired = $('#editexpired');
            let status = $('#editstatus');
            let id = $('#editid').val(); // Get the value of id input

            const url = window.location.href;
            let data = new FormData();
            data.append('title', title.val());
            data.append('coupon_type', coupon_type.val());
            data.append('discount', discount.val());
            data.append('expired', expired.val());
            data.append('status', status.val());

            axios.post(`${url}/update/${id}`, data).then(res => {
                title.val(null);
                coupon_type.val(null);
                discount.val(null);
                expired.val(null);
                status.val(null);
                getAllCategory();
                $('#editCenter').modal('toggle');
            }).catch(err => {
                if (err.response.data.errors.title) {
                    titleError.text(err.response.data.errors.title[0]);
                }
            });
    });

        //update Methd end
     // Delete Method start
     $('body').on('submit', '.deleteRow', function (e) {
                e.preventDefault();

                const deleteForm = $(this);
                const id = deleteForm.data('id');
                const url = generateAdminURL('coupon/delete') + id;
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
