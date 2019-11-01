@extends('backend.master')
@section('content')
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
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-1">
                            <span>View Orders</span>
                        </a>
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
                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                    <div class="nav flex-column">
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
            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content pt-1">
                    <div class="tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            @include('messages.succFail')
                                            <table style="width: 950px" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Order Type Name</th>
                                                    <th>Order Status</th>
                                                    <th>Pick Up Location</th>
                                                    <th>Pick Up Date/Time</th>
                                                    <th>Delivery Location</th>
                                                    <th>Delivery Time</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$order->serviceType->service_types}}</td>
                                                        <td>{{$order->orderStatus->status}}</td>
                                                        <td>{{$order->pickup_street_address}}</td>
                                                        <td>{{$order->pickup_date}}  {{$order->pickup_time}}</td>
                                                        <td>{{$order->delivery_street_address}}</td>
                                                        <td>{{$order->delivery_date}} {{$order->delivery_time}}</td>
                                                        <td>
                                                            <a href="{{route('status',$order->id)}}"
                                                               class="btn btn-success">{{$orderAction}}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
