@include('frontend.partials.head')
<header>
    @include('frontend.partials.top-nav')
    @include('frontend.partials.nav')
</header>

    @yield('content')

@include('frontend.partials.footer')
@include('frontend.partials.foot')

