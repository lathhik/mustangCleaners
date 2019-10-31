@extends('backend.master')

@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>Add admin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                            <span>View Admin</span>
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
                    </div>
                </div>
            </div>
            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content pt-1">
                    <div class="tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('messages.succFail')
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            <table style="width: 950px" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Contact</th>
                                                    <th>Status</th>
                                                    <th>Privilege</th>
                                                    <th>Image</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($admins as $admin)
                                                    <tr>
                                                        <td>{{$admin->first_name}} {{$admin->last_name}}</td>
                                                        <td>{{$admin->email}}</td>
                                                        <td width="15%">{{$admin->address}}</td>
                                                        <td>{{$admin->contact}}</td>
                                                        <td width="4%">{{$admin->status}}</td>
                                                        <td width="4%">{{$admin->privilege}}</td>
                                                        <td>
                                                            <img
                                                                src="{{asset('custom/backend/images/admins/'.$admin->image)}}"
                                                                alt="img" height="50" width="50">
                                                        </td>
                                                        <td width="10%">
                                                            <a href="{{route('delete-admin',$admin->id)}}">
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{route('edit-admin',$admin->id)}}">
                                                                <button class="btn btn-sm btn-success">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
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