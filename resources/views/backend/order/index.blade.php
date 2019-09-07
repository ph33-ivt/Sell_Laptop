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
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr style=" color:red;background-color: #3e8409;">
              <th>Order ID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Country</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Phone</th>
              <th>Grand_total</th>
              <th>Order status</th>
              <th>View Detail</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->firstname}}</td>
                <td>{{$order->lastname}}</td>
                <td>{{$order->country}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->city}}</td>
                <td>{{$order->state}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->grand_total}}</td>
                <td>
                    <form action="{{route('admin.order.updatestatus')}}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                          <select class="form-control" name="status">
                                            <option value="New" @if ($order->status == 'New') selected @endif >New</option>
                                            <option value="Pending" @if ($order->status == 'Pending') selected @endif>Pending</option>
                                            <option value="Cancelled" @if ($order->status == 'Cancelled') selected @endif>Cancelled</option>
                                            <option value="In ProsessIn Prosess" @if ($order->status == 'In Prosess') selected @endif>In Prosess</option>
                                            <option value="Shipped" @if ($order->status == 'Shipped') selected @endif>Shipped</option>
                                            <option value="Delivered" @if ($order->status == 'Delivered') selected @endif>Delivered</option>
                                          </select>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="submit" value="Update">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </td>
                <td><a target="_blank" href="{{route('admin.order.show',$order->id)}}">View details</a></td>
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

