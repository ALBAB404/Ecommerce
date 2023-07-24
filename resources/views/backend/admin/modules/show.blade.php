@extends('backend.layouts.master')
@section('title', 'Admin Show')
@section('content')
<div class="card m-5">
    <h5 class="card-header">Admins Show</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                         <th>SL</th>
                         <td>{{ $admin->id }}</td>
                 </tr>
                    <tr>
                         <th>Name</th>
                         <td>{{ $admin->name }}</td>
                 </tr>
                    <tr>
                         <th>Email</th>
                         <td>{{ $admin->email }}</td>
                 </tr>
                    <tr>
                         <th>Role</th>
                         <td>{{ $admin->role }}</td>
                 </tr>
                    <tr>
                         <th>Status</th>
                         <td>
                            <span class="badge {{ $admin->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                {{ $admin->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                 </tr>
        </tbody>
    </table>
</div>
</div>
<a href="{{ route('admin.index') }}" class="btn btn-success ">Back</a>
  </div>
@endsection
