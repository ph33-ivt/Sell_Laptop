@extends('backend.layouts.app')

@section('title')
Laptop Shop | Order Detail
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title ">Order Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Order ID</th>
              <th>Product Id</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Discount</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orderdetails as $orderdetail)
            <tr>
                <td>{{$orderdetail->order_id}}</td>
                <td>{{$orderdetail->product_id}}</td>
                <td>{{$orderdetail->product_name}}</td>
                <td>{{$orderdetail->price}}</td>
                <td>{{$orderdetail->quantity}}</td>
                <td>{{$orderdetail->discount}}</td>
                <td>{{$orderdetail->created_at}}</td>
                <td>{{$orderdetail->updated_at}}</td>
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

