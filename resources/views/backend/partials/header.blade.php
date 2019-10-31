<div class="app-container app-theme-gray">
    <div class="app-main">
        <div class="app-sidebar-wrapper">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template"
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
                                <a href="#">
                                    <i class="">
                                    </i>
                                    Dashboards
                                </a>
                                <ul class="mm-show">
                                    <li><a href="{{route('management')}}">Management</a></li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">Admin Panel</li>
                            <li>
                                <a href="#">
                                    <i class=""></i>
                                    Admin
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('add-admin')}}">
                                            <i class="metismenu-icon"></i>
                                            Add admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('view-admin')}}">
                                            <i class="metismenu-icon">
                                            </i>View Admin
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Service Section</li>

                            <li>
                                <a href="#">
                                    <i class=""></i>
                                    Our Services
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('add-service')}}">
                                            <i class=""></i>
                                            Add Service
                                            <i class=""></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('view-service')}}">
                                            <i class="">
                                            </i>View Services
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class=""></i>
                                    Order Status
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('add-order-status')}}">
                                            <i class="">
                                            </i>Add Order Status
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>View Order Status
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="header-mobile-wrapper">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template"
                           class="logo-src"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                        <div class="app-header__menu">
                            <span>
                                <button type="button"
                                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="app-header">
                    <div class="page-title-heading">
                     Mustang Cleaners
                    </div>
                    <div class="app-header-right">
                        <div class="search-wrapper">
                            <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                            <input type="text" placeholder="Search...">
                        </div>
                        <div class="header-btn-lg pr-0">
                            <div class="header-dots">
                                <div class="dropdown">
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown" class="p-0 btn btn-link">
                                        <i class="typcn typcn-bell"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header mb-0">
                                            <div class="dropdown-menu-header-inner bg-night-sky">
                                                <div class="menu-header-image opacity-5"
                                                     style="background-image: url('{{asset('custom/backend/')}}assets/images/dropdown-header/city2.jpg');"></div>
                                                <div class="menu-header-content text-light">
                                                    <h5 class="menu-header-title">Notifications</h5>
                                                    <h6 class="menu-header-subtitle">You have <b>21</b> unread messages
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="notifications-box">
                                                                <div
                                                                    class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                    <div
                                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                                </p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span
                                                                                        class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Something not
                                                                                    important
                                                                                    <div
                                                                                        class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/1.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/2.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/3.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/4.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/5.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/9.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/7.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                    src="{{asset('custom/backend/assets/images/avatars/8.jpg')}}"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon"><i>+</i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has
                                                                                    an info state</h4><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                                </p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span
                                                                                        class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has
                                                                                    a dark state</h4><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                               class="p-0 btn">
                                                <img width="42" class="rounded"
                                                     src="{{asset('custom/backend/assets/images/avatars/3.jpg')}}"
                                                     alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                 class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-info">
                                                        <div class="menu-header-image opacity-2"
                                                             style="background-image: url('{{asset('custom/backend/')}}assets/images/dropdown-header/city1.jpg');"></div>
                                                        <div class="menu-header-content text-left">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="{{asset('custom/backend/assets/images/avatars/3.jpg')}}"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Minnie Betts
                                                                        </div>
                                                                        <div class="widget-subheading opacity-8">Super Admin
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item">
                                                    </li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-wide btn btn-primary btn-sm">
                                                           Log Out
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
