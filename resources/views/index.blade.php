@extends('frontend.layouts.design')

@section('content')
<div class="banner-area wrapper-padding gray-bg-7 pt-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="banner-wrapper-4 mb-30">
                    <a href="#"><img src="{{ asset('/img/frontend/banner/20.jpg')}}" alt=""></a>
                    <div class="banner-content4-style1">
                        <h4>Best <br>Electronics <br>Products.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-wrapper-4 mb-30">
                    <a href="#"><img src="{{ asset('/img/frontend/banner/21.jpg')}}" alt=""></a>
                    <div class="banner-content4-style2">
                        <h5 class="p-left">get</h5>
                        <h2>25% </h2>
                        <h5 class="p-right">off</h5>
                        <h3>Bitso X1202</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-wrapper-4 mb-30">
                    <a href="#"><img src="{{ asset('/img/frontend/banner/22.jpg')}}" alt=""></a>
                    <div class="banner-content4-style3">
                        <h1>Up to <br>10% Off</h1>
                        <h3>Lonovo Vio D22</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="electro-product-wrapper wrapper-padding pt-85 pb-75 gray-bg-7">
    <div class="container">
        <div class="section-title-4 text-center mb-45">
            <h2>Top Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="product-details-9.html">
                            <img src="{{asset('img/frontend/product/electro/22.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html"> Demo TV 32GB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{asset('img/frontend/product/electro/23.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html">Pebble Time</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{asset('img/frontend/product/electro/24.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html">Zendure 4-Port USB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{asset('img/frontend/product/electro/25.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html">Zendure 4-Port USB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{ asset('img/frontend/product/electro/26.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html"> Demo TV 32GB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{ asset('img/frontend/product/electro/27.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html"> Pebble Time</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{ asset('img/frontend/product/electro/28.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html">Zendure 4-Port USB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-wrapper mb-30">
                    <div class="product-img-3">
                        <a href="#">
                            <img src="{{ asset('img/frontend/product/electro/29.jpg')}}" alt="">
                        </a>
                        <div class="hanicraft-action-position">
                            <div class="hanicraft-action">
                                <a class="action-cart" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="action-like" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-electro2 text-center">
                        <h3><a href="product-details.html">Zendure 4-Port USB</a></h3>
                        <span>Black</span>
                        <h5>$49.99</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area wrapper-padding pt-15 pb-95 gray-bg-7">
    <div class="container">
        <div class="electro-fexible-banner bg-img" style="background-image: url({{ asset('img/frontend/banner/23.jpg')}})">
            <div class="fexible-content fexible-content-2 ">
                <h3>Play with flexible</h3>
                <p>Multicontrol Smooth Controller, Black Color All Buttons
                    <br>are somooth, Super Shine.</p>
                <a class="btn-hover flexible-btn" href="product-details.html">Buy Now</a>
            </div>
        </div>
    </div>
</div>
<div class="best-selling-area pb-95 gray-bg-7">
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
</div>
<div class="androit-banner-wrapper wrapper-padding pt-100 pb-175">
    <div class="container-fluid">
        <div class="androit-banner-img bg-img" style="background-image: url({{asset('img/frontend/banner/36.jpg')}})">
            <div class="androit-banner-content">
                <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3>
                <a href="product-details.html">Buy Now →</a>
            </div>
            <div class="banner-price text-center">
                <div class="banner-price-position">
                    <span class="banner-price-new">$125.00</span>
                    <span class="banner-price-old">$199.00</span>
                </div>
            </div>
            <div class="phn-img">
                <img src="asset/img/banner/10.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="product-area-2 wrapper-padding pt-100 pb-70 gray-bg-7">
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
</div>
<div class="brand-logo-area-2 wrapper-padding ptb-80 gray-bg-7">
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
            <div class="col-md-6">
                <div class="newsletter-style-3">
                    <div id="mc_embed_signup" class="subscribe-form-3 pr-50">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



