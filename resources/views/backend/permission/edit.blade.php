@extends('backend.layouts.app')

@section('title')
 Laptop Shop | Edit permission
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Edit permission</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.permission.update', $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name<span style="color:red">*</span></label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $permission->name }}" >
                            @if ($errors->has('name'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('name') }}
                                </p>
                             @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Display Name<span style="color:red">*</span></label>
                                <textarea class="form-control" id="display_name" rows="5" name="display_name" value="">{{ $permission->display_name }}</textarea>
                                @if ($errors->has('display_name'))
                                   <p class="help-block" style="color:red">
                                    {{ $errors->first('display_name') }}
                                   </p>
                                @endif
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
