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
    <title>Login - Kero HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Kero HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('custom/main.07a59de7b920cd76b874.css')}}" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="d-none d-lg-block col-lg-4">
                    <div class="slider-light">
                        <div class="slick-slider">
                            <div>
                                <div class="h-100 d-flex justify-content-center align-items-center bg-plum-plate"
                                     tabindex="-1">
                                    <div class="slide-img-bg"
                                         style="background-image: url('assets/images/originals/city.jpg');"></div>
                                    <div class="slider-content"><h3>Perfect Balance</h3>
                                        <p>KeroUI is like a dream. Some think it's too good to be true! Extensive
                                            collection of unified React Boostrap Components and Elements.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4 class="mb-0">
                            <span class="d-block">Welcome back,</span>
                            <span>Please sign in to your account.</span></h4>
                        <div class="divider row"></div>
                        <div>
                            @include('messages.succFail')
                            <form class="" method="post" action="{{route('admin-login')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input
                                                name="email" id="exampleEmail" placeholder="Email here..." type="email"
                                                class="form-control">
                                            @if($errors->has('email'))
                                                <p class="text-danger">*{{$errors->first('email')}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input
                                                name="password" id="examplePassword" placeholder="Password here..."
                                                type="password"
                                                class="form-control">

                                            @if($errors->has('email'))
                                                <p class="text-danger">*{{$errors->first('email')}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <input name="remember_me" id="exampleCheck"
                                           type="checkbox"
                                           class="form-check-input">
                                    <label
                                        for="exampleCheck" class="form-check-label">Keep me logged in
                                    </label>
                                </div>
                                <div class="divider row"></div>
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover
                                            Password</a>
                                        <button class="btn btn-primary btn-lg">Login to Dashboard</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:21:08 GMT -->
</html>
