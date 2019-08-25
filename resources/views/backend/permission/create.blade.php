@extends('backend.layouts.app')

@section('title')
Create Permission | Dashboard
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        @include('messages.msg')
                        <div class="card-header">
                        <h3 class="card-title">Create Permission</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.permission.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Display Name</label>
                                <input type="text" class="form-control" id="display_name" rows="5" name="display_name" placeholder="Enter display_name" value="{{old('display_name')}}" required>
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
