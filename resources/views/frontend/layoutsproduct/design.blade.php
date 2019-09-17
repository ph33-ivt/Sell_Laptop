<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/easyzoom.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/custom.css')}}">
        <script src="{{asset('js/frontend/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
            @include('frontend.layoutsproduct.header')
        <!-- header end -->
        @yield('content')
        <!-- product area end -->
        @include('frontend.layoutsproduct.footer')
		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="assets/img/cart/4.jpg" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




		<!-- all js here -->
        <script src="{{asset('js/frontend/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('js/frontend/popper.js')}}"></script>
        <script src="{{asset('js/frontend/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/frontend/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/frontend/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/frontend/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/frontend/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/frontend/waypoints.min.js')}}"></script>
        <script src="{{asset('js/frontend/ajax-mail.js')}}"></script>
        <script src="{{asset('js/frontend/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/frontend/plugins.js')}}"></script>
        <script src="{{asset('js/frontend/main.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/frontend/style.js')}}"></script>
    </body>
</html>
