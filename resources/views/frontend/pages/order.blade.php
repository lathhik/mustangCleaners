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
                        <ul class="nav nav-tabs" id="tab" role="tablist">
                            @foreach($services as $service)
                                <li class="nav-item {{($loop->first)?'active':''}}">
                                    <a class="nav-item " id="tab" data-toggle="tab"
                                       href="#tab-{{$service->id}}"
                                       role="tab" aria-controls="tab-{{$service->id}}"
                                       aria-selected="true">{{$service->service_types}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <br>
                    <div class="tab-content">
                        @foreach($services  as  $service)
                            <div class="{{(!$loop->first)?'tab-pane':'tab-pane active'}}" id="tab-{{$service->id}}"
                                 role="tabpanel"
                                 aria-labelledby="tab-{{$service->id}}">
                                <ul class="">
                                    @foreach($service->items as $item)
                                        <form action="" method="post">
                                            @csrf
                                            <li class="">
                                                <div class="d-inline col-md-4 item_name" style="display: inline">
                                                    {{$item->items}}
                                                </div>
                                                <div class="d-inline" style="display: inline">
                                                    ${{$item->amount}}
                                                    &nbsp
                                                    <button type="button" class="fa fa-plus-circle add"
                                                            data-toggle="modal"
                                                            aria-labelledby="add" data-target=""></button>
                                                </div>
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <input type="hidden" name="_token"
                                                       value="{{csrf_token()}}">
                                            </li>
                                        </form>
                                        <br>
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
            {{--    </div>--}}
            <div>
                <button class="btn btn-lg col-md-offset-5" type="submit" id="order_submit">
                    Order
                </button>
            </div>
        </form>
    </div>

    <br><br><br>

    <!-- Modal -->
    <div class="modal fade active" id="add-item" tabindex="-1" role="dialog" aria-labelledby="add"
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
                    <form action="">
                        @csrf
                        <div class="input-group">
                            <div class="">
                                <h3 class="service_type"></h3>
                            </div>
                            <h4 class="title" style="display: inline"></h4>
                            <b class="" id="amt">$<span class="amount" style="">$</span></b>
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" step="1" max="100" name="quantity" value="1" class="quantity-field"
                                   data-field="quantity">
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                            <input type="hidden" value="" class="hidden_id">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary add-to-cart">Add To Cart</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.add').on('click', function () {
                $('#add-item').modal();
                var id = $(this).closest('li').find('[name=id]').val();
                console.log(id);
                var ajaxRoute = '{{route('add-item-cart')}}';
                // var token = $('input[name=_token]').attr('value');
                $.ajax({
                    url: ajaxRoute,
                    type: "PUT",
                    data: {
                        // _token: token,
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "JSON",
                    success: function (item) {
                        console.log(item[0]);
                        $('.service_type').html(item[0]);
                        $.each(item, function (key, value) {
                            console.log(value.items);
                            $('.title').html(value.items);
                            $('.amount').html(value.amount);
                            $('.hidden_id').val(value.id);
                        })
                    }
                });
            });

            $('.quantity-field').width(70);

            function incrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                if (!isNaN(currentVal) && currentVal >= 0) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
            }

            function decrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                if (!isNaN(currentVal) && currentVal > 0) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
            }

            $('.input-group').on('click', '.button-plus', function (e) {
                incrementValue(e);
            });

            $('.input-group').on('click', '.button-minus', function (e) {
                decrementValue(e);
            });

            $('.add-to-cart').on('click', function () {
                var quantity = $('.quantity-field').val();
                var amount = $('.amount').text();
                var id = $('.hidden_id').val();
                console.log(quantity);
                console.log(amount);
                console.log(id);

                var ajaxRoute = '{{route('add-to-cart')}}';

                $.ajax({
                    type: 'POST',
                    url: ajaxRoute,
                    data: {
                        id: id,
                        quantity: quantity
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'JSON',
                    success:function (order) {
                        console.log(order);
                    }
                });
            });
        });
    </script>
@endsection
