@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-1">
                            <span>View Orders</span>
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
                                        @if(Auth::guard('admin')->user()->privilege != 'LA' )
                                            <table style="width: 950px" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Order Number</th>
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
                                                @foreach($pickup_orders as $order)
                                                    @php
                                                        $identifier = $order->orderStatus->identifier +1;
                                                        $status = $order_status->where('identifier',$identifier)->first()->status;
                                                    @endphp
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->serviceType->service_types}}</td>
                                                        <td>{{$order->orderStatus->status}}</td>
                                                        <td>{{$order->pickup_street_address}}</td>
                                                        <td>{{$order->pickup_date}}  {{$order->pickup_time}}</td>
                                                        <td>{{$order->delivery_street_address}}</td>
                                                        <td>{{$order->delivery_date}} {{$order->delivery_time}}</td>
                                                        <td>
                                                            @if($order->orderStatus->identifier < 5)
                                                            <a href="{{route('update-order-status',$order->id)}}"
                                                               class="btn btn-success btn-sm">
                                                                {{$status}}
                                                            </a>
                                                                @else
                                                                <button class="btn btn-secondary btn-sm">Completed</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <table style="width: 950px" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Order Type Name</th>
                                                    <th>Order Status</th>
                                                    <th>Delivery Time</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($laundry_orders as $order)
                                                    @php
                                                        $identifier = $order->orderStatus->identifier +1;
                                                        $status = $order_status->where('identifier',$identifier)->first()->status;
                                                    @endphp
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->serviceType->service_types}}</td>
                                                        <td>{{$order->orderStatus->status}}</td>
                                                        <td>{{$order->delivery_date}} {{$order->delivery_time}}</td>
                                                        <td>
                                                            <a href="{{route('update-order-status',$order->id)}}"
                                                               class="btn btn-success btn-sm">
                                                                Send
                                                                for {{$status}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
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
