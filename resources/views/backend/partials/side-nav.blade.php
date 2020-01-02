<div class="app-sidebar-wrapper">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <a href="{{route('dashboard')}}" data-toggle="tooltip" data-placement="bottom" title="Mustang Cleaners"
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
                    <li class="{{isActiveRoute('dashboard')}}">
                        <a href="{{route('dashboard')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboards
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Orders Section</li>
                    <li class="{{isActiveRoute('view-orders')}}">
                        <a href="{{route('view-orders')}}">
                            <i class="fas fa-users"></i>
                            Customer Orders
                        </a>
                    </li>
                    @if(Auth::guard('admin')->user()->privilege=='SA')
                        <li class="app-sidebar__heading">Manage Admin</li>
                        <li class="{{isActiveRoute('view-admin')}}">
                            <a href="{{route('view-admin')}}">
                                <i class="fas fa-user-shield"></i>
                                Admin
                            </a>
                        </li>
                    @endif
                    <li class="app-sidebar__heading">Services Section</li>
                    <li class="{{isActiveRoute('view-service')}}">
                        <a href="{{route('view-service')}}">
                            <i class="fas fa-globe"></i>
                            Our Services
                        </a>
                    </li>
                    <li class="{{isActiveRoute('view-items')}}">
                        <a href="{{route('view-items')}}">
                            <i class="fas fa-list"></i>
                            Our Items
                        </a>
                    </li>
                    @if(Auth::guard('admin')->user()->privilege == 'SA')
                        <li class="{{isActiveRoute('view-order-status')}}">
                            <a href="{{route('view-order-status')}}">
                                <i class="fas fa-question-circle"></i>
                                Order Status
                            </a>
                        </li>
                    @endif
                    @if(Auth::guard('admin')->user()->privilege == 'SA')
                        <li class="{{isActiveRoute('view-bags')}}">
                            <a href="{{route('view-bags')}}">
                                <i class="fas fa-shopping-bag"></i>
                                Bags
                            </a>
                        </li>
                    @endif
                    @if(Auth::guard('admin')->user()->privilege == 'SA')
                        <li class="app-sidebar__heading">Clients Section</li>
                        <li class="{{isActiveRoute('view-testimonial')}}">
                            <a href="{{route('view-testimonial')}}">
                                <i class="fa fa-user"></i>
                                Testimonials
                            </a>
                        </li>
                    @endif
                    @if(Auth::guard('admin')->user()->privilege=='SA')
                        <li class="app-sidebar__heading">Gallery</li>
                        <li class="{{isActiveRoute('view-image')}}">
                            <a href="{{route('view-image')}}">
                                <i class="fa fa-image"></i>
                                View/Add Images
                            </a>
                        </li>
                        <li class="{{isActiveRoute('view-heading')}}">
                            <a href="{{route('view-heading')}}">
                                <i class="fa fa-image"></i>
                                View/Add Headings
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
