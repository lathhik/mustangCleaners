@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-1">
                            <span>View Order Status</span>
                        </a>
                    </li>
                </ul>
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
                                                        <a href="{{route('edit-order-status', $os->id)}}"
                                                           class="btn btn-sm btn-success">
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

@endsection
