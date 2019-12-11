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
                                        <div class="main-card mb-12 card">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table style="" id="example"
                                                       class="table table-hover table-striped table-bordered text-center table-responsive-lg">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Order Type Name</th>
                                                        <th>Order Status</th>
                                                        <th>Pick Up Location</th>
                                                        <th>Pick Up Time</th>
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
                                                            <td>{{$order->pickup_time_from}}
                                                                -{{$order->pickup_time_to}}</td>
                                                            <td>

                                                                @if($status == 'Picked Up')
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <a href=""
                                                                           id="status"
                                                                           class="btn btn-danger btn-sm  {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}"
                                                                           data-toggle="modal" data-target="#quantity">
                                                                            @if($status == 'Processing Started' && Auth::guard('admin')->user()->privilege != 'LA')
                                                                                {{'Start Processing'}}
                                                                            @else
                                                                                {{$status}}
                                                                            @endif
                                                                        </a>
                                                                    @else
                                                                        <button class="btn btn-secondary btn-sm">
                                                                            Completed
                                                                        </button>
                                                                    @endif
                                                                @else
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <a href="{{route('update-order-status',$order->id)}}"
                                                                           id="status"
                                                                           class="btn btn-success btn-sm  {{(Auth::guard('admin')->user()->privilege == 'SA')?'disabled':''}}">
                                                                            @if($status == 'Processing Started' && Auth::guard('admin')->user()->privilege != 'LA')
                                                                                {{'Start Processing'}}
                                                                            @else
                                                                                {{$status}}
                                                                            @endif
                                                                        </a>
                                                                    @else
                                                                        <button class="btn btn-secondary btn-sm">Completed
                                                                        </button>
                                                                    @endif
                                                                @endif

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
                    @endif

                    @if(Auth::guard('admin')->user()->privilege != 'LA')
                        <div class="tab-pane tabs-animation fade  show"
                             id="tab-content-ready" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-4 card">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table style="" id="example2"
                                                       class="table table-hover table-striped table-bordered text-center table-responsive">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Order Type Name</th>
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
                                                            $delivery_address = $order->deliveryAddress->address_line_1.','.$order->deliveryAddress->address_line_2.','.$order->deliveryAddress->city.','.$order->deliveryAddress->zip;
                                                        @endphp
                                                        @if(empty($order->final_status))
                                                            <tr>
                                                                <td>{{$order->id}}</td>
                                                                <td>{{$order->customer->first_name}}</td>
                                                                <td>{{$order->customer->phone}}</td>
                                                                <td>{{$order->serviceType->service_types}}</td>
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
                                                                    @if($order->orderStatus->identifier < 5)
                                                                        <a href="{{route('update-order-status',$order->id)}}"
                                                                           class="btn btn-success btn-sm deli_btn {{(Auth::guard('admin')->user()->privilege == 'SA' || empty($order->delivery_date)) ?'disabled':''}}"
                                                                           id="deli_btn-{{$order->id}}">
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
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
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
                                        <div class="main-card mb-12 card">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table style="width: 950px" id="example3"
                                                       class="table table-hover table-striped table-bordered text-center table-responsive">
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
                                                            <td>{{$order->delivery_time_from}}
                                                                -{{$order->delivery_time_to}}</td>
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

    <!-- Modal -->
{{--    <div class="modal fade" id="quantity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header"  >--}}
{{--                    <h4 class="modal-title" id="exampleModalCenterTitle">Enter Quantity</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form action="{{route('update-order-status',$order->id)}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Quantity in Kgs</label>--}}
{{--                                    <input type="number" class="form-control" name="quantity" required>--}}
{{--                                </div>--}}
{{--                                &nbsp;&nbsp;--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Price/kg</label>--}}
{{--                                    <input type="number" class="form-control" name="price_per_kg" value="{{$order->serviceType->price}}" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary modal-submit float-right status-submit">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {

            var delivery_date;

            $('.delivery_date').on('change', function () {
                delivery_date = $(this).parent().find('.delivery_date').val();
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
        });
    </script>
@stop
