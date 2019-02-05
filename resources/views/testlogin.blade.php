<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/login/css/main.css')}}">
	
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
			
						<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
								@csrf
		
					<span class="login100-form-title p-b-43">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input100" name="email" value="{{ old('email') }}" required autofocus>
						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif

						<span class="label-input100">Username</span>
					</div>
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
					
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input100" name="password" required>

						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						
						<button type="submit" class="login100-form-btn">
								{{ __('Login') }}
							</button>
					</div>
					
					<div class="text-center w-full p-t-23">
							<a class="btn btn-link" href="{{ url('/testforgot') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<script src="{{URL::asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	
	<script src="{{URL::asset('assets/js/core/jquery.introducing.min.js')}}"></script>
	<script type="text/javascript">
		$('input').introducing()
	</script>
<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{URL::asset('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::asset('assets/login/js/main.js')}}"></script>
	
</body>
</html>
