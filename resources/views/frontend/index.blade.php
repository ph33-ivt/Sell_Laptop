@extends('frontend.layouts.design')

@section('content')
<div class="banner-area wrapper-padding gray-bg-7 pt-60">
    <div class="container-fluid">
        <div class="row">
            @foreach ($productsApple as $product)
            <div class="col-lg-4">
                <div class="banner-wrapper-4 mb-30">
                <a href="{{route('user.product.details',$product->id)}}"><img src="{{ asset('/img/frontend/product/all/'.$product->image) }}" alt=""></a>
                    <div class="banner-content4-style1">
                        <h4>Best <br>Product <br>{{$product->name}}.</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="electro-product-wrapper wrapper-padding pt-85 pb-75 gray-bg-7">
    <div class="container">
        <div class="section-title-4 text-center mb-45">
            <h2>Products New</h2>
        </div>
        <div class="row">
            @foreach ($newProducts as $product)
            <div class="col-lg-3 col-md-6">
                    <div class="product-wrapper mb-30">
                        <div class="product-img-3">
                            <a href="{{route('user.product.details',$product->id)}}">
                                <img src="{{asset('img/frontend/product/all/'.$product->image)}}" alt="" style="width: 270px;height:280px;">
                            </a>
                        </div>
                        <div class="product-content-electro2 text-center">
                        <h3><a href=" {{route('user.product.details',$product->id)}}"></a></h3>
                            <span>{{$product->color}}</span>
                            <h5>${{$product->price}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="newsletter-area ptb-60 gray-bg-7">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title-5">
                    <h2>Newsletter</h2>
                    <p>Sign Up for get all update news & Get <span>15% off</span></p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection



