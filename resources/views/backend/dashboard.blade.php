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
                    <div class="app-inner-layout__content">
                        <div class="tab-content">
                            <div class="container-fluid">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                            Portfolio Performance
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize">
                                            <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                                View All
                                            </button>
                                        </div>
                                    </div>
                                    <div class="no-gutters row">
                                        <div class="col-sm-6 col-md-4 col-xl-4">
                                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                <div class="icon-wrapper rounded-circle">
                                                    <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                                    <i class="lnr-laptop-phone text-dark opacity-8"></i></div>
                                                <div class="widget-chart-content">
                                                    <div class="widget-subheading">Cash Deposits</div>
                                                    <div class="widget-numbers">1,7M</div>
                                                    <div class="widget-description opacity-8 text-focus">
                                                        <div class="d-inline text-danger pr-1">
                                                            <i class="fa fa-angle-down"></i>
                                                            <span class="pl-1">54.1%</span>
                                                        </div>
                                                        less earnings
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider m-0 d-md-none d-sm-block"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-4">
                                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                <div class="icon-wrapper rounded-circle">
                                                    <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                                    <i class="lnr-graduation-hat text-white"></i></div>
                                                <div class="widget-chart-content">
                                                    <div class="widget-subheading">Invested Dividents</div>
                                                    <div class="widget-numbers"><span>9M</span></div>
                                                    <div class="widget-description opacity-8 text-focus">
                                                        Grow Rate:
                                                        <span class="text-info pl-1">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">14.1%</span>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider m-0 d-md-none d-sm-block"></div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-xl-4">
                                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                <div class="icon-wrapper rounded-circle">
                                                    <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                    <i class="lnr-apartment text-white"></i></div>
                                                <div class="widget-chart-content">
                                                    <div class="widget-subheading">Capital Gains</div>
                                                    <div class="widget-numbers text-success"><span>$563</span></div>
                                                    <div class="widget-description text-focus">
                                                        Increased by
                                                        <span class="text-warning pl-1">
                                                <i class="fa fa-angle-up"></i>
                                                <span class="pl-1">7.35%</span>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center d-block p-3 card-footer">
                                        <button class="btn-pill btn-wide fsize-1 btn btn-primary">
                                <span class="mr-2 opacity-7">
                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                </span>
                                            <span class="mr-1">View Complete Report</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                                    Technical Support
                                                </div>
                                                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link">
                                                            <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                        </button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                             class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <div class="p-3 text-right">
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                    View Details
                                                                </button>
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                    Action
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-0 card-body">
                                                <div class="p-1 slick-slider-sm mx-auto">
                                                    <div class="slick-slider slick-initialized slick-dotted">
                                                        <button class="slick-prev slick-arrow" aria-label="Previous"
                                                                type="button" style="">Previous
                                                        </button>
                                                        <div class="slick-list draggable">
                                                            <div class="slick-track"
                                                                 style="opacity: 1; width: 3255px; transform: translate3d(-465px, 0px, 0px);">
                                                                <div class="slick-slide slick-cloned"
                                                                     data-slick-index="-1" aria-hidden="true"
                                                                     tabindex="-1" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                Helpdesk Tickets
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                                                    <span class="text-warning">34</span>
                                                                                                </div>
                                                                                                <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                                                    <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                                                    increase
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id=""
                                                                                             style="min-height: 152px;">
                                                                                            <div id=""
                                                                                                 class="apexcharts-canvas apexchartstzb9txs2 light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="" width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id=""
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="">
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id=""
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(247,185,36,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id=""
                                                                                                                      d="M-0.18128800512565513 152L-0.18128800512565513 117.25342267875584C5.611989262952589 117.25342267875584 14.424114036269584 96.66285834024077 20.217391304347828 96.66285834024077C26.01066857242607 96.66285834024077 34.64150534061741 106.95814050949829 40.434782608695656 106.95814050949829C46.2280598767739 106.95814050949829 54.858896644965235 112.10578159412705 60.65217391304348 112.10578159412705C66.44545118112173 112.10578159412705 75.07628794931306 117.25342267875584 80.86956521739131 117.25342267875584C86.66284248546955 117.25342267875584 95.29367925366088 106.95814050949829 101.08695652173913 106.95814050949829C106.88023378981737 106.95814050949829 115.51107055800871 103.09740969602672 121.30434782608695 103.09740969602672C127.0976250941652 103.09740969602672 135.72846186235654 82.50684535751166 141.52173913043478 82.50684535751166C147.31501639851302 82.50684535751166 155.94585316670438 82.50684535751166 161.73913043478262 82.50684535751166C167.53240770286087 82.50684535751166 176.1632444710522 72.21156318825412 181.95652173913044 72.21156318825412C187.74979900720868 72.21156318825412 196.3806357754 83.79375562866885 202.17391304347825 83.79375562866885C207.9671903115565 83.79375562866885 216.59802707974785 94.08903779792638 222.3913043478261 94.08903779792638C228.18458161590434 94.08903779792638 236.81541838409566 121.11415349222742 242.6086956521739 121.11415349222742C248.40197292025215 121.11415349222742 257.0328096884435 68.35083237478256 262.82608695652175 68.35083237478256C268.6193642246 68.35083237478256 277.2502009927913 73.49847345941133 283.04347826086956 73.49847345941133C288.83675552894783 73.49847345941133 297.4675922971391 104.38431996718391 303.2608695652174 104.38431996718391C309.05414683329565 104.38431996718391 317.684983601487 86.36757617098323 323.47826086956525 86.36757617098323C329.2715381376435 86.36757617098323 337.9023749058348 127.54870484801336 343.69565217391306 127.54870484801336C349.48892944199133 127.54870484801336 358.1197662101826 99.23667888255515 363.9130434782609 99.23667888255515C369.70632074633914 99.23667888255515 378.3371575145304 91.51521725561199 384.1304347826087 91.51521725561199C389.92371205068696 91.51521725561199 398.55454881887823 32.317344782381184 404.3478260869565 32.317344782381184C410.1411033550348 32.317344782381184 418.7719401232261 79.93302481519727 424.5652173913044 79.93302481519727C430.35849465938264 79.93302481519727 438.9893314275739 101.81049942486953 444.7826086956522 101.81049942486953C450.57588596373046 101.81049942486953 459.20672273192173 92.8021275267692 465 92.8021275267692C465 92.8021275267692 465 92.8021275267692 465 152M380.5197896114447 92.8021275267692C380.5197896114447 92.8021275267692 380.5197896114447 92.8021275267692 380.5197896114447 92.8021275267692 "
                                                                                                                      fill="url(#SvgjsLinearGradient1051)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 152L 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id=""
                                                                                                                      d="M-0.7408768370508576 141.00267362209638C1.0927011964262259 141.00267362209638 2.6643395108351555 134.48573947222758 4.497917544312239 134.48573947222758C6.3314955777893225 134.48573947222758 23.62260765223384 137.74420654716198 25.456185685710924 137.74420654716198C27.28976371918801 137.74420654716198 43.83999895658167 139.37344008462918 45.67357699005875 139.37344008462918C47.50715502353584 139.37344008462918 64.0573902609295 141.00267362209638 65.89096829440658 141.00267362209638C67.72454632788366 141.00267362209638 84.27478156527732 137.74420654716198 86.1083595987544 137.74420654716198C87.94193763223149 137.74420654716198 104.49217286962514 136.52228139406157 106.32575090310222 136.52228139406157C108.1593289365793 136.52228139406157 124.70956417397296 130.00534724419276 126.54314220745005 130.00534724419276C128.37672024092714 130.00534724419276 144.9269554783208 130.00534724419276 146.7605335117979 130.00534724419276C148.59411154527496 130.00534724419276 165.14434678266863 126.74688016925835 166.97792481614573 126.74688016925835C168.8115028496228 126.74688016925835 185.36173808701645 130.41265562855955 187.19531612049354 130.41265562855955C189.0288941539706 130.41265562855955 205.57912939136426 133.67112270349395 207.41270742484136 133.67112270349395C209.24628545831843 133.67112270349395 225.7965206957121 142.2245987751968 227.63009872918917 142.2245987751968C229.46367676266627 142.2245987751968 246.01391200005992 125.52495501615795 247.847490033537 125.52495501615795C249.68106806701408 125.52495501615795 266.23130330440773 127.15418855362515 268.06488133788486 127.15418855362515C269.8984593713619 127.15418855362515 286.44869460875555 136.92958977842838 288.28227264223267 136.92958977842838C290.11585067570974 136.92958977842838 306.6660859131034 131.22727239729315 308.4996639465805 131.22727239729315C310.33324198005755 131.22727239729315 326.88347721745123 144.26114069703078 328.71705525092835 144.26114069703078C330.5506332844054 144.26114069703078 347.10086852179904 135.30035624096115 348.93444655527617 135.30035624096115C350.76802458875324 135.30035624096115 367.31825982614686 132.85650593476035 369.151837859624 132.85650593476035C370.98541589310105 132.85650593476035 387.53565113049467 114.12032025388751 389.3692291639718 114.12032025388751C391.20280719744886 114.12032025388751 407.75304243484254 129.19073047545916 409.5866204683196 129.19073047545916C411.4201985017967 129.19073047545916 427.97043373919036 136.11497300969478 429.8040117726675 136.11497300969478C431.63758980614455 136.11497300969478 448.18782504353817 133.26381431912716 450.0214030770153 133.26381431912716C450.0214030770153 133.26381431912716 465 133.26381431912716 465 133.26381431912716 "
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#f7b924"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-series-markers-wrap hidden">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id=""
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker wwzthhm1ei no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#f7b924"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-point-annotations hidden"></g>
                                                                                                    </g>
                                                                                                    <rect id=""
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id=""
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(247, 185, 36);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide slick-current slick-active"
                                                                     data-slick-index="0" aria-hidden="false"
                                                                     role="tabpanel" id="slick-slide00"
                                                                     style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                New Accounts since 2018
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                            <span class="opacity-10 text-success pr-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </span>
                                                                                                    <span>78</span>
                                                                                                    <small class="opacity-5 pl-1">
                                                                                                        %
                                                                                                    </small>
                                                                                                </div>
                                                                                                <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                                                    <span class="text-success pl-2">+14</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id="dashboard-sparkline-3"
                                                                                             style="min-height: 152px;">
                                                                                            <div id="apexchartsbtyxfg67"
                                                                                                 class="apexcharts-canvas apexchartsbtyxfg67 light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="SvgjsSvg2341"
                                                                                                     width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id="SvgjsG2343"
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="SvgjsDefs2342">
                                                                                                            <clipPath
                                                                                                                    id="gridRectMaskbtyxfg67">
                                                                                                                <rect id="SvgjsRect2347"
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="gridRectMarkerMaskbtyxfg67">
                                                                                                                <rect id="SvgjsRect2348"
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id="SvgjsLinearGradient2354"
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id="SvgjsStop2355"
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(58,196,125,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id="SvgjsStop2356"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id="SvgjsStop2357"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id="SvgjsLine2346"
                                                                                                              x1="322.97826086956525"
                                                                                                              y1="0"
                                                                                                              x2="322.97826086956525"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="322.97826086956525"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id="SvgjsG2360"
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id="SvgjsG2361"
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2364"
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id="SvgjsLine2366"
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id="SvgjsLine2365"
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2350"
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id="SvgjsG2351"
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 152L 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      fill="url(#SvgjsLinearGradient2354)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskbtyxfg67)"
                                                                                                                      pathTo="M 0 152L 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#3ac47d"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskbtyxfg67)"
                                                                                                                      pathTo="M 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id="SvgjsG2352"
                                                                                                                   class="apexcharts-series-markers-wrap">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id="SvgjsCircle2372"
                                                                                                                                r="0"
                                                                                                                                cx="323.47826086956525"
                                                                                                                                cy="109.55946225439504"
                                                                                                                                class="apexcharts-marker wgk1gt6z4 no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#3ac47d"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id="SvgjsG2353"
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id="SvgjsLine2367"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id="SvgjsLine2368"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id="SvgjsG2369"
                                                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2370"
                                                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2371"
                                                                                                           class="apexcharts-point-annotations"></g>
                                                                                                    </g>
                                                                                                    <rect id="SvgjsRect2345"
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id="SvgjsG2362"
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id="SvgjsG2363"
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light"
                                                                                                     style="left: 272.641px; top: 112px;">
                                                                                                    <div class="apexcharts-tooltip-series-group active"
                                                                                                         style="display: flex;">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(58, 196, 125); display: none;"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value">27</span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide" data-slick-index="1"
                                                                     aria-hidden="true" tabindex="-1" role="tabpanel"
                                                                     id="slick-slide01" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                Last Year Total Sales
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                                                    <small class="opacity-3 pr-1">
                                                                                                        $
                                                                                                    </small>
                                                                                                    <span>629</span>
                                                                                                    <span class="text-primary pl-3">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id="dashboard-sparkline-1"
                                                                                             style="min-height: 152px;">
                                                                                            <div id="apexchartszbevkpbj"
                                                                                                 class="apexcharts-canvas apexchartszbevkpbj light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="SvgjsSvg2271"
                                                                                                     width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id="SvgjsG2273"
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="SvgjsDefs2272">
                                                                                                            <clipPath
                                                                                                                    id="gridRectMaskzbevkpbj">
                                                                                                                <rect id="SvgjsRect2277"
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="gridRectMarkerMaskzbevkpbj">
                                                                                                                <rect id="SvgjsRect2278"
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id="SvgjsLinearGradient2284"
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id="SvgjsStop2285"
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(63,106,216,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id="SvgjsStop2286"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id="SvgjsStop2287"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id="SvgjsLine2276"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id="SvgjsG2290"
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id="SvgjsG2291"
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2294"
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id="SvgjsLine2296"
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id="SvgjsLine2295"
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2280"
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id="SvgjsG2281"
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 152L 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095C 465 122.13443640124095 465 122.13443640124095 465 152M 465 122.13443640124095z"
                                                                                                                      fill="url(#SvgjsLinearGradient2284)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskzbevkpbj)"
                                                                                                                      pathTo="M 0 152L 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095C 465 122.13443640124095 465 122.13443640124095 465 152M 465 122.13443640124095z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095"
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#3f6ad8"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskzbevkpbj)"
                                                                                                                      pathTo="M 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id="SvgjsG2282"
                                                                                                                   class="apexcharts-series-markers-wrap">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id="SvgjsCircle2302"
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker w8kyt5ds6 no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#3f6ad8"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id="SvgjsG2283"
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id="SvgjsLine2297"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id="SvgjsLine2298"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id="SvgjsG2299"
                                                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2300"
                                                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2301"
                                                                                                           class="apexcharts-point-annotations"></g>
                                                                                                    </g>
                                                                                                    <rect id="SvgjsRect2275"
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id="SvgjsG2292"
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id="SvgjsG2293"
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(63, 106, 216);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide" data-slick-index="2"
                                                                     aria-hidden="true" tabindex="-1" role="tabpanel"
                                                                     id="slick-slide02" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                Helpdesk Tickets
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                                                    <span class="text-warning">34</span>
                                                                                                </div>
                                                                                                <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                                                    <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                                                    increase
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id="dashboard-sparkline-2"
                                                                                             style="min-height: 152px;">
                                                                                            <div id="apexchartstzb9txs2"
                                                                                                 class="apexcharts-canvas apexchartstzb9txs2 light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="SvgjsSvg2306"
                                                                                                     width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id="SvgjsG2308"
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="SvgjsDefs2307">
                                                                                                            <clipPath
                                                                                                                    id="gridRectMasktzb9txs2">
                                                                                                                <rect id="SvgjsRect2312"
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="gridRectMarkerMasktzb9txs2">
                                                                                                                <rect id="SvgjsRect2313"
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id="SvgjsLinearGradient2319"
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id="SvgjsStop2320"
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(247,185,36,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id="SvgjsStop2321"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id="SvgjsStop2322"
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id="SvgjsLine2311"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id="SvgjsG2325"
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id="SvgjsG2326"
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2329"
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id="SvgjsLine2331"
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id="SvgjsLine2330"
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id="SvgjsG2315"
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id="SvgjsG2316"
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 152L 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      fill="url(#SvgjsLinearGradient2319)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 152L 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id="apexcharts-area-0"
                                                                                                                      d="M 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#f7b924"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id="SvgjsG2317"
                                                                                                                   class="apexcharts-series-markers-wrap">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id="SvgjsCircle2337"
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker wi9fejxoi no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#f7b924"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id="SvgjsG2318"
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id="SvgjsLine2332"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id="SvgjsLine2333"
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id="SvgjsG2334"
                                                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2335"
                                                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                                                        <g id="SvgjsG2336"
                                                                                                           class="apexcharts-point-annotations"></g>
                                                                                                    </g>
                                                                                                    <rect id="SvgjsRect2310"
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id="SvgjsG2327"
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id="SvgjsG2328"
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(247, 185, 36);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide slick-cloned"
                                                                     data-slick-index="3" aria-hidden="true"
                                                                     tabindex="-1" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                New Accounts since 2018
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                            <span class="opacity-10 text-success pr-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </span>
                                                                                                    <span>78</span>
                                                                                                    <small class="opacity-5 pl-1">
                                                                                                        %
                                                                                                    </small>
                                                                                                </div>
                                                                                                <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                                                    <span class="text-success pl-2">+14</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id=""
                                                                                             style="min-height: 152px;">
                                                                                            <div id=""
                                                                                                 class="apexcharts-canvas apexchartsbtyxfg67 light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="" width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id=""
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="">
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id=""
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(58,196,125,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id=""
                                                                                                                      d="M-0.7679133974894983 152L-0.7679133974894983 129.38175654540882C0.8743515833185083 129.38175654540882 18.57512632353982 139.23163675950497 20.217391304347828 139.23163675950497C21.859656285155836 139.23163675950497 38.79251762788765 128.28732541050923 40.434782608695656 128.28732541050923C42.077047589503664 128.28732541050923 59.00990893223547 140.6908782727044 60.65217391304348 140.6908782727044C62.294438893851485 140.6908782727044 79.2273002365833 129.74656692370866 80.86956521739131 129.74656692370866C82.51183019819932 129.74656692370866 99.44469154093112 118.07263481811322 101.08695652173913 118.07263481811322C102.72922150254713 118.07263481811322 119.66208284527895 139.23163675950497 121.30434782608695 139.23163675950497C122.94661280689496 139.23163675950497 139.87947414962676 135.5835329765064 141.52173913043478 135.5835329765064C143.1640041112428 135.5835329765064 160.0968654539746 134.85391221990668 161.73913043478262 134.85391221990668C163.38139541559062 134.85391221990668 180.31425675832244 142.15011978590383 181.95652173913044 142.15011978590383C183.59878671993843 142.15011978590383 200.53164806267026 133.39467070670725 202.17391304347825 133.39467070670725C203.81617802428627 133.39467070670725 220.74903936701807 145.0686028123027 222.3913043478261 145.0686028123027C224.0335693286341 145.0686028123027 240.9664306713659 132.30023957180768 242.6086956521739 132.30023957180768C244.25096063298193 132.30023957180768 261.1838219757137 138.50201600290526 262.82608695652175 138.50201600290526C264.46835193732977 138.50201600290526 281.40121328006154 131.57061881520795 283.04347826086956 131.57061881520795C284.6857432416776 131.57061881520795 301.61860458440935 137.77239524630554 303.2608695652174 137.77239524630554C304.9031345460254 137.77239524630554 321.8359958887572 142.15011978590383 323.47826086956525 142.15011978590383C325.12052585037327 142.15011978590383 342.05338719310504 143.24455092080342 343.69565217391306 143.24455092080342C345.3379171547211 143.24455092080342 362.27077849745285 138.1372056246054 363.9130434782609 138.1372056246054C365.5553084590689 138.1372056246054 382.48816980180067 132.30023957180768 384.1304347826087 132.30023957180768C385.7726997634167 132.30023957180768 402.7055611061485 132.66504995010752 404.3478260869565 132.66504995010752C405.9900910677645 132.66504995010752 422.92295241049635 137.04277448970583 424.5652173913044 137.04277448970583C426.2074823721124 137.04277448970583 443.14034371484416 136.3131537331061 444.7826086956522 136.3131537331061C446.4248736764602 136.3131537331061 463.357735019192 135.21872259820654 465 135.21872259820654C465 135.21872259820654 465 135.21872259820654 465 152M107.1523567698938 135.21872259820654C107.1523567698938 135.21872259820654 107.1523567698938 135.21872259820654 107.1523567698938 135.21872259820654 "
                                                                                                                      fill="url(#SvgjsLinearGradient1083)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskbtyxfg67)"
                                                                                                                      pathTo="M 0 152L 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id=""
                                                                                                                      d="M-0.7745114089990659 130.0247726825977C0.8210654686271088 130.0247726825977 2.1887027923066884 139.59462974017612 3.7842796699328627 139.59462974017612C5.379856547559038 139.59462974017612 23.18060550565358 128.96145523175565 24.776182383279757 128.96145523175565C26.371759260905932 128.96145523175565 43.39799681000141 141.01238634129885 44.99357368762758 141.01238634129885C46.58915056525376 141.01238634129885 63.61538811434923 130.37921183287838 65.2109649919754 130.37921183287838C66.80654186960157 130.37921183287838 83.83277941869706 119.03715902389655 85.42835629632324 119.03715902389655C87.02393317394942 119.03715902389655 104.05017072304489 139.59462974017612 105.64574760067106 139.59462974017612C107.24132447829723 139.59462974017612 124.2675620273927 136.05023823736929 125.86313890501889 136.05023823736929C127.45871578264506 136.05023823736929 144.48495333174054 135.34135993680792 146.0805302093667 135.34135993680792C147.6761070869929 135.34135993680792 164.70234463608838 142.43014294242158 166.29792151371456 142.43014294242158C167.89349839134073 142.43014294242158 184.9197359404362 133.9236033356852 186.51531281806237 133.9236033356852C188.11088969568854 133.9236033356852 205.137127244784 145.26565614466705 206.73270412241018 145.26565614466705C208.32828100003636 145.26565614466705 225.35451854913185 132.86028588484317 226.95009542675803 132.86028588484317C228.5456723043842 132.86028588484317 245.57190985347967 138.88575143961475 247.16748673110584 138.88575143961475C248.763063608732 138.88575143961475 265.7893011578275 132.1514075842818 267.38487803545365 132.1514075842818C268.9804549130798 132.1514075842818 286.0066924621753 138.17687313905338 287.60226933980147 138.17687313905338C289.19784621742764 138.17687313905338 306.22408376652317 142.43014294242158 307.81966064414934 142.43014294242158C309.4152375217755 142.43014294242158 326.441475070871 143.49346039326363 328.03705194849715 143.49346039326363C329.6326288261233 143.49346039326363 346.6588663752188 138.53131228933407 348.25444325284496 138.53131228933407C349.85002013047114 138.53131228933407 366.8762576795666 132.86028588484317 368.4718345571928 132.86028588484317C370.06741143481895 132.86028588484317 387.0936489839144 133.21472503512382 388.6892258615406 133.21472503512382C390.28480273916676 133.21472503512382 407.3110402882623 137.46799483849202 408.90661716588846 137.46799483849202C410.50219404351463 137.46799483849202 427.5284315926101 136.75911653793065 429.1240084702363 136.75911653793065C430.71958534786245 136.75911653793065 447.7458228969579 135.6957990870886 449.3413997745841 135.6957990870886C449.3413997745841 135.6957990870886 465 135.6957990870886 465 135.6957990870886 "
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#3ac47d"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskbtyxfg67)"
                                                                                                                      pathTo="M 0 54.543950361944155C 7.076086956521739 54.543950361944155 13.14130434782609 96.98448810754911 20.217391304347828 96.98448810754911C 27.293478260869566 96.98448810754911 33.358695652173914 49.82833505687694 40.434782608695656 49.82833505687694C 47.51086956521739 49.82833505687694 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 56.115822130299904 80.86956521739131 56.115822130299904C 87.94565217391305 56.115822130299904 94.01086956521739 5.815925542916233 101.08695652173913 5.815925542916233C 108.16304347826086 5.815925542916233 114.22826086956522 96.98448810754911 121.30434782608695 96.98448810754911C 128.3804347826087 96.98448810754911 134.44565217391303 81.26577042399173 141.52173913043478 81.26577042399173C 148.59782608695653 81.26577042399173 154.66304347826087 78.12202688728024 161.73913043478262 78.12202688728024C 168.81521739130434 78.12202688728024 174.88043478260872 109.55946225439504 181.95652173913044 109.55946225439504C 189.03260869565216 109.55946225439504 195.09782608695653 71.83453981385729 202.17391304347825 71.83453981385729C 209.25 71.83453981385729 215.31521739130434 122.13443640124095 222.3913043478261 122.13443640124095C 229.4673913043478 122.13443640124095 235.5326086956522 67.11892450879007 242.6086956521739 67.11892450879007C 249.68478260869566 67.11892450879007 255.75 93.84074457083764 262.82608695652175 93.84074457083764C 269.9021739130435 93.84074457083764 275.9673913043478 63.97518097207859 283.04347826086956 63.97518097207859C 290.1195652173913 63.97518097207859 296.1847826086956 90.69700103412617 303.2608695652174 90.69700103412617C 310.3369565217391 90.69700103412617 316.4021739130435 109.55946225439504 323.47826086956525 109.55946225439504C 330.554347826087 109.55946225439504 336.6195652173913 114.27507755946226 343.69565217391306 114.27507755946226C 350.7717391304348 114.27507755946226 356.8369565217391 92.2688728024819 363.9130434782609 92.2688728024819C 370.9891304347826 92.2688728024819 377.05434782608694 67.11892450879007 384.1304347826087 67.11892450879007C 391.20652173913044 67.11892450879007 397.27173913043475 68.69079627714581 404.3478260869565 68.69079627714581C 411.42391304347825 68.69079627714581 417.4891304347826 87.55325749741469 424.5652173913044 87.55325749741469C 431.6413043478261 87.55325749741469 437.70652173913044 84.40951396070321 444.7826086956522 84.40951396070321C 451.85869565217394 84.40951396070321 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-series-markers-wrap hidden">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id=""
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker w1ba3tmiah no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#3ac47d"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-point-annotations hidden"></g>
                                                                                                    </g>
                                                                                                    <rect id=""
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id=""
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(58, 196, 125);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide slick-cloned"
                                                                     data-slick-index="4" aria-hidden="true"
                                                                     tabindex="-1" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                Last Year Total Sales
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                                                    <small class="opacity-3 pr-1">
                                                                                                        $
                                                                                                    </small>
                                                                                                    <span>629</span>
                                                                                                    <span class="text-primary pl-3">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id=""
                                                                                             style="min-height: 152px;">
                                                                                            <div id=""
                                                                                                 class="apexcharts-canvas apexchartszbevkpbj light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="" width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id=""
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="">
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id=""
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(63,106,216,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id=""
                                                                                                                      d="M-0.06279595710724062 152L-0.06279595710724062 100.43923983258034C6.568941346405654 100.43923983258034 13.585654000834934 97.49291068015637 20.217391304347828 97.49291068015637C26.84912860786072 97.49291068015637 33.803045305182756 82.76126491803647 40.434782608695656 82.76126491803647C47.06651991220855 82.76126491803647 54.020436609530584 72.44911288455255 60.65217391304348 72.44911288455255C67.28391121655638 72.44911288455255 74.2378279138784 85.70759407046044 80.86956521739131 85.70759407046044C87.5013025209042 85.70759407046044 94.45521921822623 72.44911288455255 101.08695652173913 72.44911288455255C107.71869382525202 72.44911288455255 114.67261052257406 62.13696085106862 121.30434782608695 62.13696085106862C127.93608512959985 62.13696085106862 134.8900018269219 56.24430254622065 141.52173913043478 56.24430254622065C148.15347643394767 56.24430254622065 155.10739313126973 96.01974610394439 161.73913043478262 96.01974610394439C168.3708677382955 96.01974610394439 175.32478443561757 60.66379627485662 181.95652173913044 60.66379627485662C188.5882590426433 60.66379627485662 195.5421757399654 116.64405017091224 202.17391304347825 116.64405017091224C208.80565034699114 116.64405017091224 215.7595670443132 73.92227746076453 222.3913043478261 73.92227746076453C229.02304165133899 73.92227746076453 235.97695834866101 76.86860661318852 242.6086956521739 76.86860661318852C249.2404329556868 76.86860661318852 256.1943496530088 112.22455644227628 262.82608695652175 112.22455644227628C269.45782426003467 112.22455644227628 276.41174095735664 100.43923983258034 283.04347826086956 100.43923983258034C289.6752155643825 100.43923983258034 296.62913226170446 91.60025237530843 303.2608695652174 91.60025237530843C309.8926068687303 91.60025237530843 316.8465235660523 94.5465815277324 323.47826086956525 94.5465815277324C330.10999817307817 94.5465815277324 337.06391487040014 69.50278373212856 343.69565217391306 69.50278373212856C350.327389477426 69.50278373212856 357.28130617474795 14.995694412284934 363.9130434782609 14.995694412284934C370.5447807817738 14.995694412284934 377.49869747909577 106.33189813742831 384.1304347826087 106.33189813742831C390.7621720861216 106.33189813742831 397.7160887834436 88.65392322288443 404.3478260869565 88.65392322288443C410.9795633904694 88.65392322288443 417.93348008779145 112.22455644227628 424.5652173913044 112.22455644227628C431.1969546948173 112.22455644227628 438.15087139213927 84.23442949424846 444.7826086956522 84.23442949424846C451.4143459991651 84.23442949424846 458.3682626964871 124.00987305197219 465 124.00987305197219C465 124.00987305197219 465 124.00987305197219 465 152M435.73708398802586 124.00987305197219C435.73708398802586 124.00987305197219 435.73708398802586 124.00987305197219 435.73708398802586 124.00987305197219 "
                                                                                                                      fill="url(#SvgjsLinearGradient1019)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskzbevkpbj)"
                                                                                                                      pathTo="M 0 152L 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095C 465 122.13443640124095 465 122.13443640124095 465 152M 465 122.13443640124095z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id=""
                                                                                                                      d="M-0.7234893103355606 136.78762286437623C1.2331243741378088 136.78762286437623 2.910221817972127 135.91834417091204 4.866835502445497 135.91834417091204C6.823449186918866 135.91834417091204 23.851102432655516 131.57195070359094 25.807716117128884 131.57195070359094C27.764329801602255 131.57195070359094 44.068493737003344 128.5294752764662 46.02510742147671 128.5294752764662C47.98172110595008 128.5294752764662 64.28588504135116 132.44122939705517 66.24249872582453 132.44122939705517C68.1991124102979 132.44122939705517 84.50327634569899 128.5294752764662 86.45989003017236 128.5294752764662C88.41650371464573 128.5294752764662 104.72066765004682 125.48699984934146 106.67728133452019 125.48699984934146C108.63389501899356 125.48699984934146 124.93805895439463 123.74844246241302 126.89467263886802 123.74844246241302C128.85128632334138 123.74844246241302 145.15545025874246 135.4837048241799 147.11206394321584 135.4837048241799C149.0686776276892 135.4837048241799 165.3728415630903 125.05236050260935 167.3294552475637 125.05236050260935C169.28606893203704 125.05236050260935 185.59023286743812 141.56865567842942 187.5468465519115 141.56865567842942C189.50346023638485 141.56865567842942 205.80762417178593 128.9641146231983 207.7642378562593 128.9641146231983C209.72085154073267 128.9641146231983 226.02501547613377 129.83339331666252 227.98162916060716 129.83339331666252C229.9382428450805 129.83339331666252 246.2424067804816 140.2647376382331 248.19902046495497 140.2647376382331C250.15563414942835 140.2647376382331 266.45979808482946 136.78762286437623 268.4164117693028 136.78762286437623C270.37302545377617 136.78762286437623 286.6771893891772 134.1797867839836 288.6338030736506 134.1797867839836C290.590416758124 134.1797867839836 306.8945806935251 135.0490654774478 308.85119437799847 135.0490654774478C310.8078080624718 135.0490654774478 327.11197199787296 127.66019658300199 329.0685856823463 127.66019658300199C331.02519936681966 127.66019658300199 347.3293633022207 111.57854075391401 349.2859769866941 111.57854075391401C351.2425906711675 111.57854075391401 367.5467546065686 138.52618025130468 369.5033682910419 138.52618025130468C371.4599819755153 138.52618025130468 387.76414591091634 133.3105080905194 389.7207595953897 133.3105080905194C391.6773732798631 133.3105080905194 407.9815372152642 140.2647376382331 409.9381508997376 140.2647376382331C411.8947645842109 140.2647376382331 428.1989285196121 132.00659005032307 430.1555422040854 132.00659005032307C432.1121558885588 132.00659005032307 448.41631982395984 143.74185241208997 450.3729335084332 143.74185241208997C450.3729335084332 143.74185241208997 465 143.74185241208997 465 143.74185241208997 "
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#3f6ad8"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMaskzbevkpbj)"
                                                                                                                      pathTo="M 0 96.98448810754911C 7.076086956521739 96.98448810754911 13.14130434782609 93.84074457083764 20.217391304347828 93.84074457083764C 27.293478260869566 93.84074457083764 33.358695652173914 78.12202688728024 40.434782608695656 78.12202688728024C 47.51086956521739 78.12202688728024 53.57608695652174 67.11892450879007 60.65217391304348 67.11892450879007C 67.72826086956522 67.11892450879007 73.79347826086956 81.26577042399173 80.86956521739131 81.26577042399173C 87.94565217391305 81.26577042399173 94.01086956521739 67.11892450879007 101.08695652173913 67.11892450879007C 108.16304347826086 67.11892450879007 114.22826086956522 56.115822130299904 121.30434782608695 56.115822130299904C 128.3804347826087 56.115822130299904 134.44565217391303 49.82833505687694 141.52173913043478 49.82833505687694C 148.59782608695653 49.82833505687694 154.66304347826087 92.2688728024819 161.73913043478262 92.2688728024819C 168.81521739130434 92.2688728024819 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 114.27507755946226 202.17391304347825 114.27507755946226C 209.25 114.27507755946226 215.31521739130434 68.69079627714581 222.3913043478261 68.69079627714581C 229.4673913043478 68.69079627714581 235.5326086956522 71.83453981385729 242.6086956521739 71.83453981385729C 249.68478260869566 71.83453981385729 255.75 109.55946225439504 262.82608695652175 109.55946225439504C 269.9021739130435 109.55946225439504 275.9673913043478 96.98448810754911 283.04347826086956 96.98448810754911C 290.1195652173913 96.98448810754911 296.1847826086956 87.55325749741469 303.2608695652174 87.55325749741469C 310.3369565217391 87.55325749741469 316.4021739130435 90.69700103412617 323.47826086956525 90.69700103412617C 330.554347826087 90.69700103412617 336.6195652173913 63.97518097207859 343.69565217391306 63.97518097207859C 350.7717391304348 63.97518097207859 356.8369565217391 5.815925542916233 363.9130434782609 5.815925542916233C 370.9891304347826 5.815925542916233 377.05434782608694 103.27197518097208 384.1304347826087 103.27197518097208C 391.20652173913044 103.27197518097208 397.27173913043475 84.40951396070321 404.3478260869565 84.40951396070321C 411.42391304347825 84.40951396070321 417.4891304347826 109.55946225439504 424.5652173913044 109.55946225439504C 431.6413043478261 109.55946225439504 437.70652173913044 79.69389865563599 444.7826086956522 79.69389865563599C 451.85869565217394 79.69389865563599 457.92391304347825 122.13443640124095 465 122.13443640124095"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-series-markers-wrap hidden">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id=""
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker wjqszghie no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#3f6ad8"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-point-annotations hidden"></g>
                                                                                                    </g>
                                                                                                    <rect id=""
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id=""
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(63, 106, 216);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slick-slide slick-cloned"
                                                                     data-slick-index="5" aria-hidden="true"
                                                                     tabindex="-1" style="width: 465px;">
                                                                    <div>
                                                                        <div style="width: 100%; display: inline-block;">
                                                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                                                <div class="widget-chat-wrapper-outer">
                                                                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                        <div class="widget-chart-flex">
                                                                                            <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                                Helpdesk Tickets
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-numbers">
                                                                                            <div class="widget-chart-flex">
                                                                                                <div>
                                                                                                    <span class="text-warning">34</span>
                                                                                                </div>
                                                                                                <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                                                    <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                                                    increase
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                        <div id=""
                                                                                             style="min-height: 152px;">
                                                                                            <div id=""
                                                                                                 class="apexcharts-canvas apexchartstzb9txs2 light"
                                                                                                 style="width: 465px; height: 152px;">
                                                                                                <svg id="" width="465"
                                                                                                     height="152"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     version="1.1"
                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                                                     class="apexcharts-svg"
                                                                                                     xmlns:data="ApexChartsNS"
                                                                                                     transform="translate(0, 0)"
                                                                                                     style="background: transparent;">
                                                                                                    <g id=""
                                                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                                                       transform="translate(0, 0)">
                                                                                                        <defs id="">
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="470"
                                                                                                                      height="157"
                                                                                                                      x="-2.5"
                                                                                                                      y="-2.5"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <clipPath
                                                                                                                    id="">
                                                                                                                <rect id=""
                                                                                                                      width="505"
                                                                                                                      height="192"
                                                                                                                      x="-20"
                                                                                                                      y="-20"
                                                                                                                      rx="0"
                                                                                                                      ry="0"
                                                                                                                      fill="#ffffff"
                                                                                                                      opacity="1"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke="none"
                                                                                                                      stroke-dasharray="0"></rect>
                                                                                                            </clipPath>
                                                                                                            <linearGradient
                                                                                                                    id=""
                                                                                                                    x1="0"
                                                                                                                    y1="0"
                                                                                                                    x2="0"
                                                                                                                    y2="1">
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.7"
                                                                                                                      stop-color="rgba(247,185,36,0.7)"
                                                                                                                      offset="0"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="0.9"></stop>
                                                                                                                <stop id=""
                                                                                                                      stop-opacity="0.9"
                                                                                                                      stop-color="rgba(255,255,255,0.9)"
                                                                                                                      offset="1"></stop>
                                                                                                            </linearGradient>
                                                                                                        </defs>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="0"
                                                                                                              y2="152"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="3"
                                                                                                              class="apexcharts-xcrosshairs"
                                                                                                              x="0"
                                                                                                              y="0"
                                                                                                              width="1"
                                                                                                              height="152"
                                                                                                              fill="#b1b9c4"
                                                                                                              filter="none"
                                                                                                              fill-opacity="0.9"
                                                                                                              stroke-width="1"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis"
                                                                                                           transform="translate(0, 0)">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-xaxis-texts-g"
                                                                                                               transform="translate(0, -4)"></g>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-grid">
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="152"
                                                                                                                  x2="465"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                            <line id=""
                                                                                                                  x1="0"
                                                                                                                  y1="1"
                                                                                                                  x2="0"
                                                                                                                  y2="152"
                                                                                                                  stroke="transparent"
                                                                                                                  stroke-dasharray="0"></line>
                                                                                                        </g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-area-series apexcharts-plot-series">
                                                                                                            <g id=""
                                                                                                               class="apexcharts-series seriesx1"
                                                                                                               data:longestSeries="true"
                                                                                                               rel="1"
                                                                                                               data:realIndex="0">
                                                                                                                <path id=""
                                                                                                                      d="M-0.18128800512565513 152L-0.18128800512565513 117.25342267875584C5.611989262952589 117.25342267875584 14.424114036269584 96.66285834024077 20.217391304347828 96.66285834024077C26.01066857242607 96.66285834024077 34.64150534061741 106.95814050949829 40.434782608695656 106.95814050949829C46.2280598767739 106.95814050949829 54.858896644965235 112.10578159412705 60.65217391304348 112.10578159412705C66.44545118112173 112.10578159412705 75.07628794931306 117.25342267875584 80.86956521739131 117.25342267875584C86.66284248546955 117.25342267875584 95.29367925366088 106.95814050949829 101.08695652173913 106.95814050949829C106.88023378981737 106.95814050949829 115.51107055800871 103.09740969602672 121.30434782608695 103.09740969602672C127.0976250941652 103.09740969602672 135.72846186235654 82.50684535751166 141.52173913043478 82.50684535751166C147.31501639851302 82.50684535751166 155.94585316670438 82.50684535751166 161.73913043478262 82.50684535751166C167.53240770286087 82.50684535751166 176.1632444710522 72.21156318825412 181.95652173913044 72.21156318825412C187.74979900720868 72.21156318825412 196.3806357754 83.79375562866885 202.17391304347825 83.79375562866885C207.9671903115565 83.79375562866885 216.59802707974785 94.08903779792638 222.3913043478261 94.08903779792638C228.18458161590434 94.08903779792638 236.81541838409566 121.11415349222742 242.6086956521739 121.11415349222742C248.40197292025215 121.11415349222742 257.0328096884435 68.35083237478256 262.82608695652175 68.35083237478256C268.6193642246 68.35083237478256 277.2502009927913 73.49847345941133 283.04347826086956 73.49847345941133C288.83675552894783 73.49847345941133 297.4675922971391 104.38431996718391 303.2608695652174 104.38431996718391C309.05414683329565 104.38431996718391 317.684983601487 86.36757617098323 323.47826086956525 86.36757617098323C329.2715381376435 86.36757617098323 337.9023749058348 127.54870484801336 343.69565217391306 127.54870484801336C349.48892944199133 127.54870484801336 358.1197662101826 99.23667888255515 363.9130434782609 99.23667888255515C369.70632074633914 99.23667888255515 378.3371575145304 91.51521725561199 384.1304347826087 91.51521725561199C389.92371205068696 91.51521725561199 398.55454881887823 32.317344782381184 404.3478260869565 32.317344782381184C410.1411033550348 32.317344782381184 418.7719401232261 79.93302481519727 424.5652173913044 79.93302481519727C430.35849465938264 79.93302481519727 438.9893314275739 101.81049942486953 444.7826086956522 101.81049942486953C450.57588596373046 101.81049942486953 459.20672273192173 92.8021275267692 465 92.8021275267692C465 92.8021275267692 465 92.8021275267692 465 152M380.5197896114447 92.8021275267692C380.5197896114447 92.8021275267692 380.5197896114447 92.8021275267692 380.5197896114447 92.8021275267692 "
                                                                                                                      fill="url(#SvgjsLinearGradient1051)"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="0"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 152L 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599C 465 79.69389865563599 465 79.69389865563599 465 152M 465 79.69389865563599z"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <path id=""
                                                                                                                      d="M-0.7408768370508576 141.00267362209638C1.0927011964262259 141.00267362209638 2.6643395108351555 134.48573947222758 4.497917544312239 134.48573947222758C6.3314955777893225 134.48573947222758 23.62260765223384 137.74420654716198 25.456185685710924 137.74420654716198C27.28976371918801 137.74420654716198 43.83999895658167 139.37344008462918 45.67357699005875 139.37344008462918C47.50715502353584 139.37344008462918 64.0573902609295 141.00267362209638 65.89096829440658 141.00267362209638C67.72454632788366 141.00267362209638 84.27478156527732 137.74420654716198 86.1083595987544 137.74420654716198C87.94193763223149 137.74420654716198 104.49217286962514 136.52228139406157 106.32575090310222 136.52228139406157C108.1593289365793 136.52228139406157 124.70956417397296 130.00534724419276 126.54314220745005 130.00534724419276C128.37672024092714 130.00534724419276 144.9269554783208 130.00534724419276 146.7605335117979 130.00534724419276C148.59411154527496 130.00534724419276 165.14434678266863 126.74688016925835 166.97792481614573 126.74688016925835C168.8115028496228 126.74688016925835 185.36173808701645 130.41265562855955 187.19531612049354 130.41265562855955C189.0288941539706 130.41265562855955 205.57912939136426 133.67112270349395 207.41270742484136 133.67112270349395C209.24628545831843 133.67112270349395 225.7965206957121 142.2245987751968 227.63009872918917 142.2245987751968C229.46367676266627 142.2245987751968 246.01391200005992 125.52495501615795 247.847490033537 125.52495501615795C249.68106806701408 125.52495501615795 266.23130330440773 127.15418855362515 268.06488133788486 127.15418855362515C269.8984593713619 127.15418855362515 286.44869460875555 136.92958977842838 288.28227264223267 136.92958977842838C290.11585067570974 136.92958977842838 306.6660859131034 131.22727239729315 308.4996639465805 131.22727239729315C310.33324198005755 131.22727239729315 326.88347721745123 144.26114069703078 328.71705525092835 144.26114069703078C330.5506332844054 144.26114069703078 347.10086852179904 135.30035624096115 348.93444655527617 135.30035624096115C350.76802458875324 135.30035624096115 367.31825982614686 132.85650593476035 369.151837859624 132.85650593476035C370.98541589310105 132.85650593476035 387.53565113049467 114.12032025388751 389.3692291639718 114.12032025388751C391.20280719744886 114.12032025388751 407.75304243484254 129.19073047545916 409.5866204683196 129.19073047545916C411.4201985017967 129.19073047545916 427.97043373919036 136.11497300969478 429.8040117726675 136.11497300969478C431.63758980614455 136.11497300969478 448.18782504353817 133.26381431912716 450.0214030770153 133.26381431912716C450.0214030770153 133.26381431912716 465 133.26381431912716 465 133.26381431912716 "
                                                                                                                      fill="none"
                                                                                                                      fill-opacity="1"
                                                                                                                      stroke="#f7b924"
                                                                                                                      stroke-opacity="1"
                                                                                                                      stroke-linecap="butt"
                                                                                                                      stroke-width="5"
                                                                                                                      stroke-dasharray="0"
                                                                                                                      class="apexcharts-area"
                                                                                                                      index="0"
                                                                                                                      clip-path="url(#gridRectMasktzb9txs2)"
                                                                                                                      pathTo="M 0 109.55946225439504C 7.076086956521739 109.55946225439504 13.14130434782609 84.40951396070321 20.217391304347828 84.40951396070321C 27.293478260869566 84.40951396070321 33.358695652173914 96.98448810754911 40.434782608695656 96.98448810754911C 47.51086956521739 96.98448810754911 53.57608695652174 103.27197518097208 60.65217391304348 103.27197518097208C 67.72826086956522 103.27197518097208 73.79347826086956 109.55946225439504 80.86956521739131 109.55946225439504C 87.94565217391305 109.55946225439504 94.01086956521739 96.98448810754911 101.08695652173913 96.98448810754911C 108.16304347826086 96.98448810754911 114.22826086956522 92.2688728024819 121.30434782608695 92.2688728024819C 128.3804347826087 92.2688728024819 134.44565217391303 67.11892450879007 141.52173913043478 67.11892450879007C 148.59782608695653 67.11892450879007 154.66304347826087 67.11892450879007 161.73913043478262 67.11892450879007C 168.81521739130434 67.11892450879007 174.88043478260872 54.543950361944155 181.95652173913044 54.543950361944155C 189.03260869565216 54.543950361944155 195.09782608695653 68.69079627714581 202.17391304347825 68.69079627714581C 209.25 68.69079627714581 215.31521739130434 81.26577042399173 222.3913043478261 81.26577042399173C 229.4673913043478 81.26577042399173 235.5326086956522 114.27507755946226 242.6086956521739 114.27507755946226C 249.68478260869566 114.27507755946226 255.75 49.82833505687694 262.82608695652175 49.82833505687694C 269.9021739130435 49.82833505687694 275.9673913043478 56.115822130299904 283.04347826086956 56.115822130299904C 290.1195652173913 56.115822130299904 296.1847826086956 93.84074457083764 303.2608695652174 93.84074457083764C 310.3369565217391 93.84074457083764 316.4021739130435 71.83453981385729 323.47826086956525 71.83453981385729C 330.554347826087 71.83453981385729 336.6195652173913 122.13443640124095 343.69565217391306 122.13443640124095C 350.7717391304348 122.13443640124095 356.8369565217391 87.55325749741469 363.9130434782609 87.55325749741469C 370.9891304347826 87.55325749741469 377.05434782608694 78.12202688728024 384.1304347826087 78.12202688728024C 391.20652173913044 78.12202688728024 397.27173913043475 5.815925542916233 404.3478260869565 5.815925542916233C 411.42391304347825 5.815925542916233 417.4891304347826 63.97518097207859 424.5652173913044 63.97518097207859C 431.6413043478261 63.97518097207859 437.70652173913044 90.69700103412617 444.7826086956522 90.69700103412617C 451.85869565217394 90.69700103412617 457.92391304347825 79.69389865563599 465 79.69389865563599"
                                                                                                                      pathFrom="M -1 152L -1 152L 20.217391304347828 152L 40.434782608695656 152L 60.65217391304348 152L 80.86956521739131 152L 101.08695652173913 152L 121.30434782608695 152L 141.52173913043478 152L 161.73913043478262 152L 181.95652173913044 152L 202.17391304347825 152L 222.3913043478261 152L 242.6086956521739 152L 262.82608695652175 152L 283.04347826086956 152L 303.2608695652174 152L 323.47826086956525 152L 343.69565217391306 152L 363.9130434782609 152L 384.1304347826087 152L 404.3478260869565 152L 424.5652173913044 152L 444.7826086956522 152L 465 152"></path>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-series-markers-wrap hidden">
                                                                                                                    <g class="apexcharts-series-markers">
                                                                                                                        <circle id=""
                                                                                                                                r="0"
                                                                                                                                cx="0"
                                                                                                                                cy="0"
                                                                                                                                class="apexcharts-marker wwzthhm1ei no-pointer-events"
                                                                                                                                stroke="#ffffff"
                                                                                                                                fill="#f7b924"
                                                                                                                                fill-opacity="1"
                                                                                                                                stroke-width="2"
                                                                                                                                stroke-opacity="0.9"
                                                                                                                                default-marker-size="0"></circle>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g id=""
                                                                                                                   class="apexcharts-datalabels"></g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke="#b6b6b6"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="1"
                                                                                                              class="apexcharts-ycrosshairs"></line>
                                                                                                        <line id=""
                                                                                                              x1="0"
                                                                                                              y1="0"
                                                                                                              x2="465"
                                                                                                              y2="0"
                                                                                                              stroke-dasharray="0"
                                                                                                              stroke-width="0"
                                                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-xaxis-annotations hidden"></g>
                                                                                                        <g id=""
                                                                                                           class="apexcharts-point-annotations hidden"></g>
                                                                                                    </g>
                                                                                                    <rect id=""
                                                                                                          width="0"
                                                                                                          height="0"
                                                                                                          x="0" y="0"
                                                                                                          rx="0" ry="0"
                                                                                                          fill="#fefefe"
                                                                                                          opacity="1"
                                                                                                          stroke-width="0"
                                                                                                          stroke="none"
                                                                                                          stroke-dasharray="0"></rect>
                                                                                                    <g id=""
                                                                                                       class="apexcharts-yaxis"
                                                                                                       rel="0"
                                                                                                       transform="translate(-21, 0)">
                                                                                                        <g id=""
                                                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="apexcharts-legend"></div>
                                                                                                <div class="apexcharts-tooltip light">
                                                                                                    <div class="apexcharts-tooltip-series-group">
                                                                                                        <span class="apexcharts-tooltip-marker"
                                                                                                              style="background-color: rgb(247, 185, 36);"></span>
                                                                                                        <div class="apexcharts-tooltip-text"
                                                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                                            </div>
                                                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="resize-triggers">
                                                                                            <div class="expand-trigger">
                                                                                                <div style="width: 466px; height: 153px;"></div>
                                                                                            </div>
                                                                                            <div class="contract-trigger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="slick-next slick-arrow" aria-label="Next"
                                                                type="button" style="">Next
                                                        </button>
                                                        <ul class="slick-dots" style="" role="tablist">
                                                            <li class="slick-active" role="presentation">
                                                                <button type="button" role="tab"
                                                                        id="slick-slide-control00"
                                                                        aria-controls="slick-slide00"
                                                                        aria-label="1 of 3" tabindex="0"
                                                                        aria-selected="true">1
                                                                </button>
                                                            </li>
                                                            <li role="presentation">
                                                                <button type="button" role="tab"
                                                                        id="slick-slide-control01"
                                                                        aria-controls="slick-slide01"
                                                                        aria-label="2 of 3" tabindex="-1">2
                                                                </button>
                                                            </li>
                                                            <li role="presentation">
                                                                <button type="button" role="tab"
                                                                        id="slick-slide-control02"
                                                                        aria-controls="slick-slide02"
                                                                        aria-label="3 of 3" tabindex="-1">3
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 pl-3 pr-3 pb-1 font-weight-normal">
                                                    Sales Progress</h6>
                                                <ul class="list-group list-group-flush">
                                                    <li class="p-3 bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Total Orders
                                                                        </div>
                                                                        <div class="widget-subheading">Last year
                                                                            expenses
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-success">
                                                                            <small>$</small>
                                                                            1896
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-progress-wrapper">
                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                        <div class="progress-bar bg-primary"
                                                                             role="progressbar" aria-valuenow="43"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             style="width: 43%;"></div>
                                                                    </div>
                                                                    <div class="progress-sub-label">
                                                                        <div class="sub-label-left">YoY Growth</div>
                                                                        <div class="sub-label-right">100%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="card-hover-shadow-2x mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"> </i>
                                                    Timeline Example
                                                </div>
                                                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link">
                                                            <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                        </button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                             class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <h6 tabindex="-1" class="dropdown-header">
                                                                Header</h6>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <div class="p-3 text-right">
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                    View Details
                                                                </button>
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                    Action
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-lg">
                                                <div class="scrollbar-container ps ps--active-y">
                                                    <div class="p-4">
                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands
                                                                            Meeting</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at <span
                                                                                    class="text-success">15:00 PM</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the
                                                                            production release
                                                                            <div class="badge badge-danger ml-2">
                                                                                NEW
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">
                                                                            Something not important
                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhQAAAwEBAAMAAAAAAAAAAAAABQYHBAIBAwgBAAMBAQEAAAAAAAAAAAAAAAIDBAEABRAAAgIBAwQABAUDBAMAAAAAAQIDBBEAEgUhMRMGQVFhFIEiMiMHcZFCoVJiFYJTNBEAAgICAQQCAwEBAAAAAAAAAAERAiEDEjFBIgRRE2EyQlJy/9oADAMBAAIRAxEAPwCERTyMWBgJCnaxXr1GoGi7kebRjNZwsZDkdAVx111OpjZ3Qk4iKsv34CMDs7Ek/HPT5aLhZvBkpLIUTk/SzVEfEzyLdf8AU86OsUY/3sR0A+OqVpXdk72PsYLPunJVroTjbCW6cYG6eWPCux6kAZ3Kvy1j01N+xh/i/c+K5dY42dKdtGDeCUEozD4JIBg5+AODpF9PEZS7Y2S2LMUXlnrALj8zKfnqdJPoNbaMss9Ro8yQOqn4suR/XprOLOlCFWr2628vVZt7byUPxOmOH3OUo0pcrtL45EdSMblK5xrOB3NHs9Z9M5X2z2WHjYYmRORm8Rn/AEpDWjP7h6f5Htj56t1UeEJu+7PoG96167wUbcRQowipA/hSPxqSVUYyxxlifmdL9hpWhFPrrlWWL3OfxT6jzlb9uktOywz5YMIc9+o+OmUmANmtSSn3L+LL/r9aQyq0lpW3+TtuUdUZR2YuPh8x89c7ZhivrUSg/wCucjY531OJ6YR2UeGfcNpV1AJGOo69wRqO9FW2RlW7IIT3Z6lYRz1JCsa/mdSCOmk8JeGFMCxC9wruNV9rYwV0yF8nSbeJrpPzSRzRmGOwQgdxhV2qTlj+Gj10myQN74bHj1X2Gh69yVS5VqQz14LDjlb0snirVgsZfdldzMc4XAGNxxnXp2daeRJRWvhIy8z/AC9Yfk2EcFOxHK3kbxTMJlL9QGWVQDu+HXrrz9k28j0dV1XxCXGfyTwNtq896wtZZSQUfchUA4y2R0H17a6l7TlB3VYwxn/kiLieZ9EnnjmE1NY1eOzC4OPE6sAHGcMDp93JKiW+tJYpcPXSrGhNyaaYjGDkvjPTpggaj2w3kKk9glyUXKtXdPtozuGMhsjrpdK16ya2wHWtywxIj1JBtAGR113FPuFP4NEvJztx1t6Pkgnh2CdwgaRYmJEgQEY3N0H9M6C00yiz0VW9mrL+S0ew+p8AnpfCcZeghZYYI2Twqq5nkTdvBUdQoPx769HffjrTZ53q15bbVX6kpscNXv8AMf8AXSRxchBURSbcm2P7aJTt3S42rIR+lc/21Itzg9N+sl1DnvPoFe96x6/NSmNKSOB/2Y3AEsIkJ2ordHeMHdhu+qOKVE2TOXsaQuey0vYuI9F5T7enYjovJA9fkEiMfmiPR68tdS2PI3ZuuNdTGP5E7k46+QS4LhOTqcXx8jSBbK1lEsTqMB3G5u31OpNmxNsxKDvkLHL1qzyMkUiKCcDI1lIeEbLAcNq4GPm4+ZcHDbcNrHrjuEr/AIOeO5G/CLsXhmhS1uV3VSWKnqAdFfXKhM3Rteu3KCnfyvy89bgq8EbtDIgggJXo6osQDhcdiT0yO2n+2+lQvT72JlxXr9+4Rx1rg/BaLmUh7ib2SPqkkZcBNu49ic50tKenlUplpTbxDvuEtHieArULNyet7ZSlHItDaLMLIQeB3hMZlhQYG3AI66ZtolTH7VB1bn9mPKth859uW5r1njTlq6w4mt2lcxvFLHs8SqFwW3EsrDQ7L2tSQdfCl22Kpq3vLNsuHarnAYA9+uppXwSZB/J0+XnhaH7iIKw6krgkD4aKjqnJzTM0F+R7DJJ9sLCY8gWcKCT06ZHXPzGmvRL6mLY0ugUr3YI7tGF/G9u08RipROGZlaUId7Y2qcZOO+NavWh5Zz2NrCDvubUuY5eV/JsWKdizdMAN1U/6aPalsG6m9eBQA4/lZmd+U+zeswjjSSMnP5sfrU7vw0v14XfiW32vsP3McTx8nBUKFxozBBNDYmmQKGnEDeRFJ7ld3U51XtzWGyH7fJsXb92flLliQWXSqsm2GBHOwBf8sdixJJzqPZcxZRhmoywhvDZkUnrnO7r89L5rujfrBFufmF8YSwsjO21Q6dep1q4s5ponT8gURZcEiAFlHUEIDhxj5qe41U6C1cKcHzjUeYgubvLJUdJIpGOSY36q/wBSBkZ+ml3mMB0anJRo4JHL24pgYbCAOck/UNn6g99S+u2ivekxdqerS3uRWKCQ9WJdxkY6/wBtU/syfopKvS4GGrwTyzhrLuBVjaRyx/OcM30HTGrNepW8WR79rqpFyClw96xehrKC1FYpbZJ2JGJU343g7SQO+gv6V1+r5AL2q91xBP8A0Pke0ztPBFG/7MgYlShGQQe2pditTqijXZW6MzTcMcBkuyZQ7kJwRkaSti+BrT+SectVWStX5WL/AOW9Elw9sCRWENpfxRgx+oOvWdMSQq+YBvG0bL05ERs2OJnapMCe8DsfGf8AxYaXwywuXQL0Pd7fr7pQ5YP9nlkr2QC2wj9UUg+IHdT8tKv685qUa/ZjFh99G9i9ZNue7Z5GsKzJlpDMqKoHU9CRgn+ms11snlB7dtWsMeh7hXu1/LCDHxFCKSyZWG3yqF/K4VsFY/guep769DRSMs8vfs5YROKnJXeK9crCLLcz7RZa0kDfHd+3CG/4IuWOjq4X/QtqXH+QlwfskA5GKnTItcZxMhpUInOEv8k6k2bM5/8ARXTcT+GiTnBjUZNfN+sUlp1uU4qaeOhZyrAkhA/dXiDZYRv/AIhtef7mlUXKqLPW2u+LH//Z"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                    <div class="avatar-icon">
                                                                                        <i>+</i></div>
                                                                                </div>
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has an
                                                                            info state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has a
                                                                            dark state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands
                                                                            Meeting</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at <span
                                                                                    class="text-success">15:00 PM</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the
                                                                            production release
                                                                            <div class="badge badge-danger ml-2">
                                                                                NEW
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">
                                                                            Something not important
                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                    <div class="avatar-icon">
                                                                                        <i>+</i></div>
                                                                                </div>
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has an
                                                                            info state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has a
                                                                            dark state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands
                                                                            Meeting</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at <span
                                                                                    class="text-success">15:00 PM</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the
                                                                            production release
                                                                            <div class="badge badge-danger ml-2">
                                                                                NEW
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">
                                                                            Something not important
                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhwAAAgMBAQAAAAAAAAAAAAAABAYDBQcCAQEAAgMBAQAAAAAAAAAAAAAAAAUBAgMEBhAAAgECBAUDAwIHAQAAAAAAAQIDEQQAIRIFMVEiEwZBYXEyQgeBFJGhsXIjMxZiEQACAgIBAgUEAwAAAAAAAAAAARECAwQhMRJRgTITBUFhcSKhQhT/2gAMAwEAAhEDEQA/AE9BdGVhIiLGq17gzzxcyZNbW6vMM6kClfY4go7A+/73tOxWhE7d66JolpEyiUkitWr9K+5xMk1q2Jkv5D3pp+7bW8EESj/WQ0hy9SxI/piJNVRDBsPnVrdukG6Qi3nchY7hT/iJPAMDmtfQ8MEkOsDNd2UUsOl1oY6vmMwVzBxUoiOe7tuyjujgsF+01qcsXBJnM8GuMo4pXLPjX0xMEolEZDUI6SM8EAB71u8Ox7S9+Y+4QdEMYyq7/TnyHHEMFSTI44ZJ5GllJZ3JaSRjUtXMmpzOeKmwSI7ZYqDNq9XxgA8lmgYaftoRT0pgkINF/HHkp3BTt1yddzbQgJI2eqNcs/cYtVmdlA43UGuPUatp+n9MWggAjt17jFs8qivPADI2ljRB3K1JCggEip4YgCm/ItksvjDShgBbyxOaHJgx0EfzrgaJqyh8W8fguIIp5U1ySmi14AcgMKdvYacIcaevVqWaBB+PtumiTuWYISjBgKf0wt/1ZPozueHH4AO/eI2kMZAtUXLpooFKemJx7N0+WTbDRrohM8Sji2v8iwQLVILlJYtHAVZCyj+K49BrX7qpsQ7eNVs0jWjQppk6aCtTwpjpOQCa2BAkjNVY8efxiIABhK98BkIovSK5McBYD8tto7jxnc1VDVoKhBSmtSGBz5UxW7hSWpTuskiv8T1W0NrGtvPNEoV5pYYmmKBhUVC88I9nF7lnyh5hyqlUoZrmzT2O4Wuq0ugwj6XSSN4pFPJkcKwxyvC68SaLInyLflU0s0sllYQXN/dRjqdIlS3U8jNIVB+Bi1dddW1APPHCTM2gtp/+02i7aDtyo796OTmOmmX92WGmtftULnk4Nqnfy+OJNIuHjYiOn1kKNXCmGbFaI3t0RQIejSaaT9NMAQVNrBFJcagWqoNASfTLIHEIDu4tm/YXSue5qiYBGNFqBkD84rk9LNMT/dfkl8Q2Rd22yyX9w8IgUrLDE7RiTLT1FM+n7cefvZ1u2PFWajRaWabNuVjttrK7MtvKZDI7TPTT0anfqY1FanGWS/c5NceNJQBxeJ7Tv1ql9MqzXQR4JCzSVjJ+qgUhc+PMYvTLatYRW+NTLFa9sXi8ps7e2k1iyi0SlhVmXUB1H241x1aXLXH9jm2oVXzH6l3JDM+iPurrJqwAHPKmHYlJngnEx6hoU1NBmajAQmL24X72s6XKJqDjtvyA41xUsELeSaAQmoihNPT14HEkHHiO4XVgbn9tV5o5JkMNKtkO4lB7g4RblIyeA81bzjkP8Y8p8gm3aXdbTa0ug6mK4ErnuRn0BI4f204YhYlX7mnutrw8yNd88m27dhaSWCLdXzh5UhJQIjGlSCPficUthUTMFvdfHEgnjk37zyDc7oP3FiAgaX0Z2csR+igYZ6FGqiv5C6dkhkvoI44RdqmkQsHk0jNlXiMdwvR1DdR3MfejRirDIDjgASZryGWEoWozZBGBBryxBcavH/A9/wBxeAzr+zjmUdcg6yo+7R9uXPFoKuwn7hYb1t+/7xEjst3YzPb6E6dSR/QfkqePvhVsXTtFhrr42qTUuvG96u463+0XUcUs6gXCu0qFWXI5xEH9DjCXRwzrpdWXRP8AJRee7rfBCFull3S/ko6xF6KqZli7Es3uTjTCu6026Iy2MjSSX8FrsE1ttm229pErBWAlWZh/vL5tKCONcNqpJcCa0tyxvtL22nTtM61IoQ2X8jiYKQeW9o0aMoXQkblo6e/EfGIAufDPEdv2ySKRYzNdFdbXc4BkFftQfSg+M/fGiRDtI+WsYSYMoyQUrzJ4k4CEJv5K8PIvP+psU1wzosW6IPsdelJj/wCSOlj8YTfJ4H615jf4/OvQ/IzHcfG7SaQ3EYktpyeqSFimo8KsBkfnC3HtWXHVDG2CrclBd7ElpqMSvLNKKSzuSx08qnnjppsO3UythSXA/eJbUm4/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP/Z"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon"><img
                                                                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                alt=""></div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                    <div class="avatar-icon">
                                                                                        <i>+</i></div>
                                                                                </div>
                                                                            </div>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has an
                                                                            info state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has a
                                                                            dark state</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                             style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y"
                                                         style="top: 0px; height: 400px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                             style="top: 0px; height: 193px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block text-center card-footer">
                                                <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                                                    <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                                    View All Messages
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>874</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">sales last
                                                        month</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-1" style="min-height: 100px;">
                                                            <div id="apexchartssy7ljh57"
                                                                 class="apexcharts-canvas apexchartssy7ljh57 light"
                                                                 style="width: 135px; height: 100px;">
                                                                <svg id="SvgjsSvg5132" width="135" height="100"
                                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                     class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                     transform="translate(0, 0)"
                                                                     style="background: transparent;">
                                                                    <g id="SvgjsG5134"
                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                       transform="translate(0, 0)">
                                                                        <defs id="SvgjsDefs5133">
                                                                            <clipPath id="gridRectMasksy7ljh57">
                                                                                <rect id="SvgjsRect5139" width="138"
                                                                                      height="103" x="-1.5" y="-1.5"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                            <clipPath id="gridRectMarkerMasksy7ljh57">
                                                                                <rect id="SvgjsRect5140" width="175"
                                                                                      height="140" x="-20" y="-20"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                        <line id="SvgjsLine5138" x1="0" y1="0" x2="0"
                                                                              y2="100" stroke="#b6b6b6"
                                                                              stroke-dasharray="3"
                                                                              class="apexcharts-xcrosshairs" x="0" y="0"
                                                                              width="1" height="100" fill="#b1b9c4"
                                                                              filter="none" fill-opacity="0.9"
                                                                              stroke-width="1"></line>
                                                                        <g id="SvgjsG5147" class="apexcharts-xaxis"
                                                                           transform="translate(0, 0)">
                                                                            <g id="SvgjsG5148"
                                                                               class="apexcharts-xaxis-texts-g"
                                                                               transform="translate(0, 1.875)"></g>
                                                                        </g>
                                                                        <g id="SvgjsG5151" class="apexcharts-grid">
                                                                            <line id="SvgjsLine5153" x1="0" y1="100"
                                                                                  x2="135" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                            <line id="SvgjsLine5152" x1="0" y1="1"
                                                                                  x2="0" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                        </g>
                                                                        <g id="SvgjsG5142"
                                                                           class="apexcharts-line-series apexcharts-plot-series">
                                                                            <g id="SvgjsG5143"
                                                                               class="apexcharts-series seriesx1"
                                                                               data:longestSeries="true" rel="1"
                                                                               data:realIndex="0">
                                                                                <path id="apexcharts-line-0"
                                                                                      d="M 0 75.18097207859358C 2.0543478260869565 75.18097207859358 3.815217391304348 60.70320579110652 5.869565217391305 60.70320579110652C 7.923913043478262 60.70320579110652 9.684782608695652 45.19131334022751 11.73913043478261 45.19131334022751C 13.793478260869566 45.19131334022751 15.554347826086957 51.39607032057911 17.608695652173914 51.39607032057911C 19.66304347826087 51.39607032057911 21.42391304347826 80.35160289555326 23.47826086956522 80.35160289555326C 25.532608695652176 80.35160289555326 27.293478260869566 55.53257497414685 29.347826086956523 55.53257497414685C 31.40217391304348 55.53257497414685 33.163043478260875 57.60082730093072 35.21739130434783 57.60082730093072C 37.27173913043478 57.60082730093072 39.03260869565218 36.91830403309204 41.08695652173913 36.91830403309204C 43.141304347826086 36.91830403309204 44.902173913043484 42.088934850051714 46.95652173913044 42.088934850051714C 49.01086956521739 42.088934850051714 50.77173913043479 32.7817993795243 52.82608695652174 32.7817993795243C 54.880434782608695 32.7817993795243 56.64130434782609 3.8262668045501584 58.69565217391305 3.8262668045501584C 60.75 3.8262668045501584 62.51086956521739 67.94208893485006 64.56521739130434 67.94208893485006C 66.6195652173913 67.94208893485006 68.3804347826087 35.88417786970011 70.43478260869566 35.88417786970011C 72.48913043478261 35.88417786970011 74.25 72.07859358841779 76.30434782608695 72.07859358841779C 78.3586956521739 72.07859358841779 80.11956521739131 61.73733195449845 82.17391304347827 61.73733195449845C 84.22826086956522 61.73733195449845 85.98913043478261 59.66907962771459 88.04347826086956 59.66907962771459C 90.09782608695652 59.66907962771459 91.85869565217392 44.15718717683558 93.91304347826087 44.15718717683558C 95.96739130434783 44.15718717683558 97.72826086956522 44.15718717683558 99.78260869565217 44.15718717683558C 101.83695652173913 44.15718717683558 103.59782608695653 47.25956566701138 105.65217391304348 47.25956566701138C 107.70652173913044 47.25956566701138 109.46739130434783 63.80558428128232 111.52173913043478 63.80558428128232C 113.57608695652173 63.80558428128232 115.33695652173914 53.464322647362984 117.3913043478261 53.464322647362984C 119.44565217391305 53.464322647362984 121.20652173913044 52.430196483971045 123.26086956521739 52.430196483971045C 125.31521739130434 52.430196483971045 127.07608695652173 72.07859358841779 129.1304347826087 72.07859358841779C 131.18478260869566 72.07859358841779 132.94565217391303 63.80558428128232 135 63.80558428128232"
                                                                                      fill="none" fill-opacity="1"
                                                                                      stroke="rgba(58,196,125,0.85)"
                                                                                      stroke-opacity="1"
                                                                                      stroke-linecap="butt"
                                                                                      stroke-width="3"
                                                                                      stroke-dasharray="0"
                                                                                      class="apexcharts-line" index="0"
                                                                                      clip-path="url(#gridRectMasksy7ljh57)"
                                                                                      pathTo="M 0 75.18097207859358C 2.0543478260869565 75.18097207859358 3.815217391304348 60.70320579110652 5.869565217391305 60.70320579110652C 7.923913043478262 60.70320579110652 9.684782608695652 45.19131334022751 11.73913043478261 45.19131334022751C 13.793478260869566 45.19131334022751 15.554347826086957 51.39607032057911 17.608695652173914 51.39607032057911C 19.66304347826087 51.39607032057911 21.42391304347826 80.35160289555326 23.47826086956522 80.35160289555326C 25.532608695652176 80.35160289555326 27.293478260869566 55.53257497414685 29.347826086956523 55.53257497414685C 31.40217391304348 55.53257497414685 33.163043478260875 57.60082730093072 35.21739130434783 57.60082730093072C 37.27173913043478 57.60082730093072 39.03260869565218 36.91830403309204 41.08695652173913 36.91830403309204C 43.141304347826086 36.91830403309204 44.902173913043484 42.088934850051714 46.95652173913044 42.088934850051714C 49.01086956521739 42.088934850051714 50.77173913043479 32.7817993795243 52.82608695652174 32.7817993795243C 54.880434782608695 32.7817993795243 56.64130434782609 3.8262668045501584 58.69565217391305 3.8262668045501584C 60.75 3.8262668045501584 62.51086956521739 67.94208893485006 64.56521739130434 67.94208893485006C 66.6195652173913 67.94208893485006 68.3804347826087 35.88417786970011 70.43478260869566 35.88417786970011C 72.48913043478261 35.88417786970011 74.25 72.07859358841779 76.30434782608695 72.07859358841779C 78.3586956521739 72.07859358841779 80.11956521739131 61.73733195449845 82.17391304347827 61.73733195449845C 84.22826086956522 61.73733195449845 85.98913043478261 59.66907962771459 88.04347826086956 59.66907962771459C 90.09782608695652 59.66907962771459 91.85869565217392 44.15718717683558 93.91304347826087 44.15718717683558C 95.96739130434783 44.15718717683558 97.72826086956522 44.15718717683558 99.78260869565217 44.15718717683558C 101.83695652173913 44.15718717683558 103.59782608695653 47.25956566701138 105.65217391304348 47.25956566701138C 107.70652173913044 47.25956566701138 109.46739130434783 63.80558428128232 111.52173913043478 63.80558428128232C 113.57608695652173 63.80558428128232 115.33695652173914 53.464322647362984 117.3913043478261 53.464322647362984C 119.44565217391305 53.464322647362984 121.20652173913044 52.430196483971045 123.26086956521739 52.430196483971045C 125.31521739130434 52.430196483971045 127.07608695652173 72.07859358841779 129.1304347826087 72.07859358841779C 131.18478260869566 72.07859358841779 132.94565217391303 63.80558428128232 135 63.80558428128232"
                                                                                      pathFrom="M -1 100L -1 100L 5.869565217391305 100L 11.73913043478261 100L 17.608695652173914 100L 23.47826086956522 100L 29.347826086956523 100L 35.21739130434783 100L 41.08695652173913 100L 46.95652173913044 100L 52.82608695652174 100L 58.69565217391305 100L 64.56521739130434 100L 70.43478260869566 100L 76.30434782608695 100L 82.17391304347827 100L 88.04347826086956 100L 93.91304347826087 100L 99.78260869565217 100L 105.65217391304348 100L 111.52173913043478 100L 117.3913043478261 100L 123.26086956521739 100L 129.1304347826087 100L 135 100"></path>
                                                                                <g id="SvgjsG5144"
                                                                                   class="apexcharts-series-markers-wrap">
                                                                                    <g class="apexcharts-series-markers">
                                                                                        <circle id="SvgjsCircle5159"
                                                                                                r="0" cx="0" cy="0"
                                                                                                class="apexcharts-marker w9wyzg8oc no-pointer-events"
                                                                                                stroke="#ffffff"
                                                                                                fill="#3ac47d"
                                                                                                fill-opacity="1"
                                                                                                stroke-width="2"
                                                                                                stroke-opacity="0.9"
                                                                                                default-marker-size="0"></circle>
                                                                                    </g>
                                                                                </g>
                                                                                <g id="SvgjsG5145"
                                                                                   class="apexcharts-datalabels"></g>
                                                                            </g>
                                                                        </g>
                                                                        <line id="SvgjsLine5154" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke="#b6b6b6"
                                                                              stroke-dasharray="0" stroke-width="1"
                                                                              class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine5155" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke-dasharray="0"
                                                                              stroke-width="0"
                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                        <g id="SvgjsG5156"
                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                        <g id="SvgjsG5157"
                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                        <g id="SvgjsG5158"
                                                                           class="apexcharts-point-annotations"></g>
                                                                    </g>
                                                                    <rect id="SvgjsRect5137" width="0" height="0" x="0"
                                                                          y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0"></rect>
                                                                    <g id="SvgjsG5149" class="apexcharts-yaxis" rel="0"
                                                                       transform="translate(-21, 0)">
                                                                        <g id="SvgjsG5150"
                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                    </g>
                                                                </svg>
                                                                <div class="apexcharts-legend"></div>
                                                                <div class="apexcharts-tooltip light">
                                                                    <div class="apexcharts-tooltip-series-group"><span
                                                                                class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(58, 196, 125);"></span>
                                                                        <div class="apexcharts-tooltip-text"
                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="resize-triggers">
                                                            <div class="expand-trigger">
                                                                <div style="width: 136px; height: 101px;"></div>
                                                            </div>
                                                            <div class="contract-trigger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>1283</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
                                                </div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-2" style="min-height: 100px;">
                                                            <div id="apexchartspm96no1p"
                                                                 class="apexcharts-canvas apexchartspm96no1p light"
                                                                 style="width: 135px; height: 100px;">
                                                                <svg id="SvgjsSvg5163" width="135" height="100"
                                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                     class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                     transform="translate(0, 0)"
                                                                     style="background: transparent;">
                                                                    <g id="SvgjsG5165"
                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                       transform="translate(0, 0)">
                                                                        <defs id="SvgjsDefs5164">
                                                                            <clipPath id="gridRectMaskpm96no1p">
                                                                                <rect id="SvgjsRect5170" width="138"
                                                                                      height="103" x="-1.5" y="-1.5"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                            <clipPath id="gridRectMarkerMaskpm96no1p">
                                                                                <rect id="SvgjsRect5171" width="175"
                                                                                      height="140" x="-20" y="-20"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                        <line id="SvgjsLine5169" x1="0" y1="0" x2="0"
                                                                              y2="100" stroke="#b6b6b6"
                                                                              stroke-dasharray="3"
                                                                              class="apexcharts-xcrosshairs" x="0" y="0"
                                                                              width="1" height="100" fill="#b1b9c4"
                                                                              filter="none" fill-opacity="0.9"
                                                                              stroke-width="1"></line>
                                                                        <g id="SvgjsG5178" class="apexcharts-xaxis"
                                                                           transform="translate(0, 0)">
                                                                            <g id="SvgjsG5179"
                                                                               class="apexcharts-xaxis-texts-g"
                                                                               transform="translate(0, 1.875)"></g>
                                                                        </g>
                                                                        <g id="SvgjsG5182" class="apexcharts-grid">
                                                                            <line id="SvgjsLine5184" x1="0" y1="100"
                                                                                  x2="135" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                            <line id="SvgjsLine5183" x1="0" y1="1"
                                                                                  x2="0" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                        </g>
                                                                        <g id="SvgjsG5173"
                                                                           class="apexcharts-line-series apexcharts-plot-series">
                                                                            <g id="SvgjsG5174"
                                                                               class="apexcharts-series seriesx1"
                                                                               data:longestSeries="true" rel="1"
                                                                               data:realIndex="0">
                                                                                <path id="apexcharts-line-0"
                                                                                      d="M 0 55.53257497414685C 2.0543478260869565 55.53257497414685 3.815217391304348 32.7817993795243 5.869565217391305 32.7817993795243C 7.923913043478262 32.7817993795243 9.684782608695652 52.430196483971045 11.73913043478261 52.430196483971045C 13.793478260869566 52.430196483971045 15.554347826086957 72.07859358841779 17.608695652173914 72.07859358841779C 19.66304347826087 72.07859358841779 21.42391304347826 61.73733195449845 23.47826086956522 61.73733195449845C 25.532608695652176 61.73733195449845 27.293478260869566 45.19131334022751 29.347826086956523 45.19131334022751C 31.40217391304348 45.19131334022751 33.163043478260875 42.088934850051714 35.21739130434783 42.088934850051714C 37.27173913043478 42.088934850051714 39.03260869565218 57.60082730093072 41.08695652173913 57.60082730093072C 43.141304347826086 57.60082730093072 44.902173913043484 53.464322647362984 46.95652173913044 53.464322647362984C 49.01086956521739 53.464322647362984 50.77173913043479 72.07859358841779 52.82608695652174 72.07859358841779C 54.880434782608695 72.07859358841779 56.64130434782609 63.80558428128232 58.69565217391305 63.80558428128232C 60.75 63.80558428128232 62.51086956521739 59.66907962771459 64.56521739130434 59.66907962771459C 66.6195652173913 59.66907962771459 68.3804347826087 75.18097207859358 70.43478260869566 75.18097207859358C 72.48913043478261 75.18097207859358 74.25 51.39607032057911 76.30434782608695 51.39607032057911C 78.3586956521739 51.39607032057911 80.11956521739131 67.94208893485006 82.17391304347827 67.94208893485006C 84.22826086956522 67.94208893485006 85.98913043478261 47.25956566701138 88.04347826086956 47.25956566701138C 90.09782608695652 47.25956566701138 91.85869565217392 80.35160289555326 93.91304347826087 80.35160289555326C 95.96739130434783 80.35160289555326 97.72826086956522 63.80558428128232 99.78260869565217 63.80558428128232C 101.83695652173913 63.80558428128232 103.59782608695653 44.15718717683558 105.65217391304348 44.15718717683558C 107.70652173913044 44.15718717683558 109.46739130434783 44.15718717683558 111.52173913043478 44.15718717683558C 113.57608695652173 44.15718717683558 115.33695652173914 35.88417786970011 117.3913043478261 35.88417786970011C 119.44565217391305 35.88417786970011 121.20652173913044 36.91830403309204 123.26086956521739 36.91830403309204C 125.31521739130434 36.91830403309204 127.07608695652173 60.70320579110652 129.1304347826087 60.70320579110652C 131.18478260869566 60.70320579110652 132.94565217391303 3.8262668045501584 135 3.8262668045501584"
                                                                                      fill="none" fill-opacity="1"
                                                                                      stroke="rgba(0,123,255,0.85)"
                                                                                      stroke-opacity="1"
                                                                                      stroke-linecap="butt"
                                                                                      stroke-width="3"
                                                                                      stroke-dasharray="0"
                                                                                      class="apexcharts-line" index="0"
                                                                                      clip-path="url(#gridRectMaskpm96no1p)"
                                                                                      pathTo="M 0 55.53257497414685C 2.0543478260869565 55.53257497414685 3.815217391304348 32.7817993795243 5.869565217391305 32.7817993795243C 7.923913043478262 32.7817993795243 9.684782608695652 52.430196483971045 11.73913043478261 52.430196483971045C 13.793478260869566 52.430196483971045 15.554347826086957 72.07859358841779 17.608695652173914 72.07859358841779C 19.66304347826087 72.07859358841779 21.42391304347826 61.73733195449845 23.47826086956522 61.73733195449845C 25.532608695652176 61.73733195449845 27.293478260869566 45.19131334022751 29.347826086956523 45.19131334022751C 31.40217391304348 45.19131334022751 33.163043478260875 42.088934850051714 35.21739130434783 42.088934850051714C 37.27173913043478 42.088934850051714 39.03260869565218 57.60082730093072 41.08695652173913 57.60082730093072C 43.141304347826086 57.60082730093072 44.902173913043484 53.464322647362984 46.95652173913044 53.464322647362984C 49.01086956521739 53.464322647362984 50.77173913043479 72.07859358841779 52.82608695652174 72.07859358841779C 54.880434782608695 72.07859358841779 56.64130434782609 63.80558428128232 58.69565217391305 63.80558428128232C 60.75 63.80558428128232 62.51086956521739 59.66907962771459 64.56521739130434 59.66907962771459C 66.6195652173913 59.66907962771459 68.3804347826087 75.18097207859358 70.43478260869566 75.18097207859358C 72.48913043478261 75.18097207859358 74.25 51.39607032057911 76.30434782608695 51.39607032057911C 78.3586956521739 51.39607032057911 80.11956521739131 67.94208893485006 82.17391304347827 67.94208893485006C 84.22826086956522 67.94208893485006 85.98913043478261 47.25956566701138 88.04347826086956 47.25956566701138C 90.09782608695652 47.25956566701138 91.85869565217392 80.35160289555326 93.91304347826087 80.35160289555326C 95.96739130434783 80.35160289555326 97.72826086956522 63.80558428128232 99.78260869565217 63.80558428128232C 101.83695652173913 63.80558428128232 103.59782608695653 44.15718717683558 105.65217391304348 44.15718717683558C 107.70652173913044 44.15718717683558 109.46739130434783 44.15718717683558 111.52173913043478 44.15718717683558C 113.57608695652173 44.15718717683558 115.33695652173914 35.88417786970011 117.3913043478261 35.88417786970011C 119.44565217391305 35.88417786970011 121.20652173913044 36.91830403309204 123.26086956521739 36.91830403309204C 125.31521739130434 36.91830403309204 127.07608695652173 60.70320579110652 129.1304347826087 60.70320579110652C 131.18478260869566 60.70320579110652 132.94565217391303 3.8262668045501584 135 3.8262668045501584"
                                                                                      pathFrom="M -1 100L -1 100L 5.869565217391305 100L 11.73913043478261 100L 17.608695652173914 100L 23.47826086956522 100L 29.347826086956523 100L 35.21739130434783 100L 41.08695652173913 100L 46.95652173913044 100L 52.82608695652174 100L 58.69565217391305 100L 64.56521739130434 100L 70.43478260869566 100L 76.30434782608695 100L 82.17391304347827 100L 88.04347826086956 100L 93.91304347826087 100L 99.78260869565217 100L 105.65217391304348 100L 111.52173913043478 100L 117.3913043478261 100L 123.26086956521739 100L 129.1304347826087 100L 135 100"></path>
                                                                                <g id="SvgjsG5175"
                                                                                   class="apexcharts-series-markers-wrap">
                                                                                    <g class="apexcharts-series-markers">
                                                                                        <circle id="SvgjsCircle5190"
                                                                                                r="0" cx="0" cy="0"
                                                                                                class="apexcharts-marker wokipx3a2 no-pointer-events"
                                                                                                stroke="#ffffff"
                                                                                                fill="#007bff"
                                                                                                fill-opacity="1"
                                                                                                stroke-width="2"
                                                                                                stroke-opacity="0.9"
                                                                                                default-marker-size="0"></circle>
                                                                                    </g>
                                                                                </g>
                                                                                <g id="SvgjsG5176"
                                                                                   class="apexcharts-datalabels"></g>
                                                                            </g>
                                                                        </g>
                                                                        <line id="SvgjsLine5185" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke="#b6b6b6"
                                                                              stroke-dasharray="0" stroke-width="1"
                                                                              class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine5186" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke-dasharray="0"
                                                                              stroke-width="0"
                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                        <g id="SvgjsG5187"
                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                        <g id="SvgjsG5188"
                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                        <g id="SvgjsG5189"
                                                                           class="apexcharts-point-annotations"></g>
                                                                    </g>
                                                                    <rect id="SvgjsRect5168" width="0" height="0" x="0"
                                                                          y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0"></rect>
                                                                    <g id="SvgjsG5180" class="apexcharts-yaxis" rel="0"
                                                                       transform="translate(-21, 0)">
                                                                        <g id="SvgjsG5181"
                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                    </g>
                                                                </svg>
                                                                <div class="apexcharts-legend"></div>
                                                                <div class="apexcharts-tooltip light">
                                                                    <div class="apexcharts-tooltip-series-group"><span
                                                                                class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(0, 123, 255);"></span>
                                                                        <div class="apexcharts-tooltip-text"
                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="resize-triggers">
                                                            <div class="expand-trigger">
                                                                <div style="width: 136px; height: 101px;"></div>
                                                            </div>
                                                            <div class="contract-trigger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>1286</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">last month
                                                        sales</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-3" style="min-height: 100px;">
                                                            <div id="apexchartsvjvz5wjw"
                                                                 class="apexcharts-canvas apexchartsvjvz5wjw light"
                                                                 style="width: 135px; height: 100px;">
                                                                <svg id="SvgjsSvg5194" width="135" height="100"
                                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                     class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                     transform="translate(0, 0)"
                                                                     style="background: transparent;">
                                                                    <g id="SvgjsG5196"
                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                       transform="translate(0, 0)">
                                                                        <defs id="SvgjsDefs5195">
                                                                            <clipPath id="gridRectMaskvjvz5wjw">
                                                                                <rect id="SvgjsRect5201" width="138"
                                                                                      height="103" x="-1.5" y="-1.5"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                            <clipPath id="gridRectMarkerMaskvjvz5wjw">
                                                                                <rect id="SvgjsRect5202" width="175"
                                                                                      height="140" x="-20" y="-20"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                        <line id="SvgjsLine5200" x1="0" y1="0" x2="0"
                                                                              y2="100" stroke="#b6b6b6"
                                                                              stroke-dasharray="3"
                                                                              class="apexcharts-xcrosshairs" x="0" y="0"
                                                                              width="1" height="100" fill="#b1b9c4"
                                                                              filter="none" fill-opacity="0.9"
                                                                              stroke-width="1"></line>
                                                                        <g id="SvgjsG5209" class="apexcharts-xaxis"
                                                                           transform="translate(0, 0)">
                                                                            <g id="SvgjsG5210"
                                                                               class="apexcharts-xaxis-texts-g"
                                                                               transform="translate(0, 1.875)"></g>
                                                                        </g>
                                                                        <g id="SvgjsG5213" class="apexcharts-grid">
                                                                            <line id="SvgjsLine5215" x1="0" y1="100"
                                                                                  x2="135" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                            <line id="SvgjsLine5214" x1="0" y1="1"
                                                                                  x2="0" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                        </g>
                                                                        <g id="SvgjsG5204"
                                                                           class="apexcharts-line-series apexcharts-plot-series">
                                                                            <g id="SvgjsG5205"
                                                                               class="apexcharts-series seriesx1"
                                                                               data:longestSeries="true" rel="1"
                                                                               data:realIndex="0">
                                                                                <path id="apexcharts-line-0"
                                                                                      d="M 0 80.35160289555326C 2.0543478260869565 80.35160289555326 3.815217391304348 61.73733195449845 5.869565217391305 61.73733195449845C 7.923913043478262 61.73733195449845 9.684782608695652 45.19131334022751 11.73913043478261 45.19131334022751C 13.793478260869566 45.19131334022751 15.554347826086957 72.07859358841779 17.608695652173914 72.07859358841779C 19.66304347826087 72.07859358841779 21.42391304347826 44.15718717683558 23.47826086956522 44.15718717683558C 25.532608695652176 44.15718717683558 27.293478260869566 53.464322647362984 29.347826086956523 53.464322647362984C 31.40217391304348 53.464322647362984 33.163043478260875 47.25956566701138 35.21739130434783 47.25956566701138C 37.27173913043478 47.25956566701138 39.03260869565218 75.18097207859358 41.08695652173913 75.18097207859358C 43.141304347826086 75.18097207859358 44.902173913043484 63.80558428128232 46.95652173913044 63.80558428128232C 49.01086956521739 63.80558428128232 50.77173913043479 52.430196483971045 52.82608695652174 52.430196483971045C 54.880434782608695 52.430196483971045 56.64130434782609 59.66907962771459 58.69565217391305 59.66907962771459C 60.75 59.66907962771459 62.51086956521739 55.53257497414685 64.56521739130434 55.53257497414685C 66.6195652173913 55.53257497414685 68.3804347826087 67.94208893485006 70.43478260869566 67.94208893485006C 72.48913043478261 67.94208893485006 74.25 63.80558428128232 76.30434782608695 63.80558428128232C 78.3586956521739 63.80558428128232 80.11956521739131 3.8262668045501584 82.17391304347827 3.8262668045501584C 84.22826086956522 3.8262668045501584 85.98913043478261 72.07859358841779 88.04347826086956 72.07859358841779C 90.09782608695652 72.07859358841779 91.85869565217392 57.60082730093072 93.91304347826087 57.60082730093072C 95.96739130434783 57.60082730093072 97.72826086956522 32.7817993795243 99.78260869565217 32.7817993795243C 101.83695652173913 32.7817993795243 103.59782608695653 42.088934850051714 105.65217391304348 42.088934850051714C 107.70652173913044 42.088934850051714 109.46739130434783 44.15718717683558 111.52173913043478 44.15718717683558C 113.57608695652173 44.15718717683558 115.33695652173914 36.91830403309204 117.3913043478261 36.91830403309204C 119.44565217391305 36.91830403309204 121.20652173913044 35.88417786970011 123.26086956521739 35.88417786970011C 125.31521739130434 35.88417786970011 127.07608695652173 60.70320579110652 129.1304347826087 60.70320579110652C 131.18478260869566 60.70320579110652 132.94565217391303 51.39607032057911 135 51.39607032057911"
                                                                                      fill="none" fill-opacity="1"
                                                                                      stroke="rgba(247,185,36,0.85)"
                                                                                      stroke-opacity="1"
                                                                                      stroke-linecap="butt"
                                                                                      stroke-width="3"
                                                                                      stroke-dasharray="0"
                                                                                      class="apexcharts-line" index="0"
                                                                                      clip-path="url(#gridRectMaskvjvz5wjw)"
                                                                                      pathTo="M 0 80.35160289555326C 2.0543478260869565 80.35160289555326 3.815217391304348 61.73733195449845 5.869565217391305 61.73733195449845C 7.923913043478262 61.73733195449845 9.684782608695652 45.19131334022751 11.73913043478261 45.19131334022751C 13.793478260869566 45.19131334022751 15.554347826086957 72.07859358841779 17.608695652173914 72.07859358841779C 19.66304347826087 72.07859358841779 21.42391304347826 44.15718717683558 23.47826086956522 44.15718717683558C 25.532608695652176 44.15718717683558 27.293478260869566 53.464322647362984 29.347826086956523 53.464322647362984C 31.40217391304348 53.464322647362984 33.163043478260875 47.25956566701138 35.21739130434783 47.25956566701138C 37.27173913043478 47.25956566701138 39.03260869565218 75.18097207859358 41.08695652173913 75.18097207859358C 43.141304347826086 75.18097207859358 44.902173913043484 63.80558428128232 46.95652173913044 63.80558428128232C 49.01086956521739 63.80558428128232 50.77173913043479 52.430196483971045 52.82608695652174 52.430196483971045C 54.880434782608695 52.430196483971045 56.64130434782609 59.66907962771459 58.69565217391305 59.66907962771459C 60.75 59.66907962771459 62.51086956521739 55.53257497414685 64.56521739130434 55.53257497414685C 66.6195652173913 55.53257497414685 68.3804347826087 67.94208893485006 70.43478260869566 67.94208893485006C 72.48913043478261 67.94208893485006 74.25 63.80558428128232 76.30434782608695 63.80558428128232C 78.3586956521739 63.80558428128232 80.11956521739131 3.8262668045501584 82.17391304347827 3.8262668045501584C 84.22826086956522 3.8262668045501584 85.98913043478261 72.07859358841779 88.04347826086956 72.07859358841779C 90.09782608695652 72.07859358841779 91.85869565217392 57.60082730093072 93.91304347826087 57.60082730093072C 95.96739130434783 57.60082730093072 97.72826086956522 32.7817993795243 99.78260869565217 32.7817993795243C 101.83695652173913 32.7817993795243 103.59782608695653 42.088934850051714 105.65217391304348 42.088934850051714C 107.70652173913044 42.088934850051714 109.46739130434783 44.15718717683558 111.52173913043478 44.15718717683558C 113.57608695652173 44.15718717683558 115.33695652173914 36.91830403309204 117.3913043478261 36.91830403309204C 119.44565217391305 36.91830403309204 121.20652173913044 35.88417786970011 123.26086956521739 35.88417786970011C 125.31521739130434 35.88417786970011 127.07608695652173 60.70320579110652 129.1304347826087 60.70320579110652C 131.18478260869566 60.70320579110652 132.94565217391303 51.39607032057911 135 51.39607032057911"
                                                                                      pathFrom="M -1 100L -1 100L 5.869565217391305 100L 11.73913043478261 100L 17.608695652173914 100L 23.47826086956522 100L 29.347826086956523 100L 35.21739130434783 100L 41.08695652173913 100L 46.95652173913044 100L 52.82608695652174 100L 58.69565217391305 100L 64.56521739130434 100L 70.43478260869566 100L 76.30434782608695 100L 82.17391304347827 100L 88.04347826086956 100L 93.91304347826087 100L 99.78260869565217 100L 105.65217391304348 100L 111.52173913043478 100L 117.3913043478261 100L 123.26086956521739 100L 129.1304347826087 100L 135 100"></path>
                                                                                <g id="SvgjsG5206"
                                                                                   class="apexcharts-series-markers-wrap">
                                                                                    <g class="apexcharts-series-markers">
                                                                                        <circle id="SvgjsCircle5221"
                                                                                                r="0" cx="0" cy="0"
                                                                                                class="apexcharts-marker wkmugbq2i no-pointer-events"
                                                                                                stroke="#ffffff"
                                                                                                fill="#f7b924"
                                                                                                fill-opacity="1"
                                                                                                stroke-width="2"
                                                                                                stroke-opacity="0.9"
                                                                                                default-marker-size="0"></circle>
                                                                                    </g>
                                                                                </g>
                                                                                <g id="SvgjsG5207"
                                                                                   class="apexcharts-datalabels"></g>
                                                                            </g>
                                                                        </g>
                                                                        <line id="SvgjsLine5216" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke="#b6b6b6"
                                                                              stroke-dasharray="0" stroke-width="1"
                                                                              class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine5217" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke-dasharray="0"
                                                                              stroke-width="0"
                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                        <g id="SvgjsG5218"
                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                        <g id="SvgjsG5219"
                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                        <g id="SvgjsG5220"
                                                                           class="apexcharts-point-annotations"></g>
                                                                    </g>
                                                                    <rect id="SvgjsRect5199" width="0" height="0" x="0"
                                                                          y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0"></rect>
                                                                    <g id="SvgjsG5211" class="apexcharts-yaxis" rel="0"
                                                                       transform="translate(-21, 0)">
                                                                        <g id="SvgjsG5212"
                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                    </g>
                                                                </svg>
                                                                <div class="apexcharts-legend"></div>
                                                                <div class="apexcharts-tooltip light">
                                                                    <div class="apexcharts-tooltip-series-group"><span
                                                                                class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(247, 185, 36);"></span>
                                                                        <div class="apexcharts-tooltip-text"
                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="resize-triggers">
                                                            <div class="expand-trigger">
                                                                <div style="width: 136px; height: 101px;"></div>
                                                            </div>
                                                            <div class="contract-trigger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>564</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
                                                </div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-4" style="min-height: 100px;">
                                                            <div id="apexcharts4nj5wtu4"
                                                                 class="apexcharts-canvas apexcharts4nj5wtu4 light"
                                                                 style="width: 135px; height: 100px;">
                                                                <svg id="SvgjsSvg5225" width="135" height="100"
                                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xmlns:svgjs="http://svgjs.com/svgjs"
                                                                     class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                     transform="translate(0, 0)"
                                                                     style="background: transparent;">
                                                                    <g id="SvgjsG5227"
                                                                       class="apexcharts-inner apexcharts-graphical"
                                                                       transform="translate(0, 0)">
                                                                        <defs id="SvgjsDefs5226">
                                                                            <clipPath id="gridRectMask4nj5wtu4">
                                                                                <rect id="SvgjsRect5232" width="138"
                                                                                      height="103" x="-1.5" y="-1.5"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                            <clipPath id="gridRectMarkerMask4nj5wtu4">
                                                                                <rect id="SvgjsRect5233" width="175"
                                                                                      height="140" x="-20" y="-20"
                                                                                      rx="0" ry="0" fill="#ffffff"
                                                                                      opacity="1" stroke-width="0"
                                                                                      stroke="none"
                                                                                      stroke-dasharray="0"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                        <line id="SvgjsLine5231" x1="0" y1="0" x2="0"
                                                                              y2="100" stroke="#b6b6b6"
                                                                              stroke-dasharray="3"
                                                                              class="apexcharts-xcrosshairs" x="0" y="0"
                                                                              width="1" height="100" fill="#b1b9c4"
                                                                              filter="none" fill-opacity="0.9"
                                                                              stroke-width="1"></line>
                                                                        <g id="SvgjsG5240" class="apexcharts-xaxis"
                                                                           transform="translate(0, 0)">
                                                                            <g id="SvgjsG5241"
                                                                               class="apexcharts-xaxis-texts-g"
                                                                               transform="translate(0, 1.875)"></g>
                                                                        </g>
                                                                        <g id="SvgjsG5244" class="apexcharts-grid">
                                                                            <line id="SvgjsLine5246" x1="0" y1="100"
                                                                                  x2="135" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                            <line id="SvgjsLine5245" x1="0" y1="1"
                                                                                  x2="0" y2="100" stroke="transparent"
                                                                                  stroke-dasharray="0"></line>
                                                                        </g>
                                                                        <g id="SvgjsG5235"
                                                                           class="apexcharts-line-series apexcharts-plot-series">
                                                                            <g id="SvgjsG5236"
                                                                               class="apexcharts-series seriesx1"
                                                                               data:longestSeries="true" rel="1"
                                                                               data:realIndex="0">
                                                                                <path id="apexcharts-line-0"
                                                                                      d="M 0 35.88417786970011C 2.0543478260869565 35.88417786970011 3.815217391304348 36.91830403309204 5.869565217391305 36.91830403309204C 7.923913043478262 36.91830403309204 9.684782608695652 67.94208893485006 11.73913043478261 67.94208893485006C 13.793478260869566 67.94208893485006 15.554347826086957 75.18097207859358 17.608695652173914 75.18097207859358C 19.66304347826087 75.18097207859358 21.42391304347826 55.53257497414685 23.47826086956522 55.53257497414685C 25.532608695652176 55.53257497414685 27.293478260869566 47.25956566701138 29.347826086956523 47.25956566701138C 31.40217391304348 47.25956566701138 33.163043478260875 63.80558428128232 35.21739130434783 63.80558428128232C 37.27173913043478 63.80558428128232 39.03260869565218 80.35160289555326 41.08695652173913 80.35160289555326C 43.141304347826086 80.35160289555326 44.902173913043484 51.39607032057911 46.95652173913044 51.39607032057911C 49.01086956521739 51.39607032057911 50.77173913043479 32.7817993795243 52.82608695652174 32.7817993795243C 54.880434782608695 32.7817993795243 56.64130434782609 63.80558428128232 58.69565217391305 63.80558428128232C 60.75 63.80558428128232 62.51086956521739 52.430196483971045 64.56521739130434 52.430196483971045C 66.6195652173913 52.430196483971045 68.3804347826087 53.464322647362984 70.43478260869566 53.464322647362984C 72.48913043478261 53.464322647362984 74.25 44.15718717683558 76.30434782608695 44.15718717683558C 78.3586956521739 44.15718717683558 80.11956521739131 3.8262668045501584 82.17391304347827 3.8262668045501584C 84.22826086956522 3.8262668045501584 85.98913043478261 59.66907962771459 88.04347826086956 59.66907962771459C 90.09782608695652 59.66907962771459 91.85869565217392 72.07859358841779 93.91304347826087 72.07859358841779C 95.96739130434783 72.07859358841779 97.72826086956522 60.70320579110652 99.78260869565217 60.70320579110652C 101.83695652173913 60.70320579110652 103.59782608695653 61.73733195449845 105.65217391304348 61.73733195449845C 107.70652173913044 61.73733195449845 109.46739130434783 45.19131334022751 111.52173913043478 45.19131334022751C 113.57608695652173 45.19131334022751 115.33695652173914 72.07859358841779 117.3913043478261 72.07859358841779C 119.44565217391305 72.07859358841779 121.20652173913044 57.60082730093072 123.26086956521739 57.60082730093072C 125.31521739130434 57.60082730093072 127.07608695652173 42.088934850051714 129.1304347826087 42.088934850051714C 131.18478260869566 42.088934850051714 132.94565217391303 44.15718717683558 135 44.15718717683558"
                                                                                      fill="none" fill-opacity="1"
                                                                                      stroke="rgba(217,37,80,0.85)"
                                                                                      stroke-opacity="1"
                                                                                      stroke-linecap="butt"
                                                                                      stroke-width="3"
                                                                                      stroke-dasharray="0"
                                                                                      class="apexcharts-line" index="0"
                                                                                      clip-path="url(#gridRectMask4nj5wtu4)"
                                                                                      pathTo="M 0 35.88417786970011C 2.0543478260869565 35.88417786970011 3.815217391304348 36.91830403309204 5.869565217391305 36.91830403309204C 7.923913043478262 36.91830403309204 9.684782608695652 67.94208893485006 11.73913043478261 67.94208893485006C 13.793478260869566 67.94208893485006 15.554347826086957 75.18097207859358 17.608695652173914 75.18097207859358C 19.66304347826087 75.18097207859358 21.42391304347826 55.53257497414685 23.47826086956522 55.53257497414685C 25.532608695652176 55.53257497414685 27.293478260869566 47.25956566701138 29.347826086956523 47.25956566701138C 31.40217391304348 47.25956566701138 33.163043478260875 63.80558428128232 35.21739130434783 63.80558428128232C 37.27173913043478 63.80558428128232 39.03260869565218 80.35160289555326 41.08695652173913 80.35160289555326C 43.141304347826086 80.35160289555326 44.902173913043484 51.39607032057911 46.95652173913044 51.39607032057911C 49.01086956521739 51.39607032057911 50.77173913043479 32.7817993795243 52.82608695652174 32.7817993795243C 54.880434782608695 32.7817993795243 56.64130434782609 63.80558428128232 58.69565217391305 63.80558428128232C 60.75 63.80558428128232 62.51086956521739 52.430196483971045 64.56521739130434 52.430196483971045C 66.6195652173913 52.430196483971045 68.3804347826087 53.464322647362984 70.43478260869566 53.464322647362984C 72.48913043478261 53.464322647362984 74.25 44.15718717683558 76.30434782608695 44.15718717683558C 78.3586956521739 44.15718717683558 80.11956521739131 3.8262668045501584 82.17391304347827 3.8262668045501584C 84.22826086956522 3.8262668045501584 85.98913043478261 59.66907962771459 88.04347826086956 59.66907962771459C 90.09782608695652 59.66907962771459 91.85869565217392 72.07859358841779 93.91304347826087 72.07859358841779C 95.96739130434783 72.07859358841779 97.72826086956522 60.70320579110652 99.78260869565217 60.70320579110652C 101.83695652173913 60.70320579110652 103.59782608695653 61.73733195449845 105.65217391304348 61.73733195449845C 107.70652173913044 61.73733195449845 109.46739130434783 45.19131334022751 111.52173913043478 45.19131334022751C 113.57608695652173 45.19131334022751 115.33695652173914 72.07859358841779 117.3913043478261 72.07859358841779C 119.44565217391305 72.07859358841779 121.20652173913044 57.60082730093072 123.26086956521739 57.60082730093072C 125.31521739130434 57.60082730093072 127.07608695652173 42.088934850051714 129.1304347826087 42.088934850051714C 131.18478260869566 42.088934850051714 132.94565217391303 44.15718717683558 135 44.15718717683558"
                                                                                      pathFrom="M -1 100L -1 100L 5.869565217391305 100L 11.73913043478261 100L 17.608695652173914 100L 23.47826086956522 100L 29.347826086956523 100L 35.21739130434783 100L 41.08695652173913 100L 46.95652173913044 100L 52.82608695652174 100L 58.69565217391305 100L 64.56521739130434 100L 70.43478260869566 100L 76.30434782608695 100L 82.17391304347827 100L 88.04347826086956 100L 93.91304347826087 100L 99.78260869565217 100L 105.65217391304348 100L 111.52173913043478 100L 117.3913043478261 100L 123.26086956521739 100L 129.1304347826087 100L 135 100"></path>
                                                                                <g id="SvgjsG5237"
                                                                                   class="apexcharts-series-markers-wrap">
                                                                                    <g class="apexcharts-series-markers">
                                                                                        <circle id="SvgjsCircle5252"
                                                                                                r="0" cx="0" cy="0"
                                                                                                class="apexcharts-marker w9gm4rpopi no-pointer-events"
                                                                                                stroke="#ffffff"
                                                                                                fill="#d92550"
                                                                                                fill-opacity="1"
                                                                                                stroke-width="2"
                                                                                                stroke-opacity="0.9"
                                                                                                default-marker-size="0"></circle>
                                                                                    </g>
                                                                                </g>
                                                                                <g id="SvgjsG5238"
                                                                                   class="apexcharts-datalabels"></g>
                                                                            </g>
                                                                        </g>
                                                                        <line id="SvgjsLine5247" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke="#b6b6b6"
                                                                              stroke-dasharray="0" stroke-width="1"
                                                                              class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine5248" x1="0" y1="0" x2="135"
                                                                              y2="0" stroke-dasharray="0"
                                                                              stroke-width="0"
                                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                                        <g id="SvgjsG5249"
                                                                           class="apexcharts-yaxis-annotations"></g>
                                                                        <g id="SvgjsG5250"
                                                                           class="apexcharts-xaxis-annotations"></g>
                                                                        <g id="SvgjsG5251"
                                                                           class="apexcharts-point-annotations"></g>
                                                                    </g>
                                                                    <rect id="SvgjsRect5230" width="0" height="0" x="0"
                                                                          y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                                                          stroke-width="0" stroke="none"
                                                                          stroke-dasharray="0"></rect>
                                                                    <g id="SvgjsG5242" class="apexcharts-yaxis" rel="0"
                                                                       transform="translate(-21, 0)">
                                                                        <g id="SvgjsG5243"
                                                                           class="apexcharts-yaxis-texts-g"></g>
                                                                    </g>
                                                                </svg>
                                                                <div class="apexcharts-legend"></div>
                                                                <div class="apexcharts-tooltip light">
                                                                    <div class="apexcharts-tooltip-series-group"><span
                                                                                class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(217, 37, 80);"></span>
                                                                        <div class="apexcharts-tooltip-text"
                                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                <span class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="resize-triggers">
                                                            <div class="expand-trigger">
                                                                <div style="width: 136px; height: 101px;"></div>
                                                            </div>
                                                            <div class="contract-trigger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy
                                            Dynamic Tables
                                        </div>
                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn-icon btn-icon-only btn btn-link"><i
                                                            class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                     class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                    <h6 tabindex="-1" class="dropdown-header">
                                                        Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                    </button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                    </button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                    </button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                                                            Details
                                                        </button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                            Action
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="example_length"><label>Show
                                                            <select name="example_length" aria-controls="example"
                                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> entries</label></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="example_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search"
                                                                             class="form-control form-control-sm"
                                                                             placeholder=""
                                                                             aria-controls="example"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table style="width: 100%;" id="example"
                                                           class="table table-hover table-striped table-bordered dataTable dtr-inline"
                                                           role="grid" aria-describedby="example_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 145.2px;"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending">
                                                                Name
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 225.2px;"
                                                                aria-label="Position: activate to sort column ascending">
                                                                Position
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 104.2px;"
                                                                aria-label="Office: activate to sort column ascending">
                                                                Office
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 47.2px;"
                                                                aria-label="Age: activate to sort column ascending">Age
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 98.2px;"
                                                                aria-label="Start date: activate to sort column ascending">
                                                                Start date
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example"
                                                                rowspan="1" colspan="1" style="width: 79.2px;"
                                                                aria-label="Salary: activate to sort column ascending">
                                                                Salary
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>


                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1" tabindex="0">Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1" tabindex="0">Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1" tabindex="0">Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Name</th>
                                                            <th rowspan="1" colspan="1">Position</th>
                                                            <th rowspan="1" colspan="1">Office</th>
                                                            <th rowspan="1" colspan="1">Age</th>
                                                            <th rowspan="1" colspan="1">Start date</th>
                                                            <th rowspan="1" colspan="1">Salary</th>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="example_info" role="status"
                                                         aria-live="polite">Showing 1 to 10 of 57 entries
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                         id="example_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="example_previous"><a href="#"
                                                                                         aria-controls="example"
                                                                                         data-dt-idx="0" tabindex="0"
                                                                                         class="page-link">Previous</a>
                                                            </li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                                                            aria-controls="example"
                                                                                                            data-dt-idx="1"
                                                                                                            tabindex="0"
                                                                                                            class="page-link">1</a>
                                                            </li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                      aria-controls="example"
                                                                                                      data-dt-idx="2"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">2</a>
                                                            </li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                      aria-controls="example"
                                                                                                      data-dt-idx="3"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">3</a>
                                                            </li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                      aria-controls="example"
                                                                                                      data-dt-idx="4"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">4</a>
                                                            </li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                      aria-controls="example"
                                                                                                      data-dt-idx="5"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">5</a>
                                                            </li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                                                      aria-controls="example"
                                                                                                      data-dt-idx="6"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">6</a>
                                                            </li>
                                                            <li class="paginate_button page-item next"
                                                                id="example_next"><a href="#" aria-controls="example"
                                                                                     data-dt-idx="7" tabindex="0"
                                                                                     class="page-link">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="card-hover-shadow-2x mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Tasks
                                                    List
                                                </div>
                                                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link"><i
                                                                    class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                             class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <h6 tabindex="-1" class="dropdown-header">
                                                                Header</h6>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <div class="p-3 text-right">
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                    View Details
                                                                </button>
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                    Action
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-lg">
                                                <div class="scrollbar-container ps ps--active-y">
                                                    <div class="p-2">
                                                        <ul class="todo-list-wrapper list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-warning"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox12"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox12">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Wash the car
                                                                                <div class="badge badge-danger ml-2">
                                                                                    Rejected
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-subheading"><i>Written
                                                                                    by Bob</i></div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-focus"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox1"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox1">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Task with
                                                                                dropdown menu
                                                                            </div>
                                                                            <div class="widget-subheading">
                                                                                <div>By Johnny
                                                                                    <div class="badge badge-pill badge-info ml-2">
                                                                                        NEW
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <div class="d-inline-block dropdown">
                                                                                <button type="button"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        class="border-0 btn-transition btn btn-link">
                                                                                    <i class="fa fa-ellipsis-h"></i>
                                                                                </button>
                                                                                <div tabindex="-1" role="menu"
                                                                                     aria-hidden="true"
                                                                                     class="dropdown-menu dropdown-menu-right">
                                                                                    <h6 tabindex="-1"
                                                                                        class="dropdown-header">
                                                                                        Header</h6>
                                                                                    <button type="button" disabled=""
                                                                                            tabindex="-1"
                                                                                            class="disabled dropdown-item">
                                                                                        Action
                                                                                    </button>
                                                                                    <button type="button" tabindex="0"
                                                                                            class="dropdown-item">
                                                                                        Another Action
                                                                                    </button>
                                                                                    <div tabindex="-1"
                                                                                         class="dropdown-divider"></div>
                                                                                    <button type="button" tabindex="0"
                                                                                            class="dropdown-item">
                                                                                        Another Action
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-primary"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox4"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox4">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading">Badge on the
                                                                                right task
                                                                            </div>
                                                                            <div class="widget-subheading">This task
                                                                                has show on hover actions!
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="widget-content-right ml-3">
                                                                            <div class="badge badge-pill badge-success">
                                                                                Latest Task
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-info"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox2"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox2">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="42" class="rounded"
                                                                                     src="assets/images/avatars/1.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Go grocery
                                                                                shopping
                                                                            </div>
                                                                            <div class="widget-subheading">A short
                                                                                description for this todo item
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-success"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox3"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox3">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading">Development
                                                                                Task
                                                                            </div>
                                                                            <div class="widget-subheading">Finish
                                                                                React ToDo List App
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="badge badge-warning mr-2">
                                                                                69
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-warning"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox12"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox12">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Wash the car
                                                                                <div class="badge badge-danger ml-2">
                                                                                    Rejected
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-subheading"><i>Written
                                                                                    by Bob</i></div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-focus"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox1"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox1">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Task with
                                                                                dropdown menu
                                                                            </div>
                                                                            <div class="widget-subheading">
                                                                                <div>By Johnny
                                                                                    <div class="badge badge-pill badge-info ml-2">
                                                                                        NEW
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <div class="d-inline-block dropdown">
                                                                                <button type="button"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        class="border-0 btn-transition btn btn-link">
                                                                                    <i class="fa fa-ellipsis-h"></i>
                                                                                </button>
                                                                                <div tabindex="-1" role="menu"
                                                                                     aria-hidden="true"
                                                                                     class="dropdown-menu dropdown-menu-right">
                                                                                    <h6 tabindex="-1"
                                                                                        class="dropdown-header">
                                                                                        Header</h6>
                                                                                    <button type="button" disabled=""
                                                                                            tabindex="-1"
                                                                                            class="disabled dropdown-item">
                                                                                        Action
                                                                                    </button>
                                                                                    <button type="button" tabindex="0"
                                                                                            class="dropdown-item">
                                                                                        Another Action
                                                                                    </button>
                                                                                    <div tabindex="-1"
                                                                                         class="dropdown-divider"></div>
                                                                                    <button type="button" tabindex="0"
                                                                                            class="dropdown-item">
                                                                                        Another Action
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-primary"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox4"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox4">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading">Badge on the
                                                                                right task
                                                                            </div>
                                                                            <div class="widget-subheading">This task
                                                                                has show on hover actions!
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="widget-content-right ml-3">
                                                                            <div class="badge badge-pill badge-success">
                                                                                Latest Task
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-info"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox2"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox2">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="42" class="rounded"
                                                                                     src="assets/images/avatars/1.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Go grocery
                                                                                shopping
                                                                            </div>
                                                                            <div class="widget-subheading">A short
                                                                                description for this todo item
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right widget-content-actions">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="todo-indicator bg-success"></div>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-2">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                       id="exampleCustomCheckbox3"
                                                                                       class="custom-control-input"><label
                                                                                        class="custom-control-label"
                                                                                        for="exampleCustomCheckbox3">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading">Development
                                                                                Task
                                                                            </div>
                                                                            <div class="widget-subheading">Finish
                                                                                React ToDo List App
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="badge badge-warning mr-2">
                                                                                69
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                <i class="fa fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                             style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y"
                                                         style="top: 0px; height: 400px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                             style="top: 0px; height: 218px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block text-right card-footer">
                                                <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                                <button class="btn btn-primary">Add Task</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="card-hover-shadow-2x mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat
                                                    Box
                                                </div>
                                                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link"><i
                                                                    class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                             class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <h6 tabindex="-1" class="dropdown-header">
                                                                Header</h6>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i
                                                                        class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <div class="p-3 text-right">
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                    View Details
                                                                </button>
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                    Action
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-lg">
                                                <div class="scrollbar-container ps ps--active-y">
                                                    <div class="p-2">
                                                        <div class="chat-wrapper p-1">
                                                            <div class="chat-box-wrapper">
                                                                <div>
                                                                    <div class="avatar-icon-wrapper mr-1">
                                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                                            <img src="assets/images/avatars/2.jpg"
                                                                                 alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="chat-box">But I must explain to you
                                                                        how all this mistaken idea of denouncing
                                                                        pleasure and praising pain was born and I
                                                                        will give you a complete account of the
                                                                        system.
                                                                    </div>
                                                                    <small class="opacity-6">
                                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                                        11:01 AM | Yesterday
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="float-right">
                                                                <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                    <div>
                                                                        <div class="chat-box">Expound the actual
                                                                            teachings of the great explorer of the
                                                                            truth, the master-builder of human
                                                                            happiness.
                                                                        </div>
                                                                        <small class="opacity-6">
                                                                            <i class="fa fa-calendar-alt mr-1"></i>
                                                                            11:01 AM | Yesterday
                                                                        </small>
                                                                    </div>
                                                                    <div>
                                                                        <div class="avatar-icon-wrapper ml-1">
                                                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                                                <img src="assets/images/avatars/3.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-box-wrapper">
                                                                <div>
                                                                    <div class="avatar-icon-wrapper mr-1">
                                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                                            <img src="assets/images/avatars/2.jpg"
                                                                                 alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="chat-box">But I must explain to you
                                                                        how all this mistaken idea of denouncing
                                                                        pleasure and praising pain was born and I
                                                                        will give you a complete account of the
                                                                        system.
                                                                    </div>
                                                                    <small class="opacity-6">
                                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                                        11:01 AM | Yesterday
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="float-right">
                                                                <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                    <div>
                                                                        <div class="chat-box">Denouncing pleasure
                                                                            and praising pain was born and I will
                                                                            give you a complete account.
                                                                        </div>
                                                                        <small class="opacity-6">
                                                                            <i class="fa fa-calendar-alt mr-1"></i>
                                                                            11:01 AM | Yesterday
                                                                        </small>
                                                                    </div>
                                                                    <div>
                                                                        <div class="avatar-icon-wrapper ml-1">
                                                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                                                <img src="assets/images/avatars/2.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="float-right">
                                                                <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                    <div>
                                                                        <div class="chat-box">The master-builder of
                                                                            human happiness.
                                                                        </div>
                                                                        <small class="opacity-6">
                                                                            <i class="fa fa-calendar-alt mr-1"></i>
                                                                            11:01 AM | Yesterday
                                                                        </small>
                                                                    </div>
                                                                    <div>
                                                                        <div class="avatar-icon-wrapper ml-1">
                                                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                                                <img src="assets/images/avatars/2.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                             style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y"
                                                         style="top: 0px; height: 400px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                             style="top: 0px; height: 238px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <input placeholder="Write here and hit enter to send..." type="text"
                                                       class="form-control-sm form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                                    <div class="card">
                                        <div class="no-gutters row">
                                            <div class="col-md-12 col-lg-4">
                                                <ul class="list-group list-group-flush">
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Total Orders
                                                                        </div>
                                                                        <div class="widget-subheading">Last year
                                                                            expenses
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-success">
                                                                            1896
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Clients</div>
                                                                        <div class="widget-subheading">Total Clients
                                                                            Profit
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-primary">
                                                                            $12.6k
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <ul class="list-group list-group-flush">
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Followers</div>
                                                                        <div class="widget-subheading">People
                                                                            Interested
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-danger">
                                                                            45,9%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Products Sold
                                                                        </div>
                                                                        <div class="widget-subheading">Total revenue
                                                                            streams
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-warning">
                                                                            $3M
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <ul class="list-group list-group-flush">
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Total Orders
                                                                        </div>
                                                                        <div class="widget-subheading">Last year
                                                                            expenses
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-success">
                                                                            1896
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="bg-transparent list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Clients</div>
                                                                        <div class="widget-subheading">Total Clients
                                                                            Profit
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-numbers text-primary">
                                                                            $12.6k
                                                                        </div>
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
                    @include('backend.partials.footer')
                    </div>
                    </div>

                    </div>
                    @include('backend.partials.foot')