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
    @include('front.includes.start_feature')
    <!--================ End Feature Area =================-->

    @include('front.includes.popular_courses')

    <!--================ Start Registration Area =================-->
    @include('front.includes.registration_area')
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
                    <img src="{{asset('front/img/testimonials/t1.jpg')}}" alt="" />
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
                    <img src="{{asset('front/img/testimonials/t2.jpg')}}" alt="" />
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
                    <img src="{{asset('front/img/testimonials/t1.jpg')}}" alt="" />
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
                    <img src="{{asset('front/img/testimonials/t2.jpg')}}" alt="" />
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
                    <img src="{{asset('front/img/testimonials/t1.jpg')}}" alt="" />
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
                    <img src="{{asset('front/img/testimonials/t2.jpg')}}" alt="" />
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
