@extends('frontend.layoutsproduct.design')

@section('title')
Thank You
@endsection

@section('content')
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Thank You shopping with us</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li>Thank You </li>
            </ul>
        </div>
    </div>
</div>

 <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <div class="align-content-center">
                        <h3>YOUR COD ORDER HAS BEEN PLACED</h3><br><p>your Order number is {{Session::get('order_id')}} and total payable about $ {{Session::get('grand_total')}}</p>
                            Please check mail your order!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@php
    Session::forget('order_id');
    Session::forget('grand_total');
@endphp

