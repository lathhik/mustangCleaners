@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>Edit Item</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0"
                         role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h2 class="text-center">Edit Service</h2>
                                            <form class="" method="post"
                                                  action="{{route('edit-item-action',$item->id)}}">
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
                                                                        value="{{$service->id}}"{{($item->service_type_id == $service->id)?'selected':''}}>{{$service->service_types}}</option>
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
                                                                   class="form-control" value="{{$item->items}}">
                                                            @if($errors->has('item'))
                                                                <p class="text-danger">{{$errors->first('item')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label
                                                                for="example" class="">Amount:</label>
                                                            <input name="amount" id="exampleEmail"
                                                                   placeholder="" type="number" step="any"
                                                                   class="form-control" value="{{$item->amount}}">
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
@endsection
