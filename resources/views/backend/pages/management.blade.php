@extends('backend.partials.app')

@section('content')



                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="logo-src" data-original-title="KeroUI Admin Template"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
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
                            Management
                            <div class="page-title-subheading">
                                This is an example dashboard created using build-in elements and components.
                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="header-dots">
                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                            <i class="typcn typcn-th-large-outline"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                    <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                                    <div class="menu-header-content text-white">
                                                        <h5 class="menu-header-title">Grid Dashboard</h5>
                                                        <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-xl grid-menu-3col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                            Automation
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Reports
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Settings
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Content
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Activity
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Contacts
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                            <i class="typcn typcn-bell"></i>
                                            <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-night-sky">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                                    <div class="menu-header-content text-light">
                                                        <h5 class="menu-header-title">Notifications</h5>
                                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                        <span>Events</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                        <span>System</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container ps">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/1.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/2.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/3.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/4.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/5.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/9.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/7.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img src="assets/images/avatars/8.jpg" alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container ps">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container ps">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system errors!</div>
                                                            </div>
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <img width="42" class="rounded" src="assets/images/avatars/3.jpg" alt="">
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Minnie Betts
                                                                            </div>
                                                                            <div class="widget-subheading opacity-8">A short profile description
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                            <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-xs" style="height: 150px;">
                                                        <div class="scrollbar-container ps">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Activity
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Chat
                                                                        <div class="ml-auto badge badge-pill badge-info">8
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Recover Password
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item-header nav-item">My Account
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Settings
                                                                        <div class="ml-auto badge badge-success">New
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Messages
                                                                        <div class="ml-auto badge badge-warning">512
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Logs
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                    </ul>
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                    Message Inbox
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                    <b>Support Tickets</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item">
                                                        </li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-wide btn btn-primary btn-sm">
                                                                Open Messages
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
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
                            </div>                        <div class="inner-bar-center">
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
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                                            <span>More</span>
                                            <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
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
                            </div>                    </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column" style="">
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item active" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item" href="index-2.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-night-fade">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Orders</div>
                                                            <div class="widget-subheading">Last year expenses</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>1896</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-arielle-smile">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Clients</div>
                                                            <div class="widget-subheading">Total Clients Profit</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>$ 568</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-happy-green">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Followers</div>
                                                            <div class="widget-subheading">People Interested</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>46%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-premium-dark">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Products Sold</div>
                                                            <div class="widget-subheading">Revenue streams</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header-tab-animation card-header">
                                                        <div class="card-header-title">
                                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                            Sales Report
                                                        </div>
                                                        <ul class="nav">
                                                            <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-77" class="active nav-link">Last</a></li>
                                                            <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-88" class="nav-link second-tab-toggle">Current</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5">$
                                                                                            </small>
                                                                                            <span>368</span></div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                            Total Leads
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparkline-carousel-3" style="min-height: 120px;"><div id="apexchartsoo9dw6d" class="apexcharts-canvas apexchartsoo9dw6d light" style="width: 314px; height: 120px;"><svg id="SvgjsSvg1550" width="314" height="120" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1552" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1551"><clipPath id="gridRectMaskoo9dw6d"><rect id="SvgjsRect1557" width="317" height="123" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskoo9dw6d"><rect id="SvgjsRect1558" width="354" height="160" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1564" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1565" stop-opacity="0.65" stop-color="rgba(247,185,36,0.65)" offset="0"></stop><stop id="SvgjsStop1566" stop-opacity="0.5" stop-color="rgba(251,220,146,0.5)" offset="1"></stop><stop id="SvgjsStop1567" stop-opacity="0.5" stop-color="rgba(251,220,146,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1556" x1="0" y1="0" x2="0" y2="120" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="120" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1570" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1571" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1574" class="apexcharts-grid"><line id="SvgjsLine1576" x1="0" y1="120" x2="314" y2="120" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1575" x1="0" y1="1" x2="0" y2="120" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1560" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1561" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 120L 0 52.9886246122027C 4.778260869565218 52.9886246122027 8.873913043478261 71.6028955532575 13.652173913043478 71.6028955532575C 18.430434782608696 71.6028955532575 22.526086956521738 81.53050672182007 27.304347826086957 81.53050672182007C 32.082608695652176 81.53050672182007 36.17826086956522 64.15718717683558 40.95652173913044 64.15718717683558C 45.73478260869565 64.15718717683558 49.8304347826087 56.71147880041366 54.608695652173914 56.71147880041366C 59.38695652173913 56.71147880041366 63.482608695652175 44.30196483971045 68.26086956521739 44.30196483971045C 73.0391304347826 44.30196483971045 77.13478260869566 90.21716649431231 81.91304347826087 90.21716649431231C 86.69130434782609 90.21716649431231 90.78695652173913 76.56670113753879 95.56521739130434 76.56670113753879C 100.34347826086956 76.56670113753879 104.43913043478261 74.08479834539814 109.21739130434783 74.08479834539814C 113.99565217391304 74.08479834539814 118.0913043478261 39.338159255429176 122.86956521739131 39.338159255429176C 127.64782608695653 39.338159255429176 131.74347826086958 86.49431230610135 136.52173913043478 86.49431230610135C 141.3 86.49431230610135 145.39565217391305 43.061013443640135 150.17391304347828 43.061013443640135C 154.95217391304348 43.061013443640135 159.04782608695655 76.56670113753879 163.82608695652175 76.56670113753879C 168.60434782608695 76.56670113753879 172.70000000000002 52.9886246122027 177.47826086956522 52.9886246122027C 182.25652173913042 52.9886246122027 186.3521739130435 54.229576008273014 191.1304347826087 54.229576008273014C 195.90869565217392 54.229576008273014 200.00434782608696 61.67528438469494 204.7826086956522 61.67528438469494C 209.5608695652174 61.67528438469494 213.65652173913045 96.42192347466391 218.43478260869566 96.42192347466391C 223.21304347826086 96.42192347466391 227.30869565217392 66.63908996897622 232.08695652173913 66.63908996897622C 236.86521739130436 66.63908996897622 240.9608695652174 62.916235780765255 245.73913043478262 62.916235780765255C 250.51739130434785 62.916235780765255 254.6130434782609 86.49431230610135 259.3913043478261 86.49431230610135C 264.1695652173913 86.49431230610135 268.26521739130436 72.84384694932783 273.04347826086956 72.84384694932783C 277.82173913043476 72.84384694932783 281.91739130434786 4.591520165460196 286.69565217391306 4.591520165460196C 291.47391304347826 4.591520165460196 295.56956521739136 50.506721820062054 300.34782608695656 50.506721820062054C 305.12608695652176 50.506721820062054 309.2217391304348 69.12099276111687 314 69.12099276111687C 314 69.12099276111687 314 69.12099276111687 314 120M 314 69.12099276111687z" fill="url(#SvgjsLinearGradient1564)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskoo9dw6d)" pathTo="M 0 120L 0 52.9886246122027C 4.778260869565218 52.9886246122027 8.873913043478261 71.6028955532575 13.652173913043478 71.6028955532575C 18.430434782608696 71.6028955532575 22.526086956521738 81.53050672182007 27.304347826086957 81.53050672182007C 32.082608695652176 81.53050672182007 36.17826086956522 64.15718717683558 40.95652173913044 64.15718717683558C 45.73478260869565 64.15718717683558 49.8304347826087 56.71147880041366 54.608695652173914 56.71147880041366C 59.38695652173913 56.71147880041366 63.482608695652175 44.30196483971045 68.26086956521739 44.30196483971045C 73.0391304347826 44.30196483971045 77.13478260869566 90.21716649431231 81.91304347826087 90.21716649431231C 86.69130434782609 90.21716649431231 90.78695652173913 76.56670113753879 95.56521739130434 76.56670113753879C 100.34347826086956 76.56670113753879 104.43913043478261 74.08479834539814 109.21739130434783 74.08479834539814C 113.99565217391304 74.08479834539814 118.0913043478261 39.338159255429176 122.86956521739131 39.338159255429176C 127.64782608695653 39.338159255429176 131.74347826086958 86.49431230610135 136.52173913043478 86.49431230610135C 141.3 86.49431230610135 145.39565217391305 43.061013443640135 150.17391304347828 43.061013443640135C 154.95217391304348 43.061013443640135 159.04782608695655 76.56670113753879 163.82608695652175 76.56670113753879C 168.60434782608695 76.56670113753879 172.70000000000002 52.9886246122027 177.47826086956522 52.9886246122027C 182.25652173913042 52.9886246122027 186.3521739130435 54.229576008273014 191.1304347826087 54.229576008273014C 195.90869565217392 54.229576008273014 200.00434782608696 61.67528438469494 204.7826086956522 61.67528438469494C 209.5608695652174 61.67528438469494 213.65652173913045 96.42192347466391 218.43478260869566 96.42192347466391C 223.21304347826086 96.42192347466391 227.30869565217392 66.63908996897622 232.08695652173913 66.63908996897622C 236.86521739130436 66.63908996897622 240.9608695652174 62.916235780765255 245.73913043478262 62.916235780765255C 250.51739130434785 62.916235780765255 254.6130434782609 86.49431230610135 259.3913043478261 86.49431230610135C 264.1695652173913 86.49431230610135 268.26521739130436 72.84384694932783 273.04347826086956 72.84384694932783C 277.82173913043476 72.84384694932783 281.91739130434786 4.591520165460196 286.69565217391306 4.591520165460196C 291.47391304347826 4.591520165460196 295.56956521739136 50.506721820062054 300.34782608695656 50.506721820062054C 305.12608695652176 50.506721820062054 309.2217391304348 69.12099276111687 314 69.12099276111687C 314 69.12099276111687 314 69.12099276111687 314 120M 314 69.12099276111687z" pathFrom="M -1 120L -1 120L 13.652173913043478 120L 27.304347826086957 120L 40.95652173913044 120L 54.608695652173914 120L 68.26086956521739 120L 81.91304347826087 120L 95.56521739130434 120L 109.21739130434783 120L 122.86956521739131 120L 136.52173913043478 120L 150.17391304347828 120L 163.82608695652175 120L 177.47826086956522 120L 191.1304347826087 120L 204.7826086956522 120L 218.43478260869566 120L 232.08695652173913 120L 245.73913043478262 120L 259.3913043478261 120L 273.04347826086956 120L 286.69565217391306 120L 300.34782608695656 120L 314 120"></path><path id="apexcharts-area-0" d="M 0 52.9886246122027C 4.778260869565218 52.9886246122027 8.873913043478261 71.6028955532575 13.652173913043478 71.6028955532575C 18.430434782608696 71.6028955532575 22.526086956521738 81.53050672182007 27.304347826086957 81.53050672182007C 32.082608695652176 81.53050672182007 36.17826086956522 64.15718717683558 40.95652173913044 64.15718717683558C 45.73478260869565 64.15718717683558 49.8304347826087 56.71147880041366 54.608695652173914 56.71147880041366C 59.38695652173913 56.71147880041366 63.482608695652175 44.30196483971045 68.26086956521739 44.30196483971045C 73.0391304347826 44.30196483971045 77.13478260869566 90.21716649431231 81.91304347826087 90.21716649431231C 86.69130434782609 90.21716649431231 90.78695652173913 76.56670113753879 95.56521739130434 76.56670113753879C 100.34347826086956 76.56670113753879 104.43913043478261 74.08479834539814 109.21739130434783 74.08479834539814C 113.99565217391304 74.08479834539814 118.0913043478261 39.338159255429176 122.86956521739131 39.338159255429176C 127.64782608695653 39.338159255429176 131.74347826086958 86.49431230610135 136.52173913043478 86.49431230610135C 141.3 86.49431230610135 145.39565217391305 43.061013443640135 150.17391304347828 43.061013443640135C 154.95217391304348 43.061013443640135 159.04782608695655 76.56670113753879 163.82608695652175 76.56670113753879C 168.60434782608695 76.56670113753879 172.70000000000002 52.9886246122027 177.47826086956522 52.9886246122027C 182.25652173913042 52.9886246122027 186.3521739130435 54.229576008273014 191.1304347826087 54.229576008273014C 195.90869565217392 54.229576008273014 200.00434782608696 61.67528438469494 204.7826086956522 61.67528438469494C 209.5608695652174 61.67528438469494 213.65652173913045 96.42192347466391 218.43478260869566 96.42192347466391C 223.21304347826086 96.42192347466391 227.30869565217392 66.63908996897622 232.08695652173913 66.63908996897622C 236.86521739130436 66.63908996897622 240.9608695652174 62.916235780765255 245.73913043478262 62.916235780765255C 250.51739130434785 62.916235780765255 254.6130434782609 86.49431230610135 259.3913043478261 86.49431230610135C 264.1695652173913 86.49431230610135 268.26521739130436 72.84384694932783 273.04347826086956 72.84384694932783C 277.82173913043476 72.84384694932783 281.91739130434786 4.591520165460196 286.69565217391306 4.591520165460196C 291.47391304347826 4.591520165460196 295.56956521739136 50.506721820062054 300.34782608695656 50.506721820062054C 305.12608695652176 50.506721820062054 309.2217391304348 69.12099276111687 314 69.12099276111687" fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskoo9dw6d)" pathTo="M 0 52.9886246122027C 4.778260869565218 52.9886246122027 8.873913043478261 71.6028955532575 13.652173913043478 71.6028955532575C 18.430434782608696 71.6028955532575 22.526086956521738 81.53050672182007 27.304347826086957 81.53050672182007C 32.082608695652176 81.53050672182007 36.17826086956522 64.15718717683558 40.95652173913044 64.15718717683558C 45.73478260869565 64.15718717683558 49.8304347826087 56.71147880041366 54.608695652173914 56.71147880041366C 59.38695652173913 56.71147880041366 63.482608695652175 44.30196483971045 68.26086956521739 44.30196483971045C 73.0391304347826 44.30196483971045 77.13478260869566 90.21716649431231 81.91304347826087 90.21716649431231C 86.69130434782609 90.21716649431231 90.78695652173913 76.56670113753879 95.56521739130434 76.56670113753879C 100.34347826086956 76.56670113753879 104.43913043478261 74.08479834539814 109.21739130434783 74.08479834539814C 113.99565217391304 74.08479834539814 118.0913043478261 39.338159255429176 122.86956521739131 39.338159255429176C 127.64782608695653 39.338159255429176 131.74347826086958 86.49431230610135 136.52173913043478 86.49431230610135C 141.3 86.49431230610135 145.39565217391305 43.061013443640135 150.17391304347828 43.061013443640135C 154.95217391304348 43.061013443640135 159.04782608695655 76.56670113753879 163.82608695652175 76.56670113753879C 168.60434782608695 76.56670113753879 172.70000000000002 52.9886246122027 177.47826086956522 52.9886246122027C 182.25652173913042 52.9886246122027 186.3521739130435 54.229576008273014 191.1304347826087 54.229576008273014C 195.90869565217392 54.229576008273014 200.00434782608696 61.67528438469494 204.7826086956522 61.67528438469494C 209.5608695652174 61.67528438469494 213.65652173913045 96.42192347466391 218.43478260869566 96.42192347466391C 223.21304347826086 96.42192347466391 227.30869565217392 66.63908996897622 232.08695652173913 66.63908996897622C 236.86521739130436 66.63908996897622 240.9608695652174 62.916235780765255 245.73913043478262 62.916235780765255C 250.51739130434785 62.916235780765255 254.6130434782609 86.49431230610135 259.3913043478261 86.49431230610135C 264.1695652173913 86.49431230610135 268.26521739130436 72.84384694932783 273.04347826086956 72.84384694932783C 277.82173913043476 72.84384694932783 281.91739130434786 4.591520165460196 286.69565217391306 4.591520165460196C 291.47391304347826 4.591520165460196 295.56956521739136 50.506721820062054 300.34782608695656 50.506721820062054C 305.12608695652176 50.506721820062054 309.2217391304348 69.12099276111687 314 69.12099276111687" pathFrom="M -1 120L -1 120L 13.652173913043478 120L 27.304347826086957 120L 40.95652173913044 120L 54.608695652173914 120L 68.26086956521739 120L 81.91304347826087 120L 95.56521739130434 120L 109.21739130434783 120L 122.86956521739131 120L 136.52173913043478 120L 150.17391304347828 120L 163.82608695652175 120L 177.47826086956522 120L 191.1304347826087 120L 204.7826086956522 120L 218.43478260869566 120L 232.08695652173913 120L 245.73913043478262 120L 259.3913043478261 120L 273.04347826086956 120L 286.69565217391306 120L 300.34782608695656 120L 314 120"></path><g id="SvgjsG1562" class="apexcharts-series-markers-wrap"></g><g id="SvgjsG1563" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1577" x1="0" y1="0" x2="314" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1578" x1="0" y1="0" x2="314" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1579" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1580" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1581" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1555" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1572" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1573" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div></div></div>
                                                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 315px; height: 131px;"></div></div><div class="contract-trigger"></div></div></div>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                                    Top Authors</h6>
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container ps ps--active-y">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Web
                                                                                                Developer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>129</span>
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>54</span>
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Vinnie
                                                                                                Wagstaff
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Java
                                                                                                Programmer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>429</span>
                                                                                                <small class="text-warning pl-2">
                                                                                                    <i class="fa fa-dot-circle"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Web
                                                                                                Developer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>129</span>
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>54</span>
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 139px;"></div></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tabs-eg-88">
                                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content p-3">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5">$
                                                                                            </small>
                                                                                            <span>851</span></div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                            Sales Total
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparklines-333"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                                    Last Month Highlights</h6>
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container ps">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Web
                                                                                                Developer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>129</span>
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/10.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>54</span>
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt=""></div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Vinnie
                                                                                                Wagstaff
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Java
                                                                                                Programmer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>429</span>
                                                                                                <small class="text-warning pl-2">
                                                                                                    <i class="fa fa-dot-circle"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Web
                                                                                                Developer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>129</span>
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>54</span>
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up">
                                                                                                    </i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Web
                                                                                                Developer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>129</span>
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""></div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    $
                                                                                                </small>
                                                                                                <span>54</span>
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title">
                                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                                            Bandwidth Reports
                                                        </div>
                                                        <div class="btn-actions-pane-right">
                                                            <div class="nav">
                                                                <a href="#tab-eg-55" data-toggle="tab" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab
                                                                    1</a>
                                                                <a href="#tab-eg-66" data-toggle="tab" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab
                                                                    2</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                                            <div class="widget-chart p-0">
                                                                <div id="bar-vertical-candle-lg" style="min-height: 333px;"><div id="apexchartsi6wti16a" class="apexcharts-canvas apexchartsi6wti16a light" style="width: 557px; height: 318px;"><svg id="SvgjsSvg1612" width="557" height="318" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="557" height="318"><div class="apexcharts-legend center position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 48px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(96, 134, 197); color: rgb(96, 134, 197); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(153, 153, 153); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Sessions</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(210, 245, 252); color: rgb(210, 245, 252); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(153, 153, 153); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Views</span></div></div><style type="text/css">

                                                                                    .apexcharts-legend {
                                                                                        display: flex;
                                                                                        overflow: auto;
                                                                                        padding: 0 10px;
                                                                                    }

                                                                                    .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                                                        flex-wrap: wrap
                                                                                    }
                                                                                    .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                                                        flex-direction: column;
                                                                                        bottom: 0;
                                                                                    }

                                                                                    .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                                                        justify-content: flex-start;
                                                                                    }

                                                                                    .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
                                                                                        justify-content: center;
                                                                                    }

                                                                                    .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
                                                                                        justify-content: flex-end;
                                                                                    }

                                                                                    .apexcharts-legend-series {
                                                                                        cursor: pointer;
                                                                                        line-height: normal;
                                                                                    }

                                                                                    .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                                                                        display: flex;
                                                                                        align-items: center;
                                                                                    }

                                                                                    .apexcharts-legend-text {
                                                                                        position: relative;
                                                                                        font-size: 14px;
                                                                                    }

                                                                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                                                        pointer-events: none;
                                                                                    }

                                                                                    .apexcharts-legend-marker {
                                                                                        position: relative;
                                                                                        display: inline-block;
                                                                                        cursor: pointer;
                                                                                        margin-right: 3px;
                                                                                    }

                                                                                    .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
                                                                                        display: inline-block;
                                                                                    }

                                                                                    .apexcharts-legend-series.no-click {
                                                                                        cursor: auto;
                                                                                    }

                                                                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                                                        display: none !important;
                                                                                    }

                                                                                    .inactive-legend {
                                                                                        opacity: 0.45;
                                                                                    }</style></foreignObject><g id="SvgjsG1614" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 54)"><defs id="SvgjsDefs1613"><clipPath id="gridRectMaski6wti16a"><rect id="SvgjsRect1617" width="527" height="246" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaski6wti16a"><rect id="SvgjsRect1618" width="565" height="284" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1665" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1666" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1669" class="apexcharts-grid"><g id="SvgjsG1670" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1671" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1673" x1="0" y1="244" x2="525" y2="244" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1672" x1="0" y1="1" x2="0" y2="244" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1620" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1621" class="apexcharts-series Sessions" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 3.28125 244L 3.28125 162.66666666666669Q 12.125 154.82291666666669 20.96875 162.66666666666669L 20.96875 244L 2.28125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 3.28125 244L 3.28125 162.66666666666669Q 12.125 154.82291666666669 20.96875 162.66666666666669L 20.96875 244L 2.28125 244" pathFrom="M 3.28125 244L 3.28125 244L 20.96875 244L 20.96875 244L 20.96875 244L 2.28125 244" cy="162.66666666666669" cx="28.53125" j="0" val="20" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 29.53125 244L 29.53125 178.93333333333334Q 38.375 171.08958333333334 47.21875 178.93333333333334L 47.21875 244L 28.53125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 29.53125 244L 29.53125 178.93333333333334Q 38.375 171.08958333333334 47.21875 178.93333333333334L 47.21875 244L 28.53125 244" pathFrom="M 29.53125 244L 29.53125 244L 47.21875 244L 47.21875 244L 47.21875 244L 28.53125 244" cy="178.93333333333334" cx="54.78125" j="1" val="16" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 55.78125 244L 55.78125 146.39999999999998Q 64.625 138.55624999999998 73.46875 146.39999999999998L 73.46875 244L 54.78125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 55.78125 244L 55.78125 146.39999999999998Q 64.625 138.55624999999998 73.46875 146.39999999999998L 73.46875 244L 54.78125 244" pathFrom="M 55.78125 244L 55.78125 244L 73.46875 244L 73.46875 244L 73.46875 244L 54.78125 244" cy="146.39999999999998" cx="81.03125" j="2" val="24" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 82.03125 244L 82.03125 130.13333333333333Q 90.875 122.28958333333333 99.71875 130.13333333333333L 99.71875 244L 81.03125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 82.03125 244L 82.03125 130.13333333333333Q 90.875 122.28958333333333 99.71875 130.13333333333333L 99.71875 244L 81.03125 244" pathFrom="M 82.03125 244L 82.03125 244L 99.71875 244L 99.71875 244L 99.71875 244L 81.03125 244" cy="130.13333333333333" cx="107.28125" j="3" val="28" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 108.28125 244L 108.28125 138.26666666666665Q 117.125 130.42291666666665 125.96875 138.26666666666665L 125.96875 244L 107.28125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 108.28125 244L 108.28125 138.26666666666665Q 117.125 130.42291666666665 125.96875 138.26666666666665L 125.96875 244L 107.28125 244" pathFrom="M 108.28125 244L 108.28125 244L 125.96875 244L 125.96875 244L 125.96875 244L 107.28125 244" cy="138.26666666666665" cx="133.53125" j="4" val="26" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 134.53125 244L 134.53125 154.53333333333333Q 143.375 146.68958333333333 152.21875 154.53333333333333L 152.21875 244L 133.53125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 134.53125 244L 134.53125 154.53333333333333Q 143.375 146.68958333333333 152.21875 154.53333333333333L 152.21875 244L 133.53125 244" pathFrom="M 134.53125 244L 134.53125 244L 152.21875 244L 152.21875 244L 152.21875 244L 133.53125 244" cy="154.53333333333333" cx="159.78125" j="5" val="22" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 160.78125 244L 160.78125 183Q 169.625 175.15625 178.46875 183L 178.46875 244L 159.78125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 160.78125 244L 160.78125 183Q 169.625 175.15625 178.46875 183L 178.46875 244L 159.78125 244" pathFrom="M 160.78125 244L 160.78125 244L 178.46875 244L 178.46875 244L 178.46875 244L 159.78125 244" cy="183" cx="186.03125" j="6" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 187.03125 244L 187.03125 223.66666666666666Q 195.875 215.82291666666666 204.71875 223.66666666666666L 204.71875 244L 186.03125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 187.03125 244L 187.03125 223.66666666666666Q 195.875 215.82291666666666 204.71875 223.66666666666666L 204.71875 244L 186.03125 244" pathFrom="M 187.03125 244L 187.03125 244L 204.71875 244L 204.71875 244L 204.71875 244L 186.03125 244" cy="223.66666666666666" cx="212.28125" j="7" val="5" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 213.28125 244L 213.28125 187.06666666666666Q 222.125 179.22291666666666 230.96875 187.06666666666666L 230.96875 244L 212.28125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 213.28125 244L 213.28125 187.06666666666666Q 222.125 179.22291666666666 230.96875 187.06666666666666L 230.96875 244L 212.28125 244" pathFrom="M 213.28125 244L 213.28125 244L 230.96875 244L 230.96875 244L 230.96875 244L 212.28125 244" cy="187.06666666666666" cx="238.53125" j="8" val="14" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 239.53125 244L 239.53125 178.93333333333334Q 248.375 171.08958333333334 257.21875 178.93333333333334L 257.21875 244L 238.53125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 239.53125 244L 239.53125 178.93333333333334Q 248.375 171.08958333333334 257.21875 178.93333333333334L 257.21875 244L 238.53125 244" pathFrom="M 239.53125 244L 239.53125 244L 257.21875 244L 257.21875 244L 257.21875 244L 238.53125 244" cy="178.93333333333334" cx="264.78125" j="9" val="16" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 265.78125 244L 265.78125 154.53333333333333Q 274.625 146.68958333333333 283.46875 154.53333333333333L 283.46875 244L 264.78125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 265.78125 244L 265.78125 154.53333333333333Q 274.625 146.68958333333333 283.46875 154.53333333333333L 283.46875 244L 264.78125 244" pathFrom="M 265.78125 244L 265.78125 244L 283.46875 244L 283.46875 244L 283.46875 244L 264.78125 244" cy="154.53333333333333" cx="291.03125" j="10" val="22" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 292.03125 244L 292.03125 126.06666666666666Q 300.875 118.22291666666666 309.71875 126.06666666666666L 309.71875 244L 291.03125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 292.03125 244L 292.03125 126.06666666666666Q 300.875 118.22291666666666 309.71875 126.06666666666666L 309.71875 244L 291.03125 244" pathFrom="M 292.03125 244L 292.03125 244L 309.71875 244L 309.71875 244L 309.71875 244L 291.03125 244" cy="126.06666666666666" cx="317.28125" j="11" val="29" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 318.28125 244L 318.28125 146.39999999999998Q 327.125 138.55624999999998 335.96875 146.39999999999998L 335.96875 244L 317.28125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 318.28125 244L 318.28125 146.39999999999998Q 327.125 138.55624999999998 335.96875 146.39999999999998L 335.96875 244L 317.28125 244" pathFrom="M 318.28125 244L 318.28125 244L 335.96875 244L 335.96875 244L 335.96875 244L 317.28125 244" cy="146.39999999999998" cx="343.53125" j="12" val="24" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 344.53125 244L 344.53125 166.73333333333335Q 353.375 158.88958333333335 362.21875 166.73333333333335L 362.21875 244L 343.53125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 344.53125 244L 344.53125 166.73333333333335Q 353.375 158.88958333333335 362.21875 166.73333333333335L 362.21875 244L 343.53125 244" pathFrom="M 344.53125 244L 344.53125 244L 362.21875 244L 362.21875 244L 362.21875 244L 343.53125 244" cy="166.73333333333335" cx="369.78125" j="13" val="19" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 370.78125 244L 370.78125 183Q 379.625 175.15625 388.46875 183L 388.46875 244L 369.78125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 370.78125 244L 370.78125 183Q 379.625 175.15625 388.46875 183L 388.46875 244L 369.78125 244" pathFrom="M 370.78125 244L 370.78125 244L 388.46875 244L 388.46875 244L 388.46875 244L 369.78125 244" cy="183" cx="396.03125" j="14" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 397.03125 244L 397.03125 203.33333333333334Q 405.875 195.48958333333334 414.71875 203.33333333333334L 414.71875 244L 396.03125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 397.03125 244L 397.03125 203.33333333333334Q 405.875 195.48958333333334 414.71875 203.33333333333334L 414.71875 244L 396.03125 244" pathFrom="M 397.03125 244L 397.03125 244L 414.71875 244L 414.71875 244L 414.71875 244L 396.03125 244" cy="203.33333333333334" cx="422.28125" j="15" val="10" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 423.28125 244L 423.28125 199.26666666666665Q 432.125 191.42291666666665 440.96875 199.26666666666665L 440.96875 244L 422.28125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 423.28125 244L 423.28125 199.26666666666665Q 432.125 191.42291666666665 440.96875 199.26666666666665L 440.96875 244L 422.28125 244" pathFrom="M 423.28125 244L 423.28125 244L 440.96875 244L 440.96875 244L 440.96875 244L 422.28125 244" cy="199.26666666666665" cx="448.53125" j="16" val="11" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 449.53125 244L 449.53125 183Q 458.375 175.15625 467.21875 183L 467.21875 244L 448.53125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 449.53125 244L 449.53125 183Q 458.375 175.15625 467.21875 183L 467.21875 244L 448.53125 244" pathFrom="M 449.53125 244L 449.53125 244L 467.21875 244L 467.21875 244L 467.21875 244L 448.53125 244" cy="183" cx="474.78125" j="17" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 475.78125 244L 475.78125 166.73333333333335Q 484.625 158.88958333333335 493.46875 166.73333333333335L 493.46875 244L 474.78125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 475.78125 244L 475.78125 166.73333333333335Q 484.625 158.88958333333335 493.46875 166.73333333333335L 493.46875 244L 474.78125 244" pathFrom="M 475.78125 244L 475.78125 244L 493.46875 244L 493.46875 244L 493.46875 244L 474.78125 244" cy="166.73333333333335" cx="501.03125" j="18" val="19" barWidth="19.6875"></path><path id="apexcharts-bar-area-0" d="M 502.03125 244L 502.03125 150.46666666666667Q 510.875 142.62291666666667 519.71875 150.46666666666667L 519.71875 244L 501.03125 244" fill="rgba(96,134,197,0.85)" fill-opacity="1" stroke="#6086c5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 502.03125 244L 502.03125 150.46666666666667Q 510.875 142.62291666666667 519.71875 150.46666666666667L 519.71875 244L 501.03125 244" pathFrom="M 502.03125 244L 502.03125 244L 519.71875 244L 519.71875 244L 519.71875 244L 501.03125 244" cy="150.46666666666667" cx="527.28125" j="19" val="23" barWidth="19.6875"></path><g id="SvgjsG1622" class="apexcharts-datalabels"></g></g><g id="SvgjsG1643" class="apexcharts-series Views" rel="2" data:realIndex="1"><path id="apexcharts-bar-area-1" d="M 3.28125 162.66666666666669L 3.28125 81.33333333333336Q 12.125 73.48958333333336 20.96875 81.33333333333336L 20.96875 162.66666666666669L 2.28125 162.66666666666669" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 3.28125 162.66666666666669L 3.28125 81.33333333333336Q 12.125 73.48958333333336 20.96875 81.33333333333336L 20.96875 162.66666666666669L 2.28125 162.66666666666669" pathFrom="M 3.28125 162.66666666666669L 3.28125 162.66666666666669L 20.96875 162.66666666666669L 20.96875 162.66666666666669L 20.96875 162.66666666666669L 2.28125 162.66666666666669" cy="81.33333333333336" cx="28.53125" j="0" val="20" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 29.53125 178.93333333333334L 29.53125 113.86666666666667Q 38.375 106.02291666666667 47.21875 113.86666666666667L 47.21875 178.93333333333334L 28.53125 178.93333333333334" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 29.53125 178.93333333333334L 29.53125 113.86666666666667Q 38.375 106.02291666666667 47.21875 113.86666666666667L 47.21875 178.93333333333334L 28.53125 178.93333333333334" pathFrom="M 29.53125 178.93333333333334L 29.53125 178.93333333333334L 47.21875 178.93333333333334L 47.21875 178.93333333333334L 47.21875 178.93333333333334L 28.53125 178.93333333333334" cy="113.86666666666667" cx="54.78125" j="1" val="16" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 55.78125 146.39999999999998L 55.78125 48.79999999999997Q 64.625 40.95624999999997 73.46875 48.79999999999997L 73.46875 146.39999999999998L 54.78125 146.39999999999998" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 55.78125 146.39999999999998L 55.78125 48.79999999999997Q 64.625 40.95624999999997 73.46875 48.79999999999997L 73.46875 146.39999999999998L 54.78125 146.39999999999998" pathFrom="M 55.78125 146.39999999999998L 55.78125 146.39999999999998L 73.46875 146.39999999999998L 73.46875 146.39999999999998L 73.46875 146.39999999999998L 54.78125 146.39999999999998" cy="48.79999999999997" cx="81.03125" j="2" val="24" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 82.03125 130.13333333333333L 82.03125 16.26666666666665Q 90.875 8.422916666666652 99.71875 16.26666666666665L 99.71875 130.13333333333333L 81.03125 130.13333333333333" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 82.03125 130.13333333333333L 82.03125 16.26666666666665Q 90.875 8.422916666666652 99.71875 16.26666666666665L 99.71875 130.13333333333333L 81.03125 130.13333333333333" pathFrom="M 82.03125 130.13333333333333L 82.03125 130.13333333333333L 99.71875 130.13333333333333L 99.71875 130.13333333333333L 99.71875 130.13333333333333L 81.03125 130.13333333333333" cy="16.26666666666665" cx="107.28125" j="3" val="28" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 108.28125 138.26666666666665L 108.28125 32.53333333333332Q 117.125 24.689583333333317 125.96875 32.53333333333332L 125.96875 138.26666666666665L 107.28125 138.26666666666665" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 108.28125 138.26666666666665L 108.28125 32.53333333333332Q 117.125 24.689583333333317 125.96875 32.53333333333332L 125.96875 138.26666666666665L 107.28125 138.26666666666665" pathFrom="M 108.28125 138.26666666666665L 108.28125 138.26666666666665L 125.96875 138.26666666666665L 125.96875 138.26666666666665L 125.96875 138.26666666666665L 107.28125 138.26666666666665" cy="32.53333333333332" cx="133.53125" j="4" val="26" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 134.53125 154.53333333333333L 134.53125 65.06666666666666Q 143.375 57.22291666666666 152.21875 65.06666666666666L 152.21875 154.53333333333333L 133.53125 154.53333333333333" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 134.53125 154.53333333333333L 134.53125 65.06666666666666Q 143.375 57.22291666666666 152.21875 65.06666666666666L 152.21875 154.53333333333333L 133.53125 154.53333333333333" pathFrom="M 134.53125 154.53333333333333L 134.53125 154.53333333333333L 152.21875 154.53333333333333L 152.21875 154.53333333333333L 152.21875 154.53333333333333L 133.53125 154.53333333333333" cy="65.06666666666666" cx="159.78125" j="5" val="22" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 160.78125 183L 160.78125 122Q 169.625 114.15625 178.46875 122L 178.46875 183L 159.78125 183" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 160.78125 183L 160.78125 122Q 169.625 114.15625 178.46875 122L 178.46875 183L 159.78125 183" pathFrom="M 160.78125 183L 160.78125 183L 178.46875 183L 178.46875 183L 178.46875 183L 159.78125 183" cy="122" cx="186.03125" j="6" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 187.03125 223.66666666666666L 187.03125 203.33333333333331Q 195.875 195.48958333333331 204.71875 203.33333333333331L 204.71875 223.66666666666666L 186.03125 223.66666666666666" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 187.03125 223.66666666666666L 187.03125 203.33333333333331Q 195.875 195.48958333333331 204.71875 203.33333333333331L 204.71875 223.66666666666666L 186.03125 223.66666666666666" pathFrom="M 187.03125 223.66666666666666L 187.03125 223.66666666666666L 204.71875 223.66666666666666L 204.71875 223.66666666666666L 204.71875 223.66666666666666L 186.03125 223.66666666666666" cy="203.33333333333331" cx="212.28125" j="7" val="5" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 213.28125 187.06666666666666L 213.28125 130.13333333333333Q 222.125 122.28958333333333 230.96875 130.13333333333333L 230.96875 187.06666666666666L 212.28125 187.06666666666666" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 213.28125 187.06666666666666L 213.28125 130.13333333333333Q 222.125 122.28958333333333 230.96875 130.13333333333333L 230.96875 187.06666666666666L 212.28125 187.06666666666666" pathFrom="M 213.28125 187.06666666666666L 213.28125 187.06666666666666L 230.96875 187.06666666666666L 230.96875 187.06666666666666L 230.96875 187.06666666666666L 212.28125 187.06666666666666" cy="130.13333333333333" cx="238.53125" j="8" val="14" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 239.53125 178.93333333333334L 239.53125 113.86666666666667Q 248.375 106.02291666666667 257.21875 113.86666666666667L 257.21875 178.93333333333334L 238.53125 178.93333333333334" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 239.53125 178.93333333333334L 239.53125 113.86666666666667Q 248.375 106.02291666666667 257.21875 113.86666666666667L 257.21875 178.93333333333334L 238.53125 178.93333333333334" pathFrom="M 239.53125 178.93333333333334L 239.53125 178.93333333333334L 257.21875 178.93333333333334L 257.21875 178.93333333333334L 257.21875 178.93333333333334L 238.53125 178.93333333333334" cy="113.86666666666667" cx="264.78125" j="9" val="16" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 265.78125 154.53333333333333L 265.78125 65.06666666666666Q 274.625 57.22291666666666 283.46875 65.06666666666666L 283.46875 154.53333333333333L 264.78125 154.53333333333333" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 265.78125 154.53333333333333L 265.78125 65.06666666666666Q 274.625 57.22291666666666 283.46875 65.06666666666666L 283.46875 154.53333333333333L 264.78125 154.53333333333333" pathFrom="M 265.78125 154.53333333333333L 265.78125 154.53333333333333L 283.46875 154.53333333333333L 283.46875 154.53333333333333L 283.46875 154.53333333333333L 264.78125 154.53333333333333" cy="65.06666666666666" cx="291.03125" j="10" val="22" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 292.03125 126.06666666666666L 292.03125 8.133333333333326Q 300.875 0.28958333333332575 309.71875 8.133333333333326L 309.71875 126.06666666666666L 291.03125 126.06666666666666" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 292.03125 126.06666666666666L 292.03125 8.133333333333326Q 300.875 0.28958333333332575 309.71875 8.133333333333326L 309.71875 126.06666666666666L 291.03125 126.06666666666666" pathFrom="M 292.03125 126.06666666666666L 292.03125 126.06666666666666L 309.71875 126.06666666666666L 309.71875 126.06666666666666L 309.71875 126.06666666666666L 291.03125 126.06666666666666" cy="8.133333333333326" cx="317.28125" j="11" val="29" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 318.28125 146.39999999999998L 318.28125 48.79999999999997Q 327.125 40.95624999999997 335.96875 48.79999999999997L 335.96875 146.39999999999998L 317.28125 146.39999999999998" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 318.28125 146.39999999999998L 318.28125 48.79999999999997Q 327.125 40.95624999999997 335.96875 48.79999999999997L 335.96875 146.39999999999998L 317.28125 146.39999999999998" pathFrom="M 318.28125 146.39999999999998L 318.28125 146.39999999999998L 335.96875 146.39999999999998L 335.96875 146.39999999999998L 335.96875 146.39999999999998L 317.28125 146.39999999999998" cy="48.79999999999997" cx="343.53125" j="12" val="24" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 344.53125 166.73333333333335L 344.53125 89.46666666666668Q 353.375 81.62291666666668 362.21875 89.46666666666668L 362.21875 166.73333333333335L 343.53125 166.73333333333335" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 344.53125 166.73333333333335L 344.53125 89.46666666666668Q 353.375 81.62291666666668 362.21875 89.46666666666668L 362.21875 166.73333333333335L 343.53125 166.73333333333335" pathFrom="M 344.53125 166.73333333333335L 344.53125 166.73333333333335L 362.21875 166.73333333333335L 362.21875 166.73333333333335L 362.21875 166.73333333333335L 343.53125 166.73333333333335" cy="89.46666666666668" cx="369.78125" j="13" val="19" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 370.78125 183L 370.78125 122Q 379.625 114.15625 388.46875 122L 388.46875 183L 369.78125 183" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 370.78125 183L 370.78125 122Q 379.625 114.15625 388.46875 122L 388.46875 183L 369.78125 183" pathFrom="M 370.78125 183L 370.78125 183L 388.46875 183L 388.46875 183L 388.46875 183L 369.78125 183" cy="122" cx="396.03125" j="14" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 397.03125 203.33333333333334L 397.03125 162.66666666666669Q 405.875 154.82291666666669 414.71875 162.66666666666669L 414.71875 203.33333333333334L 396.03125 203.33333333333334" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 397.03125 203.33333333333334L 397.03125 162.66666666666669Q 405.875 154.82291666666669 414.71875 162.66666666666669L 414.71875 203.33333333333334L 396.03125 203.33333333333334" pathFrom="M 397.03125 203.33333333333334L 397.03125 203.33333333333334L 414.71875 203.33333333333334L 414.71875 203.33333333333334L 414.71875 203.33333333333334L 396.03125 203.33333333333334" cy="162.66666666666669" cx="422.28125" j="15" val="10" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 423.28125 199.26666666666665L 423.28125 154.5333333333333Q 432.125 146.6895833333333 440.96875 154.5333333333333L 440.96875 199.26666666666665L 422.28125 199.26666666666665" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 423.28125 199.26666666666665L 423.28125 154.5333333333333Q 432.125 146.6895833333333 440.96875 154.5333333333333L 440.96875 199.26666666666665L 422.28125 199.26666666666665" pathFrom="M 423.28125 199.26666666666665L 423.28125 199.26666666666665L 440.96875 199.26666666666665L 440.96875 199.26666666666665L 440.96875 199.26666666666665L 422.28125 199.26666666666665" cy="154.5333333333333" cx="448.53125" j="16" val="11" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 449.53125 183L 449.53125 122Q 458.375 114.15625 467.21875 122L 467.21875 183L 448.53125 183" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 449.53125 183L 449.53125 122Q 458.375 114.15625 467.21875 122L 467.21875 183L 448.53125 183" pathFrom="M 449.53125 183L 449.53125 183L 467.21875 183L 467.21875 183L 467.21875 183L 448.53125 183" cy="122" cx="474.78125" j="17" val="15" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 475.78125 166.73333333333335L 475.78125 89.46666666666668Q 484.625 81.62291666666668 493.46875 89.46666666666668L 493.46875 166.73333333333335L 474.78125 166.73333333333335" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 475.78125 166.73333333333335L 475.78125 89.46666666666668Q 484.625 81.62291666666668 493.46875 89.46666666666668L 493.46875 166.73333333333335L 474.78125 166.73333333333335" pathFrom="M 475.78125 166.73333333333335L 475.78125 166.73333333333335L 493.46875 166.73333333333335L 493.46875 166.73333333333335L 493.46875 166.73333333333335L 474.78125 166.73333333333335" cy="89.46666666666668" cx="501.03125" j="18" val="19" barWidth="19.6875"></path><path id="apexcharts-bar-area-1" d="M 502.03125 150.46666666666667L 502.03125 56.93333333333334Q 510.875 49.08958333333334 519.71875 56.93333333333334L 519.71875 150.46666666666667L 501.03125 150.46666666666667" fill="rgba(210,245,252,0.85)" fill-opacity="1" stroke="#d2f5fc" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaski6wti16a)" pathTo="M 502.03125 150.46666666666667L 502.03125 56.93333333333334Q 510.875 49.08958333333334 519.71875 56.93333333333334L 519.71875 150.46666666666667L 501.03125 150.46666666666667" pathFrom="M 502.03125 150.46666666666667L 502.03125 150.46666666666667L 519.71875 150.46666666666667L 519.71875 150.46666666666667L 519.71875 150.46666666666667L 501.03125 150.46666666666667" cy="56.93333333333334" cx="527.28125" j="19" val="23" barWidth="19.6875"></path><g id="SvgjsG1644" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1674" x1="0" y1="0" x2="525" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1675" x1="0" y1="0" x2="525" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1676" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1677" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1678" class="apexcharts-point-annotations"></g></g><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif" x="10" y="44" text-anchor="start" dominant-baseline="auto" font-size="12px" fill="#999999" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Sessions and Views</text><g id="SvgjsG1667" class="apexcharts-yaxis" rel="0" transform="translate(-11, 0)"><g id="SvgjsG1668" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(96, 134, 197);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(210, 245, 252);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-toolbar"><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div></div></div></div></div>
                                                                <div class="widget-chart-content">
                                                                    <div class="widget-description mt-0 text-warning">
                                                                        <i class="fa fa-arrow-left"></i>
                                                                        <span class="pl-1">175.5%</span>
                                                                        <span class="text-muted opacity-8 pl-1">increased server resources</span>
                                                                    </div>
                                                                </div>
                                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 558px; height: 355px;"></div></div><div class="contract-trigger"></div></div></div>
                                                            <div class="pt-2 card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            63%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Generated Leads
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            32%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Submitted Tickers
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            71%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Server
                                                                                            Allocation
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            41%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Generated Leads
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab-eg-66">
                                                            <div class="widget-chart p-0">
                                                                <div id="dashboard-sparkline-37"></div>
                                                                <div class="widget-chart-content">
                                                                    <div class="widget-description mt-0 text-success">
                                                                        <i class="fa fa-arrow-up"></i>
                                                                        <span class="pr-1">37.2%</span>
                                                                        <span class="text-muted opacity-8">performance increase</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-2 card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            23%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Deploys
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            76%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Traffic
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            83%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Servers Load
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            48%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Reportd Bugs
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-alternate" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
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
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="rm-border responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-success">
                                                                Received
                                                                Messages</h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-success"><span>348</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-3" style="min-height: 152px;"><div id="apexcharts4syqk745" class="apexcharts-canvas apexcharts4syqk745 light" style="width: 272px; height: 152px;"><svg id="SvgjsSvg1515" width="272" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1517" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1516"><clipPath id="gridRectMask4syqk745"><rect id="SvgjsRect1522" width="277" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4syqk745"><rect id="SvgjsRect1523" width="312" height="192" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1529" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1530" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop><stop id="SvgjsStop1531" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1532" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1521" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1535" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1536" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1539" class="apexcharts-grid"><line id="SvgjsLine1541" x1="0" y1="152" x2="272" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1540" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1525" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1526" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 152L 0 81.26577042399173C 4.139130434782608 81.26577042399173 7.6869565217391305 5.815925542916233 11.826086956521738 5.815925542916233C 15.965217391304346 5.815925542916233 19.51304347826087 96.98448810754911 23.652173913043477 96.98448810754911C 27.791304347826085 96.98448810754911 31.33913043478261 90.69700103412617 35.47826086956522 90.69700103412617C 39.61739130434783 90.69700103412617 43.165217391304346 87.55325749741469 47.30434782608695 87.55325749741469C 51.44347826086956 87.55325749741469 54.99130434782609 79.69389865563599 59.130434782608695 79.69389865563599C 63.2695652173913 79.69389865563599 66.81739130434782 92.2688728024819 70.95652173913044 92.2688728024819C 75.09565217391304 92.2688728024819 78.64347826086957 54.543950361944155 82.78260869565217 54.543950361944155C 86.92173913043477 54.543950361944155 90.4695652173913 71.83453981385729 94.6086956521739 71.83453981385729C 98.74782608695651 71.83453981385729 102.29565217391304 96.98448810754911 106.43478260869564 96.98448810754911C 110.57391304347826 96.98448810754911 114.12173913043478 93.84074457083764 118.26086956521739 93.84074457083764C 122.39999999999999 93.84074457083764 125.94782608695652 67.11892450879007 130.08695652173913 67.11892450879007C 134.22608695652173 67.11892450879007 137.77391304347827 109.55946225439504 141.91304347826087 109.55946225439504C 146.05217391304348 109.55946225439504 149.6 114.27507755946226 153.7391304347826 114.27507755946226C 157.8782608695652 114.27507755946226 161.42608695652174 109.55946225439504 165.56521739130434 109.55946225439504C 169.70434782608694 109.55946225439504 173.25217391304346 78.12202688728024 177.39130434782606 78.12202688728024C 181.53043478260867 78.12202688728024 185.0782608695652 49.82833505687694 189.2173913043478 49.82833505687694C 193.35652173913041 49.82833505687694 196.90434782608696 68.69079627714581 201.04347826086956 68.69079627714581C 205.18260869565216 68.69079627714581 208.73043478260868 56.115822130299904 212.86956521739128 56.115822130299904C 217.00869565217388 56.115822130299904 220.55652173913043 67.11892450879007 224.69565217391303 67.11892450879007C 228.83478260869563 67.11892450879007 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 103.27197518097208 248.3478260869565 103.27197518097208C 252.4869565217391 103.27197518097208 256.03478260869565 63.97518097207859 260.17391304347825 63.97518097207859C 264.31304347826085 63.97518097207859 267.8608695652174 122.13443640124095 272 122.13443640124095C 272 122.13443640124095 272 122.13443640124095 272 152M 272 122.13443640124095z" fill="url(#SvgjsLinearGradient1529)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4syqk745)" pathTo="M 0 152L 0 81.26577042399173C 4.139130434782608 81.26577042399173 7.6869565217391305 5.815925542916233 11.826086956521738 5.815925542916233C 15.965217391304346 5.815925542916233 19.51304347826087 96.98448810754911 23.652173913043477 96.98448810754911C 27.791304347826085 96.98448810754911 31.33913043478261 90.69700103412617 35.47826086956522 90.69700103412617C 39.61739130434783 90.69700103412617 43.165217391304346 87.55325749741469 47.30434782608695 87.55325749741469C 51.44347826086956 87.55325749741469 54.99130434782609 79.69389865563599 59.130434782608695 79.69389865563599C 63.2695652173913 79.69389865563599 66.81739130434782 92.2688728024819 70.95652173913044 92.2688728024819C 75.09565217391304 92.2688728024819 78.64347826086957 54.543950361944155 82.78260869565217 54.543950361944155C 86.92173913043477 54.543950361944155 90.4695652173913 71.83453981385729 94.6086956521739 71.83453981385729C 98.74782608695651 71.83453981385729 102.29565217391304 96.98448810754911 106.43478260869564 96.98448810754911C 110.57391304347826 96.98448810754911 114.12173913043478 93.84074457083764 118.26086956521739 93.84074457083764C 122.39999999999999 93.84074457083764 125.94782608695652 67.11892450879007 130.08695652173913 67.11892450879007C 134.22608695652173 67.11892450879007 137.77391304347827 109.55946225439504 141.91304347826087 109.55946225439504C 146.05217391304348 109.55946225439504 149.6 114.27507755946226 153.7391304347826 114.27507755946226C 157.8782608695652 114.27507755946226 161.42608695652174 109.55946225439504 165.56521739130434 109.55946225439504C 169.70434782608694 109.55946225439504 173.25217391304346 78.12202688728024 177.39130434782606 78.12202688728024C 181.53043478260867 78.12202688728024 185.0782608695652 49.82833505687694 189.2173913043478 49.82833505687694C 193.35652173913041 49.82833505687694 196.90434782608696 68.69079627714581 201.04347826086956 68.69079627714581C 205.18260869565216 68.69079627714581 208.73043478260868 56.115822130299904 212.86956521739128 56.115822130299904C 217.00869565217388 56.115822130299904 220.55652173913043 67.11892450879007 224.69565217391303 67.11892450879007C 228.83478260869563 67.11892450879007 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 103.27197518097208 248.3478260869565 103.27197518097208C 252.4869565217391 103.27197518097208 256.03478260869565 63.97518097207859 260.17391304347825 63.97518097207859C 264.31304347826085 63.97518097207859 267.8608695652174 122.13443640124095 272 122.13443640124095C 272 122.13443640124095 272 122.13443640124095 272 152M 272 122.13443640124095z" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><path id="apexcharts-area-0" d="M 0 81.26577042399173C 4.139130434782608 81.26577042399173 7.6869565217391305 5.815925542916233 11.826086956521738 5.815925542916233C 15.965217391304346 5.815925542916233 19.51304347826087 96.98448810754911 23.652173913043477 96.98448810754911C 27.791304347826085 96.98448810754911 31.33913043478261 90.69700103412617 35.47826086956522 90.69700103412617C 39.61739130434783 90.69700103412617 43.165217391304346 87.55325749741469 47.30434782608695 87.55325749741469C 51.44347826086956 87.55325749741469 54.99130434782609 79.69389865563599 59.130434782608695 79.69389865563599C 63.2695652173913 79.69389865563599 66.81739130434782 92.2688728024819 70.95652173913044 92.2688728024819C 75.09565217391304 92.2688728024819 78.64347826086957 54.543950361944155 82.78260869565217 54.543950361944155C 86.92173913043477 54.543950361944155 90.4695652173913 71.83453981385729 94.6086956521739 71.83453981385729C 98.74782608695651 71.83453981385729 102.29565217391304 96.98448810754911 106.43478260869564 96.98448810754911C 110.57391304347826 96.98448810754911 114.12173913043478 93.84074457083764 118.26086956521739 93.84074457083764C 122.39999999999999 93.84074457083764 125.94782608695652 67.11892450879007 130.08695652173913 67.11892450879007C 134.22608695652173 67.11892450879007 137.77391304347827 109.55946225439504 141.91304347826087 109.55946225439504C 146.05217391304348 109.55946225439504 149.6 114.27507755946226 153.7391304347826 114.27507755946226C 157.8782608695652 114.27507755946226 161.42608695652174 109.55946225439504 165.56521739130434 109.55946225439504C 169.70434782608694 109.55946225439504 173.25217391304346 78.12202688728024 177.39130434782606 78.12202688728024C 181.53043478260867 78.12202688728024 185.0782608695652 49.82833505687694 189.2173913043478 49.82833505687694C 193.35652173913041 49.82833505687694 196.90434782608696 68.69079627714581 201.04347826086956 68.69079627714581C 205.18260869565216 68.69079627714581 208.73043478260868 56.115822130299904 212.86956521739128 56.115822130299904C 217.00869565217388 56.115822130299904 220.55652173913043 67.11892450879007 224.69565217391303 67.11892450879007C 228.83478260869563 67.11892450879007 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 103.27197518097208 248.3478260869565 103.27197518097208C 252.4869565217391 103.27197518097208 256.03478260869565 63.97518097207859 260.17391304347825 63.97518097207859C 264.31304347826085 63.97518097207859 267.8608695652174 122.13443640124095 272 122.13443640124095" fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4syqk745)" pathTo="M 0 81.26577042399173C 4.139130434782608 81.26577042399173 7.6869565217391305 5.815925542916233 11.826086956521738 5.815925542916233C 15.965217391304346 5.815925542916233 19.51304347826087 96.98448810754911 23.652173913043477 96.98448810754911C 27.791304347826085 96.98448810754911 31.33913043478261 90.69700103412617 35.47826086956522 90.69700103412617C 39.61739130434783 90.69700103412617 43.165217391304346 87.55325749741469 47.30434782608695 87.55325749741469C 51.44347826086956 87.55325749741469 54.99130434782609 79.69389865563599 59.130434782608695 79.69389865563599C 63.2695652173913 79.69389865563599 66.81739130434782 92.2688728024819 70.95652173913044 92.2688728024819C 75.09565217391304 92.2688728024819 78.64347826086957 54.543950361944155 82.78260869565217 54.543950361944155C 86.92173913043477 54.543950361944155 90.4695652173913 71.83453981385729 94.6086956521739 71.83453981385729C 98.74782608695651 71.83453981385729 102.29565217391304 96.98448810754911 106.43478260869564 96.98448810754911C 110.57391304347826 96.98448810754911 114.12173913043478 93.84074457083764 118.26086956521739 93.84074457083764C 122.39999999999999 93.84074457083764 125.94782608695652 67.11892450879007 130.08695652173913 67.11892450879007C 134.22608695652173 67.11892450879007 137.77391304347827 109.55946225439504 141.91304347826087 109.55946225439504C 146.05217391304348 109.55946225439504 149.6 114.27507755946226 153.7391304347826 114.27507755946226C 157.8782608695652 114.27507755946226 161.42608695652174 109.55946225439504 165.56521739130434 109.55946225439504C 169.70434782608694 109.55946225439504 173.25217391304346 78.12202688728024 177.39130434782606 78.12202688728024C 181.53043478260867 78.12202688728024 185.0782608695652 49.82833505687694 189.2173913043478 49.82833505687694C 193.35652173913041 49.82833505687694 196.90434782608696 68.69079627714581 201.04347826086956 68.69079627714581C 205.18260869565216 68.69079627714581 208.73043478260868 56.115822130299904 212.86956521739128 56.115822130299904C 217.00869565217388 56.115822130299904 220.55652173913043 67.11892450879007 224.69565217391303 67.11892450879007C 228.83478260869563 67.11892450879007 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 103.27197518097208 248.3478260869565 103.27197518097208C 252.4869565217391 103.27197518097208 256.03478260869565 63.97518097207859 260.17391304347825 63.97518097207859C 264.31304347826085 63.97518097207859 267.8608695652174 122.13443640124095 272 122.13443640124095" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><g id="SvgjsG1527" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1547" r="0" cx="0" cy="0" class="apexcharts-marker wsedikk3y no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1528" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1542" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1543" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1544" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1545" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1546" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1520" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1537" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1538" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 273px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="rm-border responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-danger">Sent
                                                                Messages</h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-danger"><span>425</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-1" style="min-height: 152px;"><div id="apexchartsc53hshih" class="apexcharts-canvas apexchartsc53hshih light" style="width: 272px; height: 152px;"><svg id="SvgjsSvg1443" width="272" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1445" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1444"><clipPath id="gridRectMaskc53hshih"><rect id="SvgjsRect1450" width="277" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskc53hshih"><rect id="SvgjsRect1451" width="312" height="192" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1457" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1458" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop><stop id="SvgjsStop1459" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1460" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1449" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1463" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1464" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1467" class="apexcharts-grid"><line id="SvgjsLine1469" x1="0" y1="152" x2="272" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1468" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1453" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1454" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 152L 0 87.55325749741469C 4.139130434782608 87.55325749741469 7.6869565217391305 79.69389865563599 11.826086956521738 79.69389865563599C 15.965217391304346 79.69389865563599 19.51304347826087 109.55946225439504 23.652173913043477 109.55946225439504C 27.791304347826085 109.55946225439504 31.33913043478261 96.98448810754911 35.47826086956522 96.98448810754911C 39.61739130434783 96.98448810754911 43.165217391304346 56.115822130299904 47.30434782608695 56.115822130299904C 51.44347826086956 56.115822130299904 54.99130434782609 71.83453981385729 59.130434782608695 71.83453981385729C 63.2695652173913 71.83453981385729 66.81739130434782 122.13443640124095 70.95652173913044 122.13443640124095C 75.09565217391304 122.13443640124095 78.64347826086957 68.69079627714581 82.78260869565217 68.69079627714581C 86.92173913043477 68.69079627714581 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 67.11892450879007 106.43478260869564 67.11892450879007C 110.57391304347826 67.11892450879007 114.12173913043478 90.69700103412617 118.26086956521739 90.69700103412617C 122.39999999999999 90.69700103412617 125.94782608695652 114.27507755946226 130.08695652173913 114.27507755946226C 134.22608695652173 114.27507755946226 137.77391304347827 5.815925542916233 141.91304347826087 5.815925542916233C 146.05217391304348 5.815925542916233 149.6 67.11892450879007 153.7391304347826 67.11892450879007C 157.8782608695652 67.11892450879007 161.42608695652174 81.26577042399173 165.56521739130434 81.26577042399173C 169.70434782608694 81.26577042399173 173.25217391304346 109.55946225439504 177.39130434782606 109.55946225439504C 181.53043478260867 109.55946225439504 185.0782608695652 78.12202688728024 189.2173913043478 78.12202688728024C 193.35652173913041 78.12202688728024 196.90434782608696 103.27197518097208 201.04347826086956 103.27197518097208C 205.18260869565216 103.27197518097208 208.73043478260868 49.82833505687694 212.86956521739128 49.82833505687694C 217.00869565217388 49.82833505687694 220.55652173913043 63.97518097207859 224.69565217391303 63.97518097207859C 228.83478260869563 63.97518097207859 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 92.2688728024819 248.3478260869565 92.2688728024819C 252.4869565217391 92.2688728024819 256.03478260869565 93.84074457083764 260.17391304347825 93.84074457083764C 264.31304347826085 93.84074457083764 267.8608695652174 54.543950361944155 272 54.543950361944155C 272 54.543950361944155 272 54.543950361944155 272 152M 272 54.543950361944155z" fill="url(#SvgjsLinearGradient1457)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc53hshih)" pathTo="M 0 152L 0 87.55325749741469C 4.139130434782608 87.55325749741469 7.6869565217391305 79.69389865563599 11.826086956521738 79.69389865563599C 15.965217391304346 79.69389865563599 19.51304347826087 109.55946225439504 23.652173913043477 109.55946225439504C 27.791304347826085 109.55946225439504 31.33913043478261 96.98448810754911 35.47826086956522 96.98448810754911C 39.61739130434783 96.98448810754911 43.165217391304346 56.115822130299904 47.30434782608695 56.115822130299904C 51.44347826086956 56.115822130299904 54.99130434782609 71.83453981385729 59.130434782608695 71.83453981385729C 63.2695652173913 71.83453981385729 66.81739130434782 122.13443640124095 70.95652173913044 122.13443640124095C 75.09565217391304 122.13443640124095 78.64347826086957 68.69079627714581 82.78260869565217 68.69079627714581C 86.92173913043477 68.69079627714581 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 67.11892450879007 106.43478260869564 67.11892450879007C 110.57391304347826 67.11892450879007 114.12173913043478 90.69700103412617 118.26086956521739 90.69700103412617C 122.39999999999999 90.69700103412617 125.94782608695652 114.27507755946226 130.08695652173913 114.27507755946226C 134.22608695652173 114.27507755946226 137.77391304347827 5.815925542916233 141.91304347826087 5.815925542916233C 146.05217391304348 5.815925542916233 149.6 67.11892450879007 153.7391304347826 67.11892450879007C 157.8782608695652 67.11892450879007 161.42608695652174 81.26577042399173 165.56521739130434 81.26577042399173C 169.70434782608694 81.26577042399173 173.25217391304346 109.55946225439504 177.39130434782606 109.55946225439504C 181.53043478260867 109.55946225439504 185.0782608695652 78.12202688728024 189.2173913043478 78.12202688728024C 193.35652173913041 78.12202688728024 196.90434782608696 103.27197518097208 201.04347826086956 103.27197518097208C 205.18260869565216 103.27197518097208 208.73043478260868 49.82833505687694 212.86956521739128 49.82833505687694C 217.00869565217388 49.82833505687694 220.55652173913043 63.97518097207859 224.69565217391303 63.97518097207859C 228.83478260869563 63.97518097207859 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 92.2688728024819 248.3478260869565 92.2688728024819C 252.4869565217391 92.2688728024819 256.03478260869565 93.84074457083764 260.17391304347825 93.84074457083764C 264.31304347826085 93.84074457083764 267.8608695652174 54.543950361944155 272 54.543950361944155C 272 54.543950361944155 272 54.543950361944155 272 152M 272 54.543950361944155z" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><path id="apexcharts-area-0" d="M 0 87.55325749741469C 4.139130434782608 87.55325749741469 7.6869565217391305 79.69389865563599 11.826086956521738 79.69389865563599C 15.965217391304346 79.69389865563599 19.51304347826087 109.55946225439504 23.652173913043477 109.55946225439504C 27.791304347826085 109.55946225439504 31.33913043478261 96.98448810754911 35.47826086956522 96.98448810754911C 39.61739130434783 96.98448810754911 43.165217391304346 56.115822130299904 47.30434782608695 56.115822130299904C 51.44347826086956 56.115822130299904 54.99130434782609 71.83453981385729 59.130434782608695 71.83453981385729C 63.2695652173913 71.83453981385729 66.81739130434782 122.13443640124095 70.95652173913044 122.13443640124095C 75.09565217391304 122.13443640124095 78.64347826086957 68.69079627714581 82.78260869565217 68.69079627714581C 86.92173913043477 68.69079627714581 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 67.11892450879007 106.43478260869564 67.11892450879007C 110.57391304347826 67.11892450879007 114.12173913043478 90.69700103412617 118.26086956521739 90.69700103412617C 122.39999999999999 90.69700103412617 125.94782608695652 114.27507755946226 130.08695652173913 114.27507755946226C 134.22608695652173 114.27507755946226 137.77391304347827 5.815925542916233 141.91304347826087 5.815925542916233C 146.05217391304348 5.815925542916233 149.6 67.11892450879007 153.7391304347826 67.11892450879007C 157.8782608695652 67.11892450879007 161.42608695652174 81.26577042399173 165.56521739130434 81.26577042399173C 169.70434782608694 81.26577042399173 173.25217391304346 109.55946225439504 177.39130434782606 109.55946225439504C 181.53043478260867 109.55946225439504 185.0782608695652 78.12202688728024 189.2173913043478 78.12202688728024C 193.35652173913041 78.12202688728024 196.90434782608696 103.27197518097208 201.04347826086956 103.27197518097208C 205.18260869565216 103.27197518097208 208.73043478260868 49.82833505687694 212.86956521739128 49.82833505687694C 217.00869565217388 49.82833505687694 220.55652173913043 63.97518097207859 224.69565217391303 63.97518097207859C 228.83478260869563 63.97518097207859 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 92.2688728024819 248.3478260869565 92.2688728024819C 252.4869565217391 92.2688728024819 256.03478260869565 93.84074457083764 260.17391304347825 93.84074457083764C 264.31304347826085 93.84074457083764 267.8608695652174 54.543950361944155 272 54.543950361944155" fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc53hshih)" pathTo="M 0 87.55325749741469C 4.139130434782608 87.55325749741469 7.6869565217391305 79.69389865563599 11.826086956521738 79.69389865563599C 15.965217391304346 79.69389865563599 19.51304347826087 109.55946225439504 23.652173913043477 109.55946225439504C 27.791304347826085 109.55946225439504 31.33913043478261 96.98448810754911 35.47826086956522 96.98448810754911C 39.61739130434783 96.98448810754911 43.165217391304346 56.115822130299904 47.30434782608695 56.115822130299904C 51.44347826086956 56.115822130299904 54.99130434782609 71.83453981385729 59.130434782608695 71.83453981385729C 63.2695652173913 71.83453981385729 66.81739130434782 122.13443640124095 70.95652173913044 122.13443640124095C 75.09565217391304 122.13443640124095 78.64347826086957 68.69079627714581 82.78260869565217 68.69079627714581C 86.92173913043477 68.69079627714581 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 67.11892450879007 106.43478260869564 67.11892450879007C 110.57391304347826 67.11892450879007 114.12173913043478 90.69700103412617 118.26086956521739 90.69700103412617C 122.39999999999999 90.69700103412617 125.94782608695652 114.27507755946226 130.08695652173913 114.27507755946226C 134.22608695652173 114.27507755946226 137.77391304347827 5.815925542916233 141.91304347826087 5.815925542916233C 146.05217391304348 5.815925542916233 149.6 67.11892450879007 153.7391304347826 67.11892450879007C 157.8782608695652 67.11892450879007 161.42608695652174 81.26577042399173 165.56521739130434 81.26577042399173C 169.70434782608694 81.26577042399173 173.25217391304346 109.55946225439504 177.39130434782606 109.55946225439504C 181.53043478260867 109.55946225439504 185.0782608695652 78.12202688728024 189.2173913043478 78.12202688728024C 193.35652173913041 78.12202688728024 196.90434782608696 103.27197518097208 201.04347826086956 103.27197518097208C 205.18260869565216 103.27197518097208 208.73043478260868 49.82833505687694 212.86956521739128 49.82833505687694C 217.00869565217388 49.82833505687694 220.55652173913043 63.97518097207859 224.69565217391303 63.97518097207859C 228.83478260869563 63.97518097207859 232.38260869565218 84.40951396070321 236.52173913043478 84.40951396070321C 240.66086956521738 84.40951396070321 244.2086956521739 92.2688728024819 248.3478260869565 92.2688728024819C 252.4869565217391 92.2688728024819 256.03478260869565 93.84074457083764 260.17391304347825 93.84074457083764C 264.31304347826085 93.84074457083764 267.8608695652174 54.543950361944155 272 54.543950361944155" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><g id="SvgjsG1455" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1475" r="0" cx="0" cy="0" class="apexcharts-marker wlbm79kd1 no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1456" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1470" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1471" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1472" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1473" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1474" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1448" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1465" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1466" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 273px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card bg-dark">
                                                    <div class="rm-border bg-dark responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-warning">
                                                                Inbox
                                                                Total</h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-warning"><span>274</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-4" style="min-height: 152px;"><div id="apexcharts4mu2v5yt" class="apexcharts-canvas apexcharts4mu2v5yt light" style="width: 272px; height: 152px;"><svg id="SvgjsSvg1479" width="272" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1481" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1480"><clipPath id="gridRectMask4mu2v5yt"><rect id="SvgjsRect1486" width="277" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4mu2v5yt"><rect id="SvgjsRect1487" width="312" height="192" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1493" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1494" stop-opacity="0.2" stop-color="rgba(153,153,153,0.2)" offset="0"></stop><stop id="SvgjsStop1495" stop-opacity="0.7" stop-color="rgba(153,153,153,0.7)" offset="0.9"></stop><stop id="SvgjsStop1496" stop-opacity="0.7" stop-color="rgba(153,153,153,0.7)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1485" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1499" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1500" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1503" class="apexcharts-grid"><line id="SvgjsLine1505" x1="0" y1="152" x2="272" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1504" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1489" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1490" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 152L 0 56.115822130299904C 4.139130434782608 56.115822130299904 7.6869565217391305 114.27507755946226 11.826086956521738 114.27507755946226C 15.965217391304346 114.27507755946226 19.51304347826087 93.84074457083764 23.652173913043477 93.84074457083764C 27.791304347826085 93.84074457083764 31.33913043478261 54.543950361944155 35.47826086956522 54.543950361944155C 39.61739130434783 54.543950361944155 43.165217391304346 81.26577042399173 47.30434782608695 81.26577042399173C 51.44347826086956 81.26577042399173 54.99130434782609 87.55325749741469 59.130434782608695 87.55325749741469C 63.2695652173913 87.55325749741469 66.81739130434782 90.69700103412617 70.95652173913044 90.69700103412617C 75.09565217391304 90.69700103412617 78.64347826086957 109.55946225439504 82.78260869565217 109.55946225439504C 86.92173913043477 109.55946225439504 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 109.55946225439504 106.43478260869564 109.55946225439504C 110.57391304347826 109.55946225439504 114.12173913043478 71.83453981385729 118.26086956521739 71.83453981385729C 122.39999999999999 71.83453981385729 125.94782608695652 78.12202688728024 130.08695652173913 78.12202688728024C 134.22608695652173 78.12202688728024 137.77391304347827 67.11892450879007 141.91304347826087 67.11892450879007C 146.05217391304348 67.11892450879007 149.6 49.82833505687694 153.7391304347826 49.82833505687694C 157.8782608695652 49.82833505687694 161.42608695652174 84.40951396070321 165.56521739130434 84.40951396070321C 169.70434782608694 84.40951396070321 173.25217391304346 63.97518097207859 177.39130434782606 63.97518097207859C 181.53043478260867 63.97518097207859 185.0782608695652 96.98448810754911 189.2173913043478 96.98448810754911C 193.35652173913041 96.98448810754911 196.90434782608696 79.69389865563599 201.04347826086956 79.69389865563599C 205.18260869565216 79.69389865563599 208.73043478260868 68.69079627714581 212.86956521739128 68.69079627714581C 217.00869565217388 68.69079627714581 220.55652173913043 122.13443640124095 224.69565217391303 122.13443640124095C 228.83478260869563 122.13443640124095 232.38260869565218 103.27197518097208 236.52173913043478 103.27197518097208C 240.66086956521738 103.27197518097208 244.2086956521739 5.815925542916233 248.3478260869565 5.815925542916233C 252.4869565217391 5.815925542916233 256.03478260869565 67.11892450879007 260.17391304347825 67.11892450879007C 264.31304347826085 67.11892450879007 267.8608695652174 92.2688728024819 272 92.2688728024819C 272 92.2688728024819 272 92.2688728024819 272 152M 272 92.2688728024819z" fill="url(#SvgjsLinearGradient1493)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4mu2v5yt)" pathTo="M 0 152L 0 56.115822130299904C 4.139130434782608 56.115822130299904 7.6869565217391305 114.27507755946226 11.826086956521738 114.27507755946226C 15.965217391304346 114.27507755946226 19.51304347826087 93.84074457083764 23.652173913043477 93.84074457083764C 27.791304347826085 93.84074457083764 31.33913043478261 54.543950361944155 35.47826086956522 54.543950361944155C 39.61739130434783 54.543950361944155 43.165217391304346 81.26577042399173 47.30434782608695 81.26577042399173C 51.44347826086956 81.26577042399173 54.99130434782609 87.55325749741469 59.130434782608695 87.55325749741469C 63.2695652173913 87.55325749741469 66.81739130434782 90.69700103412617 70.95652173913044 90.69700103412617C 75.09565217391304 90.69700103412617 78.64347826086957 109.55946225439504 82.78260869565217 109.55946225439504C 86.92173913043477 109.55946225439504 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 109.55946225439504 106.43478260869564 109.55946225439504C 110.57391304347826 109.55946225439504 114.12173913043478 71.83453981385729 118.26086956521739 71.83453981385729C 122.39999999999999 71.83453981385729 125.94782608695652 78.12202688728024 130.08695652173913 78.12202688728024C 134.22608695652173 78.12202688728024 137.77391304347827 67.11892450879007 141.91304347826087 67.11892450879007C 146.05217391304348 67.11892450879007 149.6 49.82833505687694 153.7391304347826 49.82833505687694C 157.8782608695652 49.82833505687694 161.42608695652174 84.40951396070321 165.56521739130434 84.40951396070321C 169.70434782608694 84.40951396070321 173.25217391304346 63.97518097207859 177.39130434782606 63.97518097207859C 181.53043478260867 63.97518097207859 185.0782608695652 96.98448810754911 189.2173913043478 96.98448810754911C 193.35652173913041 96.98448810754911 196.90434782608696 79.69389865563599 201.04347826086956 79.69389865563599C 205.18260869565216 79.69389865563599 208.73043478260868 68.69079627714581 212.86956521739128 68.69079627714581C 217.00869565217388 68.69079627714581 220.55652173913043 122.13443640124095 224.69565217391303 122.13443640124095C 228.83478260869563 122.13443640124095 232.38260869565218 103.27197518097208 236.52173913043478 103.27197518097208C 240.66086956521738 103.27197518097208 244.2086956521739 5.815925542916233 248.3478260869565 5.815925542916233C 252.4869565217391 5.815925542916233 256.03478260869565 67.11892450879007 260.17391304347825 67.11892450879007C 264.31304347826085 67.11892450879007 267.8608695652174 92.2688728024819 272 92.2688728024819C 272 92.2688728024819 272 92.2688728024819 272 152M 272 92.2688728024819z" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><path id="apexcharts-area-0" d="M 0 56.115822130299904C 4.139130434782608 56.115822130299904 7.6869565217391305 114.27507755946226 11.826086956521738 114.27507755946226C 15.965217391304346 114.27507755946226 19.51304347826087 93.84074457083764 23.652173913043477 93.84074457083764C 27.791304347826085 93.84074457083764 31.33913043478261 54.543950361944155 35.47826086956522 54.543950361944155C 39.61739130434783 54.543950361944155 43.165217391304346 81.26577042399173 47.30434782608695 81.26577042399173C 51.44347826086956 81.26577042399173 54.99130434782609 87.55325749741469 59.130434782608695 87.55325749741469C 63.2695652173913 87.55325749741469 66.81739130434782 90.69700103412617 70.95652173913044 90.69700103412617C 75.09565217391304 90.69700103412617 78.64347826086957 109.55946225439504 82.78260869565217 109.55946225439504C 86.92173913043477 109.55946225439504 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 109.55946225439504 106.43478260869564 109.55946225439504C 110.57391304347826 109.55946225439504 114.12173913043478 71.83453981385729 118.26086956521739 71.83453981385729C 122.39999999999999 71.83453981385729 125.94782608695652 78.12202688728024 130.08695652173913 78.12202688728024C 134.22608695652173 78.12202688728024 137.77391304347827 67.11892450879007 141.91304347826087 67.11892450879007C 146.05217391304348 67.11892450879007 149.6 49.82833505687694 153.7391304347826 49.82833505687694C 157.8782608695652 49.82833505687694 161.42608695652174 84.40951396070321 165.56521739130434 84.40951396070321C 169.70434782608694 84.40951396070321 173.25217391304346 63.97518097207859 177.39130434782606 63.97518097207859C 181.53043478260867 63.97518097207859 185.0782608695652 96.98448810754911 189.2173913043478 96.98448810754911C 193.35652173913041 96.98448810754911 196.90434782608696 79.69389865563599 201.04347826086956 79.69389865563599C 205.18260869565216 79.69389865563599 208.73043478260868 68.69079627714581 212.86956521739128 68.69079627714581C 217.00869565217388 68.69079627714581 220.55652173913043 122.13443640124095 224.69565217391303 122.13443640124095C 228.83478260869563 122.13443640124095 232.38260869565218 103.27197518097208 236.52173913043478 103.27197518097208C 240.66086956521738 103.27197518097208 244.2086956521739 5.815925542916233 248.3478260869565 5.815925542916233C 252.4869565217391 5.815925542916233 256.03478260869565 67.11892450879007 260.17391304347825 67.11892450879007C 264.31304347826085 67.11892450879007 267.8608695652174 92.2688728024819 272 92.2688728024819" fill="none" fill-opacity="1" stroke="rgba(255,255,255,.8)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4mu2v5yt)" pathTo="M 0 56.115822130299904C 4.139130434782608 56.115822130299904 7.6869565217391305 114.27507755946226 11.826086956521738 114.27507755946226C 15.965217391304346 114.27507755946226 19.51304347826087 93.84074457083764 23.652173913043477 93.84074457083764C 27.791304347826085 93.84074457083764 31.33913043478261 54.543950361944155 35.47826086956522 54.543950361944155C 39.61739130434783 54.543950361944155 43.165217391304346 81.26577042399173 47.30434782608695 81.26577042399173C 51.44347826086956 81.26577042399173 54.99130434782609 87.55325749741469 59.130434782608695 87.55325749741469C 63.2695652173913 87.55325749741469 66.81739130434782 90.69700103412617 70.95652173913044 90.69700103412617C 75.09565217391304 90.69700103412617 78.64347826086957 109.55946225439504 82.78260869565217 109.55946225439504C 86.92173913043477 109.55946225439504 90.4695652173913 96.98448810754911 94.6086956521739 96.98448810754911C 98.74782608695651 96.98448810754911 102.29565217391304 109.55946225439504 106.43478260869564 109.55946225439504C 110.57391304347826 109.55946225439504 114.12173913043478 71.83453981385729 118.26086956521739 71.83453981385729C 122.39999999999999 71.83453981385729 125.94782608695652 78.12202688728024 130.08695652173913 78.12202688728024C 134.22608695652173 78.12202688728024 137.77391304347827 67.11892450879007 141.91304347826087 67.11892450879007C 146.05217391304348 67.11892450879007 149.6 49.82833505687694 153.7391304347826 49.82833505687694C 157.8782608695652 49.82833505687694 161.42608695652174 84.40951396070321 165.56521739130434 84.40951396070321C 169.70434782608694 84.40951396070321 173.25217391304346 63.97518097207859 177.39130434782606 63.97518097207859C 181.53043478260867 63.97518097207859 185.0782608695652 96.98448810754911 189.2173913043478 96.98448810754911C 193.35652173913041 96.98448810754911 196.90434782608696 79.69389865563599 201.04347826086956 79.69389865563599C 205.18260869565216 79.69389865563599 208.73043478260868 68.69079627714581 212.86956521739128 68.69079627714581C 217.00869565217388 68.69079627714581 220.55652173913043 122.13443640124095 224.69565217391303 122.13443640124095C 228.83478260869563 122.13443640124095 232.38260869565218 103.27197518097208 236.52173913043478 103.27197518097208C 240.66086956521738 103.27197518097208 244.2086956521739 5.815925542916233 248.3478260869565 5.815925542916233C 252.4869565217391 5.815925542916233 256.03478260869565 67.11892450879007 260.17391304347825 67.11892450879007C 264.31304347826085 67.11892450879007 267.8608695652174 92.2688728024819 272 92.2688728024819" pathFrom="M -1 152L -1 152L 11.826086956521738 152L 23.652173913043477 152L 35.47826086956522 152L 47.30434782608695 152L 59.130434782608695 152L 70.95652173913044 152L 82.78260869565217 152L 94.6086956521739 152L 106.43478260869564 152L 118.26086956521739 152L 130.08695652173913 152L 141.91304347826087 152L 153.7391304347826 152L 165.56521739130434 152L 177.39130434782606 152L 189.2173913043478 152L 201.04347826086956 152L 212.86956521739128 152L 224.69565217391303 152L 236.52173913043478 152L 248.3478260869565 152L 260.17391304347825 152L 272 152"></path><g id="SvgjsG1491" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1511" r="0" cx="0" cy="0" class="apexcharts-marker w94m43p3lh no-pointer-events" stroke="#ffffff" fill="rgba(255,255,255,.8)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1492" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1506" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1507" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1508" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1509" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1510" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1484" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1501" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1502" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgba(255, 255, 255, 0.8);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 273px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-header">Active Users
                                                        <div class="btn-actions-pane-right">
                                                            <div role="group" class="btn-group-sm btn-group">
                                                                <button class="active btn btn-focus">Last Week</button>
                                                                <button class="btn btn-focus">All Month</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>Name</th>
                                                                <th class="text-center">City</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Sales</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center text-muted">#345</td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading">John Doe</div>
                                                                                <div class="widget-subheading opacity-7">Web
                                                                                    Developer
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">Madrid</td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-warning">Pending</div>
                                                                </td>
                                                                <td class="text-center" style="width: 150px;">
                                                                    <div class="pie-sparkline"><canvas width="45" height="45" style="display: inline-block; width: 45px; height: 45px; vertical-align: top;"></canvas></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted">#347</td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading">Ruben Tillman
                                                                                </div>
                                                                                <div class="widget-subheading opacity-7">
                                                                                    Etiam
                                                                                    sit amet orci eget
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">Berlin</td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-success">Completed</div>
                                                                </td>
                                                                <td class="text-center" style="width: 150px; position: relative;">
                                                                    <div id="sparkline-chart4" style="min-height: 35px;"><div id="apexchartsk7h17i01h" class="apexcharts-canvas apexchartsk7h17i01h light" style="width: 100px; height: 35px;"><svg id="SvgjsSvg1334" width="100" height="35" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1336" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1335"><clipPath id="gridRectMaskk7h17i01h"><rect id="SvgjsRect1341" width="102" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk7h17i01h"><rect id="SvgjsRect1342" width="140" height="75" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1340" x1="0" y1="0" x2="0" y2="35" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1349" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1350" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1353" class="apexcharts-grid"><line id="SvgjsLine1355" x1="0" y1="35" x2="100" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1354" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1344" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1345" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M 0 28.4375L 10 2.1875L 20 14.4375L 30 6.5625L 40 28.875L 50 34.125L 60 17.0625L 70 11.375L 80 33.25L 90 23.1875L 100 28.4375" fill="none" fill-opacity="1" stroke="rgba(0,143,251,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk7h17i01h)" pathTo="M 0 28.4375L 10 2.1875L 20 14.4375L 30 6.5625L 40 28.875L 50 34.125L 60 17.0625L 70 11.375L 80 33.25L 90 23.1875L 100 28.4375" pathFrom="M -1 35L -1 35L 10 35L 20 35L 30 35L 40 35L 50 35L 60 35L 70 35L 80 35L 90 35L 100 35"></path><g id="SvgjsG1346" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1361" r="0" cx="0" cy="0" class="apexcharts-marker wc6dz3wlak no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1347" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1356" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1357" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1358" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1359" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1360" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1339" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1351" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1352" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 59px;"></div></div><div class="contract-trigger"></div></div></td>
                                                                <td class="text-center">
                                                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted">#321</td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading">Elliot Huber
                                                                                </div>
                                                                                <div class="widget-subheading opacity-7">
                                                                                    Lorem
                                                                                    ipsum dolor sic
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">London</td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-danger">In Progress</div>
                                                                </td>
                                                                <td class="text-center" style="width: 150px; position: relative;">
                                                                    <div id="sparkline-chart8" style="min-height: 35px;"><div id="apexchartsg0xmskau" class="apexcharts-canvas apexchartsg0xmskau light" style="width: 100px; height: 35px;"><svg id="SvgjsSvg1364" width="100" height="35" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1366" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1365"><linearGradient id="SvgjsLinearGradient1369" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1370" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1371" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1372" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskg0xmskau"><rect id="SvgjsRect1375" width="100" height="35" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskg0xmskau"><rect id="SvgjsRect1376" width="140" height="75" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1374" x1="0" y1="0" x2="0" y2="35" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="url(#SvgjsLinearGradient1369)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1392" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1393" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1396" class="apexcharts-grid"><line id="SvgjsLine1398" x1="0" y1="35" x2="100" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1397" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1378" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1379" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 0.9090909090909092 35L 0.9090909090909092 26.25L 8.181818181818183 26.25L 8.181818181818183 35L 0.9090909090909092 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 0.9090909090909092 35L 0.9090909090909092 26.25L 8.181818181818183 26.25L 8.181818181818183 35L 0.9090909090909092 35" pathFrom="M 0.9090909090909092 35L 0.9090909090909092 35L 8.181818181818183 35L 8.181818181818183 35L 0.9090909090909092 35" cy="26.25" cx="10" j="0" val="25" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 10 35L 10 11.900000000000002L 17.272727272727273 11.900000000000002L 17.272727272727273 35L 10 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 10 35L 10 11.900000000000002L 17.272727272727273 11.900000000000002L 17.272727272727273 35L 10 35" pathFrom="M 10 35L 10 35L 17.272727272727273 35L 17.272727272727273 35L 10 35" cy="11.900000000000002" cx="19.090909090909093" j="1" val="66" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 19.090909090909093 35L 19.090909090909093 20.65L 26.363636363636367 20.65L 26.363636363636367 35L 19.090909090909093 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 19.090909090909093 35L 19.090909090909093 20.65L 26.363636363636367 20.65L 26.363636363636367 35L 19.090909090909093 35" pathFrom="M 19.090909090909093 35L 19.090909090909093 35L 26.363636363636367 35L 26.363636363636367 35L 19.090909090909093 35" cy="20.65" cx="28.181818181818187" j="2" val="41" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 28.181818181818187 35L 28.181818181818187 3.8500000000000014L 35.45454545454546 3.8500000000000014L 35.45454545454546 35L 28.181818181818187 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 28.181818181818187 35L 28.181818181818187 3.8500000000000014L 35.45454545454546 3.8500000000000014L 35.45454545454546 35L 28.181818181818187 35" pathFrom="M 28.181818181818187 35L 28.181818181818187 35L 35.45454545454546 35L 35.45454545454546 35L 28.181818181818187 35" cy="3.8500000000000014" cx="37.27272727272728" j="3" val="89" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 37.27272727272728 35L 37.27272727272728 12.95L 44.545454545454554 12.95L 44.545454545454554 35L 37.27272727272728 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 37.27272727272728 35L 37.27272727272728 12.95L 44.545454545454554 12.95L 44.545454545454554 35L 37.27272727272728 35" pathFrom="M 37.27272727272728 35L 37.27272727272728 35L 44.545454545454554 35L 44.545454545454554 35L 37.27272727272728 35" cy="12.95" cx="46.363636363636374" j="4" val="63" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 46.363636363636374 35L 46.363636363636374 26.25L 53.63636363636365 26.25L 53.63636363636365 35L 46.363636363636374 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 46.363636363636374 35L 46.363636363636374 26.25L 53.63636363636365 26.25L 53.63636363636365 35L 46.363636363636374 35" pathFrom="M 46.363636363636374 35L 46.363636363636374 35L 53.63636363636365 35L 53.63636363636365 35L 46.363636363636374 35" cy="26.25" cx="55.45454545454547" j="5" val="25" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 55.45454545454547 35L 55.45454545454547 19.6L 62.72727272727274 19.6L 62.72727272727274 35L 55.45454545454547 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 55.45454545454547 35L 55.45454545454547 19.6L 62.72727272727274 19.6L 62.72727272727274 35L 55.45454545454547 35" pathFrom="M 55.45454545454547 35L 55.45454545454547 35L 62.72727272727274 35L 62.72727272727274 35L 55.45454545454547 35" cy="19.6" cx="64.54545454545456" j="6" val="44" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 64.54545454545456 35L 64.54545454545456 30.8L 71.81818181818184 30.8L 71.81818181818184 35L 64.54545454545456 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 64.54545454545456 35L 64.54545454545456 30.8L 71.81818181818184 30.8L 71.81818181818184 35L 64.54545454545456 35" pathFrom="M 64.54545454545456 35L 64.54545454545456 35L 71.81818181818184 35L 71.81818181818184 35L 64.54545454545456 35" cy="30.8" cx="73.63636363636365" j="7" val="12" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 73.63636363636365 35L 73.63636363636365 22.4L 80.90909090909093 22.4L 80.90909090909093 35L 73.63636363636365 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 73.63636363636365 35L 73.63636363636365 22.4L 80.90909090909093 22.4L 80.90909090909093 35L 73.63636363636365 35" pathFrom="M 73.63636363636365 35L 73.63636363636365 35L 80.90909090909093 35L 80.90909090909093 35L 73.63636363636365 35" cy="22.4" cx="82.72727272727275" j="8" val="36" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 82.72727272727275 35L 82.72727272727275 31.85L 90.00000000000003 31.85L 90.00000000000003 35L 82.72727272727275 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 82.72727272727275 35L 82.72727272727275 31.85L 90.00000000000003 31.85L 90.00000000000003 35L 82.72727272727275 35" pathFrom="M 82.72727272727275 35L 82.72727272727275 35L 90.00000000000003 35L 90.00000000000003 35L 82.72727272727275 35" cy="31.85" cx="91.81818181818184" j="9" val="9" barWidth="7.272727272727273"></path><path id="apexcharts-bar-area-0" d="M 91.81818181818184 35L 91.81818181818184 16.1L 99.09090909090912 16.1L 99.09090909090912 35L 91.81818181818184 35" fill="rgba(74,71,196,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskg0xmskau)" pathTo="M 91.81818181818184 35L 91.81818181818184 16.1L 99.09090909090912 16.1L 99.09090909090912 35L 91.81818181818184 35" pathFrom="M 91.81818181818184 35L 91.81818181818184 35L 99.09090909090912 35L 99.09090909090912 35L 91.81818181818184 35" cy="16.1" cx="100.90909090909093" j="10" val="54" barWidth="7.272727272727273"></path><g id="SvgjsG1380" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1399" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1400" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1401" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1402" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1403" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1373" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1394" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1395" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(74, 71, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 59px;"></div></div><div class="contract-trigger"></div></div></td>
                                                                <td class="text-center">
                                                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-muted">#55</td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading">Vinnie Wagstaff
                                                                                </div>
                                                                                <div class="widget-subheading opacity-7">UI
                                                                                    Designer
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">Amsterdam</td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-info">On Hold</div>
                                                                </td>
                                                                <td class="text-center" style="width: 150px; position: relative;">
                                                                    <div id="sparkline-chart9" style="min-height: 35px;"><div id="apexchartsbjoukv3a" class="apexcharts-canvas apexchartsbjoukv3a light" style="width: 100px; height: 35px;"><svg id="SvgjsSvg1407" width="100" height="35" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1409" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1408"><clipPath id="gridRectMaskbjoukv3a"><rect id="SvgjsRect1414" width="102" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskbjoukv3a"><rect id="SvgjsRect1415" width="140" height="75" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1421" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1422" stop-opacity="0.65" stop-color="rgba(58,196,125,0.65)" offset="0"></stop><stop id="SvgjsStop1423" stop-opacity="0.5" stop-color="rgba(157,226,190,0.5)" offset="1"></stop><stop id="SvgjsStop1424" stop-opacity="0.5" stop-color="rgba(157,226,190,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1413" x1="0" y1="0" x2="0" y2="35" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1427" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1428" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1431" class="apexcharts-grid"><line id="SvgjsLine1433" x1="0" y1="35" x2="100" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1432" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1417" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1418" class="apexcharts-series seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 35L 0 26.25C 3.5 26.25 6.5 11.900000000000002 10 11.900000000000002C 13.5 11.900000000000002 16.5 20.65 20 20.65C 23.5 20.65 26.5 3.8500000000000014 30 3.8500000000000014C 33.5 3.8500000000000014 36.5 12.95 40 12.95C 43.5 12.95 46.5 26.25 50 26.25C 53.5 26.25 56.5 19.6 60 19.6C 63.5 19.6 66.5 30.8 70 30.8C 73.5 30.8 76.5 22.4 80 22.4C 83.5 22.4 86.5 31.85 90 31.85C 93.5 31.85 96.5 16.1 100 16.1C 100 16.1 100 16.1 100 35M 100 16.1z" fill="url(#SvgjsLinearGradient1421)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbjoukv3a)" pathTo="M 0 35L 0 26.25C 3.5 26.25 6.5 11.900000000000002 10 11.900000000000002C 13.5 11.900000000000002 16.5 20.65 20 20.65C 23.5 20.65 26.5 3.8500000000000014 30 3.8500000000000014C 33.5 3.8500000000000014 36.5 12.95 40 12.95C 43.5 12.95 46.5 26.25 50 26.25C 53.5 26.25 56.5 19.6 60 19.6C 63.5 19.6 66.5 30.8 70 30.8C 73.5 30.8 76.5 22.4 80 22.4C 83.5 22.4 86.5 31.85 90 31.85C 93.5 31.85 96.5 16.1 100 16.1C 100 16.1 100 16.1 100 35M 100 16.1z" pathFrom="M -1 35L -1 35L 10 35L 20 35L 30 35L 40 35L 50 35L 60 35L 70 35L 80 35L 90 35L 100 35"></path><path id="apexcharts-area-0" d="M 0 26.25C 3.5 26.25 6.5 11.900000000000002 10 11.900000000000002C 13.5 11.900000000000002 16.5 20.65 20 20.65C 23.5 20.65 26.5 3.8500000000000014 30 3.8500000000000014C 33.5 3.8500000000000014 36.5 12.95 40 12.95C 43.5 12.95 46.5 26.25 50 26.25C 53.5 26.25 56.5 19.6 60 19.6C 63.5 19.6 66.5 30.8 70 30.8C 73.5 30.8 76.5 22.4 80 22.4C 83.5 22.4 86.5 31.85 90 31.85C 93.5 31.85 96.5 16.1 100 16.1" fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbjoukv3a)" pathTo="M 0 26.25C 3.5 26.25 6.5 11.900000000000002 10 11.900000000000002C 13.5 11.900000000000002 16.5 20.65 20 20.65C 23.5 20.65 26.5 3.8500000000000014 30 3.8500000000000014C 33.5 3.8500000000000014 36.5 12.95 40 12.95C 43.5 12.95 46.5 26.25 50 26.25C 53.5 26.25 56.5 19.6 60 19.6C 63.5 19.6 66.5 30.8 70 30.8C 73.5 30.8 76.5 22.4 80 22.4C 83.5 22.4 86.5 31.85 90 31.85C 93.5 31.85 96.5 16.1 100 16.1" pathFrom="M -1 35L -1 35L 10 35L 20 35L 30 35L 40 35L 50 35L 60 35L 70 35L 80 35L 90 35L 100 35"></path><g id="SvgjsG1419" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1439" r="0" cx="0" cy="0" class="apexcharts-marker wvbyv52xc no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1420" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1434" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1435" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1436" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1437" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1438" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1412" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1429" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1430" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 59px;"></div></div><div class="contract-trigger"></div></div></td>
                                                                <td class="text-center">
                                                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="d-block text-center card-footer">
                                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                                            <i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                        <button class="btn-wide btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mb-3">
                                            <h5 class="menu-header-title text-capitalize mb-3 fsize-3">Profile Cards</h5>
                                            <div role="group" class="mb-3 btn-group-lg btn-group">
                                                <button class="btn-shadow  btn btn-alternate btn-pill pl-3">Hour</button>
                                                <button class="btn-shadow  btn btn-alternate">Day</button>
                                                <button class="btn-shadow  btn btn-alternate">Week</button>
                                                <button class="btn-shadow  btn btn-alternate btn-pill pr-3">Month</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhgAAAgMBAQEAAAAAAAAAAAAABAcDBQYIAgEBAAMBAQEAAAAAAAAAAAAAAAIDBAEFABAAAgEDAwMCBAUEAwAAAAAAAQIDEQQFACESMRMGQSJRQhQHYZEyIxVxgbEk0VIIEQEAAwACAgEEAgIDAAAAAAABABECIQMxEkFRIhME8JFh8YHBMv/aAAwDAQACEQMRAD8AduMyGKtOxbtGbS3kCyR27k0DrUskbEnkh6kfnrPadHsxrQq2/wA5hbXF3ZJH9Mf9R34RKWE78uJ49tvlU1AUUoNeuKznOvPn+v8AcC8j81tcX4vdSXV6Ult6w3NxGFEvcP6I1UjiXkHVhsBvrHXE9+Ktmq4fH0nP3kv3ZzmUumZJ2tMansgtYWKhgB8xHuYAfHrr2RW2e3tlBH5pcQSm57r9w7RxKdifxH/Y/H000D4iFZtMH5ZLnYIrfLXDRZFCRY3kX6kD9UevtZGNK1px66DtyJf0jOlLrX9zT4LIWlrbTW0lzci/DFblVDFIFU0bkaGvboTVdjt8NJzq/Msxn3H2fEH8ligjyEwtn+ohkNYZgeXNTuGrtWuouwrSSzqftLjIuMYifTred2XHCLtC7iYKe6X37nP9Ap1dTT466PqTlnZrkWQtjr4C5f6d2shGEYwMY5O65JLErQkkGh9B/fWIxp2Z4F/7/n1iQ+/nlC/zlv49asBFjo0jkpQ8rmReUrNQdQvFfz0IFwN6aiyu3WKKNd2I3P4n4fnohi04ln4d4rk/Jsh/rpS2jbi87CiV/D4nQ77a4IXX1OuXxHPkft7ZY3xOY24LXtsvejuPXkm7Cg9COo0rO0buO1gSgknjV5/JW2Kv+E0dnO0kGWlgNEkmanAuAahSoHIepH5svmBhTkf9w/ysxW+QjaJJIhx98MwAeNvVajYrTdSPQ6m7kNcSz9e3HMaxjuGEb2kSrHOP3O5QgUNJCqkdeNB+I1fT8Tkms8+z4kePxUsMlz3J3Fqhk5P3KrXiAxKEU1lT2uwaQ5nHHk1yuf8AuNlrlzWJ7uZhN8vBGIqB/QdNKWjiPyW0ym+lsb3ImCS6aJQ1FCo8jEn5PbsKL1OsVDghULyx7+IXtha+LSPaJFClgoSqghano++5rqNdXLAAqAeK/cmS9y0mOyl7L9FcSfSrztFEBaSoAL15KG9CRp3IWxK21PfiPcxltmLWVJWs7DMJBPGm4Qo4COQQUFRShbbfppotcwMeaJqfKoOVpE7rKsyMy/vtyk7exQtx9g9aAU2ptqb9m+GV/r8KTUWeYu4frr+Uu+Px9vG0ohUmSSR2If1O4VBSnWur82Cs4/a50nqeYfk/JbLG+JXmTvXCQiOSSU8wa92rAU9CeQG251uj7ViurX3VOUfEktcn51IsydqyuTIvaHyierAH+v6dT9imSdPpB1HTD4t45BacYLSOPfoqip/GukZ1fmV666hHjNnbzreQqtbeX2RhujcfQf8AOjzzdzNYohmLtMPbXBEVupYVHB1+YH3KwPqD6az2Jh1NcsochkL6Dy3Mpj+QtMhd2UmQtgA8VHhAndo225cI+tNhp2dWSPsKWXb3lzkrSTG20RuIZo/qTOAIgOFe1QOVaROHRwK6Hsx7ZQgdP7CaPbxNHkPtpb29tcCG9jfkUnvjPzeWW45DhLJ76AHpTj06aPONeXVyLNjMF/6GQYnAQre5INcXUtWsgW90SHcqgooXl0rrDOvbls+lRnRmrbnOOH8kvMZnEyyhfp2dBcI4rWIuCzD1DL1B07eBzXzH47HLcf1xk7qKOKdZjNYyGgMQ5NxpyBNPlKmtdcs81Ov72cT5jstiEnkdMq0Mb/qiZmoVApSMMNqfhpnqz1teJFk/LcTb3ccuPlkei+4hWYzUFOKg+5n2600OutXiB+T1EZFdY7NxXWCOVtIxkM3dTyF2fdjIAnZNCOPbACk1+I+OrM5oCcve/ZWOWDA5G3sRfrho38iNoIyyPSNmDAhCxYgKR1YDVOaC/mRJcQvjn3EyFr9zMv5XlLWa6t80DFcW0akdm2QjslA5oWj4Ls3xNNSbyuQHklX41Cpm/vJ5VF5B5DcyxzGezjjSKFzWhAFSVB3pUnRdIhzDqipgYcTPkyLS04yTt7UtwT3HIFeKgA9NUhfMGlaJr/tt53DbIPH8y/ZMTdqzmkNAtNuy5PRl9Ceo21J+x0c+xKejur7deYyJ7S04CSOYSu5AigCh2kf4A1p/f0Gphfll5pDzMT5Z5L/HX62ONuVu81FR727tivZs1qCkMNKcnJH7j+nTbfVHR1r9ycSHv7S6GMTEZXB+d2tna5i1vBfYuBHgaN1huolFCXqlFkic+8PQGvX46LtvLx4kiV8Rhr515BBcW8FoDeW8i0Rpl7UjcdiBuV2Hr66X7v1ges48GcMEndjYRuNwULOdvhUD/OrHHEM7KZ5v5JGk7h2MnFo1O9WcVGhwcw9tcyfC32bxKy5myRXiSZbW4ndt5Gb38BxKsF47Mw26eunVXMVlbuD5O0TJ/WZOObuGF6yWfINMsDEsJA1KyxxsePLcj10LrmqhU7tW2BpnpxamCN2IC0SRnYbH1IB6aH8ZdzHsaohni2Ptzb3V7eSqkXJbe1lYUrcP7iQfgiD3H0rptcQ+rrNC64PA/wCZf2b+RWd1BlRNLDeYuP6d7mOQh4FVq2/Hj8lH6dDoU4m66tZ8/EYH2/8Av1ewz/x/lPdu0lnKrl6KTCGIHGWOgDRoRsV3GheuyyDju5piP5WruFVZJHchVTpUk066JULigFqWObgaGSLk1Sp4bdBQAUGk9OrWVd/XWSX3jYngw+QxkCNHkMvPAltcvGWSK3KESydDtXj/AJ9NULQ8XUX+PQBXC/3Cp8ZjsPFDLeQBA9LOe6hJQQXzKWjuIWO/CQAh1bbl+GsTgSWYHr3WwF+f5/mYTN20Us0ctlH27mZ+1cWSLT90tQNGvpzruno3TbW8fE52jlm48i8W/gfHMVZ5S+jlykBf6awtwvbhDkd7vOBWSWg3r06a96hz8xibci/+fiEY+W8g8Wka7lUQZWOWG0t1oZ2ijRiCw6hK+6MnqAdGFEbjd5PZ4Lr/AJlL4R4tmvLMvJa4pUCx0e5vJm4wQgmlWIBJLH9KqKnSnsMnMnz1uvE//9k=" alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">Jeff Walberg</h5><h6 class="menu-header-subtitle">Lead UX Developer</h6>
                                                                </div>
                                                                <div class="menu-header-btn-pane">
                                                                    <button type="button" class="btn-wide btn-hover-shine btn-pill btn btn-warning">
                                                                        Messages
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                                                <div class="text-center"><h5 class="widget-heading opacity-4 mb-0">Lorem
                                                                        ipsum</h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="p-0 list-group-item">
                                                            <div class="grid-menu grid-menu-2col">
                                                                <div class="no-gutters row">
                                                                    <div class="col-sm-6">
                                                                        <button class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link">
                                                                            <i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>View
                                                                            Profile
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link">
                                                                            <i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Leads
                                                                            Generated
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhgAAAgMBAQEAAAAAAAAAAAAABQYDBAcCAQABAAIDAQAAAAAAAAAAAAAAAAIDAQQFABAAAgEDAwMCBAQHAQAAAAAAAQIDEQQFACESMRMGQSJRYSMHMkJSFHGBkaFyMxbBEQACAgICAQQBBQEAAAAAAAABAgARIQMxEgRBUSITFGFxkTIFI//aAAwDAQACEQMRAD8Aw3/j7yr0VPYQCK/HUDyFhnQ4nbeE5FUZ+0pUELWo6nUfkp7yfxdk+fxMWtnNe5FTFbxe1O20YZ3BFQok2agO9N9NTYGFiL2a2Q0eZzY43xwXERu42e3n2jUyGI77V5AMCV+H8ttFYgUYx2f288dyqMMZcyQzL7S1x/pRyKokpIWReVPxCo/jqbEijAF94Pl8fcft72waCYjlGpZWV19HRlJV1PoQdLbco5jF07GFiQL4veNxAth7gSCSOg0P5CQh4+w+k8Xxm9K1FsCvqeQ135Ke84+Lsh61a8JIe/iZyVLVWm+qOB6TQ6En+wlsy5JWnFzfwwWS0lknZCeIHwHr8tcqA1ids2MpIsRQ8ly4zeQ5RrI0UICQwdwgrxFCwVfpc26njq/YAqUKLEsfWTYuBLZhC80d7jrs0nsJaoxJ/NE35JV69RXQFoQWGhn8rg4O3EFurZVBt7gioliB98cq9Uk6H/IVHXS+9xn11LsXlVnLOMfb3JGHyambGib6gsb0jkU/UI5GqpHp10HXsKMZ26mxJkiuhZWzPeQLPKDyjYUpXqK6rE5ODLaoaBsSaS1uYrXti6iDyD2sR7dcKOaMFgRixBN+9y8v13iio4JYJTTEFcXB3NdWRB2fy8q4m+tP3EUyukaqUX3AFhy07WuQaMrbcYBBjF9msX45kElF/bRy3aEFeQ6L/wC6lzD0rNyw3j+CCUbG25pszdtWqD09NKBlhll658F8PuouMmKhpvQBeO51xUcyQx4iR5F9mfD5LG7mt0e24kOQjcehqQpPQ6jWcztqjrVRG8pSCIi0keIIApglcUcxlfaWPxOi6gOSOJXZ2KdTVwLcWWNmEFtFeUkCcmdgSnXpqftPNQB4oOO0gzN75BkII0bHlIahz7dzT46Zr1KpsGL2b3cURBOVxbHCX17cQvFdRmP6QQheHIAtt01Pf5BRxJGr4ljgxi+26W+Cw6eR3MEtzPcSOkFvGQoKIacjyooFep0naReZa0D42Jo2L+91lHdLHJjgLSoElxDOkwi+UgAH9tCzFRdQ0IY1cdM79x8dhre3nubaWVbuPuwRwryZ09WFaD19Tpf35qo76cXcXPL/ADK0zfieQgwwntMt2f3MNpcxNG0sURDShDurEJU7HUMQcQTxM2zFteZaa1nhljji7aBUkUEjjXc6ar0OJXZbPIEGZTLXNteR2cdxbKAm7lBSo12tLF0Ye3YVNWsvXORkoskk5UnbiR66M6RVASuvlsCCSIU8Vk/6CzyVtft3HjUSRRR+0sqVHE/qqSNjtpLaevFy7p8nvd1Gb7cWWNucacDkIUdLQCF4+q7bkivzP9dSW7NmQE6rj0jNl/CsTj8e/EyTpIw7cT8CC/RTQLuQuwOnVQ94tcn0H7QrdeLWeXxOOsbyNFKWvC3lkRZFjZajiVPUFTQ6CqIjDkH2lC08GxHi2OnuGdG+k6rDEWFupZChZY3LcWYGjH10t/7dmna1+PRRQmX+XY/GeP3Fqt85gu54D9OOQupjB4rJQj2lq9Btttp2l2riVvK8fWCD2yREKUYc3jqspeBVBSRhUk/PVgOa4lJtQugYTaC1vp+E11JEUb3rT8Wg+wjgQ01K3JqX7P8Af+PZOO/wweWTiwYsOS8WFGR19QdHfZc4gD/m/wAcwh475DfR5OTISMqvcS1vABQIxNKgfp1n71o4mx4+zstn1j15DkcllUuMMUurN24Nb5C3WRiYyOqMgPUGhpolNiGFzjE68anufHpIp8xmZ760gia2gj+oiqtQVkdZVBaRTtWug4NxrKetQn5J5XZw3cLXzMcVEq3F7IoJPZJ91FG5Jr00pWLPUg0iFuJkX3Hztjns/Nk7WVksW7cVhDKlHMEK8VLD0LbmmtJFIxMfbtDm7gSxvYGuwsjpFEVrz7daEeh20JTEkbcy1LcZJI6Xtn9TkDzWm9Dto11qODEvtc8iW7LMuxljlWWNTQsQDTfQ7FHpHeO5zcrQXIxdzJkY2NzYSEpeIVqVr0YD5dDpOzNCqljSetkGxc1LxDyzA5axjguZAUt/p20ivQqg6VPXQhR6xq7L4jccjhMfYtK129yqgse7J3Fp0/NtTfQvUaGJmOeb+TTTQ8baRUiuS00bsP8AciNxog/QCKV/pqfE1W3b2iPO3fDqPWJl5LJciOd7lA609tNgdaAv2mZ1XBBzI5chkYLmOKJoyrj8QT1+e2h6AwztZeJ7cZq+uGVkd1kG1CuwGpXWo4gPscmzD9nbeQW2Plushc21tEqB1iuZVSYg9Kx78dt/dTTj/nMy9qxK6/6wRugNn9rhnxfEfucQn7kdtbz68QA37b7KW/zG9PhrO8gDtQmx4gPQk+sCXPgU9tlXSGWS0iYgLNExWgY9SBpTbSBGfQCYy4L7byveJHeXV3ewV5FZ5D2/48Qd/wCeqrbnbGBLK+Oq/rJvuv4heS3tneWEEkqxWnZhhiXmzdliZAqjrxVgxA3p6a1PCRupCiwP5mZ/olO4LGiRj2/n3mbyWFkgTuTSJLyBEciFfd8KHTu5PpK31KPWStlDDf8ADmrBkBPt9fhoauScGf/Z" alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">John Rosenberg</h5><h6 class="menu-header-subtitle">Short profile
                                                                        description</h6></div>
                                                                <div class="menu-header-btn-pane">
                                                                    <button type="button" class="btn-wide btn-hover-shine btn-pill btn btn-warning">
                                                                        Profile
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="p-0 list-group-item">
                                                            <div class="widget-content">
                                                                <div class="text-center"><h5 class="widget-heading mb-0 opacity-4">Aenean commodo
                                                                        ligula eget dolor. Aenean massa. Cum sociis
                                                                        natoque.</h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="p-0 list-group-item">
                                                            <div class="grid-menu grid-menu-2col">
                                                                <div class="no-gutters row">
                                                                    <div class="col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                                <i class="lnr-sun text-primary opacity-7 btn-icon-wrapper mb-2"> </i>View
                                                                                Profile
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="p-1">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                                <i class="lnr-magic-wand text-primary opacity-7 btn-icon-wrapper mb-2"> </i>View
                                                                                Leads
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhwAAAgMBAQAAAAAAAAAAAAAABAYDBQcCAQEAAgMBAQAAAAAAAAAAAAAAAAUBAgMEBhAAAgECBAUDAwIHAQAAAAAAAQIDEQQAIRIFMVEiEwZBYXEyQgeBFJGhsXIjMxZiEQACAgIBAgUEAwAAAAAAAAAAARECAwQhMRJRgTITBUFhcSKhQhT/2gAMAwEAAhEDEQA/AE9BdGVhIiLGq17gzzxcyZNbW6vMM6kClfY4go7A+/73tOxWhE7d66JolpEyiUkitWr9K+5xMk1q2Jkv5D3pp+7bW8EESj/WQ0hy9SxI/piJNVRDBsPnVrdukG6Qi3nchY7hT/iJPAMDmtfQ8MEkOsDNd2UUsOl1oY6vmMwVzBxUoiOe7tuyjujgsF+01qcsXBJnM8GuMo4pXLPjX0xMEolEZDUI6SM8EAB71u8Ox7S9+Y+4QdEMYyq7/TnyHHEMFSTI44ZJ5GllJZ3JaSRjUtXMmpzOeKmwSI7ZYqDNq9XxgA8lmgYaftoRT0pgkINF/HHkp3BTt1yddzbQgJI2eqNcs/cYtVmdlA43UGuPUatp+n9MWggAjt17jFs8qivPADI2ljRB3K1JCggEip4YgCm/ItksvjDShgBbyxOaHJgx0EfzrgaJqyh8W8fguIIp5U1ySmi14AcgMKdvYacIcaevVqWaBB+PtumiTuWYISjBgKf0wt/1ZPozueHH4AO/eI2kMZAtUXLpooFKemJx7N0+WTbDRrohM8Sji2v8iwQLVILlJYtHAVZCyj+K49BrX7qpsQ7eNVs0jWjQppk6aCtTwpjpOQCa2BAkjNVY8efxiIABhK98BkIovSK5McBYD8tto7jxnc1VDVoKhBSmtSGBz5UxW7hSWpTuskiv8T1W0NrGtvPNEoV5pYYmmKBhUVC88I9nF7lnyh5hyqlUoZrmzT2O4Wuq0ugwj6XSSN4pFPJkcKwxyvC68SaLInyLflU0s0sllYQXN/dRjqdIlS3U8jNIVB+Bi1dddW1APPHCTM2gtp/+02i7aDtyo796OTmOmmX92WGmtftULnk4Nqnfy+OJNIuHjYiOn1kKNXCmGbFaI3t0RQIejSaaT9NMAQVNrBFJcagWqoNASfTLIHEIDu4tm/YXSue5qiYBGNFqBkD84rk9LNMT/dfkl8Q2Rd22yyX9w8IgUrLDE7RiTLT1FM+n7cefvZ1u2PFWajRaWabNuVjttrK7MtvKZDI7TPTT0anfqY1FanGWS/c5NceNJQBxeJ7Tv1ql9MqzXQR4JCzSVjJ+qgUhc+PMYvTLatYRW+NTLFa9sXi8ps7e2k1iyi0SlhVmXUB1H241x1aXLXH9jm2oVXzH6l3JDM+iPurrJqwAHPKmHYlJngnEx6hoU1NBmajAQmL24X72s6XKJqDjtvyA41xUsELeSaAQmoihNPT14HEkHHiO4XVgbn9tV5o5JkMNKtkO4lB7g4RblIyeA81bzjkP8Y8p8gm3aXdbTa0ug6mK4ErnuRn0BI4f204YhYlX7mnutrw8yNd88m27dhaSWCLdXzh5UhJQIjGlSCPficUthUTMFvdfHEgnjk37zyDc7oP3FiAgaX0Z2csR+igYZ6FGqiv5C6dkhkvoI44RdqmkQsHk0jNlXiMdwvR1DdR3MfejRirDIDjgASZryGWEoWozZBGBBryxBcavH/A9/wBxeAzr+zjmUdcg6yo+7R9uXPFoKuwn7hYb1t+/7xEjst3YzPb6E6dSR/QfkqePvhVsXTtFhrr42qTUuvG96u463+0XUcUs6gXCu0qFWXI5xEH9DjCXRwzrpdWXRP8AJRee7rfBCFull3S/ko6xF6KqZli7Es3uTjTCu6026Iy2MjSSX8FrsE1ttm229pErBWAlWZh/vL5tKCONcNqpJcCa0tyxvtL22nTtM61IoQ2X8jiYKQeW9o0aMoXQkblo6e/EfGIAufDPEdv2ySKRYzNdFdbXc4BkFftQfSg+M/fGiRDtI+WsYSYMoyQUrzJ4k4CEJv5K8PIvP+psU1wzosW6IPsdelJj/wCSOlj8YTfJ4H615jf4/OvQ/IzHcfG7SaQ3EYktpyeqSFimo8KsBkfnC3HtWXHVDG2CrclBd7ElpqMSvLNKKSzuSx08qnnjppsO3UythSXA/eJbUm4/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP/Z" alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">Ruben Tillman</h5><h6 class="menu-header-subtitle">Etiam sit amet orci
                                                                        eget</h6></div>
                                                                <div class="menu-header-btn-pane">
                                                                    <button type="button" class="btn-wide btn-hover-shine btn-pill btn btn-warning">
                                                                        Reports
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="p-0 list-group-item">
                                                            <div class="grid-menu grid-menu-2col">
                                                                <div class="no-gutters row">
                                                                    <div class="col-sm-6">
                                                                        <div class="p-2">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>Automation
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="p-2">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>Reports
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="p-2">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>Activity
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="p-2">
                                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>Settings
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    @endsection