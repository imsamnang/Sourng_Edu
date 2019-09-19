{{-- @extends('ProjectActivities.layout.master') --}}
@extends('user-student.layouts.master')

@push('custom-css')
  <style>
    .table-striped>tbody>tr:nth-of-type(odd){
      background-color: #f9f9f9;
    }
    .test-option-false {
      background-color: red !important;
      color: white;
    }
    .test-option-true {
        background-color: green !important;
        color: white;
    }    
  </style>
@endpush

@section('menu-panel')
  @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
<div class="container">
  <h3 class="page-title">My Quiz Reault</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      View Quiz Result
    </div>
    <div class="panel-body">
      <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered">
                  <tr>
                      <th>Date</th>
                      <td>{{ $test->created_at }}</td>
                  </tr>
                  <tr>
                      <th>Score</th>
                      <td>{{ $test->marks_scored }}/{{$results->count()}}</td>
                  </tr>
              </table>
          <?php $i = 1 ?>
          @foreach($results as $result)
              <table class="table table-bordered">
                  <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                      <th style="width: 10%">Question #{{ $i }}</th>
                      <th>{{ $result->question->title }}</th>
                  </tr>
                  <tr>
                      <td>Options</td>
                      <td>
                          <ul>
                          @foreach($result->question->options as $option)
                              <li style="@if ($option->id == $result->answer->option_id) font-weight: bold; @endif
                                  @if ($result->user_answer_id==$option->id) text-decoration: underline @endif">
                                  {{ $option->title }}
                                    @if ($option->id == $result->answer->option_id)
                                      <em>(correct answer)</em>
                                    @endif                                    
                                    @if ($option->id==$result->user_answer_id)
                                      <em>(your answer)</em>
                                    @endif
                              </li>
                          @endforeach
                          </ul>
                      </td>
                  </tr>
              </table>
          <?php $i++ ?>
          @endforeach
          </div>
      </div>
      <p>&nbsp;</p>
      <a href="{{ route('user-student') }}" class="btn btn-default">Take another quiz</a>
      <a href="{{ route('quiz.allresult',1) }}" class="btn btn-default">See all my results</a>
    </div>
  </div>
</div>
@endsection

@push('custom-js')
{{--   @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm') --}}
@endpush