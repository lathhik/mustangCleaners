@extends('frontend.master')
@section('content')

    <div class="container">
        <div class="row">
            <br>
            <br>
            <h1 class="place-order">Place Your Order</h1>
            <hr class="hr">
            @include('messages.succFail')
            <div class="col-md-8">
                <form action="{{route('customer-order')}}" class="border" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col -md-8">
                            <div class="row">
                                <h3 class=""><b>Service Type</b></h3>
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
                                    <div class="{{(!$loop->first)?'tab-pane':'tab-pane active'}}"
                                         id="tab-{{$service->id}}"
                                         role="tabpanel"
                                         aria-labelledby="tab-{{$service->id}}">
                                        <ul class="">
                                            @foreach($service->items as $item)
                                                <form action="" method="post">
                                                    @csrf
                                                    <li class="">
                                                        <div class="d-inline col-md-4 item_name"
                                                             style="display: inline">
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
                    </div>
                    {{--    </div>--}}
                    {{--                    <div>--}}
                    {{--                        <button class="btn btn-lg col-md-offset-5" type="submit" id="order_submit">--}}
                    {{--                            Order--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                </form>
            </div>

            <div class="cart-title col-md-4">
                <h3 class="text-center">My Bag</h3>
            </div>
            <div class="col-md-4 item-cart">
                <div class="border-danger" style="">
                    <br>
                    @php($total = 0)
                    @if(!empty($carts))
                        <div id="myBag">
                            @foreach($carts as $cart)
                                @php($total += $cart->total)
                                <div class="col-md-12 main" id="pre-items-{{$cart->item_id}}">
                                    <input type="hidden" value="{{$cart->id}}" class="hidden_cart_id">
                                    <input type="hidden" value="{{$cart->item_id}}" class="hidden_item_id">
                                    <h6 class="service_type">{{$cart->items->serviceType->service_types}}
                                    </h6>
                                    <div class="col-md-1 quantity">
                                        <span id="2">{{$cart->quantity}}x</span>
                                    </div>
                                    <div class="col-md-6 item_name">
                                        <h7>{{$cart->items->items}}
                                        </h7>
                                    </div>
                                    <div class="col-md-2 ">
                                        $<span class="total_amt">{{ $cart->total}}</span>
                                    </div>
                                    <div class="col-md-1 btn btn-xs btn-danger delete" data-toggle="tooltip"
                                         title="Delete">
                                        <span class="fa fa-trash"></span>
                                    </div>
                                    <div class="col-md-1 btn btn-xs btn-success update" data-toggle="tooltip"
                                         title="Edit">
                                        <span class="fa fa-edit"></span>
                                    </div>
                                    <hr class="hr">
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 total_emp" style="display: {{!empty($cart)? 'block': 'none'}}">
                            <div class="grand_total col-md-12">
                                <div class="col-md-8">
                                    <h7>Grand Total</h7>
                                </div>
                                <div class="col-md-2">
                                    <h7>$<span id="grand_total_amt">{{$total}}</span></h7>
                                </div>
                            </div>
                            <div class="col-md-12 checkout btn btn-sm">
                                <a>Checkout</a>
                            </div>
                        </div>
                        <div class="bag" style="display: {{empty($cart)? 'block': 'none'}}">
                            <h4>Bag is Empty</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

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
                                <h3 id="modal_service_type"></h3>
                            </div>
                            <h4 id="modal_title" style="display: inline"></h4>
                            <b class="" id="amt">$<span id="modal_amount" style="">$</span></b>
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" step="1" max="100" name="quantity" value=""
                                   id="modal_quantity_field" class="quantity-field"
                                   data-field="quantity">
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                            <input type="hidden" value="" id="modal_hidden_id">
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

    <div class="modal fade active" id="checkout" tabindex="-1" role="dialog" aria-labelledby="add"
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
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
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
                                            <input type="time" class="form-control" name="pickup_time_from"
                                                   id="pick_time_from">
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
                                </form>

                            </div>
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


    <div class="d-none" id="bagContent" style="display: none;">
        <div class="col-md-12 main" id="pre-items">
            <input type="hidden" value="" class="hidden_item_id">
            <h6 class="service_type">
            </h6>
            <div class="col-md-1 quantity">
                <span id="quantity"></span>
            </div>
            <div class="col-md-6 item_name item_name">
                <h7>
                </h7>
            </div>
            <div class="col-md-2">
                $<span class="total_amt">0</span>
            </div>
            <div class="col-md-1 btn btn-xs btn-danger delete" data-toggle="tooltip"
                 title="Delete">
                <span class="fa fa-trash"></span>
            </div>
            <div class="col-md-1 btn btn-xs btn-success update" data-toggle="tooltip"
                 title="Edit">
                <span class="fa fa-edit"></span>
            </div>
            <hr class="hr">
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.add').on('click', function () {
                var id = $(this).closest('li').find('[name=id]').val();
                var ajaxRoute = '{{route('add-item-cart')}}';
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: ajaxRoute,
                    type: "POST",
                    data: {
                        _token: token,
                        id: id
                    },
                    dataType: "JSON",
                    success: function (item) {
                        $('#add-item').modal();
                        $('#modal_service_type').html(item.service_type);
                        $('#modal_quantity_field').val(item.quantity);
                        $('#modal_title').html(item.item_details.items);
                        $('#modal_amount').html(item.item_details.amount);
                        $('#modal_hidden_id').val(item.item_details.id);
                    },
                    error: function (data) {
                        console.log('something went wrong');
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

            function recalculateGrandTotal() {
                var sum = 0;
                $('.total_amt').each(function(){
                    sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
                });
                $('#grand_total_amt').text((sum).toFixed(2));
            }

            $(document).on('click', '.add-to-cart', function () {
                var quantity = $('#modal_quantity_field').val();
                var id = $('#modal_hidden_id').val();
                var ajaxRoute = '{{route('add-to-cart')}}';
                $.ajax({
                    type: 'POST',
                    url: ajaxRoute,
                    data: {
                        id: id,
                        quantity: quantity,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'JSON',
                    success: function (cart) {
                        var bagContent = $('#bagContent').children().clone();
                        bagContent.find('.service_type').html(cart.service_type);
                        bagContent.find('.hidden_item_id').val(cart.item.id);
                        bagContent.find('.item_name').html(cart.item.items);
                        bagContent.find('.quantity').html(cart.cart.quantity + 'x');
                        bagContent.find('.total_amt').text((cart.cart.total).toFixed(2));
                        $('#pre-items').attr('id', 'pre-items-' + cart.item.id);
                        $('#myBag').append(bagContent);
                        $('#pre-items-' + cart.item.id).remove();
                        recalculateGrandTotal();
                    }
                });
                $('#add-item').modal('hide');

            });

            $('.total_amt').hover(function () {
                $(this).css('cursor', 'pointer');
                // $('.tooltip').show();
            }, function () {
                $(this).css('cursor', 'auto');
            });

            $('.delete').on('click', function () {
                var id = $(this).closest('.main').find('.hidden_cart_id').val();
                var ajaxRoute = '{{route('delete-item-cart')}}';
                $.ajax({
                    url: ajaxRoute,
                    method: 'DELETE',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        $('#pre-items-' + data.item.item_id).remove();
                    }


                });
            });

            $('#myBag').on('click','.update', function () {
                var item_id = $(this).closest('.main').find('.hidden_item_id').val();
                var ajaxRoute = '{{route('add-item-cart')}}';
                console.log(item_id);
                $.ajax({
                    url: ajaxRoute,
                    method: 'POST',
                    data: {
                        id: item_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'JSON',
                    success: function (item) {
                        $('#add-item').modal();
                        $('#modal_service_type').html(item.service_type);
                        $('#modal_quantity_field').val(item.quantity);
                        $('#modal_title').html(item.item_details.items);
                        $('#modal_amount').html(item.item_details.amount);
                        $('#modal_hidden_id').val(item.item_details.id);
                    }

                });
            });

            $('.checkout').on('click', function () {

                $('#checkout').modal();
            })

        });
    </script>
@endsection
