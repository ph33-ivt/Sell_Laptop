@extends('backend.layouts.app')

@section('title')
Laptop Shop | Order
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title ">List Order</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('messages.msg')
                <a name="" id="" class="btn btn-primary mb-2" href="" role="button">Create Order</a>

          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Order ID</th>
              <th>User Email</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Country</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Phone</th>
              <th>Grand_total</th>
              <th>Product Of Order</th>
              <th>Order status</th>
              <th>View Detail</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->user_email}}</td>
                <td>{{$order->firstname}}</td>
                <td>{{$order->lastname}}</td>
                <td>{{$order->country}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->city}}</td>
                <td>{{$order->state}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->grand_total}}</td>
                <td>
                    @foreach ($order->orderdetails as $product)
                            <a href="">{{$product->product_name}}</a><br>
                    @endforeach
                </td>
                <td>{{$order->status}}</td>
                <td><a target="_blank" href="{{route('admin.orderdetail.show',$order->id)}}">View details</a></td>
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

