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
            @can('create', App\Product::class)
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.product.create') }}" role="button">Create Product</a>
            @endcan
          <table id="table_id" class="display cell-border" >
            <thead>
                <tr class="cell-border"style="color: #f23535;background: #c9c4c4;">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Weight</th>
                    <th>Ram</th>
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
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->ram}}</td>
                    <td>{{$product->quantity}}</td>

                    <td><img src="{{asset('img/frontend/product/all/'.$product->image)}}" alt="" style="width: 150px;height:150px;"></td>
                <td>
                    @can('update', App\Product::class)
                    <a href="{{route('admin.product.edit', $product->id)}}"><i class="far fa-edit"></i></a>
                    @endcan
                </td>
                <td>
                    <form id="delete-form-{{$product->id}}" action="{{route('admin.product.destroy',$product->id)}}" style="display:none" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    @can('delete', App\Product::class)
                    <a href="javascript:document.getElementById('delete-form-{{$product->id}}').submit();" onclick=" return confirm('Are you sure?') "><i class="far fa-trash-alt"></i></a>
                    @endcan
                </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection





