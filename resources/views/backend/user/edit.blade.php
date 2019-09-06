@extends('backend.layouts.app')

@section('title')
Laptop Shop | Edit User
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
                            <label for="name">Name<span style="color:red">*</span></label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $user->name}}" >
                            @if ($errors->has('name'))
                            <p class="help-block" style="color:red">
                                {{ $errors->first('name') }}
                            </p>
                            @endif
                            </div>
                            <div class="form-group">
                            <label for="email">Email address<span style="color:red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}" >
                            @if ($errors->has('email'))
                            <p class="help-block" style="color:red">
                                {{ $errors->first('email') }}
                            </p>
                            @endif
                            </div>
                            <div class="form-group">
                            <label for="password">Password<span style="color:red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" >
                            @if ($errors->has('password'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                            </div>
                            <div class="form-group">
                                <label>Select Role for User<span style="color:red">*</span></label>
                                <select multiple class="form-control" name="roles[]">
                                    @foreach ($listRoles as $role)
                                    <option value="{{ $role->id}} "{{ ($userOfRoles->contains($role->id)) ? 'selected' : '' }}>{{$role->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('roles'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('roles') }}
                                </p>
                                @endif
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
