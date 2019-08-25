@extends('backend.layouts.app')

@section('title')
Edit User | Dashboard
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        @include('messages.msg')
                        <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $user->name}}" required>
                            </div>
                            <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}" required>
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Select Role for User</label>
                                <select multiple class="form-control" name="roles[]">
                                    @foreach ($listRoles as $role)
                                    <option value="{{ $role->id}} "{{ ($userOfRoles->contains($role->id)) ? 'selected' : '' }}>{{$role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection
