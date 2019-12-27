@extends('backend.master')
@section('content')
    @php
        $location = ['HI'=>'Home Image','AI'=>'About Image','CI'=>'Contact Image'];
    $priority = [1=>'High',0=>'Low'];
    @endphp
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Images</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link " href="#tab-content-1">
                            <span>Add Image</span>
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
                                                    <th>Image</th>
                                                    <th>Location</th>
                                                    <th>Priority</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($images as $image)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>
                                                            <img
                                                                src="{{asset('custom/backend/images/front_image/'.$image->images)}}"
                                                                alt="img" height="50" width="100">
                                                        </td>
                                                        <td>
                                                            @foreach($location as $key => $value)
                                                                @if($image->location == $key)
                                                                    {{$value}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <a href="{{route('update-image-priority',$image->id)}}"
                                                               class="btn btn-sm {{($image->priority == 1)?'btn-danger':'btn-secondary'}}">{{($image->priority == 1)?'High':'Low'}}</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('edit-image',$image->id)}}"
                                                               class="btn btn-sm btn-success">
                                                                <li class="fa fa-edit"></li>
                                                            </a>
                                                            &nbsp
                                                            <a href="{{route('delete-image',$image->id)}}"
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
                                            <h2 class="text-center">Add Image</h2>
                                            <form class="" method="post" action="{{route('add-image')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="position-relative form-group col-md-12">
                                                    <div class="row">

                                                        <div class="form-group col-md-6">
                                                            <label
                                                                for="location" class="">Location:</label>
                                                            <select name="location" id="location" class="form-control"
                                                                    required>
                                                                <option value="" selected disabled>Select Image
                                                                    Location
                                                                </option>
                                                                @foreach($location as $key => $value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('location'))
                                                                <p class="text-danger">{{$errors->first('location')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label
                                                                for="priority" class="">Priority:</label>
                                                            <select name="priority" id="priority" class="form-control"
                                                                    required>
                                                                <option value="" selected disabled="">Select Priority
                                                                </option>
                                                                @foreach($priority as $key =>$value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('priority'))
                                                                <p class="text-danger">{{$errors->first('priority')}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label
                                                                for="image" class="">Image:</label>
                                                            <input name="image" id="image"
                                                                   placeholder="" type="file"
                                                                   class="form-control-file" required
                                                                   style="border: 1px solid #ced4da;margin-top:1px;padding: 5px;border-radius: 3px">
                                                            @if($errors->has('image'))
                                                                <p class="text-danger">{{$errors->first('image')}}</p>
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
