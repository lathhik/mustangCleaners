@extends('backend.partials.app')

@section('content')
    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-bar">
            <div class="inner-bar-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link show-menu-btn">
                            <i class="fa fa-align-left mr-2"></i>
                            <span class="hide-text-md">Show page menu</span>
                        </a>
                        <a href="#" class="nav-link close-menu-btn">
                            <i class="fa fa-align-right mr-2"></i>
                            <span class="hide-text-md">Close page menu</span>
                        </a>
                    </li>
                </ul>
            </div>                        <div class="inner-bar-center">
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
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                            <span>Demographics</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           class="nav-link opacity-8">
                            <span>More</span>
                            <i class="fa fa-angle-down ml-1 opacity-6"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                            <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                            <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                            <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <div class="p-3 text-right">
                                <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                            </div>
                        </div>
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
            </div>                    </div>
{{--        <div class="app-inner-layout app-inner-layout-page">--}}
            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content pt-1">
                    <div class="tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Admin Form:</h5>
                                            <form id="signupForm" class="col-md-12" method="post"
                                                  action="#">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="firstname">First name</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="first_name"
                                                               name="first_name" placeholder="First name"/>
                                                    </div>
                                                </div>
                                                </div>
                                                    <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="lastname">Last name</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="last_name"
                                                               name="last_name" placeholder="Last name"/>
                                                    </div>
                                                </div>
                                                </div>

                                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Email</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="email"
                                                               name="email" placeholder="Username"/>
                                                    </div>
                                                </div>
                                                </div>
                                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Password</label>
                                                    <div>
                                                        <input type="password" class="form-control" id="password"
                                                               name="password" placeholder="Email"/>
                                                    </div>
                                                </div>
                                                </div>
                                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="confirm_password">Confirm password</label>
                                                    <div>
                                                        <input type="password" class="form-control"
                                                               id="confirm_password" name="confirm_password"
                                                               placeholder="Confirm password"/>
                                                    </div>
                                                </div>
                                                </div>
                                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="confirm_password">Address</label>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                               id="address" name="address"
                                                               placeholder="address"/>
                                                    </div>
                                                </div>
                                                </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="firstname">Contact</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="contact"
                                                                       name="contact" placeholder="Contact Num"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="firstname">Gender</label>
                                                            <div>
                                                                <input type="radio" name="gender" value="male"> Male &nbsp;
                                                                <input type="radio" name="gender" value="female"> Female &nbsp;
                                                                <input type="radio" name="gender" value="other"> Other
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="firstname">Privilege</label>
                                                            <div>
                                                                <select class="form-control">
                                                                    <option value="volvo">Super Admin</option>
                                                                    <option value="saab">Laundry Admin</option>
                                                                    <option value="mercedes">Pickup Admin</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <input type="file" name="image" accept="image/*">git

                                                <br>


                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-outline-primary col-2 offset-lg-5" name="register"
                                                            value="Sign up">Register
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