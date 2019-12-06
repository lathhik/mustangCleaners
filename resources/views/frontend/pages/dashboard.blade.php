@extends('frontend.master')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered text-center">
                    <thead>
                    <th class="text-center">SN</th>
                    <th class="text-center">Order Type</th>
                    <th class="text-center">Order Status</th>
                    <th class="text-center">Estimated Delivery Date</th>
                    <th class="text-center">Estimated Delivery Time</th>
                    <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->serviceType->service_types}}</td>
                            <td>{{$order->orderStatus->status}}</td>
                            <td>{{$order->delivery_date}}</td>
                            <td>{{$order->delivery_time_from}}-{{$order->delivery_time_to}}</td>
                            <td>
                                <a class="btn btn-sm btn-danger {{($order->orderStatus->identifier > 1)?'disabled':'' }}">
                                    Cancel
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
@endsection()

