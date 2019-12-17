<footer class=" ">
    <!-- footer-top-area-start -->
    <div class="footer-top-area pt-100 pb-70 green-bg ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <div class="header-logo">
                            <a href="#"><img src="{{asset('custom/frontend/assets/img/logo/logo.png')}}" alt=""/></a>
                        </div>
                        <div class="text-white">
                            <p>But I must explain to you how at mistakidea of denouncing pleasure and praisi pain was
                                born and I will give you</p>
                        </div>
                        <div class="footer-icon">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 ">
                    <div class="footer-wrapper mb-30">
                        <h4 class="footer-title">Information</h4>
                        <ul class="footer-menu">
                            <li><a href="{{route('about')}}">About Company</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Feature</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Cleaning Tips</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <h4 class="footer-title">Services</h4>
                        <ul class="footer-menu">
                            @foreach($service_types as $service)
                                <li><a href="#">{{$service->service_types}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer-bottom-area-start -->
    <div class="footer-bottom-area ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p>Powered by <a href="#">Diprung Tech.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area-end -->
    <!-- footer-top-area-end -->
</footer>
