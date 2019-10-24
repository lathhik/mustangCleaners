<!-- main-menu-area-start -->
<div class="main-menu-area header-style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-menu menu-style-1">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{route('index')}}">home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-box.html">Home Box</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="service.html">service</a>
                                <ul class="sub-menu">
                                    <li><a href="single-service.html">single-service</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="gallery.html">gallery</a></li>
                                    <li><a href="testimonial.html">testimonial</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-3-column.html">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-3-column.html">blog-3-column</a></li>
                                    <li><a href="blog-left-sidebar.html">blog-left-sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog-right-sidebar</a></li>
                                    <li><a href="blog-no-sidebar.html">blog-no-sidebar</a></li>
                                    <li><a href="blog-details.html">blog-details</a></li>
                                    <li><a href="blog-details-no-sideber.html">blog-details-no-sideber</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            @if(Auth::guard('customer')->user())
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="icon floatright">
                        <a href="#" data-toggle="tooltip"  title="Notification"><i
                                class="fa ion-email"></i></a>
                        <a href="#" data-toggle="tooltip" title="Profile"><i class="fa fa-user"></i></a>
                        <a href="#" data-toggle="tooltip" title="History"><i class="fa fa-history"></i></a>
                        <a href="#"><i class="fa fa-user-secret">&nbsp&nbsp
                                <small>{{strtoupper(substr(Auth::guard('customer')->user()->first_name,0,1))}}
                                    .{{strtoupper(substr(Auth::guard('customer')->user()->last_name,0,1))}}</small>
                            </i></a>

                    </div>
                </div>
            @else
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="icon floatright">
                        <a href="#" class="noti"><i class="fa fa-facebook"></i></a>
                        {{--                        <p class="text_noti" style="display: none"><small>Notifications</small></p>--}}
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>

                    </div>
                </div>
            @endif

            <div class="col-xs-12">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>

<!-- main-menu-area-end -->
