
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V11</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('custom/frontend/login-register/login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('custom/frontend/login-register/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            @include('messages.succFail')
            <form class="login100-form validate-form" method="post" action="{{route('customer-login')}}">
				@csrf
                <span class="login100-form-title p-b-55">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember_me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>

                <div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
                </div>

                <a href="#" class="btn-face m-b-10">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-10">
                    <img src="{{asset('custom/frontend/login-register/login/images/icons/icon-google.png')}}" alt="GOOGLE">
                    Google
                </a>

                <div class="text-center w-full p-t-115">
						<span class="txt1">
							Not a member?
						</span>

                    <a class="txt1 bo1 hov1" href="{{route('customer-register')}}">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{asset('custom/frontend/login-register/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('custom/frontend/login-register/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('custom/frontend/login-register/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('custom/frontend/login-register/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('custom/frontend/login-register/login/js/main.js')}}"></script>

</body>
</html>