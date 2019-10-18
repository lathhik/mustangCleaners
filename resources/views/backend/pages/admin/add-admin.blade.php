@include('backend.partials.head')
<div class="app-container app-theme-gray">
    <div class="app-main">
        @include('backend.partials.side-nav')
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                @include('backend.partials.top-nav')
                {{--            <div class="app-inner-layout app-inner-layout-page">--}}
                {{--                @include('backend.partials.nav-bar')--}}
                {{--            </div>--}}
            </div>
            <div class="app-inner-layout app-inner-layout-page">
                <div class="app-inner-bar">
                    <div class="inner-bar-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link show-menu-btn">
                                    <i class="fa fa-align-left mr-2"></i>
                                    <span class="hide-text-md">Show page menu</span>
                                </a>
                                <a href="#" class="nav-link close-menu-btn">
                                    <i class="fa fa-align-right mr-2"></i>
                                    <span class="hide-text-md">Close page menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-bar-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                    <span>Audiences</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                    <span>Demographics</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   class="nav-link opacity-8">
                                    <span>More</span>
                                    <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"
                                     x-placement="bottom-end"
                                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(74px, 37px, 0px);">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <div class="p-3 text-right">
                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-bar-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link open-right-drawer">
                                    <span class="hide-text-md">Show right drawer</span>
                                    <i class="fa fa-align-right ml-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="app-inner-layout__wrapper">
                    <div class="app-inner-layout__sidebar">
                        <div class="app-layout__sidebar-inner dropdown-menu-rounded" style="position: relative;">
                            <div class="nav flex-column" style="">
                                <div class="nav-item-header text-primary nav-item">
                                    Dashboards Examples
                                </div>
                                <a class="dropdown-item active" href="analytics-dashboard.html">Analytics</a>
                                <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                <a class="dropdown-item" href="index-2.html">Helpdesk</a>
                                <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.partials.footer')
        </div>
    </div>

</div>
@include('backend.partials.foot')
