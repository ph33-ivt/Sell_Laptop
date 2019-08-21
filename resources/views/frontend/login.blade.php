@extends('frontend.layouts.design')

@section('content')
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="POST" action="{{ route('user.login') }}">
                             @csrf
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="default-btn floatright">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
