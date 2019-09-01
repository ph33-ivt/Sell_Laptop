@extends('backend.layouts.app')

@section('title')
Laptop Shop | Permission
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title ">List Permission</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
            @can('create',App\Permission::class)
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.permission.create') }}" role="button">Create permission</a>
            @endcan
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Display Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
            <tr>
              <td>{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                <td>{{$permission->display_name}}</td>
            <td>
                @can('update',App\Permission::class)
                <a href="{{route('admin.permission.edit', $permission->id)}}"><i class="far fa-edit"></i></a>
                @endcan
            </td>
            <td>
                <form id="delete-form-{{$permission->id}}" action="{{route('admin.permission.destroy',$permission->id)}}" style="display:none" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
                @can('delete',App\Permission::class)
                <a href="" onclick=" event.preventDefault(); document.getElementById('delete-form-{{$permission->id}}').submit();"><i class="far fa-trash-alt"></i></a>
                @endcan
            </td>
            </tr>
                @endforeach
          </table>
          <div class="d-flex justify-content-center mt-3">{{ $permissions->links() }}</div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection
