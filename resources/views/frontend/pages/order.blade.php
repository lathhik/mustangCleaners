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

                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="pick_str" class="">Pick Up Address</label>
                        <input class="form-control" type="text" name="pickup_street_addr" id="pick_str"
                               placeholder="Street Address">
                        {{--                        @if($errors->has('pickup_street_addr'))--}}
                        {{--                            <p class="text-danger">{{$errors->first('pickup_street_addr')}}</p>--}}
                        {{--                        @endif--}}
                        @error('pickup_street_addr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pick_hs">Pick Up House No.</label>
                        <input class="form-control" type="text" name="pickup_house_no" id="pick_hs"
                               placeholder="House No.">
                        @if($errors->has('pickup_house_no'))
                            <p class="text-danger">{{$errors->first('pickup_house_no')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="" class="">Delivery Address</label>
                        <input class="form-control" type="text" name="deli_street_addr" id="deli_adr"
                               placeholder="Street Address">
                        @if($errors->has('deli_street_addr'))
                            <p class="text-danger">{{$errors->first('deli_street_addr')}}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="deli_hs">Delivery  House No.</label>
                        <input class="form-control" type="text" name="deli_house_no" id="deli_hs"
                               placeholder="House No.">
                        @if($errors->has('deli_house_no'))
                            <p class="text-danger">{{$errors->first('deli_house_no')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-gruop">
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

                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone No.">

                        @if($errors->has('phone'))
                            <p class="text-danger">{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pick_date">Pick Up Date</label>
                            <input class="form-control" type="date" name="pickup_date" id="pick_date">
                            @if($errors->has('pickup_date'))
                                <p class="text-danger">{{$errors->first('pickup_date')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pick_time">Pick Up Time</label>
                            <input type="time" class="form-control" name="pickup_time" id="pick_time">
{{--                        <select name="pickup_time" id="pick_time" class="form-control">--}}
{{--                            <option value="" selected disabled="">Select Pick Up Time</option>--}}
{{--                            <option value="8-10 AM">10-12 AM</option>--}}
{{--                            <option value="12-2 PM">12-2 PM</option>--}}
{{--                            <option value="4-6 PM">2-4 PM</option>--}}
{{--                        </select>--}}
                        @if($errors->has('pickup_time'))
                            <p class="text-danger">{{$errors->first('pickup_time')}}</p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deli_date">Delivery Date (
                                <small>Estimated</small>
                                )</label>
                            <input class="form-control" type="date" name="deli_date" id="deli_date">
                            @if($errors->has('deli_date'))
                                <p class="text-danger">{{$errors->first('deli_date')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="deli_time">Delivery Time</label>
                        <input type="time" class="form-control" name="deli_time" id="deli_time">

                        {{--                        <select name="deli_time" id="deli_time" class="form-control">--}}
                        {{--                            <option value="" selected disabled="">Select Pick Up Time</option>--}}
                        {{--                            <option value="">8-10 AM</option>--}}
                        {{--                            <option value="">12-2 PM</option>--}}
                        {{--                            <option value="">4-6 PM</option>--}}
                        {{--                        </select>--}}
                        @if($errors->has('deli_time'))
                            <p class="text-danger">{{$errors->first('deli_time')}}</p>
                        @endif
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
        })
    </script>
    @endsection
