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
              <div class="icon" style="text-align: center;">
                <span style="font-size: 40px;" class="fa fa-graduation-cap"></span>
            </div>
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
              <div class="icon" style="text-align: center;">
                <span style="font-size: 40px;" class="fa fa-book"></span>
              </div>
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
              <div class="icon" style="text-align: center;">
                {{-- <span class="flaticon-earth"></span> --}}
                <span style="font-size: 40px;" class="fa fa-globe"></span>
            </div>
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
                  <img class="img-fluid" style="transition: all .2s ease; vertical-align: middle !important; max-width: 100%;
                  height: 300px !important;" src="{{asset('images/subject/'.$item->image.'')}}" alt="" />
                </div>
                <div class="course_content">
                    @if ($item->subject_fee==0.00)
                        <span class="price">Free</span>
                    @else
                        <span class="price">${{$item->subject_fee}}</span>
                    @endif

                  {{-- <span class="price">$25</span> --}}

                  <span class="tag mb-4 d-inline-block">{{$item->class_type}}</span>
                  <span class="tag mb-4 d-inline-block">{{$item->credit_hour}}h</span>
                  <h4 class="mb-3">
                    <a href="{{ route('front.course.detail',$item->slug) }}">{{$item->title}}</a>
                  </h4>
                  {{-- <p>
                    One make creepeth man bearing their one firmament won't fowl
                     meat over sea
                  </p> --}}
                  @php
                    $staff = App\Models\Staff::where('id', $item->staff_id)->get();                            
                  @endphp

                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="authr_meta">
                        @foreach ($staff as $staff)
                        <img style="width: 32px !important; border-radius: 10%;" src="{{asset('images/staff/'.$staff->staff_image.'')}}" alt="" />
                        
                        <span class="d-inline-block ml-2">                            
                               {{$staff->first_name}}                            
                        </span>
                      </div>
                      @endforeach
                      <div class="mt-lg-0 mt-3">
                        <span class="meta_info mr-4">
                          <a href="#"> <i class="fa fa-user mr-2"></i>25 </a>
                        </span>
                        <span class="meta_info">
                          <a href="#"><i class="fa fa-eye mr-2"></i>{{ $item->view_count }}</a>
                        </span>
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

              @foreach ($data['staff'] as $item)
                  <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                      <div class="thumb d-flex justify-content-sm-center">
                              <img class="img-fluid" style="transition: all .2s ease; vertical-align: middle !important; max-width: 100%;
                              height: 300px !important;" src="{{asset('images/staff/'.$item->staff_image)}}" alt="" />
                      </div>
                      <div class="meta-text text-sm-center">
                      <h4>{{$item->first_name}}<br>{{$item->last_name}}</h4>
                      <p class="designation">{{$item->home_phone}}<br>{{$item->email}}</p>

                      {{-- <div class="mb-4">
                          <p>
                          If you are looking at blank cassettes on the web, you may be
                          very confused at the.
                          </p>
                      </div> --}}

                      <div class="align-items-center justify-content-center d-flex">
                          <a href="http://facebook.com/sourngkhmer"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                          <a href="#"><i class="fab fa-twitter-square"></i></a>
                          <a href="#"><i class="fab fa-linkedin"></i></a>
                          <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                      </div>
                  </div>

              @endforeach

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
                        <i class="fas fa-clock mr-2"></i> 12:00 AM - 12:30 AM
                      </p>
                      <p>
                            {{-- <span class="fab fa-map-marked-alt mr-2"></span> --}}
                       <i class="fas fa-map-marked-alt"></i> Hilton Quebec
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
                <img src="{{asset('front/img/testimonials/t2.jpg')}}" alt="" />
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

