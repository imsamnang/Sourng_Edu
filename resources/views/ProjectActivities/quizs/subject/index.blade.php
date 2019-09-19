@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}

@section('css')
    <!-- page specific plugin styles -->
@endsection

{{-- @section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection --}}

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        <div class="row">
          <div class="new-start">
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                  <thead>
                  <th>No.</th>
                  <th>Quiz Title</th>
                  <th>Show</th>
                  <th>Questions</th>
                  <th>Total Questions</th>
                  <th>Operation</th>
                  </thead>
                  <tbody>
                  @if($allQuiz)
                    @foreach($allQuiz as $quiz)
                      <tr>
                          <td>{{$quiz->id}}</td>
                          <td>{{ $quiz->title }}</td>
                          <td>
                            <a href="{{ route('quiz.subject.show',$quiz->slug) }}" class="btn btn-success btn-xs">View Quiz</a>
                          </td>
                          <td>
                            <a href="{{ route('quiz.question.create',$quiz->slug) }}" class="btn btn-info btn-xs">Add Questions</a>
                          </td>
                          <td>
                            @if(count($quiz->questions) <= 1) 
                              {{ $quiz->questions->count() }} Question 
                            @else 
                              {{ $quiz->questions->count() }} Questions 
                            @endif
                          </td>
                          <td>
                            <form method="POST" action="{{route('quiz.subject.destroy',$quiz->id)}}" accept-charset="UTF-8" style="display:inline" id="deleteObject-{{$quiz->id}}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <a href="#" class="btn btn-danger btn-xs" onclick="deleteObject({{$quiz->id}})">Remove
                              </a>
                            </form>                            
                          </td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="3">You have no available quizzes.</td>
                    </tr>
                  @endif
                  </tbody>
              </table>
              <a href="{{ route('quiz.subject.create') }}" class="btn btn-info btn-block"><span class="text-danger"><strong>Create a new Quiz</strong></span></a>
          </div>
        </div><!-- /.row -->
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection


@section('js')
  @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endsection