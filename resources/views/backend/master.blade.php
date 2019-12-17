<!doctype html>
<html lang="en">
<head>
    @include('backend.partials.head')
</head>
<body>
<div class="app-container app-theme-gray">
    <div class="app-main">
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            @include('backend.partials.side-nav')
            <div class="app-main__inner">
                @include('backend.partials.header')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('backend.partials.foot')
</body>
</html>





