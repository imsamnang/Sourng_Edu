@extends('layouts.main')
@section('nav')
  @include('front.nav_page')
<!--================ Start Header Menu Area =================-->
{{-- <header class="header_area white-header">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
            <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
            />
            <button type="submit" class="btn"></button>
            <span
                class="ti-close"
                id="close_search"
                title="Close Search"
            ></span>
            </form>
        </div>
        </div>
    
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
            <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
            class="collapse navbar-collapse offset"
            id="navbarSupportedContent"
            >
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about-us.html">About</a>
                </li>
                <li class="nav-item submenu dropdown active">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                >
                <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="course-details.html"
                        >Course Details</a
                    >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item submenu dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                >
                <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                    >
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
</header> --}}
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
                <a href="#">Courses</a>
                <a href="#">{{$data['subject']->title}}</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
  <!--================ End Home Banner Area =================-->
  
  
  @include('front.includes.course_detail_earea')

@endsection