<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laptop Shop | Login Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/backend/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
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
          <!-- /.col -->

        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="{{asset('js/custom.js')}}"></script> --}}
</body>
</html>

