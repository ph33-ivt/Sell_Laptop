<header>
    <div class="header-top-wrapper-2 border-bottom-2">
        <div class="header-info-wrapper pl-200 pr-200">
            <div class="header-contact-info header-contact-info2 ">
                <ul>
                    <li><i class="pe-7s-call"></i> +84 33 7548422</li>
                    <li><i class="pe-7s-mail"></i> <a href="#">laptop@domail.info</a></li>
                </ul>
            </div>
            <div class="electronics-login-register">
                <ul>

                    {{-- <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Compare</a></li>
                    <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>
                    <li><a href="#"><i class="pe-7s-flag"></i>US</a></li>
                    <li><a class="border-none" href="#"><span>$</span>USD</a></li> --}}

                    @if(empty(Auth::check()) )
                    <li><a href="{{route('login')}}"><i class="pe-7s-user"></i>Login</a></li>
                    <li><a href="{{route('register')}}"><i class="pe-7s-add-user"></i>Register</a></li>
                    @else
                    <li><a href="{{ route('account') }}"><i class="pe-7s-users"></i>{{Auth::user()->name}}</a></li>
                    <li>
                    <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       <i class="pe-7s-angle-right-circle"></i>Logout</a></li>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom ptb-40 clearfix">
        <div class="header-bottom-wrapper pr-200 pl-200">
            <div class="logo-3">
                <a href="{{route('index')}}">
                    <img src="{{asset('img/frontend/logo/logo.png')}}" alt="">
                </a>
            </div>
            <div class="categories-search-wrapper categories-search-wrapper2">
                <div class="categories-wrapper">
                    <form action="#">
                        <input placeholder="Enter Your key word" type="text">
                        <button type="button"> Search </button>
                    </form>
                </div>
            </div>
            <div class="header-cart-3">
                <a href="{{route('user.cart')}}">
                    <i class="ti-shopping-cart"></i>My Cart
                    <span>02</span>
                </a>
                {{-- <ul class="cart-dropdown">
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('img/frontend/cart/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src=" {{ asset('img/frontend/cart/2.jpg')}} " alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset( 'img/frontend/cart/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="cart-space">
                        <div class="cart-sub">
                            <h4>Subtotal</h4>
                        </div>
                        <div class="cart-price">
                            <h4>$240.00</h4>
                        </div>
                    </li>
                    <li class="cart-btn-wrapper">
                        <a class="cart-btn btn-hover" href="#">view cart</a>
                        <a class="cart-btn btn-hover" href="#">checkout</a>
                    </li>
                </ul> --}}
            </div>
            <div class="mobile-menu-area mobile-menu-none-block electro-2-menu">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{route('index')}}">HOME</a>
                                <ul>
                                    <li><a href="index.html">Apple</a></li>
                                    <li><a href="index-fashion-2.html">HP</a></li>
                                    <li><a href="index-fruits.html">DEll</a></li>
                                    <li><a href="index-book.html">Asus</a></li>
                                    <li><a href="index-electronics.html">Acer</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Contact  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
