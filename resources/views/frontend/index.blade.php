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
            <h2>Top Products</h2>
        </div>
        <div class="row">
            @foreach ($topProducts as $product)
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
{{-- <div class="best-selling-area pb-95 gray-bg-7">
    <div class="section-title-4 text-center mb-60">
        <h2>Best Selling</h2>
    </div>
    <div class="best-selling-product">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="best-selling-left">
                    <div class="product-wrapper">
                        <div class="product-img-4">
                            <a href="#"><img src="{{ asset('img/frontend/product/electro/9.jpg')}}" alt=""></a>
                            <div class="product-action-right">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content-5 text-center">
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                            </div>
                            <h4><a href="product-details.html">desktop C27F551</a></h4>
                            <span>Headphone</span>
                            <h5>$133.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="best-selling-right">
                    <div class="custom-container">
                        <div class="coustom-row-3">
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{ asset('img/frontend/product/electro/10.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{asset('img/frontend/product/electro/11.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Joy Stick</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{ asset('img/frontend/product/electro/12.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Awesome Tab</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{asset('img/frontend/product/electro/13.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Trimmer C27F401</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{asset('img/frontend/product/electro/14.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Timer C27F500</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="{{asset('img/frontend/product/electro/15.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Joy Stick</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="product-area-2 wrapper-padding pt-100 pb-70 gray-bg-7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{asset('img/frontend/product/electro/16.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{ asset('img/frontend/product/electro/17.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{ asset('img/product/electro/18.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{asset('img/product/electro/19.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{ asset('img/product/electro/20.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="{{asset('img/frontend/product/electro/21.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="brand-logo-area-2 wrapper-padding ptb-80 gray-bg-7">
    <div class="container-fluid">
        <div class="brand-logo-active2 owl-carousel">
            <div class="single-brand">
                <{{asset('img/frontend/brand-logo/7.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/8.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/9.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/10.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/11.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/12.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/13.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/7.png')}}" alt="">
            </div>
            <div class="single-brand">
                <img src="{{asset('img/frontend/brand-logo/8.png')}}" alt="">
            </div>
        </div>
    </div>
</div> --}}
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



