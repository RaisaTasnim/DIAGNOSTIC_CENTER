@extends('website.layouts.default')

@section('link')
  
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/website/login/css/main.css') }}">
<!--===============================================================================================-->
@stop

@section('content')

   <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-33">
            Account Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
          </div>

          <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
          </div>

          <div class="container-login100-form-btn m-t-20">
            <button class="login100-form-btn">
              Sign in
            </button>
          </div>

          

          
        </form>
      </div>
    </div>
  </div>
    @stop
@section('script')
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('ui/website/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('ui/website/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('ui/website/login/js/main.js') }}"></script>
@stop