{{-- @extends('layouts.app')
@section('nav')
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'RPITSSR') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@endsection --}}


@extends('layouts.main')
@section('nav')
    @include('front.nav_home')
@endsection

@section('content')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            សេវាកម្មអប់រំតាមអ៊ិនធរណេតល្អបំផុតនៅលើពិភពលោក។
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            មើលនិងចុះឈ្មោះចូលរៀន
                        </h2>
                        <div>
                        <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                        <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                <h2 class="mb-3">Awesome Feature</h2>
                <p>
                    Replenish man have thing gathering lights yielding shall you
                </p>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                <div class="icon" style="text-align: center;"><span class="flaticon-student"></span></div>
                <div class="desc">
                    <h4 class="mt-3 mb-2" style="text-align: center;">កន្លែងអាហារូបករណ៍</h4>
                    <p>
                    One make creepeth, man bearing theira firmament won't great
                    heaven
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                <div class="icon" style="text-align: center;"><span class="flaticon-book"></span></div>
                <div class="desc">
                    <h4 class="mt-3 mb-2" style="text-align: center;">លក់វគ្គសិក្សាតាមអ៊ីនធឺណិត</h4>
                    <p>
                    One make creepeth, man bearing theira firmament won't great
                    heaven
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                <div class="icon" style="text-align: center;"><span class="flaticon-earth"></span></div>
                <div class="desc">
                    <h4 class="mt-3 mb-2" style="text-align: center;">វិញ្ញាបនប័ត្រជាសកល</h4>
                    <p>
                    One make creepeth, man bearing theira firmament won't great
                    heaven
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                <h2 class="mb-3">Our Popular Courses</h2>

                <p>
                    Replenish man have thing gathering lights yielding shall you
                </p>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- single course -->
            <div class="col-lg-12">
                <div class="owl-carousel active_course">

                    @foreach ($data['subject'] as $item)
                        <div class="single_course">
                            <div class="course_head">
                            <img class="img-fluid" src="{{asset('front/img/courses/c1.jpg')}}" alt="" />
                            </div>
                            <div class="course_content">
                            <span class="price">$25</span>
                            <span class="tag mb-4 d-inline-block">design</span>
                            <h4 class="mb-3">
                                <a href="course-details.html">{{$item->title}}</a>
                            </h4>
                            <p>
                                One make creepeth man bearing their one firmament won't fowl
                                meat over sea
                            </p>
                            <div
                                class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                            >
                                <div class="authr_meta">
                                    <img src="{{asset('front/img/courses/author1.png')}}" alt="" />
                                <span class="d-inline-block ml-2">Cameron</span>
                                </div>
                                <div class="mt-lg-0 mt-3">
                                <span class="meta_info mr-4">
                                    <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                </span>
                                <span class="meta_info"
                                    ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                                >
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row clock_sec clockdiv" id="clockdiv">
                <div class="col-lg-12">
                    <h1 class="mb-3">Register Now</h1>
                    <p>
                    There is a moment in the life of any aspiring astronomer that
                    it is time to buy that first telescope. It’s exciting to think
                    about setting up your own viewing station.
                    </p>
                </div>
                <div class="col clockinner1 clockinner">
                    <h1 class="days">150</h1>
                    <span class="smalltext">Days</span>
                </div>
                <div class="col clockinner clockinner1">
                    <h1 class="hours">23</h1>
                    <span class="smalltext">Hours</span>
                </div>
                <div class="col clockinner clockinner1">
                    <h1 class="minutes">47</h1>
                    <span class="smalltext">Mins</span>
                </div>
                <div class="col clockinner clockinner1">
                    <h1 class="seconds">59</h1>
                    <span class="smalltext">Secs</span>
                </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="register_form">
                <h3>Courses for Free</h3>
                <p>It is high time for learning</p>
                <form
                    class="form_area"
                    id="myForm"
                    action="mail.html"
                    method="post"
                >
                    <div class="row">
                    <div class="col-lg-12 form_group">
                        <input
                        name="name"
                        placeholder="Your Name"
                        required=""
                        type="text"
                        />
                        <input
                        name="name"
                        placeholder="Your Phone Number"
                        required=""
                        type="tel"
                        />
                        <input
                        name="email"
                        placeholder="Your Email Address"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                        required=""
                        type="email"
                        />
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="primary-btn">Submit</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                <h2 class="mb-3">Our Expert Trainers</h2>
                <p>
                    Replenish man have thing gathering lights yielding shall you
                </p>
                </div>
            </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                <img class="img-fluid" src="{{asset('front/img/trainer/t1.jpg')}}" alt="" />
                </div>
                <div class="meta-text text-sm-center">
                <h4>Mated Nithan</h4>
                <p class="designation">Sr. web designer</p>
                <div class="mb-4">
                    <p>
                    If you are looking at blank cassettes on the web, you may be
                    very confused at the.
                    </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="{{asset('front/img/trainer/t2.jpg')}}" alt="" />
                </div>
                <div class="meta-text text-sm-center">
                <h4>David Cameron</h4>
                <p class="designation">Sr. web designer</p>
                <div class="mb-4">
                    <p>
                    If you are looking at blank cassettes on the web, you may be
                    very confused at the.
                    </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="{{asset('front/img/trainer/t3.jpg')}}" alt="" />
                </div>
                <div class="meta-text text-sm-center">
                <h4>Jain Redmel</h4>
                <p class="designation">Sr. Faculty Data Science</p>
                <div class="mb-4">
                    <p>
                    If you are looking at blank cassettes on the web, you may be
                    very confused at the.
                    </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="{{asset('front/img/trainer/t4.jpg')}}" alt="" />
                </div>
                <div class="meta-text text-sm-center">
                <h4>Nathan Macken</h4>
                <p class="designation">Sr. web designer</p>
                <div class="mb-4">
                    <p>
                    If you are looking at blank cassettes on the web, you may be
                    very confused at the.
                    </p>
                </div>
                <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--================ End Trainers Area =================-->

    <!--================ Start Events Area =================-->
    <div class="events_area">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                <h2 class="mb-3 text-white">Upcoming Events</h2>
                <p>
                    Replenish man have thing gathering lights yielding shall you
                </p>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single_event position-relative">
                <div class="event_thumb">
                    <img src="{{asset('front/img/event/e1.jpg')}}" alt="" />
                </div>
                <div class="event_details">
                    <div class="d-flex mb-4">
                    <div class="date"><span>15</span> Jun</div>

                    <div class="time-location">
                        <p>
                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                        </p>
                        <p>
                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                        </p>
                    </div>
                    </div>
                    <p>
                    One make creepeth man for so bearing their firmament won't
                    fowl meat over seas great
                    </p>
                    <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_event position-relative">
                <div class="event_thumb">
                    <img src="{{asset('front/img/event/e2.jpg')}}" alt="" />
                </div>
                <div class="event_details">
                    <div class="d-flex mb-4">
                    <div class="date"><span>15</span> Jun</div>

                    <div class="time-location">
                        <p>
                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                        </p>
                        <p>
                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                        </p>
                    </div>
                    </div>
                    <p>
                    One make creepeth man for so bearing their firmament won't
                    fowl meat over seas great
                    </p>
                    <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="text-center pt-lg-5 pt-3">
                <a href="#" class="event-link">
                    View All Event <img src="{{asset('front/img/next.png')}}" alt="" />
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--================ End Events Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                <h2 class="mb-3">Client say about me</h2>
                <p>
                    Replenish man have thing gathering lights yielding shall you
                </p>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="testi_slider owl-carousel">
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t1.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Elite Martin</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t2.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Davil Saden</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t1.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Elite Martin</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t2.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Davil Saden</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t1.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Elite Martin</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="testi_item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <img src="img/testimonials/t2.jpg" alt="" />
                    </div>
                    <div class="col-lg-8">
                    <div class="testi_text">
                        <h4>Davil Saden</h4>
                        <p>
                        Him, made can't called over won't there on divide there
                        male fish beast own his day third seed sixth seas unto.
                        Saw from
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

@endsection

