@extends('frontend.master')
@section('content')
    <div class="breadcrumb-banner-area bg-opacity-3 ptb-150"
         style="background-image:url({{asset('custom/backend/images/front_image/'.$about_image->images)}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-center">
                        <h1>about us</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{route('index')}}">home</a></li>
                                <li><span>about</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img mb-30">
                        <img src="{{asset('custom/frontend/assets/img/about/about.png')}}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-wrapper mb-30">
                        <div class="about-title">
                            <h4>The Best Full Service</h4>
                            <h1>Laundry & Dry Cleaning <span>Company</span></h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                hsuffered alteration in some form, by injected humour, or randomised words whichdon't
                                look slightly believable. If you are going to use a passage Lorem Ipsum, yoneed to be
                                sure there aembarrassing hidden in the middle of text. All thLorem Ipsum generators on
                                Internet tend to repeat predefined chunks as necessa making this the first true gerator
                                on tInternet. It uses a dictionary.</p>
                        </div>
                        <div class="single-progress">
                            <div class="our-skill">
                                <h6 class="progress-title">Quality<span class="pull-right"><span>55</span>%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="55"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 55%;"
                                         data-wow-duration="1s" data-wow-delay=".5s">
                                    </div>
                                </div>
                                <h6 class="progress-title">Cleaner<span class="pull-right"><span>80</span>%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%;"
                                         data-wow-duration="2s" data-wow-delay=".5s">
                                    </div>
                                </div>
                                <h6 class="progress-title">Cleaner<span class="pull-right"><span>70</span>%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%;"
                                         data-wow-duration="2s" data-wow-delay=".5s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- featured-services-area-start -->
    <div class="featured-services-area pt-120 pb-90 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-70">
                <span>What we offer </span>
                <h3>Featured Services</h3>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                    born and I will give you a complete account of the.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="{{asset('custom/frontend/assets/img/service/service8.jpg')}}" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">Choose Any Time For Delivery</a></h3>
                            <p>But I must explain to you how all tmistaken idea of denouncing pleasure and praisi pain
                                was born and I will give you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="{{asset('custom/frontend/assets/img/service/service9.jpg')}}" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">We Can Wash and Dry Dirty Laundry</a></h3>
                            <p>But I must explain to you how all tmistaken idea of denouncing pleasure and praisi pain
                                was born and I will give you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-services-wrapper mb-30 white-bg">
                        <div class="featured-services-img">
                            <img src="{{asset('custom/frontend/assets/img/service/service9.jpg')}}" alt=""/>
                            <div class="featured-services-icon">
                                <a href="single-service.html"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="featured-services-text featured-services-info">
                            <h3><a href="single-service.html">Relax and Enjoy Clean Clothes.</a></h3>
                            <p>But I must explain to you how all tmistaken idea of denouncing pleasure and praisi pain
                                was born and I will give you</p>
                        </div>
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
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-wrapper-2 text-center mt-70 mb-30">
                                <div class="testimonial-2-content">
                                    <p>{!! $testimonial->testimonials !!}</p>
                                </div>
                                <div class="testimonial-2-information">
                                    <div class="testimonial-2-img">
                                        <img src="{{asset('custom/backend/images/testimonial/'.$testimonial->image)}}"
                                             alt="" style="border-radius: 100px">
                                    </div>
                                    <div class="testimonial-2-name">
                                        <h3>{{$testimonial->full_name}}</h3>
                                        <span>{{$testimonial->occupation}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- testimonial-area-end -->

@endsection
@section('script')

@endsection
