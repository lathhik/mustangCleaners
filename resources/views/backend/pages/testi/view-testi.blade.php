@extends('backend.master')
@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1" id="add-testi-error">
                            <span>Add Testimonial</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content pt-1">
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade  show active" id="tab-content-0" role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('messages.succFail')
                                    <div class="main-card mb-12 card">
                                        <div class="card-body">
                                            <table data-toggle="table"
                                                   data-sort-name="stargazers_count"
                                                   data-sort-order="desc" class="text-center">
                                                <thead>
                                                <tr>
                                                    <th data-field="name"
                                                        data-sortable="true">
                                                        Full Name
                                                    </th>
                                                    <th data-field="stargazers_count"
                                                        data-sortable="true">
                                                        Email
                                                    </th>
                                                    <th data-field="forks_count"
                                                        data-sortable="true">
                                                        Address
                                                    </th>
                                                    <th>
                                                        Occupation
                                                    </th>
                                                    <th>
                                                        Image
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($testimonials as $testimonial)
                                                    <tr>
                                                        <td>{{$testimonial->full_name}}</td>
                                                        <td>{{$testimonial->email}}</td>
                                                        <td width="15%">{{$testimonial->address}}</td>
                                                        <td width="4%">{{$testimonial->occupation}}</td>
                                                        <td>
                                                            <img
                                                                src="{{asset('custom/backend/images/testimonial/'.$testimonial->image)}}"
                                                                alt="img" height="50" width="50">
                                                        </td>
                                                        <td width="10%">
                                                            <a href="{{route('delete-testimonial',$testimonial->id)}}">
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{route('edit-testimonial',$testimonial->id)}}">
                                                                <button class="btn btn-sm btn-success">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
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
                                            <h2 class=" text-center">Add Testimonials</h2>
                                            <hr>
                                            @include('messages.succFail')
                                            <form id="add-testi-form" class="col-md-12" method="post"
                                                  action="{{route('add-testi-action')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="first_name">Full Name</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="first_name"
                                                                       name="full_name" value="{{old('full_name')}}"
                                                                       placeholder="Full name" required/>
                                                                @if($errors->has('full_name'))
                                                                    <p class="text-danger">{{$errors->first('full_name')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="email"
                                                                       name="email" placeholder="example@gmail.com"
                                                                       value="{{old('email')}}" required/>
                                                                @if($errors->has('email'))
                                                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <div>
                                                                <input type="text" class="form-control"
                                                                       id="address" name="address"
                                                                       placeholder="Address"
                                                                       value="{{old('address')}}" required/>
                                                                @if($errors->has('address'))
                                                                    <p class="text-danger">{{$errors->first('address')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="occupation">Occupation</label>
                                                            <div>
                                                                <input type="text" class="form-control"
                                                                       id="occupation" name="occupation"
                                                                       placeholder="Occupation"
                                                                       value="{{old('occupation')}}" required/>
                                                                @if($errors->has('occupation'))
                                                                    <p class="text-danger">{{$errors->first('occupation')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="from-group">
                                                            <label for="priority">Priority</label>
                                                            <select class="form-control" name="priority" id="priority"
                                                                    required>
                                                                <option value="" selected disabled>Select Priority
                                                                </option>
                                                                <option value="1">High</option>
                                                                <option value="0">Low</option>
                                                            </select>
                                                            @if($errors->has('priority'))
                                                                <p class="text-danger">{{$errors->first('priority')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control-file" id="image"
                                                                   name="image" style="border: 1px solid #ced4da;padding: 5px;border-radius: 3px" required>
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
                                                            <label for="testi">Testimonials</label>
                                                            <div>
                                                            <textarea class="form-control" name="testimonial" id="testi"
                                                                      cols="111"
                                                                      rows="10" required minlength="100" maxlength="350"></textarea>

                                                                @if($errors->has('testimonial'))
                                                                    <p class="text-danger">{{$errors->first('testimonial')}}</p>
                                                                @endif
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
