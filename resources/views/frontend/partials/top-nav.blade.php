<!-- header-top-area-start -->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="{{route('index')}}"><img src="{{asset('custom/frontend/assets/img/logo/logo.png')}}"
                                                      alt=""/>
                    </a>
                </div>
            </div>
            <div class="col-md-10 hidden-sm hidden-xs">
                <div class="header-wrapper">
                    @if(!Auth::guard('customer')->user())
                        <div class="get-quote floatright offset-md-2" style="margin-right: 4px">
                            <a href="" data-toggle="modal" data-target="#login">Order Now</a>
                        </div>
                    @else
                        <div class="get-quote floatright offset-md-2" style="margin-right: 4px">
                            <a href="{{route('customer-order')}}">Order Now</a>
                        </div>
                    @endif
                    <div class="header-text floatright hidden-xs hidden-sm">
                        <div class="header-right">
                            <div class="header-right-icons">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="header-right-text">
                                <span class="text">Open Hours :</span>
                                <span class="phone">8.00 - 18.00 Mon-Sat</span>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-right-icons">
                                <span class="icon-phone "></span>
                            </div>
                            <div class="header-right-text">
                                <span class="text">Phone Number :</span>
                                <span class="phone">xxxxxxxxxx</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-top-area-end -->


<!-- Modal -->
<div class="modal fade  " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title text-center" id="exampleModalLongTitle"><b>Login</b></h2>

            </div>
            <div class="modal-body">
                @include('messages.succFail')
                <form action="{{route('customer-login')}}" method="post">
                    @csrf

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="login_email" class="form-control"
                                   placeholder="example@gmail.com">
                            @if($errors->has('login_email'))
                                <p class="text-danger">{{$errors->first('login_email')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="login_password" class="form-control"
                                   placeholder="**********">
                            @if($errors->has('login_password'))
                                <p class="text-danger">{{$errors->first('login_password')}}</p>
                            @endif
                        </div>
                    </div>

                    <div class="text-center form-group">
                        <input type="checkbox" class="" value="1" name="remember_me">
                        Remember Me
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary modal-submit" id="login-submit">Login</button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="mb-0">Don't Have an Account</p>
                    <a class="text-center" href="" id="registerButton" data-toggle="modal" data-target="#register">Register</a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
                <h2 class="modal-title text-center" id="exampleModalLongTitle"><b>Register</b></h2>

            </div>
            <div class="modal-body">
                <form action="{{route('customer-register')}}" method="post" class="mt-4 form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">First Name</label>
                            <input type="text" id="email" class="form-control" name="first_name"
                                   placeholder="First Name"
                                   value="{{old('first_name')}}">
                            @if($errors->has('first_name'))
                                <p class="text-danger">{{$errors->first('first_name')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Last Name</label>
                            <input type="text" id="pass" class="form-control" name="last_name"
                                   placeholder="Last Name" value="{{old('last_name')}}">
                            @if($errors->has('last_name'))
                                <p class="text-danger">{{$errors->first('last_name')}}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Address Line 1</label>
                            <input type="text" id="email" class="form-control" name="address_line_1"
                                   placeholder="456 Main Street SE" value="{{old('address_line_1')}}">
                            @if($errors->has('address_line_1'))
                                <p class="text-danger">{{$errors->first('address_line_1')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Address Line 2</label>
                            <input type="text" id="pass" class="form-control" name="address_line_2"
                                   placeholder="457 Main Street SE" value="{{old('address_line_2')}}">
                            @if($errors->has('address_line_2'))
                                <p class="text-danger">{{$errors->first('address_line_2')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">City</label>
                            <input type="text" id="email" class="form-control" placeholder="New York" name="city"
                                   value="{{old('city')}}">
                            @if($errors->has('city'))
                                <p class="text-danger">{{$errors->first('city')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">State</label>
                            <input type="text" id="pass" class="form-control" placeholder="Marry Land" name="state"
                                   value="{{old('state')}}">
                            @if($errors->has('state'))
                                <p class="text-danger">{{$errors->first('state')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Phone</label>
                            <input type="number" id="email" class="form-control" placeholder="Phone No" name="phone"
                                   value="{{old('phone')}}">
                            @if($errors->has('phone'))
                                <p class="text-danger">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Phone(Optional)</label>
                            <input type="number" id="pass" class="form-control" placeholder="Phone No"
                                   name="phone_optional" value="{{old('phone_optional')}}">
                            @if($errors->has('phone_optional'))
                                <p class="text-danger">{{$errors->first('phone_optional')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="register_email" class="form-control"
                                   placeholder="example@gmail.com" value="{{old('register_email')}}">
                            @if($errors->has('register_email'))
                                <p class="text-danger">{{$errors->first('register_email')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Zip</label>
                            <input type="text" id="pass" name="zip" class="form-control" placeholder="99501"
                                   value="{{old('zip')}}">
                            @if($errors->has('zip'))
                                <p class="text-danger">{{$errors->first('zip')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Password</label>
                            <input type="password" id="email" name="password" class="form-control"
                                   placeholder="**********">
                            @if($errors->has('password'))
                                <p class="text-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="pass">Verify Password</label>
                            <input type="password" id="pass" name="password_confirmation" class="form-control"
                                   placeholder="**********">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary modal-submit">Register</button>
                    </div>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
@section('script')

    <script type="text/javascript">
        $('#registerButton').on('click', function () {
            $('#login').hide();
        });
    </script>

    @if (count($errors) > 0)
        <script type="text/javascript">
            @if($errors->has(['login_email','login_password']))
            $(document).ready(function () {
                $('#login').modal('show');
            });
            @else
            $(document).ready(function () {
                $('#register').modal('show');
            });
            @endif
        </script>
    @endif

    @if(session()->has('fail'))
        <script>
            $(document).ready(function () {
                $('#login').modal('show');
            });
        </script>
    @endif
@stop
