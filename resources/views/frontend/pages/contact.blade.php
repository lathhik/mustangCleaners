@extends('frontend.master')
@section('content')
    <!-- breadcrumb-banner-area -->
    <div class="breadcrumb-banner-area bg-opacity-3 ptb-150" style="background-image:url(assets/img/bg/bg3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-center">
                        <h1>contact</h1>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">home</a></li>
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
    <div class="map pt-130 pb-100">
        <div class="container">
            <div id="map"></div>
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
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
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
