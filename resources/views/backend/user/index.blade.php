@extends('backend.layouts.app')

@section('title')
AdminLTE 3 | Dashboard
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
            <a name="" id="" class="btn btn-primary" href="{{ route('admin.user.create') }}" role="button">Create User</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
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
            <td><a href="{{route('admin.user.edit', $user->id)}}"><i class="far fa-edit"></i></a></td>
            <td>
                <form id="delete-form-{{$user->id}}" action="{{route('admin.user.destroy',$user->id)}}" style="display:none" method="post">
                    @csrf
                    @method('DELETE')

                </form>
                <a href="" onclick="event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();"><i class="far fa-trash-alt"></i></a>
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
