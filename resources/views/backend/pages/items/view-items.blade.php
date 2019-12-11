@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Items</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link " href="#tab-content-1">
                            <span>Add Items</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0"
                         role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            @include('messages.succFail')
                                            <table width="935" id="example"
                                                   class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Service Type</th>
                                                    <th>Items</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($items_lists as $item_list)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$item_list->serviceType->service_types}}</td>
                                                        <td>{{$item_list->items}}</td>
                                                        <td>${{$item_list->amount}}</td>
                                                        <td>
                                                            <a href="{{route('edit-item', $item_list->id)}}"
                                                               class="btn btn-sm btn-success">
                                                                <li class="fa fa-edit"></li>
                                                            </a>
                                                            &nbsp
                                                            <a href="{{route('delete-item', $item_list->id)}}"
                                                               class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-1"
                         role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h2 class="text-center">Add Items</h2>
                                            <form class="" method="post" action="{{route('add-item')}}">
                                                @csrf
                                                <div class="position-relative form-group col-md-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label
                                                                for="example" class="">Service Type:</label>
                                                            <select name="service_type" id="" class="form-control">
                                                                <option value="" disabled selected>Select Service Type
                                                                </option>
                                                                @foreach($services as $service )
                                                                    <option
                                                                        value="{{$service->id}}">{{$service->service_types}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('service_type'))
                                                                <p class="text-danger">{{$errors->first('service_type')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label
                                                                for="example" class="">Item:</label>
                                                            <input name="item" id="exampleEmail"
                                                                   placeholder="" type="text"
                                                                   class="form-control">
                                                            @if($errors->has('item'))
                                                                <p class="text-danger">{{$errors->first('item')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label
                                                                for="example" class="">Amount:</label>
                                                            <input name="amount" id="exampleEmail"
                                                                   placeholder="" type="number" step="any"
                                                                   class="form-control">
                                                            @if($errors->has('amount'))
                                                                <p class="text-danger">{{$errors->first('amount')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button class="mt-1 btn btn-outline-primary float-right">Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
