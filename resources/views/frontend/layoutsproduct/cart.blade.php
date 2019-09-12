@extends('frontend.layoutsproduct.design')

@section('title')
Cart
@endsection

@section('content')
 <!-- shopping-cart-area start -->
 <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Cart</h1>
                        @include('messages.msg')
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                            {{ session()->get('error') }}
                            </div>
                        @endif
                        @if ($errors->has('quantity'))
                            <div class="alert alert-danger">
                                {{ $errors->first('quantity') }}
                            </div>
                        @endif
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>update</th>
                                        <th>remove</th>
                                        <th>images</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($userCarts as $cart)
                                        <tr>
                                        <form id ="user-update-cart-{{$cart->id}}" action="{{route('user.update.cart',$cart->id)}}" method="post" >
                                                @csrf
                                                @method('put')
                                                <input type="hidden" name="product_id" value="{{$cart->product_id }}">
                                                <input type="hidden" name="product_name" value="{{$cart->product_name  }}">
                                                <input type="hidden" name="price" value="{{$cart->price}}">
                                            <td class="product-remove" style="width: 10px;height:10px;"><a href="javascript:document.getElementById('user-update-cart-{{$cart->id}}').submit();" ><i class="pe-7s-repeat" ></i></a></td>
                                            <td class="product-remove"><a href="{{route('user.delete.cart',$cart->id)}}"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                            <a href="#"><img src= "{{asset('img/frontend/product/all/'.$cart->image)}}" alt="" style="width:85px;height:101px;"></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$cart->product_name}} </a></td>
                                            <td class="product-price-cart"><span class="amount">${{$cart->price}}</span></td>
                                            <td class="product-quantity">
                                                <input value="{{$cart->quantity}}" type="number" name="quantity" min="1">
                                            </td>
                                            <td class="product-subtotal">${{$cart->price * $cart->quantity}}</td>
                                        </tr>
                                        @php
                                            $total += ($cart->price) * ($cart->quantity);
                                        @endphp
                                        </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="{{route('index')}}">Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal<span>${{$total}}</span></li>
                                    <li>Total<span>${{$total}}</span></li>
                                    </ul>
                                    @if (empty(Auth::check()))
                                    <a href="{{route('login')}}">Proceed to checkout</a>
                                    @else
                                    <a href="{{route('user.checkout')}}">Proceed to checkout</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->
@endsection
