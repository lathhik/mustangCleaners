@extends('backend.master')
@section('title','EditAdmin')

@section('content')
    @php
        $privilege = ['SA'=>'Super Admin', 'PA'=>'Pickup Admin', 'LA'=>'Laundry Admin'];
    @endphp

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="{{route('add-admin')}}">
                            <span>Add admin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="{{route('view-admin')}}">
                            <span>View Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="inner-bar-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link open-right-drawer">
                            <span class="hide-text-md">Show right drawer</span>
                            <i class="fa fa-align-right ml-2"></i>
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
                                        <h2 class=" text-center">Edit Admin Form</h2>
                                        <hr>
                                        @include('messages.succFail')
                                        <form id="" class="col-md-12" method="post"
                                              action="{{route('edit-admin-action', $admin->id)}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="firstname">First name</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="first_name"
                                                                   name="first_name"
                                                                   value="{{$admin->first_name}}"/>
                                                            @if($errors->has('first_name'))
                                                                <p class="text-danger">{{$errors->first('first_name')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="lastname">Last name</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="last_name"
                                                                   name="last_name"
                                                                   value="{{$admin->last_name}}"/>
                                                            @if($errors->has('last_name'))
                                                                <p class="text-danger">{{$errors->first('last_name')}}</p>
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
                                                                   value="{{$admin->address}}"/>
                                                            @if($errors->has('address'))
                                                                <p class="text-danger">{{$errors->first('address')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="firstname">Contact</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="contact"
                                                                   name="contact" value="{{$admin->contact}}"/>
                                                            @if($errors->has('contact'))
                                                                <p class="text-danger">{{$errors->first('contact')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="firstname">Privilege</label>
                                                        <div>
                                                            <select class="form-control" name="privilege">
                                                                @foreach($privilege as $key => $value )
                                                                    <option
                                                                        value="{{$key}}" {{($admin->privilege == $key)?'selected':''}} >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('privilege'))
                                                                <p class="text-danger">{{$errors->first('privilege')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <div>
                                                            <input type="file" class="" id="image"
                                                                   name="image" placeholder=""/>
                                                            @if($errors->has('image'))
                                                                <p class="text-danger">{{$errors->first('image')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Gender</label>
                                                        <div>
                                                            <input type="radio" name="gender" id="male"
                                                                   value="male" {{$admin->gender == 'male'?'checked':''}}>&nbsp<label
                                                                for="male"> Male</label> &nbsp;
                                                            <input type="radio" name="gender" id="female"
                                                                   value="female" {{$admin->gender == 'female'?'checked':''}}>&nbsp<label
                                                                for="female">
                                                                Female</label>&nbsp;
                                                            <input type="radio" name="gender" id="other"
                                                                   value="other" {{$admin->gender == 'other'?'checked':''}}>&nbsp<label
                                                                for="other"> Other</label>
                                                            @if($errors->has('gender'))
                                                                <p class="text-danger">{{$errors->first('gender')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-outline-primary col-2 offset-lg-5"
                                                        name="register"
                                                        value="">Register
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
