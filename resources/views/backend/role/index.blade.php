@extends('backend.layouts.app')

@section('title')
Laptop Shop | Role
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Role</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
           @can('create',App\Role::class)
            <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.role.create') }}" role="button">Create Role</a>
            @endcan
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr style=" color:red;background-color: #3e8409;">
              <th>No</th>
              <th>Name</th>
              <th>description</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
            <tr>
              <td>{{$loop->index +1}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
            <td>
                @can('update',App\Role::class)
                <a href="{{route('admin.role.edit', $role->id)}}"><i class="far fa-edit"></i></a>
                @endcan
            </td>
            <td>
                <form id="delete-form-{{$role->id}}" action="{{route('admin.role.destroy',$role->id)}}" style="display:none" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
                @can('delete',App\Role::class)
                <a href="javascript:document.getElementById('delete-form-{{$role->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
                @endcan
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
