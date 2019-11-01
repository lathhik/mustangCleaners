<!-- main-menu-area-start -->
<div class="main-menu-area header-style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-menu menu-style-1">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{route('index')}}">home</a>
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
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            @if(Auth::guard('customer')->user())
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="icon floatright">
                        <a href="#" data-toggle="tooltip" title="Notification">
                            <i class="fa ion-email"></i>
                        </a>
                        <a href="{{route('customer-dashboard')}}" data-toggle="tooltip" title="Dashboard"><i
                                class="fa fa-tachometer"></i></a>
                        <a href="#" data-toggle="tooltip" title="Your Orders"><i class="fa fa-history"></i></a>
                        <div class="dropdown" style="display: inline">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown">
                                <i class="fa fa-user-secret">&nbsp&nbsp
                                    <small>
                                        {{strtoupper(Auth::guard('customer')->user()->last_name)}}
                                    </small>
                                </i>
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="{{route('customer-logout')}}">Log Out</a>
                            </div>
                        </div>
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
