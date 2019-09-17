@extends('auth.layouts')
@section('title', 'Send Password Reset Link')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="{{route('password.request')}}"><b>Reset Password</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
         @endif
         <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if(session()->has('login_error'))
                <div class="alert alert-danger">
                {{ session()->get('login_error') }}
                </div>
            @endif
            <div class="input-group mb-3">
                <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="Enter Email" id="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              @if ($errors->has('email'))
              <p class="help-block" style="color:red">
                      {{ $errors->first('email') }}
              </p>
              @endif
        <div class="row">
          <!-- /.col -->
          <div class="col-12 text-center">
             <button type="submit" class="btn btn-primary btn-block btn-flat ">Send Password Reset Link</button>
          </div>

          <!-- /.col -->

        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

@endsection




