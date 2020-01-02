<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:21:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mustang-Admin</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Mustang Cleaners">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('custom/backend/main.07a59de7b920cd76b874.css')}}" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="d-none d-lg-block col-lg-4">
                    <div class="slider-dark">
                        <div class="slider">
                            <div>
                                <div class="h-100 d-flex justify-content-center align-items-center bg-royal"
                                     tabindex="-1">
                                    <div class=""
                                         style="background-image: url('{{asset('custom/backend/assets/images/originals/citydark.jpg')}}');">
                                    </div>
                                    <div class="slider-content">
                                        <h3 style="color: white!important;"><b>Mustang Cleaners</b></h3>
                                        <p>We Are The Best</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo">
                            <img src="{{asset('custom/assets/images/logo.png')}}" style="height: 50px" alt=""
                                 class="logo-png">
                        </div>
                        <h4 class="mb-0">
                            <span class="d-block">To Recover Your Password,</span>
                            <span>Please enter your email.</span></h4>
                        <div class="divider row"></div>
                        <div>
                            @include('messages.succFail')
                            <form class="" method="post" action="{{route('admin-email')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input
                                                name="email" id="exampleEmail" placeholder="Email here..." type="email"
                                                class="form-control"></div>

                                        @if($errors->has('email'))
                                            <p class="text-danger">{{$errors->first('email')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="divider row"></div>
                                <button type="submit" class="btn btn-primary btn-lg float-right ml-2">Send Reset Link
                                </button>
                                <a href="{{route('admin-login')}}" class="btn btn-primary btn-lg float-right ">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('custom/backend/assets/scripts/main.07a59de7b920cd76b874.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:21:08 GMT -->
</html>
