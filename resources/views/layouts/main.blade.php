<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="front/img/favicon.png" type="image/png" />
    {{-- <title>Edustage Education</title> --}}
    <title>{{ config('app.name', 'RPITSSR') }}</title>
    <!-- Bootstrap CSS -->

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link type="text/css" rel="stylesheet" href="{{ mix('css/css/app.css') }}"> --}}

    
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}" /> --}}
    <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/vendors/nice-select/css/nice-select.css')}}" />
    <!-- main css -->

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />

    <link href="https://fonts.googleapis.com/css?family=Battambang|Khmer|Odor+Mean+Chey|Suwannaphum&display=swap" rel="stylesheet">
    
    

</head>

<body>
    <!--================ Start Header Menu Area =================-->
   {{-- @include('front.nav_home') --}}
   @yield('nav')
    <!--================ End Header Menu Area =================-->
    @yield('content')

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4><span class="fa fa-user"></span>Top Products</h4>
                    <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                    <form
                        target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get"
                        class="form-inline"
                    >
                        <input
                        class="form-control"
                        name="EMAIL"
                        placeholder="Your Email Address"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Your Email Address'"
                        required=""
                        type="email"
                        />
                        <button class="click-btn btn btn-default">
                        <span>subscribe</span>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                        <input
                            name="b_36c4fd991d266f23781ded980_aefe40901a"
                            tabindex="-1"
                            value=""
                            type="text"
                        />
                        </div>

                        <div class="info"></div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="ti-heart" aria-hidden="true"></i> by <a href="https://sourngedu.com" target="_blank">SourngEdu</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
                </div>
            </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('front/js/popper.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front/js/mail-script.js')}}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{asset('front/js/gmaps.min.js')}}"></script>
    <script src="{{asset('front/js/theme.js')}}"></script>
</body>
</html>
