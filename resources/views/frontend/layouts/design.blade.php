<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laptop Sell - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/frontend/favicon.png')}}"> --}}

    <!-- all css here -->

    <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/font-awesome.min.css')}}">
    <script src="{{asset('js/frontend/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>

    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    {{-- <div class="notification-section notification-section-padding notification-img-2 ptb-15">
        <div class="container-fluid">
            <div class="notification-wrapper">
                <div class="notification-pera-graph notification-pera-graph-2">
                    <p>Get A big Discount for Gadgets. 10% to 70% Discount for all products. Save money</p>
                </div>
                <div class="notification-btn-close">
                    <div class="notification-btn notification-btn-2">
                        <a href="#">Shop Now</a>
                    </div>
                    <div class="notification-close notification-icon-2 notification-icon">
                        <button><i class="pe-7s-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @include('frontend.layouts.header')
    <!-- header end -->

    {{-- begin nav --}}
    @include('frontend.layouts.nav')
    {{-- end nav --}}
    @yield('content')

    @include('frontend.layouts.footer')
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
                                            <img src="asset/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                        <a class="compare-btn" href="{{route('user.cart')}}">Add to cart</a>
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
</body>

</html>
