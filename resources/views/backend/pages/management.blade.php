@extends('backend.master')
@section('content')
    <div class="app-main__inner">
        <div class="app-inner-layout app-inner-layout-page">
            <div class="app-inner-bar">
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
                    </ul>
                </div>
            </div>
            <div class="app-inner-layout__wrapper">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
