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
                                <label for="phone">Phone<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ $user->phone}}">
                                @if ($errors->has('phone'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('phone') }}
                                </p>
                                @endif
                                </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="country" value="{{ $user->country}}">
                            </div>
                            <div class="form-group">
                                <label for="country">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="company" value="{{ $user->company}}">
                            </div>
                            <div class="form-group">
                                <label for="address"><span style="color:red">*</span>Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{ $user->address}}">
                            </div>
                            @if ($errors->has('address'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('address') }}
                                </p>
                                @endif
                                <div class="form-group">
                                    <label for="City">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="city" value="{{ $user->city}}">
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="state" value="{{ $user->state}}">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="zip" value="{{ $user->zip}}">
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
