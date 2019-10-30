@extends('layouts.main')
@section('css')
  <style>
    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
    }
    .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>  
@endsection
@section('nav')
  @include('front.nav_page')
    <!--================ End Header Menu Area =================-->
@endsection



@section('content')

  <!--================ Start Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="banner_content text-center">
                <h2>{{__('Front_Course_Details')}}</h2>
                <div class="page_link">
                <a href="{{ url('/') }}">{{__('front_m_Home')}}</a>
                <a href="#">Detail</a>
                <a href="#">{{$data['CourseOutline']->title}}</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
  <!--================ End Home Banner Area =================-->
  
  
  @include('front.includes.course_outline_detail_earea')

@endsection