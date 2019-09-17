@extends('frontend.layoutsproduct.design')

@section('title')
    Product- Details
@endsection

@section('content')
<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-70">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active show fade" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                        <img src="{{asset('img/frontend/product/product-details/'.$productDetailsImage)}}" alt="" style="width:600px;height:550px;">
                                </div>
                            </div>
                            @foreach ($productDetailsImageall as $key => $image)
                             <div class="tab-pane fade" id="pro-details{{$key}}" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                        <img src="{{asset('img/frontend/product/product-details/'.$image)}}" alt="" style="width:600px;height:550px;">
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="product-details-small nav mt-12" role=tablist>
                            @foreach ($productDetailsImageall as $key => $image)
                                <a class="mr-12" href="#pro-details{{$key}}" data-toggle="tab" role="tab" aria-selected="true">
                                    <img src="{{asset('img/frontend/product/product-details/'.$image)}} " style="width:141px ; height:135px" alt="">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                <h3>{{$productDetails->name}}  {{$productDetails->cpu}} {{$productDetails->ram}}/{{$productDetails->hdd}} {{ $productDetails->os}} {{$productDetails->card}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    <div class="details-price">
                    <span>${{$productDetails->price}}</span>
                    </div>
                    <p>{{$productDetails->description}}</p>
                    <form id="add-cart-form-{{$productDetails->id}}" action="{{route('user.add.cart',$productDetails->id)}}"  method="POST">
                        @csrf
                        @if(session()->has('add_error'))
                            <div class="alert alert-danger">
                            {{ session()->get('add_error') }}
                            </div>
                        @endif
                    <div class="quickview-plus-minus">
                        <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                        <input type="hidden" name="product_name" value="{{$productDetails->name}}">
                        <input type="hidden" name="price" value="{{$productDetails->price}}">
                        <input type="hidden" name="color" value="{{$productDetails->color}}">
                        <input type="hidden" name="weight" value="{{$productDetails->weight}}">
                        <input type="hidden" name="cpu" value="{{$productDetails->cpu}}">
                        <input type="hidden" name="hdd" value="{{$productDetails->hdd}}">
                        <input type="hidden" name="os" value="{{$productDetails->os}}">
                        <input type="hidden" name="card" value="{{$productDetails->card}}">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="quantity" class="cart-plus-minus-box">
                            </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="javascript:{}" onclick="document.getElementById('add-cart-form-{{$productDetails->id}}').submit();"  >add to cart</a>
                                </div>
                            </form>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                    </div>
                    @if ($errors->has('quantity'))
                        <p class="help-block" style="color:red">
                            {{ $errors->first('quantity') }}
                        </p>
                    @endif

                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categories :</li>
                            @foreach ($categories as $category)
                             <li><a href="{{route('user.category',$category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-details-cati-tag mtb-10">
                        <ul>

                            <li class="categories-title">Tags :</li>
                            <li><a href="#">macbook air</a></li>
                            <li><a href="#">Hp</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>

                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">Share :</li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-flikr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    Description
                </a>
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    Reviews (0)
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <a href="#">Be the first to write your review!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                @foreach ($productRelates as $product)
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="{{route('user.product.details',$product->id)}}">
                            <img src="{{ asset('/img/frontend/product/all/'.$product->image) }}" alt="" style="width:250px;height:300px;">
                        </a>
                        {{-- <span>hot</span> --}}
                        <div class="product-action">
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="{{route('user.product.details',$product->id)}}">{{$product->name}}</a></h4>
                    <span>${{$product->price}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
