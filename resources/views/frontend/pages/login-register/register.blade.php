<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link
        href="{{asset('custom/frontend/login-register/register/vendor/mdi-font/css/material-design-iconic-font.min.css')}}"
        rel="stylesheet" media="all">
    <link href="{{asset('custom/frontend/login-register/register/vendor/font-awesome-4.7/css/font-awesome.min.css')}}"
          rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('custom/frontend/login-register/register/vendor/select2/select2.min.css" rel="stylesheet')}}"
          media="all">
    <link href="{{asset('custom/frontend/login-register/register/vendor/datepicker/daterangepicker.css')}}"
          rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('custom/frontend/login-register/register/css/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('custom/frontend/custom.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Customer Registration Form</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('customer-register')}}">
                    @csrf
                    <div class="form-row m-b-55">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="first_name"
                                               placeholder="First Name">
                                        @if($errors->has('first_name'))
                                            <p style="color: red">{{$errors->first('first_name')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="last_name"
                                               placeholder="Last Name">
                                        @if($errors->has('last_name'))
                                            <p style="color: red">{{$errors->first('last_name')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email">
                                @if($errors->has('email'))
                                    <p style="color: red">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Phone</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="phone">
                                @if($errors->has('phone'))
                                    <p style="color: red">{{$errors->first('phone')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password">
                                @if($errors->has('password'))
                                    <p style="color: red">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Confirm Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password_confirmation">
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn--radius-2 btn--red pull-right" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset('custom/frontend/login-register/register/vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('custom/frontend/login-register/register/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('custom/frontend/login-register/register/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('custom/frontend/login-register/register/vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('custom/frontend/login-register/register/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
