@extends('backend.master')
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
            </div>
            <div class="inner-bar-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                            <span>Add Order Status</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                            <span>View Order Status</span>
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
                                            <h2 class="text-center">Add Order Status</h2>
                                            <form class="" method="post" action="{{route('add-order-status')}}">
                                                @csrf
                                                <div class="position-relative form-group col-md-6"><label
                                                        for="example" class="">Order Status:</label>
                                                    <input name="order_status" id="exampleEmail"
                                                           placeholder="" type="text"
                                                           class="form-control">
                                                    @if($errors->has('order_status'))
                                                        <p class="text-danger">{{$errors->first('order_status')}}</p>
                                                    @endif
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



@endsection
