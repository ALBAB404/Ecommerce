@extends('backend.layouts.master')
@section('title', 'Product')
@section('content')
<div class="card m-5">
    <div class="row align-items-center pt-3 ps-4 pe-4">
        <div class="col-md-2">
            <h5 class="mb-0">Admins Table</h5>
        </div>
        <div class="col-md-8">
            <div class="input-group input-group-merge">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input type="text" id="myInput" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
              </div>
        </div>
        <div class="col-md-2 text-end">
            <div>
                <a href="{{ route('admin.product.create') }}" class="btn btn-success">Create</a>
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
              <th>Cateory</th>
              <th>Sub Category</th>
              <th>Price</th>
              <th>Selling Price</th>
              <th>View</th>
              <th>Status</th>
              <th>Image</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @php  $sl = 1 @endphp
            @foreach ($products as $product)
            <tr>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $sl++ }}</strong>
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->title }}</td>
                <td>{{ $product->Subcategory->title }}</td>
                <td>{{ $product->productInfo->price }}</td>
                <td>{{ $product->productInfo->sell_price }}</td>
                <td>{{ $product->productInfo->view }}</td>
                <td>
                    <span class="badge {{ $product->productInfo->is_active ? 'bg-success' : 'bg-danger' }}">
                        {{ $product->productInfo->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <span class=""><img src="{{ asset($product->productInfo->image) }}" width="80px" alt=""></span>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="me-2 text-center">
                            <a href="{{ route('admin.product.show', $product->slug) }}">
                                <span class="btn btn-sm btn-warning"><i class='bx bx-show-alt'></i></span>
                            </a>
                        </div>
                        <div class="me-2">
                            <a href="{{ route('admin.product.edit', $product->slug) }}">
                                <span class="btn btn-sm btn-success"><i class='bx bxs-message-square-edit'></i></span>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.product.delete', $product->slug ) }}" method="post">
                                @csrf
                                @method('post')
                                <button class="btn btn-sm btn-danger deleteRow" data-slug="{{ $product->slug }}" type="submit">
                                    <i class='bx bx-trash'></i>
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
    </script>
@endpush
