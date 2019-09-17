<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place Order</title>
</head>
<body>
    <p>Thank you for shopping with us, Your order below:</p>
    Full Name  :{{$order->name}} <br>
    Email  : {{$order->user_email}} <br>
    Address : {{$order->address}} <br>
    Phone  : {{$order->phone}} <br>
    Payment_method : {{$order->payment_method}} <br>
    <h4>Detail product for Order </h4>
    <table class="table" style="border:1;">
        <thead>
            <tr>
                <th>Order_ID</th>
                <th>Product_ID</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderdetails as $orderDetail)
            <tr>
                <td>{{$orderDetail->order_id}}</td>
                <td>{{$orderDetail->product_id}}</td>
                <td>{{$orderDetail->product_name}}</td>
                <td>{{$orderDetail->price}}</td>
                <td>{{$orderDetail->quantity}}</td>
                <td>{{$orderDetail->discount}}</td>
            </tr>
            @endforeach
            <tr>
                    <td rowspan="4"><strong>grand_total</strong></td>
                    <td>${{$order->grand_total}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
