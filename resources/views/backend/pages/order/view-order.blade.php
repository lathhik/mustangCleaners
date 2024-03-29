@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        @if(Auth::guard('admin')->user()->privilege != 'LA')
                            <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-new-order">
                                <span>New Orders</span>
                            </a>
                        @endif
                    </li>
                    @if(Auth::guard('admin')->user()->privilege != 'PA')
                        <li class="nav-item">
                            <a role="tab" data-toggle="tab"
                               class="nav-link {{(Auth::guard('admin')->user()->privilege == 'LA')?'active':''}}"
                               href="#tab-content-processing">
                                <span>Processing</span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::guard('admin')->user()->privilege != 'LA')
                        <li class="nav-item">
                            <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-ready">
                                <span>Ready For Delivery</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    @if(Auth::guard('admin')->user()->privilege != 'LA' )
                        <div class="tab-pane tabs-animation fade  show active"
                             id="tab-content-new-order" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-12 card mt-1">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table style="" id="order-table"
                                                       class="table table-hover table-striped table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Order Status</th>
                                                        <th>Pick Up Location</th>
                                                        <th>Pick Up Time</th>
                                                        <th>Action</th>
                                                        <th>View Details</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pickup_orders as $order)
                                                        @php
                                                            $identifier = $order->orderStatus->identifier +1;
                                                            $status = $order_status->where('identifier',$identifier)->first()->status;
                                                            $pickup_address = $order->pickUpAddress->address_line_1.' | '.$order->pickUpAddress->address_line_2.' | '.$order->pickUpAddress->city.' | '.$order->pickUpAddress->zip;
                                                            $delivery_address = $order->deliveryAddress->address_line_1.' | '.$order->deliveryAddress->address_line_2.' | '.$order->deliveryAddress->city.' | '.$order->deliveryAddress->zip;
                                                        @endphp
                                                        <tr>
                                                            <td class="order_id">{{$order->id}}</td>
                                                            <td>{{$order->customer->first_name}}</td>
                                                            <td>{{$order->customer->phone}}</td>
                                                            <td>{{$order->orderStatus->status}}</td>
                                                            <td>{{$pickup_address}}</td>
                                                            <td>{{$order->pickup_time_from}}
                                                                -{{$order->pickup_time_to}}</td>
                                                            <td>
                                                                {{--                                                                {{route('update-order-status',$order->id)}}--}}
                                                                @if($status == 'Picked Up')
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <button
                                                                            class="btn btn-danger btn-sm {{(Auth::guard('admin')->user()->privilege != 'SA')?'picked-up':''}}  {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                            @if($status == 'Processing Started' && Auth::guard('admin')->user()->privilege != 'LA')
                                                                                {{'Sent To Processing'}}
                                                                            @else
                                                                                {{$status}}
                                                                            @endif
                                                                        </button>
                                                                    @else
                                                                        <button class="btn btn-secondary btn-sm">
                                                                            Completed
                                                                        </button>
                                                                    @endif
                                                                @else
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <a href="{{route('update-order-status',$order->id)}}"
                                                                           class="btn btn-success btn-sm  {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                            @if($status == 'Processing Started' && Auth::guard('admin')->user()->privilege != 'LA')
                                                                                {{'Sent To Processing'}}
                                                                            @else
                                                                                {{$status}}
                                                                            @endif
                                                                        </a>
                                                                    @else
                                                                        <button class="btn btn-secondary btn-sm">
                                                                            Completed
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                        class="btn btn-secondary btn-sm fa fa-eye view_order_items"></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{$pickup_orders->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(Auth::guard('admin')->user()->privilege != 'LA')
                        <div class="tab-pane tabs-animation fade  show"
                             id="tab-content-ready" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-12 card mt-1">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table style=""
                                                       class="table table-hover table-striped table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Order Status</th>
                                                        <th>Delivery Location</th>
                                                        <th>Delivery Date</th>
                                                        <th>Delivery Time</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($delivery_orders as $order)
                                                        @php
                                                            $identifier = $order->orderStatus->identifier +1;
                                                            $status = $order_status->where('identifier',$identifier)->first()->status;
                                                            $delivery_address = $order->deliveryAddress->address_line_1.' | '.$order->deliveryAddress->address_line_2.' | '.$order->deliveryAddress->city.' | '.$order->deliveryAddress->zip;
                                                        @endphp
                                                        @if(empty($order->final_status))
                                                            <tr>
                                                                <td class="order_id">{{$order->id}}</td>
                                                                <td>{{$order->customer->first_name}}</td>
                                                                <td>{{$order->customer->phone}}</td>
                                                                <td>{{$order->orderStatus->status}}</td>
                                                                <td>{{$delivery_address}}</td>
                                                                <td>
                                                                    @if((Auth::guard('admin')->user()->privilege == 'SA'))
                                                                        {{$order->delivery_time_from}}
                                                                        -{{$order->delivery_time_to}}
                                                                    @elseif($status == 'Delivered')
                                                                        <input type="hidden" name="_token"
                                                                               value="{{csrf_token()}}">
                                                                        <input type="hidden" name="order_id"
                                                                               class="order_id"
                                                                               value="{{$order->id}}">

                                                                        <input type="date"
                                                                               class="delivery_date"
                                                                               value="{{($order->delivery_date)??''}}"
                                                                               name="deli_date">
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if((Auth::guard('admin')->user()->privilege == 'SA'))
                                                                        {{$order->delivery_time_from}}
                                                                        -{{$order->delivery_time_to}}
                                                                    @elseif($status == 'Delivered')
                                                                        <input type="hidden" name="_token"
                                                                               value="{{csrf_token()}}">
                                                                        <input type="hidden" name="order_id"
                                                                               class="order_id"
                                                                               value="{{$order->id}}">

                                                                        <input type="time"
                                                                               class="delivery_time_from"
                                                                               value="{{($order->delivery_time_from)??''}}"
                                                                               name="deli_time_from">
                                                                        <br>
                                                                        <span>To</span>
                                                                        <br>
                                                                        <input type="time"
                                                                               class="delivery_time_to"
                                                                               name="delivery_time_to"
                                                                               value="{{($order->delivery_time_to)??''}}">
                                                                    @endif
                                                                </td>
                                                                <td>

                                                                    @if($status == 'Delivered')
                                                                        @if($order->orderStatus->identifier < 5)
                                                                            <button
                                                                                class="btn btn-success btn-sm deli_btn  {{(Auth::guard('admin')->user()->privilege == 'SA' || empty($order->delivery_date)) ?'disabled':'picked-up'}}"
                                                                                id="deli_btn-{{$order->id}}">
                                                                                @if(Auth::guard('admin')->user()->privilege == 'SA')
                                                                                    {{'Not Delivered'}}
                                                                                @else
                                                                                    {{$status}}
                                                                                @endif
                                                                            </button>
                                                                        @else
                                                                            <button
                                                                                class="btn btn-secondary btn-sm {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                                Completed
                                                                            </button>
                                                                        @endif
                                                                    @endif

                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{$delivery_orders->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(Auth::guard('admin')->user()->privilege != 'PA' )
                        <div
                            class="tab-pane tabs-animation fade  show {{(Auth::guard('admin')->user()->privilege == 'LA')?'active':''}}"
                            id="tab-content-processing" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-12 card mt-1">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table
                                                    class="table table-hover table-striped table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>
                                                        <th>View Details</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($laundry_orders as $order)
                                                        @php
                                                            $identifier = $order->orderStatus->identifier +1;
                                                            $status = $order_status->where('identifier',$identifier)->first()->status;
                                                        @endphp
                                                        <tr>
                                                            <td class="order_id">{{$order->id}}</td>
                                                            <td>{{$order->customer->first_name}}</td>
                                                            <td>{{$order->orderStatus->status}}</td>

                                                            <td>
                                                                @if($order->orderStatus->status == 'Picked Up')
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <button
                                                                            class="btn btn-success btn-sm  {{(Auth::guard('admin')->user()->privilege != 'SA')?'picked-up':''}}  {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                            @if($order->orderStatus->status == 'Picked Up' && Auth::guard('admin')->user()->privilege != 'PA')
                                                                                {{'Start Processing'}}
                                                                            @endif
                                                                        </button>
                                                                    @endif
                                                                @elseif($order->orderStatus->status == 'Processing Started')
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <button
                                                                            class="btn btn-success btn-sm picked-up {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                            @if($order->orderStatus->status == 'Processing Started' && Auth::guard('admin')->user()->privilege != 'PA')
                                                                                {{'Sent For Delivery'}}
                                                                            @else
                                                                                {{$status}}
                                                                            @endif
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            </td>

                                                            <td>
                                                                <button type="button"
                                                                        class="btn btn-secondary btn-sm fa fa-eye view_order_items"></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{$laundry_orders->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="view-order" tabindex="1000" role="dialog" aria-labelledby="add"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title modal-details" id="add">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table text-center details-table" id="details-table" style="">
                        <thead class="text-center">
                        <tr class="text-center">
                            <th class="text-center">SN</th>
                            <th class="text-center">Service Type</th>
                            <th class="text-center">Items</th>
                            <th class="text-center">per/Items</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="qr-scanner">
        <div class="modal-close">
            <span class="close-btn">&times;</span>
        </div>
        <div class="col-md-6 text-center">
            <video id="video"></video>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            jQuery.noConflict();
            var delivery_date;
            $('.delivery_date').on('change', function () {
                delivery_date = $(this).parent().find('.delivery_date').val();
                console.log(delivery_date);
            });

            $('.delivery_time_from').on('change', function () {
                var delivery_time_from = $(this).parent().find('.delivery_time_from').val();
                var delivery_time_to = $(this).parent().find('.delivery_time_to').val();
                var order_id = $(this).parent().find('.order_id').val();

                if (delivery_time_from && delivery_time_to && delivery_date && order_id) {
                    ajaxDelivery(delivery_time_from, delivery_time_to, delivery_date, order_id);
                }
            });

            $('.delivery_time_to').on('change', function () {
                var delivery_time_from = $(this).parent().find('.delivery_time_from').val();
                var delivery_time_to = $(this).parent().find('.delivery_time_to').val();
                var order_id = $(this).parent().find('.order_id').val();

                if (delivery_time_from, delivery_time_to, delivery_date, order_id) {
                    ajaxDelivery(delivery_time_from, delivery_time_to, delivery_date, order_id);
                }
            });

            function ajaxDelivery(deli_time_from, deli_time_to, deli_date, id) {
                console.log(deli_time_from, deli_time_to);
                var ajaxRoute = '{{route('delivery_time')}}';
                var token = $('input[name="_token"]').attr('value');

                $.ajax({
                    url: ajaxRoute,
                    type: 'POST',
                    data: {
                        _token: token,
                        id: id,
                        delivery_time_from: deli_time_from,
                        delivery_time_to: deli_time_to,
                        delivery_date: deli_date,
                    },
                    dataType: 'JSON',
                    success: function (time) {
                        $('#deli_btn-' + id).removeClass('disabled');
                        console.log(time);
                    }
                });
            }


            $('.view_order_items').on('click', function () {
                $('#view-order').modal();
                var id = $(this).closest('tr').find('.order_id').html();
                var ajaxRoute = '{{route('order-details')}}';
                $.ajax({
                    url: ajaxRoute,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (data) {
                        var trHtml = '';
                        var i = 1;
                        var index = 0;
                        var grand_total = 0;
                        $.each(data.items, function (key, value) {
                            trHtml += "<tr>";
                            trHtml += "<td>" + i + "</td>";
                            trHtml += "<td>" + data.service_types[index] + "</td>";
                            trHtml += "<td>" + value.items + "</td>";
                            trHtml += "<td>" + '$' + (value.amount).toFixed(2) + "</td>";
                            trHtml += "<td>" + data.quantities[index] + "</td>";
                            trHtml += "<td>" + '$' + data.order_items[index].total + "</td>";
                            grand_total += data.order_items[index].total;

                            i++
                            index++
                            trHtml += "</tr>";
                        });
                        trHtml += "<tr>";
                        trHtml += "<td colspan='5' class='ml-4'>" + 'Grand Total = $' + (grand_total).toFixed(2) + "</td>";
                        trHtml += "</tr>";

                        $('#view-order tbody').append(trHtml);
                    }

                });

            });
            $('#view-order').on('hidden.bs.modal', function () {
                $('#view-order tbody').children().remove();
            });


            var order_id;
            var data;
            $('.picked-up').on('click', function () {
                $('#qr-scanner').modal();
                order_id = $(this).closest('tr').find('.order_id').html();

                let opts = {
                    continue: true,
                    video: document.getElementById('video'),
                };

                let scanner = new Instascan.Scanner(opts);

                scanner.addListener('scan', function (content) {
                    data = content;
                    if (data) {
                        scanner.stop();
                        $('#qr-scanner').modal('hide');

                        $.ajax({
                            url: "update-order/" + order_id,
                            type: "GET",
                            data: {
                                id: order_id,
                                qr_data: data
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            dataType: "JSON",
                            success: function (ok) {
                                if (ok.error) {
                                    alert(ok.error);
                                } else {
                                    setTimeout(function () {
                                        location.reload(true);
                                    }, 1000);
                                }
                            }
                        });
                    }
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length > 0) {
                        scanner.start(cameras[0]);
                    } else {
                        console.error('No Cameras Found');
                    }
                }).catch(function (e) {
                    console.error(e);
                });

                $('.close-btn').on('click', function () {
                    $('#qr-scanner').modal('hide');
                    scanner.stop();
                });
            });

        });
    </script>
@stop
