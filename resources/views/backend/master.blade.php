<!doctype html>
<html lang="en">
<head>
    @include('backend.partials.head')
</head>
<body>
<div class="app-container app-theme-gray">
    <div class="app-main">
        <div class="app-sidebar-wrapper">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Mustang Cleaners"
                       class="logo-src"></a>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
                <div class="scrollbar-sidebar scrollbar-container">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li class="mm-active">
                                <a href="{{route('dashboard')}}">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboards
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Orders Section</li>
                            <li>
                                <a href="{{route('view-orders')}}">
                                    <i class="fas fa-users"></i>
                                    Customer Orders
                                </a>
                            </li>
                            @if(Auth::guard('admin')->user()->privilege=='SA')
                                <li class="app-sidebar__heading">Manage Admin</li>
                                <li>
                                    <a href="{{route('view-admin')}}">
                                        <i class="fas fa-user-shield"></i>
                                        Admin
                                    </a>
                                </li>
                            @endif
                            <li class="app-sidebar__heading">Services Section</li>
                            <li>
                                <a href="{{route('view-service')}}">
                                    <i class="fas fa-book"></i>
                                    Our Services
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view-items')}}">
                                    <i class="fas fa-book"></i>
                                    Our Items
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view-order-status')}}">
                                    <i class="fas fa-question-circle"></i>
                                    Order Status
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            @include('backend.partials.header')
            @yield('content')
        </div>
    </div>
</div>
@include('backend.partials.foot')
</body>
</html>





