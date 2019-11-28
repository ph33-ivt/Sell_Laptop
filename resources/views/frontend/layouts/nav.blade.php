<div class="categori-menu-wrapper2 clearfix">
    <div class="pl-200 pr-200">
        <div class="categori-style-2">
            <div class="category-heading-2">
                <h3>All Departments</h3>
                <div class="category-menu-list">
                    <ul>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{route('user.category',$category->id)}}"><img alt="" src="{{asset('img/frontend/icon-img/15.png')}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-style-4 menu-hover">
            <nav>
                <ul>
                <li><a href="{{route('index')}}">home<i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <ul class="single-dropdown">
                                @foreach ($categories as $category)
                                <li><a href="{{route('user.category',$category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                        </ul>
                    </li>
                    <li><a href="#">About Us </a>
                    </li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url( {{ asset('img/frontend/slider/laptop_apple_white_black_open_reflection_33645_1920x1080.jpg') }})">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                <a class="electro-slider-btn btn-hover animated" href="{{url('user/product/1')}}">buy now</a>
                </div>
            </div>
        </div>
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url({{ asset('img/frontend/slider/laptop_keyboard_buttons_monitor_92313_1920x1080.jpg') }})">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Laptop game to <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="{{url('/user/product/28')}}">buy now</a>
                </div>
            </div>
        </div>
    </div>
</div>

