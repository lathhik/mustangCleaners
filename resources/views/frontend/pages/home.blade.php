@extends('frontend.master')
@section('content')
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider1-active owl-carousel">
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(https://images.pexels.com/photos/271711/pexels-photo-271711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Laundry and Dry  </span>
                        <h1>Cleaning Services</h1>
                        @if(!Auth::guard('customer')->user())
                            <div class="get-quote offset-md-2" style="margin-right: 4px">
                                <a href="" data-toggle="modal" data-target="#login">Order Now</a>
                            </div>
                        @else
                            <a href="{{route('customer-order')}}">Order Now</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(https://images.pexels.com/photos/887751/pexels-photo-887751.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Available In Both </span>
                        <h1>Android & IOS</h1>
                        @if(!Auth::guard('customer')->user())
                            <div class="get-quote  offset-md-2" style="margin-right: 4px">
                                <a href="" data-toggle="modal" data-target="#login">Download Now</a>
                            </div>
                        @else
                            <a href="{{route('customer-order')}}">Download Now</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(https://images.pexels.com/photos/164558/pexels-photo-164558.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Pickup & Drop</span>
                        <h1>From Home</h1>
                        @if(!Auth::guard('customer')->user())
                            <div class="get-quote  offset-md-2" style="margin-right: 4px">
                                <a href="" data-toggle="modal" data-target="#login">Order Now</a>
                            </div>
                        @else
                            <a href="{{route('customer-order')}}">Order Now</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- featured-services-area-start -->
    <div class="featured-services-area pt-60 pb-30 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-70">
                <span>What we offer </span>
                <h3>How It Works</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row ">
                <div class="box-step animation animated fadeIn no-animate" data-animation="fadeIn"
                     data-animation-delay="0s" style="animation-delay: 0s;">
                    <a class="item col-xs-12 col-sm-3 col-md-3 ">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_01.jpg" class="img-responsive1 "
                                 alt="">
                        </div>
                        <h6 class="description">Step 1</h6>
                        <h4 class="title" style="font-size: 22px;line-height: 28px; margin: 0; padding: 0;">
                            <span>Bag up</span> all your dirty clothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate"
                       data-animation="fadeIn" data-animation-delay="0.25s" style="animation-delay: 0.25s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_02.jpg"
                                 class="img-responsive1 img-xs--lg" alt="">
                        </div>
                        <h6 class="description">Step 2</h6>
                        <h4 class="title">We <span>pick up</span> yourclothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate"
                       data-animation="fadeIn" data-animation-delay="0.50s" style="animation-delay: 0.5s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_03.jpg"
                                 class="img-responsive1 img-xs--sm" alt="">
                        </div>
                        <h6 class="description">Step 3</h6>
                        <h4 class="title">We <span>clean</span> yourclothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate"
                       data-animation="fadeIn" data-animation-delay="0.75s" style="animation-delay: 0.75s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_04.jpg" class="img-responsive1 "
                                 alt="">
                        </div>
                        <h6 class="description">Step 4</h6>
                        <h4 class="title">We <span>deliver</span> clean, folded clothes</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- featured-services-area-end -->

    <!-- testimonial-area-start -->
    <div class="testimonial-2-area pt-120">
        <div class="container">
            <div class="section-title text-center">
                <span>Testimonials</span>
                <h3>What Clients Say</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row">
                <div class="col-offset">
                    <div class="testimonial-2-active owl-carousel">
                        <div class="testimonial-wrapper-2 text-center mt-70 mb-30">
                            <div class="testimonial-2-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable. If you</p>
                            </div>
                            <div class="testimonial-2-information">
                                <div class="testimonial-2-img">
                                    <img src="assets/img/testimonial/2.png" alt="">
                                </div>
                                <div class="testimonial-2-name">
                                    <h3>Nathan Lopez</h3>
                                    <span>Creative Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-wrapper-2 text-center mt-70">
                            <div class="testimonial-2-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable. If you</p>
                            </div>
                            <div class="testimonial-2-information">
                                <div class="testimonial-2-img">
                                    <img src="assets/img/testimonial/1.png" alt="">
                                </div>
                                <div class="testimonial-2-name">
                                    <h3>Mark Murray</h3>
                                    <span>Creative Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-wrapper-2 text-center mt-70">
                            <div class="testimonial-2-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable. If you</p>
                            </div>
                            <div class="testimonial-2-information">
                                <div class="testimonial-2-img">
                                    <img src="assets/img/testimonial/7.png" alt="">
                                </div>
                                <div class="testimonial-2-name">
                                    <h3>Nathan Lopez</h3>
                                    <span>Creative Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <!-- Modal -->
    <div class="modal fade  " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title text-center" id="exampleModalLongTitle"><b>Login</b></h2>

                </div>
                <div class="modal-body">
                    @include('messages.succFail')
                    <form action="" method="">
                        @csrf

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="login_email" class="form-control"
                                       placeholder="example@gmail.com">
                                @if($errors->has('login_email'))
                                    <p class="text-danger">{{$errors->first('login_email')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Password</label>
                                <input type="password" id="pass" name="login_password" class="form-control"
                                       placeholder="**********">
                                @if($errors->has('login_password'))
                                    <p class="text-danger">{{$errors->first('login_password')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="text-center form-group">
                            <input type="checkbox" class="" value="1" name="remember_me">
                            Remember Me
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-primary " id="login-submit">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="mb-0">Don't Have an Account</p>
                        <a class="text-center" href="" id="registerButton" data-toggle="modal" data-target="#register">Register</a>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                    <h2 class="modal-title text-center" id="exampleModalLongTitle"><b>Register</b></h2>

                </div>
                <div class="modal-body">
                    <form action="" method="post" class="mt-4 form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">First Name</label>
                                <input type="text" id="email" class="form-control" name="first_name"
                                       placeholder="First Name"
                                       value="{{old('first_name')}}">
                                @if($errors->has('first_name'))
                                    <p class="text-danger">{{$errors->first('first_name')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Last Name</label>
                                <input type="text" id="pass" class="form-control" name="last_name"
                                       placeholder="Last Name" value="{{old('last_name')}}">
                                @if($errors->has('last_name'))
                                    <p class="text-danger">{{$errors->first('last_name')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Address Line 1</label>
                                <input type="text" id="email" class="form-control" name="address_line_1"
                                       placeholder="456 Main Street SE" value="{{old('address_line_1')}}">
                                @if($errors->has('address_line_1'))
                                    <p class="text-danger">{{$errors->first('address_line_1')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Address Line 2</label>
                                <input type="text" id="pass" class="form-control" name="address_line_2"
                                       placeholder="457 Main Street SE" value="{{old('address_line_2')}}">
                                @if($errors->has('address_line_2'))
                                    <p class="text-danger">{{$errors->first('address_line_2')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">City</label>
                                <input type="text" id="email" class="form-control" placeholder="New York" name="city"
                                       value="{{old('city')}}">
                                @if($errors->has('city'))
                                    <p class="text-danger">{{$errors->first('city')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">State</label>
                                <input type="text" id="pass" class="form-control" placeholder="Marry Land" name="state"
                                       value="{{old('state')}}">
                                @if($errors->has('state'))
                                    <p class="text-danger">{{$errors->first('state')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Phone</label>
                                <input type="number" id="email" class="form-control" placeholder="Phone No" name="phone"
                                       value="{{old('phone')}}">
                                @if($errors->has('phone'))
                                    <p class="text-danger">{{$errors->first('phone')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Phone(Optional)</label>
                                <input type="number" id="pass" class="form-control" placeholder="Phone No"
                                       name="phone_optional" value="{{old('phone_optional')}}">
                                @if($errors->has('phone_optional'))
                                    <p class="text-danger">{{$errors->first('phone_optional')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="register_email" class="form-control"
                                       placeholder="example@gmail.com" value="{{old('register_email')}}">
                                @if($errors->has('register_email'))
                                    <p class="text-danger">{{$errors->first('register_email')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Zip</label>
                                <input type="text" id="pass" name="zip" class="form-control" placeholder="99501"
                                       value="{{old('zip')}}">
                                @if($errors->has('zip'))
                                    <p class="text-danger">{{$errors->first('zip')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Password</label>
                                <input type="password" id="email" name="password" class="form-control"
                                       placeholder="**********">
                                @if($errors->has('password'))
                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="pass">Verify Password</label>
                                <input type="password" id="pass" name="password_confirmation" class="form-control"
                                       placeholder="**********">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection()


@section('script')
    <script>
        $(document).ready(function () {
            $('#login-submit').on('click', function () {
                var email = $('#email').val();
                var password = $('#pass').val();
                console.log(email, password);
            });
        });
    </script>

    <script type="text/javascript">
        $('#registerButton').on('click', function () {
            $('#login').hide();
        });
    </script>

    @if (count($errors) > 0)
        <script type="text/javascript">
            @if($errors->has(['login_email','login_password']))
            $(document).ready(function () {
                $('#login').modal('show');
            });
            @else
            $(document).ready(function () {
                $('#register').modal('show');
            });
            @endif
        </script>
    @endif

    @if(session()->has('fail'))
        <script>
            $(document).ready(function () {
                $('#login').modal('show');
            });
        </script>
    @endif

@stop
