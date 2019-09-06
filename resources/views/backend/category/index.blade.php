@extends('backend.layouts.app')

@section('title')
Laptop Shop | List Category
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
            <a name="" id="" class="btn btn-primary mb-3" href="{{ route('admin.category.create') }}" role="button">Create Category</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr style=" color:red;background-color: #3e8409;">
              <th>No</th>
              <th>Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
            <tr>
              <td>{{$loop->index +1}}</td>
                <td>{{$category->name}}</td>
            <td>
                <a href="{{route('admin.category.edit', $category->id)}}"><i class="far fa-edit"></i></a>
            </td>
            <td>
                <form id="delete-form-{{$category->id}}" action="{{route('admin.category.destroy',$category->id)}}" style="display:none" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="javascript:document.getElementById('delete-form-{{$category->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
            </td>
            </tr>
                @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection
