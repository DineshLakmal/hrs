<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/login_register.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="background">
<section class="height-100p valign-center">
     <div class="container">
        <div class="row">
                      <div class="col-sm-3 col-lg-4">
                      </div>
                      <div class=" col-sm-6 col-lg-4">
                               <div class="login-wrapper">
                                      <img src="{{ asset('images/logo.png') }} " class="logo-login">
                                      <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                              <div class="form-group">
                                                   <label for="email">Email:</label>
                                                   <input placeholder="Enter email"  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                              </div>
                                              <div class="form-group">
                                                   <label for="pwd">Password:</label>
                                                   <input placeholder="Enter password"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                   @if ($errors->has('password'))
                                                     <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                     </span>
                                                   @endif
                                              </div>
                                              <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                                    </label>
                                               </div>
                                               <div align="right">
                                                   <button type="submit" class="btn btn-default btn-login">Login</button>
                                               </div>
                                              
                                              <a class="" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                              <a href="{{ route('register') }}">Request for registration</a>
                                      </form>
                               </div>
                      </div>
                       <div class="col-sm-3 col-lg-4">
                      </div>
            </div>
      </div>
</section>


<footer class="container-fluid valign-center">
        <div class="container">
                <p class="f-right">Powered by Miracle <img src="{{ asset('images/miracle-logo.png') }}" class="footer-logo"> </p>
                <p class="f-left">&copy; Copyright 2017 Hotel Reservation System </p>
        </div> 
</footer>

</body>
</html>