@extends('ProjectActivities.layout.quiz_layout')

@section('head')
  <link href="{{ asset('css/front.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  <style>
    .container .box {
      position: relative;
      width: 100%;
      height: 270px;
      background: #000;
    }
  </style>
@endsection

@section('top_bar')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="logo-main-block">
      <div class="container">
        {{-- @if ($setting) --}}
          <a href="{{ url('/') }}" title="Laravel Quiz">
            <img src="{{asset('/images/logo/QuizLogo.png')}}" class="img-responsive" alt="Laravel Quiz">
          </a>
        {{-- @endif --}}
      </div>
    </div>
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="navbar-header">
              <!-- Branding Image -->
              {{-- @if($setting) --}}
                <h4 class="heading">Laravel Quiz</h4>
              {{-- @endif --}}
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                &nbsp;
              </ul>
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                  <li><a href="{{ route('login') }}" title="Login">Login</a></li>
                  <li><a href="{{ route('register') }}" title="Register">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      {{-- @if ($auth->role == 'A') --}}
                        <li><a href="{{url(route('quiz.user.result'))}}" title="Dashboard">Dashboard</a></li>
                      {{-- @elseif ($auth->role == 'S') --}}
                        {{-- <li><a href="{{url('/admin/my_reports')}}" title="Dashboard">Dashboard</a></li> --}}
                      {{-- @endif --}}
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
              @endguest
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-1">
        <div class="box">
          <a href="{{ route('pretest') }}">            
            <img src="{{ asset('images/logo/pretest.png') }}" width="100%" height="100%" alt="Pretest">
          </a>
        </div>         
      </div>
      <div class="col-md-4 col-md-offset-1">
        <div class="box">
          <a href="{{ route('posttest') }}">            
            <img src="{{ asset('images/logo/posttest.png') }}" width="100%" height="100%" alt="Pretest">
          </a>
        </div>         
      </div>      
    </div>
    <br />
    <div class="row">
      <h2 class="text-center text-primary" style="font-family: 'Khmer OS Muol Light'">សូមជ្រើសរើសតេស្ត</h2>
    </div>
  </div>
@endsection
