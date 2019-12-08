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
                    <div class="row">
                        <h3 class="text-center"><b>Service Type</b></h3>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="nav nav-tabs" id="tab" role="tablist">
                                @foreach($services as $service)
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab" data-toggle="tab"
                                           href="#tab-{{$service->id}}"
                                           role="tab" aria-controls="tab-{{$service->id}}"
                                           aria-selected="true">{{$service->service_types}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <br>
                        <div class="tab-content">
                            @foreach($services as $service)
                                <div class="tab-pane fade" id="tab-{{$service->id}}" role="tabpanel"
                                     aria-labelledby="tab-{{$service->id}}">
                                    <ul class="">
                                        @foreach($service->items as $item)
                                            <li class="d-inline" style="display: inline">
                                                <div>
                                                    {{$item->items}}
                                                </div>
                                                <div>
                                                    <span class="">{{$item->amount}}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
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
    </script>
@endsection
