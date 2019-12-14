@extends('frontend.master')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered text-center customer-table">
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
                            <input type="hidden" value="{{$order->id}}" id="order_id">
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
                    <h5 class="modal-title text-center" id="add">Order Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table text-center details-table" style="">
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
                        <tr style="border: none">
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
            $('.customer-table').on('click', '.view-order-details', function () {
                $('#view-order').modal();

                var current_col = $(this).closest('tr');
                // var id = current_col.find("td:eq(0)").html();
                var id = current_col.find('#order_id').val();
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
                        console.log(data);
                        // $('#view-order tbody' ).append(
                        //     $.map(data , function (item, index) {
                        //         return "<tr><td>" + item.customer_order +"</td><td>";
                        //     }).join());

                        var trHtml = '';
                        var i = 1;
                        var index = 0;
                        var grand_total = 0;
                        $.each(data.items, function (key, value) {
                            trHtml += "<tr>";
                            trHtml += "<td>" + i + "</td>";
                            trHtml += "<td>" + data.service_types[index] + "</td>";
                            trHtml += "<td>" + value.items + "</td>";
                            trHtml += "<td>" + '$' + value.amount + "</td>";
                            trHtml += "<td>" + data.quantities[index] + "</td>";
                            trHtml += "<td>" + '$' + data.order_items[index].total + "</td>";
                            grand_total += data.order_items[index].total;

                            i++
                            index++
                            trHtml += "</tr>";
                        });
                        trHtml += "<tr>";
                        trHtml += "<td colspan='5'>" + 'Grand Total = $' + grand_total + "</td>";
                        trHtml += "</tr>";

                        $('#view-order tbody').append(trHtml);


                    }

                })

            });
        })
    </script>
@stop

