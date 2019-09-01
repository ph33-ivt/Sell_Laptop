@extends('backend.layouts.app')

@section('title')
Laptop shop| Create User
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        @include('messages.msg')
                        <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{old('password')}}" required>
                            </div>
                            {{-- <label >Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control"  placeholder="Enter Confirm Password" value="{{old('confirm_password')}}"> --}}
                            <div class="form-group">
                                    <label>Select Role for User</label>
                                    <select multiple class="form-control" name="roles[]">
                                      @foreach ($listRoles as $roles)
                                        <option value="{{ $roles->id}}"">{{$roles->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
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
