@extends('auth.layouts')
@section('title', 'Register Page')

@section('content')
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
              <input type="password" class="form-control" placeholder="Password" name="password"  autocomplete="new-password" value="{{old('password')}}">
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
              <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation"  autocomplete="new-password" value="{{old('password_confirmation')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Phone" name="phone"  >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @if ($errors->has('phone'))
              <p class="help-block" style="color:red">
                      {{ $errors->first('phone') }}
              </p>
              @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Country" name="country" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Company" name="company" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Address" name="address" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>
            @if ($errors->has('address'))
            <p class="help-block" style="color:red">
                    {{ $errors->first('address') }}
            </p>
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="City" name="city" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="State" name="state" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Zip" name="zip" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            </div>

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
@endsection

