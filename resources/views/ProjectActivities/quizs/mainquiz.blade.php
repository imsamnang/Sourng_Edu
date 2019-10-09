@extends('ProjectActivities.layout.quiz_layout')

@section('head')
  <link href="{{ asset('css/front.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
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
                <h4 class="heading">Pre-Test/Post-Test</h4>
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
                      <li>
                        <a href="{{url(route('quiz.user.result'))}}" title="Dashboard">Dashboard</a>
                      </li>
                      <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <div class="quiz-main-block">
      <div class="row">
        <input type="hidden" name="test_type" value="{{ $test_type }}">
        @if ($allQuiz->count()>0)
          @foreach ($allQuiz as $subject)
            <div class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title" style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px;">{{$subject->title}}</span>
                    <div class="row">
                      <div class="col-xs-6 pad-0">
                        <ul class="topic-detail">
                          <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="topic-detail right">
                          <li>{{$subject->per_q_mark}}</li>
                          <li>
                            @php
                              $qu_count = $subject->questions->count();
                            @endphp
                            {{$subject->per_q_mark*$qu_count}}
                          </li>
                          <li>
                            {{$qu_count}}
                          </li>
                          <li>
                            {{$subject->question_duration}} seconds
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <center>
                      <a href="{{route('quiz.start.quiz',[$subject->slug,$test_type])}}" class="btn btn-primary btn-block" title="Start Quiz">Start Quiz</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <h2 class="lablel label-info">No Result Fount</h2>
        @endif
        @if ($allQuizDone->count()>0)
          @foreach ($allQuizDone as $subject)
            <div class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title" style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px;">{{$subject->title}} Quiz</span>
                    <div class="row">
                      <div class="col-xs-6 pad-0">
                        <ul class="topic-detail">
                          <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="topic-detail right">
                          <li>{{$subject->per_q_mark}}</li>
                          <li>
                            @php
                              $qu_count = $subject->questions->count();
                            @endphp
                            {{$subject->per_q_mark*$qu_count}}
                          </li>
                          <li>
                            {{$qu_count}}
                          </li>
                          <li>
                            {{$subject->question_duration}} seconds
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <center>
                      <a href="{{route('quiz.single.result',$subject->id)}}" class="btn btn-success btn-block" title="Check Result">Quiz Done</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif        
      </div>
    </div>
  </div>
@endsection
