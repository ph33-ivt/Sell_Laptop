<header>
        <div class="header-top-furniture wrapper-padding-2 res-header-sm">
            <div class="container-fluid">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 furniture-logo ptb-30">
                    <a href="{{route('index')}}">
                            <img src="{{asset('img/frontend/logo/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="menu-style-2 furniture-menu menu-hover">
                        <nav>
                            <ul>
                            <li><a href="{{route('index')}}">home</a>
                                    <ul class="single-dropdown">
                                        @foreach ($categories as $category)
                                        <li><a href="{{route('user.category',$category->id)}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul class="single-dropdown">
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="{{route('login')}}">login</a></li>
                                        <li><a href="{{route('register')}}">register</a></li>
                                        <li><a href="{{route('user.cart')}}">cart page</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="menu-style-2 furniture-menu menu-hover electronics-login-register">
                            <nav>
                                <ul>
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
                            </nav>
                        </div>
                    <div class="header-cart">
                    <a class="icon-cart-furniture" href="{{route('user.cart')}}">
                            <i class="ti-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="#">HOME</a>
                                        <ul>
                                            @foreach ($categories as $category)
                                            <li><a href="{{route('user.category',$category->id)}}">$category->name</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="{{route('login')}}">login</a></li>
                                            <li><a href="{{route('register')}}">register</a></li>
                                            <li><a href="{{route('user.cart')}}">cart page</a></li>
                                        </ul>
                                    </li>
                                <li><a href="{{route('contact')}}"> Contact  </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-furniture wrapper-padding-2 border-top-3 border-bottom-3">
            <div class="container-fluid">
                <div class="furniture-bottom-wrapper">
                    <div class="furniture-login">
                        <ul>

                        </ul>
                    </div>
                    <div class="furniture-search">
                        <form action="#">
                            <input placeholder="I am Searching for . . ." type="text">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="furniture-wishlist">
                        <ul>
                            <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
