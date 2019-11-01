@extends('frontend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <td></td>
                    <td>Order Type</td>
                    <td>Order Status</td>
                    <td>Estimated Delivery Date</td>
                    <td>Estimated Delivery Time</td>
                    <td>Action</td>
                    </thead>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->serviceType->service_types}}</td>
                            <td>{{$order->orderStatus->status}}</td>c
                            <td>{{$order->delivery_date}}</td>
                            <td>{{$order->delivery_time}}</td>
                            <td>
                                <a class="btn btn-sm btn-danger">
                                    Cancel
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>

@endsection()

