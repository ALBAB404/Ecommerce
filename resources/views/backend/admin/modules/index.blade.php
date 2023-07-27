@extends('backend.layouts.master')
@section('title', 'Admin')
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
                <a href="{{ route('admin.create') }}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
    {{-- <div class="d-flex justify-content-between align-items-center pt-3 ps-4 pe-4">
        <h5 class="mb-0">Admins Table</h5>

        <div class="input-group input-group-merge">
            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
            <input type="text" id="myInput" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
          </div>

        <div>
            <a href="{{ route('admin.create') }}" class="btn btn-success">Create</a>
        </div>
    </div> --}}
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>NO.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @php $sl = 1 @endphp
            @foreach ($admins as $admin)
            <tr>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $sl++ }}</strong>
                </td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    <span class="badge {{ $admin->role === 'User' ? 'bg-label-danger' : 'bg-label-warning' }} me-1">
                        {{ $admin->role }}
                    </span>
                </td>
                <td>
                    <span class="badge {{ $admin->status == 1 ? 'bg-success' : 'bg-danger' }}">
                        {{ $admin->status == 1 ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="me-2 text-center">
                            <a href="{{ route('admin.show', $admin->id) }}">
                                <span class="btn btn-warning"><i class='bx bx-show-alt'></i></span>
                            </a>
                        </div>
                        <div class="me-2">
                            <a href="{{ route('admin.edit', $admin->id) }}">
                                <span class="btn btn-success"><i class='bx bxs-message-square-edit'></i></span>
                            </a>
                        </div>
                        <div>
                            {!! Form::open(['route'=>['admin.delete',$admin->id],'method'=>'post']) !!}
                            {!! Form::button("<i class='bx bx-trash'></i>", ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </td>

                {{-- <form action="{{ route('admin.delete', $admin->id) }}" class="p-0" method="POST"> --}}
               {{-- @csrf --}}
               {{-- <a href="" type="submit"><span class="btn btn-danger"><i class='bx bx-trash'></i></span></a> --}}
               {{-- <button class="btn btn-danger m-0"><i class='bx bx-trash'></i></button> --}}
               {{-- </form> --}}
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
        $('#myInput').on('keyup', function(){
            let value  = $(this).val().toLowerCase();
            $('#myTable tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);
            });
        });
    </script>
@endpush


