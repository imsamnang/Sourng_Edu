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
                <div class="single_course">
                    <div class="course_head">
                    <img class="img-fluid" src="{{asset('front/img/courses/c1.jpg')}}" alt="" />
                    </div>
                    <div class="course_content">
                    <span class="price">$25</span>
                    <span class="tag mb-4 d-inline-block">design</span>
                    <h4 class="mb-3">
                        <a href="course-details.html">{{$course->title}}</a>
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
              </div>
          </div>
          </div>
      </div>
  </div>
  <!--================ End Popular Courses Area =================-->

@endsection