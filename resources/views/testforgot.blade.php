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
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('password.email')}}" class="login100-form validate-form">
                            @csrf
    
                <span data-placeholder="Type Your Email Here .." class="login100-form-title p-b-43">
                    Account Password Reset
                </span>
               
                <div class="wrap-login100 rs1 validate-input" data-validate = "Username is required">
                    <input data-placeholder="Type Your Email Here .." id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} login100" name="email" value="{{ old('email') }}" required >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                  
                </div>

                <div class="container-login100-form-btn">
                    
            
                        <button type="submit" class="login100-form-btn">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        
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
