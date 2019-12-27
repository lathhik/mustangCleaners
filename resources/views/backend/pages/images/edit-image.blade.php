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
                            <span>Edit Image</span>
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
                                            <h2 class="text-center">Edit Image</h2>
                                            <form class="" method="post"
                                                  action="{{route('edit-image-action',$single_image->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="position-relative form-group col-md-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="image" class="">Image:</label>
                                                            <input name="image" id="image"
                                                                   placeholder="" type="file"
                                                                   class="form-control-file"
                                                                   style="border: 1px solid #ced4da;margin-top:1px;padding: 5px;border-radius: 3px"
                                                                   value="{{$single_image->images}}">
                                                            @if($errors->has('image'))
                                                                <p class="text-danger">{{$errors->first('image')}}</p>
                                                            @endif
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="location" class="">Location:</label>
                                                            <select name="location" id="location" class="form-control"
                                                                    required>
                                                                <option value="" selected disabled>Select Image
                                                                    Location
                                                                </option>
                                                                @foreach($location as $key => $value)
                                                                    <option
                                                                        value="{{$key}}" {{($single_image->location == $key)?'selected':''}}>{{$value}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('location'))
                                                                <p class="text-danger">{{$errors->first('location')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <a href="{{route('view-image')}}"
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
