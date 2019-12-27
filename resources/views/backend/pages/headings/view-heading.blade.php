@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Headings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link " href="#tab-content-1">
                            <span>Add Heading</span>
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
                                            <table
                                                class="table table-hover table-striped table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>S.N.</th>
                                                    <th>Heading_span</th>
                                                    <th>Heading_h1</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($headings as $heading)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>
                                                            {{$heading->heading_span}}
                                                        </td>
                                                        <td>
                                                            {{$heading->heading_h1}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('edit-heading',$heading->id)}}"
                                                               class="btn btn-sm btn-success">
                                                                <li class="fa fa-edit"></li>
                                                            </a>
                                                            &nbsp
                                                            <a href="{{route('delete-heading',$heading->id)}}"
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
                                            <h2 class="text-center">Add Heading</h2>
                                            <form class="" method="post" action="{{route('add-heading')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="position-relative form-group col-md-12">
                                                    <div class="row">

                                                        <div class="form-group col-md-6">
                                                            <label for="heading_span">
                                                                Heading
                                                            </label>
                                                            <input type="text" class="form-control" id="heading_span"
                                                                   name="heading_span"
                                                                   placeholder="Laundry and Dry" required>
                                                            @if($errors->has('heading_span'))
                                                                <p class="text-danger">{{$errors->first('heading_span')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="heading_h1">
                                                                Heading
                                                            </label>
                                                            <input type="text" class="form-control" id="heading_h1" name="heading_h1"
                                                                   placeholder="Cleaning Service" required>
                                                            @if($errors->has('heading_h1'))
                                                                <p class="text-danger">{{$errors->first('heading_h1')}}</p>
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
