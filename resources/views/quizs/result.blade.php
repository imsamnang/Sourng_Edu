@extends('Projectactivities.layout.master')
@section('page-title')
  @if(isset($generalSetting->institute))
    IMS | {{$generalSetting->institute}}
  @else
    IMS Management
  @endif
@endsection

@push('custom-css')
    
@endpush

@section('menu-panel')
  @include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="new-start">
        <div class="col-md-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Your Results</h4>
            </div>
            <div class="panel-body">
              <div class="row text-center">
                @if(isset($wrong_answer)) <strong class="text-danger">Wrong Answers : {{ count($wrong_answer) }}</strong> @endif
                |
                @if(isset($correct_answer)) <strong class="text-success">Correct Answers {{ count($correct_answer) }}</strong> @endif
              </div>
              <hr>
              <div class="bottom-body">
                @if(isset($wrong_answer) || isset($correct_answer))
                  @if(isset($correct_answer))
                    @include('quizs.partials.correct_answer')
                    @if(isset($wrong_answer))
                      @include('quizs.partials.wrong_answer')
                    @endif
                  @elseif(isset($wrong_answer))
                    @include('quizs.partials.wrong_answer')
                  @endif
                @else
                  <h4 class="text-center">Please go back to select a <a href="{{ url('/') }}"> quiz </a></h4>
                @endif
              </div>
            </div>
            <div class="panel-footer"  style="background-color: {{ (count($percentage) <= 50)? "green" : "red" }}; color: white">
              Success Percentage: {{ $percentage }}%
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  {{-- For Custom JS --}}
@push('custom-js')
    
@endpush