<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laptop Shop |Register Page</title>
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
      <a href="{{route('register')}}"><b>Register</b></a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}"  >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>  
            </div>
            @if ($errors->has('name'))
              <p class="help-block" style="color:red">
                      {{ $errors->first('name') }}
              </p>
              @endif
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="email" name="email" value="{{old('email')}}">
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
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password"  autocomplete="new-password">
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
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation"  autocomplete="new-password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @if ($errors->has('password_confirmation'))
            <p class="help-block" style="color:red">
                    {{ $errors->first('password_confirmation') }}
            </p>
            @endif
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        <a href="{{route('login')}}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery -->
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>

