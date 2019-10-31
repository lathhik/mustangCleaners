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
                            <span>View Service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link " href="#tab-content-0">
                            <span>Order Status</span>
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
                                            <table width="935" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Order Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($order_status as $os)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$os->status}}</td>
                                                        <td>
                                                            <a href="{{route('edit-order-status', $os->id)}}" class="btn btn-sm btn-success">
                                                                <li class="fa fa-edit"></li>
                                                            </a>
                                                            &nbsp
                                                            <a href="{{route('delete-order-status', $os->id)}}"
                                                               class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>
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
