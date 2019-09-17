<header>
    <div class="header-top-wrapper-2 border-bottom-2">
        <div class="header-info-wrapper pl-200 pr-200">
            <div class="header-contact-info header-contact-info2 ">
                <ul>
                    <li><i class="pe-7s-call"></i> +84 33 7548422</li>
                    <li><i class="pe-7s-mail"></i> <a href="#">laptopsell@gmail.com</a></li>
                </ul>
            </div>
            <div class="electronics-login-register">
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
                    <form action="{{route('user.search')}}">
                    <input placeholder="Enter Your key word" type="text" name="product" value="{{isset($search_product) ? $search_product : '' }}">
                        <button type="submit"> Search </button>
                    </form>
                </div>
            </div>
            <div class="header-cart-3">
                <a href="{{route('user.cart')}}">
                    <i class="ti-shopping-cart"></i>My Cart
                    @if ($countProducts >0)
                        <span>{{ $countProducts }}</span>
                    @endif

                </a>
            </div>
            <div class="mobile-menu-area mobile-menu-none-block electro-2-menu">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{route('index')}}">HOME</a>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('user.category',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
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
