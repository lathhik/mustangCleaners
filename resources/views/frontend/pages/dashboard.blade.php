@extends('frontend.master')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered text-center">
                    <thead>
                    <th class="text-center">SN</th>
                    <th class="text-center">Order Status</th>
                    <th class="text-center">Estimated Delivery Date</th>
                    <th class="text-center">Estimated Delivery Time</th>
                    <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->orderStatus->status}}</td>
                            <td>{{$order->delivery_date}}</td>
                            <td>{{$order->delivery_time_from}}-{{$order->delivery_time_to}}</td>
                            <td>
                                <a class="btn btn-sm btn-danger view-order-details" data-toggle="tooltip"
                                   title="View Order">
                                    <span class="fa fa-eye"></span>
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


    <!-- Modal -->
    <div class="modal fade active" id="view-order" tabindex="-1" role="dialog" aria-labelledby="add"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title text-center" id="add">Please Select Quantity</h5>
                </div>
                <div class="modal-body">
                    <table class="table-bordered">
                        <thead>
                        <tr>
                            <th>SN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('script')
    <script>
        $(document).ready(function () {
            $('.view-order-details').on('click', function () {
                $('#view-order').modal();
            })
        })
    </script>
@stop

