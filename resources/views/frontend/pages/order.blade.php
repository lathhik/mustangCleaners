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
                    {{--Pick Up Address--}}
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Pick Up Address</h3>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_address_line_1" class="">Address Line 1</label>
                            <input class="form-control" type="text" name="pickup_address_line_1"
                                   id="pickup_address_line_1"
                                   placeholder="456 Main Street SE">
                            @if($errors->has('pickup_address_line_1   '))
                                <p class="text-danger">{{$errors->first('pickup_address_line_1')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_address_line_2" class="">Address Line 2</label>
                            <input class="form-control" type="text" name="pickup_address_line_2"
                                   id="pickup_address_line_2"
                                   placeholder="456 Main Street SE">
                            @if($errors->has('pickup_address_line_2'))
                                <p class="text-danger">{{$errors->first('pickup_address_line_2')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_city" class="">City</label>
                            <input class="form-control" type="text" name="pickup_city" id="pickup_city"
                                   placeholder="New York">
                            @if($errors->has('pickup_city'))
                                <p class="text-danger">{{$errors->first('pickup_city')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_state" class="">State</label>
                            <input class="form-control" type="text" name="pickup_state" id="pickup_state"
                                   placeholder="Mary Land">
                            @if($errors->has('pickup_state'))
                                <p class="text-danger">{{$errors->first('pickup_state')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_zip" class="">Zip</label>
                            <input class="form-control" type="text" name="pickup_zip" id="pickup_zip"
                                   placeholder="99501 ">
                            @if($errors->has('pickup_zip'))
                                <p class="text-danger">{{$errors->first('pickup_zip')}}</p>
                            @endif
                        </div>
                    </div>
                    {{--Delivery Address--}}
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Delivery Address</h3>
                            <div class="checkbox">
                                <label for=""><input type="checkbox" name="delivery_address" value="1" id="delivery_address">Same As Pick Up
                                    Address</label>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="pickup_address_line_1" class="">Address Line 1</label>
                            <input class="form-control" type="text" name="delivery_address_line_1"
                                   id="delivery_address_line_1"
                                   placeholder="456 Main Street SE">
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
                    <div class="row">
                        <h3>Service Type</h3>
                        <div class="form-group col-md-6">
                            <label for="">Service Type</label>
                            <select name="service_type" id="" class="form-control">
                                <option value="" selected disabled>Select Service Type</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->service_types}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('service_type'))
                                <p class="text-danger">{{$errors->first('service_type')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <h3>Pick Up Date/Time</h3>
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
                    <div class="row">
                        <h3>Delivery Time</h3>
                        <div class="form-group col-md-6">
                            <label for="deli_time_from">Time From</label>
                            <input type="time" class="form-control" name="deli_time_from" id="deli_time_from">
                            @if($errors->has('deli_time_from'))
                                <p class="text-danger">{{$errors->first('deli_time_from')}}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deli_time_to">Time To</label>
                            <input type="time" class="form-control" name="deli_time_to" id="deli_time_to">
                            @if($errors->has('deli_time_to'))
                                <p class="text-danger">{{$errors->first('deli_time_to')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-lg col-md-offset-5" type="submit" id="order_submit">Order</button>
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
               if($('#delivery_address').prop('checked')){
                   $('#delivery_address_line_1').val($('#pickup_address_line_1').val());
                   $('#delivery_address_line_2').val($('#pickup_address_line_2').val());
                   $('#delivery_city').val($('#pickup_city').val());
                   $('#delivery_state').val($('#pickup_state').val());
                   $('#delivery_zip').val($('#pickup_zip').val());
               }else{
                   $('#delivery_address_line_1').val('');
                   $('#delivery_address_line_2').val('');
                   $('#delivery_city').val('');
                   $('#delivery_state').val('');
                   $('#delivery_zip').val('');
               }
            });

        })
    </script>
@endsection
