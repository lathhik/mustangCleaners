@extends('frontend.master')
@section('content')
    <!-- breadcrumb-banner-area -->
    <div class="breadcrumb-banner-area bg-opacity-3 ptb-150"
         style="background-image:url({{asset('custom/backend/images/front_image/'.$contact_image->images)}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-center">
                        <h1>contact</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{route('index')}}">home</a></li>
                                <li><span>contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-banner-area-end -->
    <!-- map-area-start -->
    <div class="map pt-80 pb-100">
        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6996667.580632219!2d-104.57247022934557!3d31.100236567634354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2snp!4v1577437196231!5m2!1sen!2snp" width="1100" height="450" frameborder="0" style="border:0; margin-left:45px;" allowfullscreen="">

                </iframe>

            </div>
        </div>
    </div>
    <!-- map-area-end -->
    <!-- contact-area-start -->
    <div class="contact-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact-1">
                    <div class="contact-left-wrapper">
                        <div class="contact-text">
                            <h4>Contact Info</h4>
                            <p>It is a long established fact that readewill be distracted by the readable content of a
                                page when looking at ilayout.</p>
                            <span>Address:  House 09,Road 3,Dhaka</span>
                            <span>Email:  purified@email.com</span>
                            <span>Phone:  +99 854 785 65</span>
                        </div>
                        <div class="contact-icon">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    @include('messages.succFail')
                    <div class="contact-right-wrapper mb-30">
                        <h4>Send Your Massage</h4>
                        <div class="row">
                            <form action="{{route('message')}}" method="post" id="contact-form">
                                @csrf
                                <div class="col-sm-6">
                                    <input name="full_name" type="text" placeholder="Full Name">
                                    @if($errors->has('full_name'))
                                        <p class="text-danger">{{$errors->first('full_name')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input name="email" type="email" placeholder="your email">
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input name="subject" type="text" placeholder="subject">
                                    @if($errors->has('subject'))
                                        <p class="text-danger">{{$errors->first('subject')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input name="phone" type="text" placeholder="phone number">
                                    @if($errors->has('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="message"
                                              id="message"></textarea>
                                    @if($errors->has('message'))
                                        <p class="text-danger">{{$errors->first('message')}}</p>
                                    @endif
                                </div>
                                <button type="submit">submit</button>
                                <p class="form-message"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->
@endsection
@section('script')

@endsection
