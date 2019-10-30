<!-- header-top-area-start -->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="{{route('index')}}"><img src="{{asset('custom/frontend/assets/img/logo/logo.png')}}" alt=""/></a>
                </div>
            </div>
            <div class="col-md-10 hidden-sm hidden-xs">
                <div class="header-wrapper">

                    @if(Auth::guard('customer')->user())
                        <div class="get-quote floatright ">
                            <a href="{{route('customer-logout')}}">Log Out</a>
                        </div>
                    @endif

                    @if(!Auth::guard('customer')->user())
                        <div class="get-quote floatright offset-md-2" style="margin-right: 4px">
                            <a href="{{route('customer-login-form')}}">Order Now</a>
                        </div>
                    @else
                        <div class="get-quote floatright offset-md-2" style="margin-right: 4px">
                            <a href="{{route('customer-order')}}">Order Now</a>
                        </div>
                    @endif
                    <div class="header-text floatright hidden-xs hidden-sm">
                        <div class="header-right">
                            <div class="header-right-icons">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="header-right-text">
                                <span class="text">Open Hours :</span>
                                <span class="phone">8.00 - 18.00 Mon-Sat</span>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-right-icons">
                                <span class="icon-phone "></span>
                            </div>
                            <div class="header-right-text">
                                <span class="text">Phone Number :</span>
                                <span class="phone">xxxxxxxxxx</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-top-area-end -->
