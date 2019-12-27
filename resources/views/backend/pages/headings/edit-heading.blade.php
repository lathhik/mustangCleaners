@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>Edit Heading</span>
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
                                            <h2 class="text-center">Edit Heading</h2>
                                            <form class="" method="post"
                                                  action="{{route('edit-heading-action',$single_heading->id)}}">
                                                @csrf
                                                <div class="position-relative form-group col-md-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="heading_span">
                                                                Heading
                                                            </label>
                                                            <input type="text" class="form-control" id="heading_span"
                                                                   name="heading_span"
                                                                   value="{{$single_heading->heading_span}}"
                                                                   placeholder="Laundry and Dry" required>
                                                            @if($errors->has('heading_span'))
                                                                <p class="text-danger">{{$errors->first('heading_span')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="heading_h1">
                                                                Heading
                                                            </label>
                                                            <input type="text" class="form-control" id="heading_h1"
                                                                   name="heading_h1"
                                                                   placeholder="Cleaning Service"
                                                                   value="{{$single_heading->heading_h1}}" required>
                                                            @if($errors->has('heading_h1'))
                                                                <p class="text-danger">{{$errors->first('heading_h1')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <a href="{{route('view-heading')}}"
                                                       class="mt-1 btn btn-outline-primary float-left">Cancel
                                                    </a>
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
