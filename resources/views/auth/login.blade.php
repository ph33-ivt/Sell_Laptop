@extends('auth.layouts')
@section('title', 'Login page')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="{{route('login')}}"><b>Login</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      {{-- <p class="login-box-msg">Login</p> --}}
    <form action="{{ route('login') }}" method="POST">
        @csrf
            @if(session()->has('login_error'))
                <div class="alert alert-danger">
                {{ session()->get('login_error') }}
                </div>
            @endif
        <div class="input-group mb-3">
          <input type="text" value="{{ old('identity') }}" name="identity" class="form-control" placeholder="Email or Username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if ($errors->has('identity'))
        <p class="help-block" style="color:red">
                {{ $errors->first('identity') }}
        </p>
        @endif
        <div class="input-group mb-3">
          <input type="password" name="password" value="{{ old('password') }}"  class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if ($errors->has('password'))
        <p class="help-block" style="color:red">
                {{ $errors->first('password') }}
        </p>
        @endif
        <div class="row">
          <!-- /.col -->
          <div class="col-12 text-center">
             <button type="submit" class="btn btn-primary btn-block btn-flat ">Login</button>
          </div>
          <div class="col-6 text-center">
              <a href="{{route('register')}}" class="text-center">Create a new account</a>
           </div>
           @if (Route::has('password.request'))
           <a class="btn btn-link" href="{{ route('password.request') }}">
               {{ __('Forgot Your Password?') }}
           </a>
             @endif
          <!-- /.col -->

        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection


