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
                            <div class="form-group">
                                <label for="phone">Phone<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                @if ($errors->has('phone'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('phone') }}
                                </p>
                                @endif
                                </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="country" value="{{old('country')}}">
                            </div>
                            <div class="form-group">
                                <label for="country">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="company" value="{{old('company')}}">
                            </div>
                            <div class="form-group">
                                <label for="address"><span style="color:red">*</span>Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{old('address')}}">
                            </div>
                            @if ($errors->has('address'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('address') }}
                                </p>
                                @endif
                                <div class="form-group">
                                    <label for="City">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="city" value="{{old('city')}}">
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="state" value="{{old('state')}}">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="zip" value="{{old('zip')}}">
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
