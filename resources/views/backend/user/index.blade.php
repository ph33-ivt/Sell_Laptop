@extends('backend.layouts.app')

@section('title')
Laptop Shop | List User
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
            @can('create', App\User::class)
            <a name="" id="" class="btn btn-primary mb-3" href="{{ route('admin.user.create') }}" role="button">Create User</a>
            @endcan
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr style=" color:red;background-color: #3e8409;">
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
            <tr>
              <td>{{$loop->index +1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            <td>
                @can('update', App\User::class)
                <a href="{{route('admin.user.edit', $user->id)}}"><i class="far fa-edit"></i></a>
                @endcan
            </td>
            <td>
                <form id="delete-form-{{$user->id}}" action="{{route('admin.user.destroy',$user->id)}}" style="display:none" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                @can('delete', App\User::class)
                <a href="javascript:document.getElementById('delete-form-{{$user->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
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
