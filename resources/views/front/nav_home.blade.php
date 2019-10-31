    <header class="header_area">
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
                class="fa fa-times"
                id="close_search"
                title="Close Search"
            ></span>
            </form>
        </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}">
                    <img style="height: 64px;" src="{{asset('images/logo/logo.png')}}" alt=""/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div
                class="collapse navbar-collapse offset"
                id="navbarSupportedContent"
                >
                {{-- flag languages --}}
               
<ul class="nav navbar-nav menu_nav ml-auto">
  <li class="nav-item submenu dropdown">
    <a   href="#"
      class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
      aria-haspopup="true" aria-expanded="false" >
      <?php  $flag = app()->getlocale(); ?>
      <img src="{{asset('images/flags/'.$flag.'.png')}}" class="img-flag" alt="" width="32" height="18">
      &nbsp;{{ strtoupper($flag) }}
    </a >
    <ul class="dropdown-menu">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('locale') }}/kh">
          <img src="{{asset('images/flags/kh.png')}}" class="img-flag" alt="" width="32" height="18">
          khmer
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('locale') }}/en">
          <img src="{{asset('images/flags/en.png')}}" class="img-flag" alt="" width="32" height="18">
          english
        </a>
      </li>
    </ul>
  </li>
</ul>
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html"> {{__('front_m_Home')}}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about-us.html">{{__('front_m_About')}}</a>
                    </li>

                    <li class="nav-item submenu dropdown">
                    <a   href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >{{__('front_m_Courses')}}</a >
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
                        >{{__('front_m_Blog')}}</a
                    >
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                        <a class="nav-link" href="blog.html">{{__('front_m_Blog')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="single-blog.html"
                            >Blog Details</a
                        >
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">{{__('front_m_Contact')}}</a>
                    </li>


                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a style="margin-top: 15px;" class="btn btn-primary navbar-btn" href="{{ route('login') }}">{{ __('front_Student_Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a style="margin-top: 15px;" class="btn btn-success navbar-btn" href="{{ route('register') }}">{{ __('front_Guest_Register') }}</a>
                            </li>
                        @endif

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="margin-top: 15px;" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin') }}">
                                    {{ __('Dashboard') }}
                                </a>

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

                    {{-- Search --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link search" id="search">
                            {{-- <i class="ti-search"></i> --}}
                            <i class="fa fa-search"></i>
                        </a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>

    </div>
</header>
