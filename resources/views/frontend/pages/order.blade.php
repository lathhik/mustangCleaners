@extends('frontend.master')
@section('content')

    <div class="container">
        <br>
        <br>
        <h1 class="place-order">Place Your Order</h1>
        <hr class="hr">
        @include('messages.succFail')
        <form action="{{route('customer-order')}}" class="border" method="post">
            @csrf
            <div class="form-row">
                <div class="col -md-12">

                    <!----------------- pickup address ---------------->
                    <div class="row">
                        <h3 class="text-center"><b>Pick Up Address</b></h3>
                        <div class="form-group col-md-6">
                            <label for="pickup_address_line_1" class="">Address Line 1</label>
                            <input class="form-control" type="text" name="pickup_address_line_1"
                                   id="pickup_address_line_1"
                                   value="{{Auth::guard('customer')->user()->address->address_line_1}}"
                                   placeholder="456 Main Street SE">
                            @if($errors->has('pickup_address_line_1   '))
                                <p class="text-danger">{{$errors->first('pickup_address_line_1')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_address_line_2" class="">Address Line 2</label>
                            <input class="form-control" type="text" name="pickup_address_line_2"
                                   id="pickup_address_line_2"
                                   value="{{Auth::guard('customer')->user()->address->address_line_2}}"
                                   placeholder="456 Main Street SE">
                            @if($errors->has('pickup_address_line_2'))
                                <p class="text-danger">{{$errors->first('pickup_address_line_2')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_city" class="">City</label>
                            <input class="form-control" type="text" name="pickup_city" id="pickup_city"
                                   placeholder="New York" value="{{Auth::guard('customer')->user()->address->city}}">
                            @if($errors->has('pickup_city'))
                                <p class="text-danger">{{$errors->first('pickup_city')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_state" class="">State</label>
                            <input class="form-control" type="text" name="pickup_state" id="pickup_state"
                                   placeholder="Mary Land" value="{{Auth::guard('customer')->user()->address->state}}">
                            @if($errors->has('pickup_state'))
                                <p class="text-danger">{{$errors->first('pickup_state')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_zip" class="">Zip</label>
                            <input class="form-control" type="text" name="pickup_zip" id="pickup_zip"
                                   placeholder="99501 " value="{{Auth::guard('customer')->user()->address->zip}}    ">
                            @if($errors->has('pickup_zip'))
                                <p class="text-danger">{{$errors->first('pickup_zip')}}</p>
                            @endif
                        </div>
                    </div>
                    <br>
                    <!----------------- end pickup address ---------------->

                    <!----------------- delivery address ---------------->
                    <div class="row">
                        <h3 class="text-center"><b>Delivery Address</b></h3>
                        <div class="checkbox form-group">
                            <label for=""><input type="checkbox" name="delivery_address" value="1"
                                                 id="delivery_address">Same As Pick Up
                                Address</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delivery_address_line_1" class="">Address Line 1</label>
                            <input class="form-control" type="text" name="delivery_address_line_1"
                                   id="delivery_address_line_1"
                                   placeholder="457 Main Street SE">
                            @if($errors->has('delivery_address_line_1   '))
                                <p class="text-danger">{{$errors->first('delivery_address_line_1')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delivery_address_line_2" class="">Address Line 2</label>
                            <input class="form-control" type="text" name="delivery_address_line_2"
                                   id="delivery_address_line_2"
                                   placeholder="456 Main Street SE">
                            @if($errors->has('delivery_address_line_2'))
                                <p class="text-danger">{{$errors->first('delivery_address_line_2')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delivery_city" class="">City</label>
                            <input class="form-control" type="text" name="delivery_city" id="delivery_city"
                                   placeholder="New York">
                            @if($errors->has('delivery_city'))
                                <p class="text-danger">{{$errors->first('delivery_city')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delivery_state" class="">State</label>
                            <input class="form-control" type="text" name="delivery_state" id="delivery_state"
                                   placeholder="Mary Land">
                            @if($errors->has('delivery_state'))
                                <p class="text-danger">{{$errors->first('delivery_state')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="delivery_zip" class="">Zip</label>
                            <input class="form-control" type="text" name="delivery_zip" id="delivery_zip"
                                   placeholder="99501 ">
                            @if($errors->has('delivery_zip'))
                                <p class="text-danger">{{$errors->first('delivery_zip')}}</p>
                            @endif
                        </div>
                    </div>
                    <br>
                    <!----------------- end delivery address ---------------->


                    <div class="row">
                        <h3 class="text-center"><b>Service Type</b></h3>
                        <div class="from-group col-md-12">
                            <h5>Please Select Service Type and Items Quantity :-</h5>
                            <div class="col-md-12">
                                @foreach($services as $service)
                                    <div class="form-group col-md-6">
                                        <input type="checkbox"
                                               id="service_type-{{$service->id}}"
                                               name="service_type[]"
                                               class="service_type"
                                               value="{{$service->id}},{{$service->service_types}}"> {{$service->service_types}}

                                        <div class="service_item hidden" id="service_item-{{$service->id}}">
                                                <div class="form-group ">

                                                    <label for="">Select an Item</label>
                                                    <select name="item" id="" class="form-control item item_list"
                                                            required>
                                                        <option value="" selected disabled>Select Items</option>
                                                        @foreach($service->items as $item)
                                                            <option
                                                                value="{{$item->id}},{{$item->items}}">{{$item->items}}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                    <label for="">Quantity</label>
                                                    <input type="number" name="quantity" class="form-control quantity"
                                                           required>
                                                    <br>
                                                    <div>
                                                        <button type="button" class="btn btn-success item-add" id="">
                                                            Add
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                @endforeach
                                <table class="table table-bordered text-center hidden" id="item-table">
                                    <thead>
                                    <th class="text-center">SN</th>
                                    <th class="text-center">Service Type</th>
                                    <th class="text-center">Items</th>
                                    <th class="text-center">Quantity</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <h3 class="text-center"><b>Pick Up Date/Time</b></h3>
                        <div class="form-group col-md-6 ">
                            <div class="form-group">
                                <label for="pick_date">Pick Up Date</label>
                                <input class="form-control" type="date" name="pickup_date" id="pick_date">
                                @if($errors->has('pickup_date'))
                                    <p class="text-danger">{{$errors->first('pickup_date')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group col-md-6">
                            <label for="pick_time_from">Time From</label>
                            <input type="time" class="form-control" name="pickup_time_from" id="pick_time_from">
                            @if($errors->has('pickup_time_from'))
                                <p class="text-danger">{{$errors->first('pickup_time_from')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pick_time_to">Time To</label>
                            <input type="time" class="form-control" name="pickup_time_to" id="pick_time_to">
                            @if($errors->has('pickup_time_to'))
                                <p class="text-danger">{{$errors->first('pickup_time_to')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-lg col-md-offset-5" type="submit" id="order_submit">
                    Order
                </button>
            </div>
        </form>
    </div>

    <br><br><br>
@endsection
@section('script')
    <script>
        $(function () {
            function formatDate(date) {
                var d = new Date(date),
                    month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear();
                if (month.length < 2)
                    month = '0' + month;
                if (day.length < 2)
                    day = '0' + day;
                return [year, month, day].join('-');
            }

            $('#pick_date').change(function () {
                var date = new Date($("#pick_date").val());
                date.setDate(date.getDate() + 2);
                $('#deli_date').val(formatDate(date));
            });
            $('#delivery_address').change(function () {
                if ($('#delivery_address').prop('checked')) {
                    $('#delivery_address_line_1').val($('#pickup_address_line_1').val());
                    $('#delivery_address_line_2').val($('#pickup_address_line_2').val());
                    $('#delivery_city').val($('#pickup_city').val());
                    $('#delivery_state').val($('#pickup_state').val());
                    $('#delivery_zip').val($('#pickup_zip').val());
                } else {
                    $('#delivery_address_line_1').val('');
                    $('#delivery_address_line_2').val('');
                    $('#delivery_city').val('');
                    $('#delivery_state').val('');
                    $('#delivery_zip').val('');
                }
            });

        });

        $(document).ready(function () {
            var service_type;
            var service_type_arr;
            $('.service_type').click(function () {
                if ($(this).is(":checked")) {
                    service_type = $(this).parent().find('.service_type').val();
                    service_type_arr = service_type.split(',');
                    $(this).siblings('.service_item').removeClass('hidden');
                } else {
                    $(this).siblings('.service_item').addClass('hidden');
                }
                console.log(service_type);
                console.log(service_type_arr);
            });
            var item;
            var item_arr;
            $('.item_list').on('change', function () {
                item = $(this).parent().find('.item').val();
                item_arr = item.split(',');
                console.log(item);
                console.log(item_arr);
            });
            var quantity;
            $('.quantity').on('change', function () {
                quantity = $(this).parent().find('.quantity').val();
                console.log(quantity);
            });

            var sn = 1;
            $('.item-add').click(function () {
                $('#item-table').removeClass('hidden');
                var markup = "<tr><td>" + sn++ + "</td><td>" + service_type_arr[1] + "</td><td>" + item_arr[1] + "</td><td>" + quantity + "</td></tr>";
                $('#item-table').append(markup);
            });


        });
    </script>
@endsection
