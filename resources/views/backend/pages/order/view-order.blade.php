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

                                @if(Auth::guard('admin')->user()->privilege != 'LA' )
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            @include('messages.succFail')

                                            <table style="width: 950px" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Phone</th>
                                                    <th>Order Type Name</th>
                                                    <th>Order Status</th>
                                                    <th>Pick Up Location</th>
                                                    <th>Pick Up Time</th>
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
                                                        $pickup_address = $order->pickUpAddress->address_line_1.','.$order->pickUpAddress->address_line_2.','.$order->pickUpAddress->city.','.$order->pickUpAddress->zip;
                                                        $delivery_address = $order->deliveryAddress->address_line_1.','.$order->deliveryAddress->address_line_2.','.$order->deliveryAddress->city.','.$order->deliveryAddress->zip;
                                                        @endphp
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->customer->first_name}}</td>
                                                        <td>{{$order->customer->phone}}</td>
                                                        <td>{{$order->serviceType->service_types}}</td>
                                                        <td>{{$order->orderStatus->status}}</td>
                                                        <td>{{$pickup_address}}</td>
                                                        <td>{{$order->pickup_time_from}}-{{$order->pickup_time_to}}</td>
                                                        <td>{{$delivery_address}}</td>
                                                        <td>{{$order->delivery_time_from}}-{{$order->delivery_time_to}}</td>
                                                        <td>
                                                            @if($order->orderStatus->identifier < 5)
                                                                <a href="{{route('update-order-status',$order->id)}}"
                                                                   class="btn btn-success btn-sm {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                    {{$status}}
                                                                </a>
                                                            @else
                                                                <button class="btn btn-secondary btn-sm">Completed
                                                                </button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <br>


                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            @include('messages.succFail')

                                            <table style="width: 950px" id="example2"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Phone</th>
                                                    <th>Order Type Name</th>
                                                    <th>Order Status</th>
                                                    <th>Delivery Location</th>
                                                    <th>Delivery Time</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($delivery_orders as $order)
                                                    @php
                                                        $identifier = $order->orderStatus->identifier +1;
                                                        $status = $order_status->where('identifier',$identifier)->first()->status;
                                                        $delivery_address = $order->deliveryAddress->address_line_1.','.$order->deliveryAddress->address_line_2.','.$order->deliveryAddress->city.','.$order->deliveryAddress->zip;
                                                    @endphp
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->customer->first_name}}</td>
                                                        <td>{{$order->customer->phone}}</td>
                                                        <td>{{$order->serviceType->service_types}}</td>
                                                        <td>{{$order->orderStatus->status}}</td>
                                                        <td>{{$delivery_address}}</td>
                                                        <td>{{$order->delivery_time_from}}-{{$order->delivery_time_to}}</td>
                                                        <td>
                                                            @if($order->orderStatus->identifier < 5)
                                                                <a href="{{route('update-order-status',$order->id)}}"
                                                                   class="btn btn-success btn-sm {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                    {{$status}}
                                                                </a>
                                                            @else
                                                                <button
                                                                    class="btn btn-secondary btn-sm {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                    Completed
                                                                </button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                @endif

                                <br>


                                @if(Auth::guard('admin')->user()->privilege != 'PA' )
                                    <h3>Processing</h3>
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            @include('messages.succFail')
                                            <table style="width: 950px" id="example3"
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
                                                        <td>{{$order->delivery_time_from}}-{{$order->delivery_time_to}}</td>
                                                        <td>
                                                            <a href="{{route('update-order-status',$order->id)}}"
                                                               class="btn btn-success btn-sm {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                {{$status}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
