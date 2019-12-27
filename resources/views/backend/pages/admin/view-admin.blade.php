@extends('backend.master')
@section('content')
    @php
        $privilege = ['SA'=>'Super Admin', 'PA'=>'Pickup Admin', 'LA'=>'Laundry Admin'];
    @endphp
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>View Admin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                            <span>Add admin</span>
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
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Contact</th>
                                                    <th>Status</th>
                                                    <th>Privilege</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($admins as $admin)
                                                    <tr>
                                                        <td>{{$admin->first_name}} {{$admin->last_name}}</td>
                                                        <td>{{$admin->email}}</td>
                                                        <td width="15%">{{$admin->address}}</td>
                                                        <td>{{$admin->contact}}</td>
                                                        <td width="4%">{{$admin->status}}</td>
                                                        <td width="4%">{{$admin->privilege}}</td>
                                                        <td>
                                                            <img
                                                                src="{{asset('custom/backend/images/admins/'.$admin->image)}}"
                                                                alt="img" height="50" width="50">
                                                        </td>
                                                        <td width="10%">
                                                            <a href="{{route('delete-admin',$admin->id)}}">
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{route('edit-admin',$admin->id)}}">
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
                                            <h2 class=" text-center">Add Admin Form</h2>
                                            <hr>
                                            @include('messages.succFail')
                                            <form id="" class="col-md-12" method="post"
                                                  action="{{route('add-admin-action')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">First name</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="first_name"
                                                                       name="first_name" value="{{old('first_name')}}"
                                                                       placeholder="First name"/>
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
                                                                       name="last_name" placeholder="Last name"
                                                                       value="{{old('last_name')}}"/>
                                                                @if($errors->has('last_name'))
                                                                    <p class="text-danger">{{$errors->first('last_name')}}</p>
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
                                                                       value="{{old('email')}}"/>
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
                                                                       placeholder="address"
                                                                       value="{{old('address')}}"/>
                                                                @if($errors->has('address'))
                                                                    <p class="text-danger">{{$errors->first('address')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Password</label>
                                                            <div>
                                                                <input type="password" class="form-control"
                                                                       id="password"
                                                                       name="password" placeholder="Password"/>
                                                                @if($errors->has('password'))
                                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="confirm_password">Confirm password</label>
                                                            <div>
                                                                <input type="password" class="form-control"
                                                                       id="confirm_password"
                                                                       name="password_confirmation"
                                                                       placeholder="Confirm password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">Contact</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="contact"
                                                                       name="contact" placeholder="Phone No."
                                                                       value="{{old('contact')}}"/>
                                                                @if($errors->has('contact'))
                                                                    <p class="text-danger">{{$errors->first('contact')}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">Privilege</label>
                                                            <div>
                                                                <select class="form-control" name="privilege">
                                                                    @foreach($privilege as $key => $value)
                                                                        <option
                                                                            value="{{$key}}"
                                                                            {{old('privilege')==$key?'selected':''}}>{{$value}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @if($errors->has('parivilege'))
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
                                                                       value="male" {{old('gender') =='male'?'checked':''}} >&nbsp<label
                                                                    for="male"> Male</label> &nbsp;
                                                                <input type="radio" name="gender" id="female"
                                                                       value="female" {{old('gender') =='female'?'checked':''}}>&nbsp<label
                                                                    for="female">
                                                                    Female</label>&nbsp;
                                                                <input type="radio" name="gender" id="other"
                                                                       value="other" {{old('gender') =='other'?'checked':''}}>&nbsp<label
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
                                                    <button type="submit"
                                                            class="btn btn-outline-primary col-2 offset-lg-5"
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
