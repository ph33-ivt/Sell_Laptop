@extends('backend.layouts.app')

@section('title')
Laptop Shop | Product
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title ">List Product</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.product.create') }}" role="button">Create Product</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Category_id</th>
              <th>Name</th>
              <th>Price</th>
              <th>Color</th>
              <th>Weight</th>
              <th>CPU</th>
              <th>Ram</th>
              <th>HDD</th>
              <th>Os</th>
              <th>Card</th>
              <th>Quantity</th>
              <th>Image</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->cpu}}</td>
                <td>{{$product->ram}}</td>
                <td>{{$product->hdd}}</td>
                <td>{{$product->os}}</td>
                <td>{{$product->card}}</td>
                <td>{{$product->quantity}}</td>
                <td><img src="{{asset('img/frontend/product/all/'.$product->image)}}" alt="" style="width: 150px;height:150px;"></td>
            <td>
                <a href="{{route('admin.product.edit', $product->id)}}"><i class="far fa-edit"></i></a>
            </td>
            <td>
                <form id="delete-form-{{$product->id}}" action="{{route('admin.product.destroy',$product->id)}}" style="display:none" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="javascript:document.getElementById('delete-form-{{$product->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
            </td>
            </tr>
                @endforeach
          </table>
          <div class="d-flex justify-content-center mt-3">{{ $products->links() }}</div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection
