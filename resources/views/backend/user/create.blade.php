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
                        <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name<span style="color:red">*</span></label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" >
                            @if ($errors->has('name'))
                            <p class="help-block" style="color:red">
                                {{ $errors->first('name') }}
                            </p>
                            @endif
                            </div>
                            <div class="form-group">
                            <label for="email">Email address<span style="color:red">*</span></span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" >
                            @if ($errors->has('email'))
                            <p class="help-block" style="color:red">
                                {{ $errors->first('email') }}
                            </p>
                            @endif
                            </div>
                            <div class="form-group">
                            <label for="password">Password<span style="color:red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                            @if ($errors->has('password'))
                            <p class="help-block" style="color:red">
                                {{ $errors->first('password') }}
                            </p>
                            @endif
                            </div>
                            {{-- <label >Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control"  placeholder="Enter Confirm Password" value="{{old('confirm_password')}}"> --}}
                            <div class="form-group">
                                <label>Select Role for User<span style="color:red">*</span></label>
                                <select multiple class="form-control" name="roles[]">
                                    @foreach ($listRoles as $roles)
                                    <option value="{{ $roles->id}}"">{{$roles->name }}</option>
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
