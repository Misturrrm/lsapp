{{-- @extends('layouts.app') 

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class= "list-group">
            @foreach($services as $service)
                <li class= "list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection 
	-->
--}} 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{URL::to('/')}}/public/storage/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/select2.min.css">
<!--==============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/storage/cover_images/nass_seal.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/popper.js"></script>
	<script src="{{URL::to('/')}}/public/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/moment.min.js"></script>
	<script src="{{URL::to('/')}}/public/js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{URL::to('/')}}/public/js/main2.js"></script>

</body>
</html>