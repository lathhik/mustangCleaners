@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link " href="#tab-content-1">
                            <span>Add Service</span>
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
                                        <div class="main-card mb-12 card mt-1">
                                            <div class="card-body">
                                                @include('messages.succFail')
                                                <table
                                                       class="table table-hover table-striped table-bordered text-center" data-toggle="table">
                                                    <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Service Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($services as $service)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$service->service_types}}</td>
                                                            <td>
                                                                <a href="{{route('edit-service', $service->id)}}"
                                                                   class="btn btn-sm btn-success">
                                                                    <li class="fa fa-edit"></li>
                                                                </a>
                                                                &nbsp
                                                                <a href="{{route('delete-service', $service->id)}}"
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
                                                <h2 class="text-center">Add Service</h2>
                                                <form class="" method="post" action="{{route('add-service')}}">
                                                    @csrf
                                                    <div class="position-relative form-group col-md-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label
                                                                    for="example" class="">Service Type:</label>
                                                                <input name="service_type" id="exampleEmail"
                                                                       placeholder="" type="text"
                                                                       class="form-control">
                                                                @if($errors->has('service_type'))
                                                                    <p class="text-danger">{{$errors->first('service_type')}}</p>
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
