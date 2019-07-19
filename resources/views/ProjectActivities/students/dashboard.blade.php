@extends('ProjectActivities.layout.master')

@push('custom-css')
    <!-- page specific plugin styles -->
@endpush

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="container">
    <div class="quiz-main-block">
      <div class="row">
      {{--@if ($allQuiz)
          @foreach ($allQuiz as $subject)
            <div class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">{{$subject->title}} Quiz</span>
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
                      <a href="{{route('quiz.start.quiz',$subject->slug)}}" class="btn btn-primary btn-block" title="Start Quiz">Start Quiz</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif --}}
      </div>
    </div>
  </div>
@endsection

@push('custom-js')
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <!-- inline scripts related to this page -->
  <script type="text/javascript">

  </script>
  {{-- @include('includes.dataTable_scripts') --}}
  @include('ProjectActivities.quizs.delete_confirm')
@endpush