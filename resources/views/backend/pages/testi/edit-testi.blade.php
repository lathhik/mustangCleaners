@extends('backend.master')
@section('title','EditAdmin')

@section('content')
    @php
        $priority = [1=>'High',0=>'Low'];
    @endphp
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="{{route('add-admin')}}">
                            <span>Edit Testimonial</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h2 class=" text-center">Edit Testimonial Form</h2>
                                        <hr>
                                        @include('messages.succFail')
                                        <form id="add-testi-form" class="col-md-12" method="post"
                                              action="{{route('edit-testi-action',$testimonial->id)}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="first_name">Full Name</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="first_name"
                                                                   name="full_name" value="{{$testimonial->full_name}}"
                                                                   placeholder="Full name"/>
                                                            @if($errors->has('full_name'))
                                                                <p class="text-danger">{{$errors->first('full_name')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="username">Email</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="email"
                                                                   name="email" placeholder="example@gmail.com"
                                                                   value="{{$testimonial->email}}"/>
                                                            @if($errors->has('email'))
                                                                <p class="text-danger">{{$errors->first('email')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirm_password">Address</label>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                   id="address" name="address"
                                                                   placeholder="Address"
                                                                   value="{{$testimonial->address}}"/>
                                                            @if($errors->has('address'))
                                                                <p class="text-danger">{{$errors->first('address')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirm_password">Occupation</label>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                   id="address" name="occupation"
                                                                   placeholder="Occupation"
                                                                   value="{{$testimonial->occupation}}"/>
                                                            @if($errors->has('occupation'))
                                                                <p class="text-danger">{{$errors->first('occupation')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="from-group">
                                                        <label for="">Priority</label>
                                                        <select class="form-control" name="priority" id="">
                                                            @foreach($priority as $key => $value)
                                                                <option
                                                                    value="{{$key}}" {{($testimonial->priority == $key)?'selected':''}} >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('priority'))
                                                            <p class="text-danger">{{$errors->first('priority')}}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" class="form-control-file"
                                                               style="border: 1px solid #ced4da;margin-top:1px;padding: 5px;border-radius: 3px"
                                                               id="image" name="image">
                                                        @if($errors->has('priority'))
                                                            <p class="text-danger">{{$errors->first('priority')}}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="testi">Testimonial</label>
                                                        <div>
                                                        <textarea name="testimonial" id="" cols="111"
                                                                  rows="10">{{$testimonial->testimonials}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit"
                                                        class="btn btn-outline-primary col-2 offset-lg-5"
                                                        name="register"
                                                        value="">Submit
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
@section('script')
    <script>
        CKEDITOR.replace('testimonial')
    </script>
@stop

