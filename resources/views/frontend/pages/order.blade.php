@extends('frontend.master')
@section('content')

    <div class="container">
        <br>
        <br>
        <h1 class="place-order">Place Your Order</h1>
        <hr class="hr">
        <form action="" class="border" method="post">
            @csrf
            <div class="form-row">

                <div class="form-group">
                    <div class="col-md-offset-0 col-md-12 ">
                        <label for="" class="">Pick Up Address</label>
                    </div>
                    <div class="form-group col-md-6">
{{--                        <label for="phone">Street Address</label>--}}
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Street Address">
                    </div>
                    <div class="form-group col-md-6">
{{--                        <label for="phone">House No.</label>--}}
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="House No.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-0 col-md-12 ">
                        <label for="" class="">Delivery Address</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Street Address">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="House No.">
                    </div>
                </div>
                <div class="form-gruop">
                    <div class="form-group col-md-6">
                        <label for="phone">Service Type</label>
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Select Service Type</option>
                            <option value="">Dry Cleaning</option>
                            <option value="">Wash and Fold</option>
                            <option value="">Laundered adn Pressed</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone No.">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Pick Up Date</label>
                            <input class="form-control" type="date" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Pick Up Time</label>
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled="">Select Pick Up Time</option>
                            <option value="">8-10 AM</option>
                            <option value="">12-2 PM</option>
                            <option value="">4-6 PM</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Delivery Date</label>
                            <input class="form-control" type="date" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Delivery Time</label>
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled="">Select Pick Up Time</option>
                            <option value="">8-10 AM</option>
                            <option value="">12-2 PM</option>
                            <option value="">4-6 PM</option>
                        </select>
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
