@extends('backend.layouts.app')

@section('title')
Edit Role | Dashboard
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        @include('messages.msg')
                        <div class="card-header">
                        <h3 class="card-title">Edit Role</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $role->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="description" rows="5" name="description" value="">{{ $role->description }}</textarea>
                            </div>
                            <label>Check Permission for Role</label>
                            <div class="form-check">
                                {{-- <label>Check Permission for Role</label> --}}
                                @foreach ($listPermissions as $permission)
                                    <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id }}"  {{ $roleOfPermission->contains($permission->id) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleCheck1"> {{ $permission->display_name }}</label><br>
                                @endforeach
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
