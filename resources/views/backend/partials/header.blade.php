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
                            <li
                                    class="mm-active"


                            >
                                <a href="#">
                                    <i class="fa fa-beer">
                                        {{--                                    <i class="metismenu-icon pe-7s-rocket">--}}

                                    </i>
                                    Dashboards
                                    {{--                                    <i class="fa fa-user icon">--}}
                                    {{--                                    </i>--}}
                                    {{--                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
                                </a>
                                <ul
                                        class="mm-show"


                                >


                                    <li><a class="mm-active" href="index-2.html">Analytics</a></li>
                                    <li><a href="{{route('management')}}">Management</a></li>
                                    {{--                                    <li><a href="advertisement-dashboard.html">Advertisement</a></li>--}}
                                    {{--                                    <li><a href="helpdesk-dashboard.html">Helpdesk</a></li>--}}
                                    {{--                                    <li><a href="monitoring-dashboard.html">Monitoring</a></li>--}}
                                    {{--                                    <li><a href="crypto-dashboard.html">Cryptocurrency</a></li>--}}
                                    {{--                                    <li><a href="pm-dashboard.html">Project Management</a></li>--}}
                                    {{--                                    <li><a href="product-dashboard.html">Product</a></li>--}}
                                    {{--                                    <li><a href="statistics-dashboard.html">Statistics</a></li>--}}
                                </ul>
                            </li>

                            <li


                            >
                                <a href="#">
                                    <i class="fa fa-arrows-alt"></i>
                                    Applications

                                </a>
                                <ul


                                >
                                    <li>
                                        <a href="apps-mailbox.html">
                                            <i class="metismenu-icon">
                                            </i>Mailbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-chat.html">
                                            <i class="metismenu-icon">
                                            </i>Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-faq-section.html">
                                            <i class="metismenu-icon">
                                            </i>FAQ Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Admin Panel</li>

                            <li


                            >
                                <a href="#">
                                    <i class="fa fa-user icon"></i>
                                    Admin
                                    {{--                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
                                </a>
                                <ul


                                >
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

                            <li


                            >
                                <a href="#">
                                    <i class="fa fa-baby"></i>
                                    Our Services

                                </a>
                                <ul


                                >
                                    <li


                                    >
                                        <a href="{{route('add-service')}}">
                                            <i class="metismenu-icon"></i>
                                            Add Service
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        {{--                                        <ul--}}






                                        {{--                                        >--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a href="elements-buttons-standard.html">--}}
                                        {{--                                                    <i class="metismenu-icon">--}}
                                        {{--                                                    </i>Standard--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a href="elements-buttons-pills.html">--}}
                                        {{--                                                    <i class="metismenu-icon">--}}
                                        {{--                                                    </i>Pills--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a href="elements-buttons-square.html">--}}
                                        {{--                                                    <i class="metismenu-icon">--}}
                                        {{--                                                    </i>Square--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a href="elements-buttons-shadow.html">--}}
                                        {{--                                                    <i class="metismenu-icon">--}}
                                        {{--                                                    </i>Shadow--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a href="elements-buttons-icons.html">--}}
                                        {{--                                                    <i class="metismenu-icon">--}}
                                        {{--                                                    </i>With Icons--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                        </ul>--}}
                                    </li>
                                    <li>
                                        <a href="{{route('view-service')}}">
                                            <i class="metismenu-icon">
                                            </i>View Services
                                        </a>
                                    </li>
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-icons.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Icons--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-badges-labels.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Badges--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-cards.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Cards--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-loaders.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Loading Indicators--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-list-group.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>List Groups--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-navigation.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Navigation Menus--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-timelines.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Timeline--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="elements-utilities.html">--}}
                                    {{--                                            <i class="metismenu-icon">--}}
                                    {{--                                            </i>Utilities--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </li>

                            <li


                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Order Status
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul


                                >
                                    <li>
                                        <a href="components-tabs.html">
                                            <i class="metismenu-icon">
                                            </i>Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-notifications.html">
                                            <i class="metismenu-icon">
                                            </i>Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-modals.html">
                                            <i class="metismenu-icon">
                                            </i>Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-loading-blocks.html">
                                            <i class="metismenu-icon">
                                            </i>Loading Blockers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-progress-bar.html">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-carousel.html">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-calendar.html">
                                            <i class="metismenu-icon">
                                            </i>Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-pagination.html">
                                            <i class="metismenu-icon">
                                            </i>Pagination
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-count-up.html">
                                            <i class="metismenu-icon">
                                            </i>Count Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-scrollable-elements.html">
                                            <i class="metismenu-icon">
                                            </i>Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tree-view.html">
                                            <i class="metismenu-icon">
                                            </i>Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-maps.html">
                                            <i class="metismenu-icon">
                                            </i>Maps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-ratings.html">
                                            <i class="metismenu-icon">
                                            </i>Ratings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-image-crop.html">
                                            <i class="metismenu-icon">
                                            </i>Image Crop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-guided-tours.html">
                                            <i class="metismenu-icon">
                                            </i>Guided Tours
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li


                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tables
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul


                                >
                                    <li>
                                        <a href="tables-data-tables.html">
                                            <i class="metismenu-icon">
                                            </i>Data Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-regular.html">
                                            <i class="metismenu-icon">
                                            </i>Regular Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-grid.html">
                                            <i class="metismenu-icon">
                                            </i>Grid Tables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Dashboard Widgets</li>
                            <li>
                                <a href="widgets-chart-boxes.html">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Chart Boxes 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets-chart-boxes-2.html">
                                    <i class="metismenu-icon pe-7s-way">
                                    </i>Chart Boxes 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets-chart-boxes-3.html">
                                    <i class="metismenu-icon pe-7s-ball">
                                    </i>Chart Boxes 3
                                </a>
                            </li>
                            <li>
                                <a href="widgets-profile-boxes.html">
                                    <i class="metismenu-icon pe-7s-id">
                                    </i>Profile Boxes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Forms</li>
                            <li


                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-light"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul


                                >
                                    <li>
                                        <a href="forms-controls.html">
                                            <i class="metismenu-icon">
                                            </i>Controls
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-layouts.html">
                                            <i class="metismenu-icon">
                                            </i>Layouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-validation.html">
                                            <i class="metismenu-icon">
                                            </i>Validation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard.html">
                                            <i class="metismenu-icon">
                                            </i>Wizard
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li


                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-joy"></i>
                                    Widgets
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul


                                >
                                    <li>
                                        <a href="forms-datepicker.html">
                                            <i class="metismenu-icon">
                                            </i>Datepicker
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-range-slider.html">
                                            <i class="metismenu-icon">
                                            </i>Range Slider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-input-selects.html">
                                            <i class="metismenu-icon">
                                            </i>Input Selects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-toggle-switch.html">
                                            <i class="metismenu-icon">
                                            </i>Toggle Switch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wysiwyg-editor.html">
                                            <i class="metismenu-icon">
                                            </i>WYSIWYG Editor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-input-mask.html">
                                            <i class="metismenu-icon">
                                            </i>Input Mask
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-clipboard.html">
                                            <i class="metismenu-icon">
                                            </i>Clipboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-textarea-autosize.html">
                                            <i class="metismenu-icon">
                                            </i>Textarea Autosize
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Charts</li>
                            <li>
                                <a href="charts-chartjs.html">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>ChartJS
                                </a>
                            </li>
                            <li>
                                <a href="charts-apexcharts.html">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Apex Charts
                                </a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">
                                    <i class="metismenu-icon pe-7s-graph1">
                                    </i>Chart Sparklines
                                </a>
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
                        Analytics
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
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                <div class="menu-header-image opacity-4"
                                                     style="background-image: url('{{asset('custom/backend/')}}assets/images/dropdown-header/city5.jpg');"></div>
                                                <div class="menu-header-content text-white">
                                                    <h5 class="menu-header-title">Grid Dashboard</h5>
                                                    <h6 class="menu-header-subtitle">Easy grid navigation inside
                                                        dropdowns</h6>
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
                                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" data-toggle="tab"
                                                   href="#tab-messages-header">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                   href="#tab-events-header">
                                                    <span>Events</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                   href="#tab-errors-header">
                                                    <span>System</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="notifications-box">
                                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span
                                                                                        class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                            class="text-success">15:00 PM</span>
                                                                                </p><span
                                                                                        class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Something not
                                                                                    important
                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/1.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/2.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/3.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/4.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/5.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/9.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/7.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img
                                                                                                        src="{{asset('custom/backend/assets/images/avatars/8.jpg')}}"
                                                                                                        alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon"><i>+</i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has
                                                                                    an info state</h4><span
                                                                                        class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span
                                                                                        class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                            class="text-success">15:00 PM</span>
                                                                                </p><span
                                                                                        class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
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
                                            <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">All Hands
                                                                                Meeting</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at <a
                                                                                        href="javascript:void(0);">12:00
                                                                                    PM</a></p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at <b
                                                                                        class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                            </p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the
                                                                                production release</h4>
                                                                            <p>Lorem ipsum dolor sit amit,consectetur
                                                                                eiusmdd tempor incididunt ut labore et
                                                                                dolore magna elit enim at minim veniam
                                                                                quis nostrud</p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                                Something not important</h4>
                                                                            <p>Lorem ipsum dolor sit amit,consectetur
                                                                                elit enim at minim veniam quis
                                                                                nostrud</p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">All Hands
                                                                                Meeting</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at <a
                                                                                        href="javascript:void(0);">12:00
                                                                                    PM</a></p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at <b
                                                                                        class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                            </p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the
                                                                                production release</h4>
                                                                            <p>Lorem ipsum dolor sit amit,consectetur
                                                                                eiusmdd tempor incididunt ut labore et
                                                                                dolore magna elit enim at minim veniam
                                                                                quis nostrud</p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"><i
                                                                                    class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                                Something not important</h4>
                                                                            <p>Lorem ipsum dolor sit amit,consectetur
                                                                                elit enim at minim veniam quis
                                                                                nostrud</p><span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="no-results pt-3 pb-0">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left"
                                                                     style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix"
                                                                     style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right"
                                                                     style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle">All caught up!</div>
                                                            <div class="results-title">There are no system errors!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View
                                                    Latest Changes
                                                </button>
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
                                                                        <div class="widget-subheading opacity-8">A short
                                                                            profile description
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right mr-2">
                                                                        <button class="btn-pill btn-shadow btn-shine btn btn-focus">
                                                                            Logout
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
                                                                <a href="javascript:void(0);" class="nav-link">Recover
                                                                    Password
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
                                                    </div>
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
                        </div>
                    </div>
                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
