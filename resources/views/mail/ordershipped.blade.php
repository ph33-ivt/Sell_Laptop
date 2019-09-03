<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place Order</title>
</head>
<body>
    <p>Thank you for shopping with us, Your order details below:</p>
    FirstName  {{$order->firstname}} <br>
    LastName  {{$order->lastname}} <br>
    Order Id {{$order->id}} <br>
    Email  {{$order->user_email}} <br>
    Company  {{$order->company}} <br>
    Country  {{$order->country}} <br>
    Address  {{$order->address}} <br>
    City  {{$order->city}} <br>
    State  {{$order->state}} <br>
    Zip  {{$order->zip}} <br>
    Phone  {{$order->phone}} <br>
    Grand_total  {{$order->grand_total}} <br>
    Payment_method  {{$order->payment_method}} <br>
</body>
</html>
