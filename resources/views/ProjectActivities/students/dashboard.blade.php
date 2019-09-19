{{-- @extends('ProjectActivities.layout.master') --}}
@extends('user-student.layouts.master')

@section('css')
  <link href="{{ asset('css/quiz_result.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">  
@endsection

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="container">
    <div class="quiz-main-block">
      {{-- pretest --}}
      <h1 class="text-center text-primary">Pretest Result</h1>
      <div class="row">
        @if ($userQuizs_Pretest->count()>0)
          @foreach ($userQuizs_Pretest as $subject)
            <div class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">{{$subject->subject->title}} Quiz</span>
                    <div class="row">
                      <div class="col-xs-7 pad-0">
                        <ul class="topic-detail">
                          <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                        </ul>
                      </div>
                      <div class="col-xs-5">
                        <ul class="topic-detail right">
                          <li>{{$subject->subject->per_q_mark}}</li>
                          <li>
                            @php
                              $qu_count = $subject->subject->questions->count();
                            @endphp
                            {{$subject->subject->per_q_mark*$qu_count}}
                          </li>
                          <li>
                            {{$qu_count}}
                          </li>
                          <li>
                            {{$subject->subject->question_duration}} seconds
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <center>
                      <a href="{{ route('quiz.single.result',$subject->subject->id) }}" class="btn btn-success btn-block" title="Start Quiz">Show Result</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card-action">
                  <center>
                    <h2>No, Result Found.</h2>
                    <a href="{{ route('front') }}" class="btn btn-warning btn-block" title="Show All Quiz Results">Go to Main Quiz</a>
                  </center>
                </div>
            </div>
          </div>
        @endif 
      </div>
      @if ($userQuizs_Pretest->count()>0)
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="card-action">
                <center>
                  <a href="{{ route('quiz.allresult',$subject->test_type_id) }}" class="btn btn-warning btn-block" title="Show All Quiz Results">Show All Results</a>
                </center>
              </div>
          </div>
        </div>
      @endif
      {{-- posttest --}}
      <h1 class="text-center text-info">Posttest Result</h1>
      <div class="row">
        @if ($userQuizs_Posttest->count()>0)
          @foreach ($userQuizs_Posttest as $subject)
            <div class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">{{$subject->subject->title}} Quiz</span>
                    <div class="row">
                      <div class="col-xs-7 pad-0">
                        <ul class="topic-detail">
                          <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                        </ul>
                      </div>
                      <div class="col-xs-5">
                        <ul class="topic-detail right">
                          <li>{{$subject->subject->per_q_mark}}</li>
                          <li>
                            @php
                              $qu_count = $subject->subject->questions->count();
                            @endphp
                            {{$subject->subject->per_q_mark*$qu_count}}
                          </li>
                          <li>
                            {{$qu_count}}
                          </li>
                          <li>
                            {{$subject->subject->question_duration}} seconds
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <center>
                      <a href="{{ route('quiz.single.result',$subject->subject->id) }}" class="btn btn-success btn-block" title="Start Quiz">Show Result</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card-action">
                  <center>
                    <h2>No, Result Found.</h2>
                    <a href="{{ route('front') }}" class="btn btn-warning btn-block" title="Show All Quiz Results">Go to Main Quiz</a>
                  </center>
                </div>
            </div>
          </div>
        @endif 
      </div>
      @if ($userQuizs_Posttest->count()>0)
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="card-action">
                <center>
                  <a href="{{ route('quiz.allresult',$subject->test_type_id) }}" class="btn btn-warning btn-block" title="Show All Quiz Results">Show All Results</a>
                </center>
              </div>
          </div>
        </div>
      @endif      
    </div>
  </div>
@endsection

@section('js')
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <!-- inline scripts related to this page -->
  <script type="text/javascript">

  </script>
  {{-- @include('includes.dataTable_scripts') --}}
  @include('ProjectActivities.quizs.delete_confirm')
@endsection