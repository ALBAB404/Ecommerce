@extends('backend.layouts.master')
@section('title', 'Admin')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-xl mt-5">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Admins Update</h5>
                <small class="text-muted float-end">Merged input group</small>
              </div>
              <div class="card-body">
                <form action="{{ route('admin.update', $admin->id) }}" method="post">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                      <input type="text" value="{{ $admin->name }}" name="name" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                    </div>
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="email" value="{{ $admin->email }}" name="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                      <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                    </div>
                    <div class="form-text">You can use letters, numbers &amp; periods</div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Role</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"><i class='bx bx-user-circle' ></i></span>
                              <select name="role" id="" class="form-select">
                                <option value="">Select Role</option>
                                <option value="Super_admin" {{ $admin->role === 'Super_admin' ? 'selected' : '' }}>Super Admin</option>
                                <option value="User" {{ $admin->role === 'User' ? 'selected' : '' }}>User</option>
                              </select>
                            </div>
                          </div>
                    </div>
                    <div class="col-6">

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Status</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"><i class='bx bxs-notification'></i></span>
                              <select name="status" id="" class="form-select">
                                <option value="">Select Status</option>
                                <option value="1" {{ $admin->status === 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $admin->status === 0 ? 'selected' : '' }}>Inactive</option>
                              </select>
                            </div>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <div class="col-md-2"></div>
    </div>
@endsection
