<!-- main-menu-area-start -->
<div class="main-menu-area header-style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-menu menu-style-1">
                    <nav>
                        <ul>
                            <li class="{{isActiveRouteFront('index')}}"><a href="{{route('index')}}">home</a>
                            </li>
                            <li class="{{isActiveRouteFront('about')}}"><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="">service</a>
                                <ul class="sub-menu">
                                    <li><a href="">single-service</a></li>
                                </ul>
                            </li>
                            <li><a href="">blog</a>
                            </li>
                            <li class="{{isActiveRouteFront('contact')}}"><a href="{{route('contact')}}">contact</a>
                            </li>
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
                        <a href="{{route('customer-dashboard')}}"
                           data-toggle="tooltip" title="Dashboard"><i
                                class="fa fa-tachometer"></i></a>
                        <a href="#" data-toggle="tooltip" title="Your Orders"><i class="fa fa-history"></i></a>
                        <div class="dropdown" style="display: inline">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown">
                                <i class="fa fa-user-secret">&nbsp&nbsp
                                    <small>
                                        {{ucfirst(Auth::guard('customer')->user()->last_name)}}
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
