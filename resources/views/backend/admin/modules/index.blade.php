@extends('backend.layouts.master')
@section('title', 'Admin')
@section('content')
<div class="card m-5">
    <h5 class="card-header">Admins Table</h5>
    <a href="{{ route('admin.create') }}" class="btn btn-success">Create</a>

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
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $admin->id }}</strong>
                </td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    <span class="badge {{ $admin->role === 'User' ? 'bg-info' : 'bg-danger' }} me-1">
                        {{ $admin->role }}
                    </span>
                </td>
                <td>
                    <span class="badge {{ $admin->status == 1 ? 'bg-success' : 'bg-danger' }}">
                        {{ $admin->status == 1 ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('admin.show', $admin->id) }}"><span class="btn btn-warning"><i class='bx bx-show-alt' ></i></span></a>
                    <a href="{{ route('admin.edit', $admin->id) }}"><span class="btn btn-success"><i class='bx bxs-message-square-edit' ></i></span></a>
                    <a href=""><span class="btn btn-danger"><i class='bx bx-trash' ></i></span></a>
               </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
