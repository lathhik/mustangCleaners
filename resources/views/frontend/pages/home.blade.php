@extends('frontend.master')
@section('content')
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider1-active owl-carousel">
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(assets/img/slider/slider2.jpg)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Laundry and Dry  </span>
                        <h1>Cleaning Services</h1>
                        @if(!Auth::guard('customer')->user())
                            <div class="get-quote animated offset-md-2" style="margin-right: 4px">
                                <a href="" data-toggle="modal" data-target="#login">Order Now</a>
                            </div>
                        @else
                            <a href="{{route('customer-order')}}">Order Now</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(assets/img/slider/slider1.jpg)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Laundry and Dry  </span>
                        <h1>Cleaning Services</h1>
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
            <div class="slider-wrapper bg-opacity pt-280 pb-300 text-center"
                 style="background-image:url(assets/img/slider/slider3.jpg)">
                <div class="container">
                    <div class="slider-content slider-text slider-text-animation">
                        <span>Laundry and Dry  </span>
                        <h1>Cleaning Services</h1>
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
    <!-- service-area-start -->
    <div class="service-area pt-120 pb-90">
        <div class="container">
            <div class="section-title text-center mb-70">
                <span>What we offer </span>
                <h3>Featured Services</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/service4.jpg" alt=""/>
                        </div>
                        <div class="service-content text-center">
                            <div class="service-icon-img">
                                <img src="assets/img/service/1.png" alt=""/>
                            </div>
                            <div class="service-text">
                                <h4>Floor Cleaning</h4>
                                <p>Production demo phase.</p>
                                <a href="single-service.html">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/service5.jpg" alt=""/>
                        </div>
                        <div class="service-content text-center">
                            <div class="service-icon-img">
                                <img src="assets/img/service/2.png" alt=""/>
                            </div>
                            <div class="service-text">
                                <h4>Trash treatment</h4>
                                <p>Production demo phase.</p>
                                <a href="single-service.html">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/service6.jpg" alt=""/>
                        </div>
                        <div class="service-content text-center">
                            <div class="service-icon-img">
                                <img src="assets/img/service/3.png" alt=""/>
                            </div>
                            <div class="service-text">
                                <h4>Extra Shiny</h4>
                                <p>Production demo phase.</p>
                                <a href="single-service.html">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/service7.jpg" alt=""/>
                        </div>
                        <div class="service-content text-center">
                            <div class="service-icon-img">
                                <img src="assets/img/service/4.png" alt=""/>
                            </div>
                            <div class="service-text">
                                <h4>Cloth Ironing </h4>
                                <p>Production demo phase.</p>
                                <a href="single-service.html">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area-end -->
    <!-- featured-services-area-start -->
    <div class="featured-services-area pt-60 pb-30 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-70">
                <span>What we offer </span>
                <h3>How It Works</h3>
                <p>Production demo phase.</p>
            </div>
            {{-- <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="assets/img/service/service8.jpg" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">Choose Any Time For Delivery</a></h3>
                            <p>Production demo phase.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="assets/img/service/service9.jpg" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">We Can Wash and Dry Dirty Laundry</a></h3>
                            <p>Production demo phase.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="assets/img/service/service10.jpg" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">Relax and Enjoy Clean Clothes.</a></h3>
                            <p>Production demo phase.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row ">
                <div class="box-step animation animated fadeIn no-animate" data-animation="fadeIn" data-animation-delay="0s" style="animation-delay: 0s;">								
                    <a class="item col-xs-12 col-sm-3 col-md-3 ">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_01.png" class="img-responsive1 " alt="">
                        </div>
                        <h6 class="description">Step 1</h6>
                        <h4 class="title" style="font-size: 22px;line-height: 28px; margin: 0; padding: 0;"><span>Bag up</span> all your dirty clothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate" data-animation="fadeIn" data-animation-delay="0.25s" style="animation-delay: 0.25s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_02.png" class="img-responsive1 img-xs--lg" alt="">
                        </div>
                        <h6 class="description">Step 2</h6>
                        <h4 class="title">We <span>pick up</span> yourclothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate" data-animation="fadeIn" data-animation-delay="0.50s" style="animation-delay: 0.5s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_03.png" class="img-responsive1 img-xs--sm" alt="">
                        </div>
                        <h6 class="description">Step 3</h6>
                        <h4 class="title">We <span>clean</span> yourclothes</h4>
                    </a>
                    <a class="item animation col-xs-12 col-sm-3 col-md-3 animated fadeIn no-animate" data-animation="fadeIn" data-animation-delay="0.75s" style="animation-delay: 0.75s;">
                        <div class="icon">
                            <img src="custom\frontend\assets\img\how-it-works\img_icon_04.png" class="img-responsive1 " alt="">
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
    <!-- Cleaning-area-start -->
    <div class="cleaning-area" style="background-image:url(assets/img/bg/11.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-6 col-md-6">
                    <div class="Cleaning-wrapper">
                        <div class="cleaning-text">
                            <h2>Cleaning With a <span>Conscience</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words whichdon't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, yoneed
                                to be sure there isn't anything embarrassing hidden in the middle of text. All thLorem
                                Ipsum generators on the Internet tend to repeat predefined chunks as necessa making this
                                the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                combined with a handful of model sentence </p>
                            <ul>
                                <li>01. Combined with a handful of model sentence use a passage of.</li>
                                <li>02. All thLorem Ipsum generators on the Internet tend to repeat.</li>
                                <li>03. It uses a dictionary of over 200 Latin words, combined with a handful of</li>
                                <li>04. The standard chunk of Lorem Ipsum used since the 1500s is</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cleaning-area-end -->
    <!-- counter-area-start -->
    <div class="counter-area pt-120 pb-90 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrapper mb-30 text-center">
                        <div class="counter-img" style="background-image:url(assets/img/counter/counter1.png)">
                            <div class="counter-content text-center">
                                <h2 class="counter">340</h2>
                                <span>Project Done</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrapper mb-30 text-center">
                        <div class="counter-img" style="background-image:url(assets/img/counter/counter2.png)">
                            <div class="counter-content text-center">
                                <h2 class="counter">55</h2>
                                <span>Employees</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrapper mb-30 text-center">
                        <div class="counter-img" style="background-image:url(assets/img/counter/counter3.png)">
                            <div class="counter-content text-center">
                                <h2 class="counter">120</h2>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrapper mb-30 text-center">
                        <div class="counter-img" style="background-image:url(assets/img/counter/counter4.png)">
                            <div class="counter-content text-center">
                                <h2 class="counter">100</h2>
                                <span>Quality </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->
    <!-- pricing-area-start -->
    <div class="pricing-area pt-120 pb-120">
        <div class="container">
            <div class="section-title text-center mb-110">
                <span>What we offer </span>
                <h3>Pricing Plans</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row m-0 pricing-inner">
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-wrapper text-center mb-30">
                        <div class="pricing-icon">
                            <img src="assets/img/pricing/1.png" alt=""/>
                        </div>
                        <div class="pricing-head">
                            <h3>Basic Clean</h3>
                        </div>
                        <div class="price">
                            <span>$</span>29
                        </div>
                        <ul class="pricing-menu">
                            <li>Carpet Cleaning</li>
                            <li>Upholstery Cleaning</li>
                            <li>House Cleaning</li>
                            <li>Apartment Cleaning</li>
                            <li>Building Cleaning</li>
                        </ul>
                        <div class="pricing-btn">
                            <a href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-wrapper text-center active white-bg mb-30">
                        <div class="pricing-icon">
                            <img src="assets/img/pricing/2.png" alt=""/>
                        </div>
                        <div class="pricing-head">
                            <h3>Standart Clean</h3>
                        </div>
                        <div class="price">
                            <span>$</span>39
                        </div>
                        <ul class="pricing-menu">
                            <li>Carpet Cleaning</li>
                            <li>Upholstery Cleaning</li>
                            <li>House Cleaning</li>
                            <li>Apartment Cleaning</li>
                            <li>Building Cleaning</li>
                        </ul>
                        <div class="pricing-btn active">
                            <a href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-wrapper text-center mb-30">
                        <div class="pricing-icon">
                            <img src="assets/img/pricing/3.png" alt=""/>
                        </div>
                        <div class="pricing-head">
                            <h3>Basic Clean</h3>
                        </div>
                        <div class="price">
                            <span>$</span>29
                        </div>
                        <ul class="pricing-menu">
                            <li>Carpet Cleaning</li>
                            <li>Upholstery Cleaning</li>
                            <li>House Cleaning</li>
                            <li>Apartment Cleaning</li>
                            <li>Building Cleaning</li>
                        </ul>
                        <div class="pricing-btn">
                            <a href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area-end -->
    <!-- service-booking-area-start -->
    <div class="booking-area ptb-120 bg-opacity-2" style="background-image:url(assets/img/bg/bg2.jpg)">
        <div class="container">
            <div class="booking-title text-center mb-50">
                <span>What we offer </span>
                <h3>Service Booking</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <form action="http://preview.hasthemes.com/purified/assets/call-back.php" id="booking-form">
                        <input name="name" placeholder="name" type="text">
                        <input name="email" placeholder="email" type="email">
                        <input name="phone" placeholder="phone" type="text">
                        <button type="submit">Request a Callback</button>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- service-booking-area-end -->
    <!-- testimonial-area-start -->
    <div class="testimonial-2-area ptb-120">
        <div class="container">
            <div class="section-title text-center">
                <span>Testimonials</span>
                <h3>What Clients Say</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row">
                <div class="col-offset">
                    <div class="testimonial-2-active owl-carousel">
                        <div class="testimonial-wrapper-2 text-center mt-70">
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
    <!-- latest-news-area-start -->
    <div class="latest-news-area gray-bg pt-120 pb-90">
        <div class="container">
            <div class="section-title text-center mb-70">
                <span>Company News</span>
                <h3>Latest News</h3>
                <p>Production demo phase.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="latest-news-wrapper mb-30">
                        <div class="latest-news-img">
                            <a href="blog-details.html"><img src="assets/img/news/1.jpg" alt=""/></a>
                        </div>
                        <div class="news-content">
                            <h3><a href="blog-details.html">The standard Lorem Ipsum passag GIve you</a></h3>
                            <p>Production demo phase.</p>
                            <div class="news-meta">
                                <span class="date"><i class="zmdi zmdi-time"></i>June 7, 2017</span>
                                <span class="comment"><i class="zmdi zmdi-comment-outline"></i>2 Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="latest-news-wrapper mb-30">
                        <div class="latest-news-img">
                            <a href="blog-details.html"><img src="assets/img/news/2.jpg" alt=""/></a>
                        </div>
                        <div class="news-content">
                            <h3><a href="blog-details.html">Production demo phase.</a></h3>
                            <p>Production demo phase.</p>
                            <div class="news-meta">
                                <span class="date"><i class="zmdi zmdi-time"></i>June 7, 2017</span>
                                <span class="comment"><i class="zmdi zmdi-comment-outline"></i>2 Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="latest-news-wrapper mb-30">
                        <div class="latest-news-img">
                            <a href="blog-details.html"><img src="assets/img/news/3.jpg" alt=""/></a>
                        </div>
                        <div class="news-content">
                            <h3><a href="blog-details.html">The standard Lorem Ipsum passag GIve you</a></h3>
                            <p>Production demo phase.</p>
                            <div class="news-meta">
                                <span class="date"><i class="zmdi zmdi-time"></i>June 7, 2017</span>
                                <span class="comment"><i class="zmdi zmdi-comment-outline"></i>2 Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest-news-area-end -->

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
                    <form action="{{route('customer-login')}}" method="post">
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
                            <button type="submit" class="btn btn-primary modal-submit" id="login-submit">Login</button>
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
                    <form action="{{route('customer-register')}}" method="post" class="mt-4 form-horizontal">
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
                            <button type="submit" class="btn btn-primary modal-submit">Register</button>
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
