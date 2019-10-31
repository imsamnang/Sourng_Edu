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
  {{-- @include('ProjectActivities.layout.left.admin') --}}
<div class="container">
  {{-- <form action="" id="start_quiz" name="start_quiz" method="POST"> --}}
    <div class="row">
    <div class="new-start">
        <table class="table">
            <thead>
            <th>Quiz Title</th>
            <th>Show</th>
            <th>Questions</th>
            <th>Total Questions</th>
            <th>Start</th>
            <th></th>
            </thead>
            <tbody>
            @if($subjects)
              @foreach($subjects as $quiz)
                <tr>
                    <td>{{ $quiz->title }}</td>
                    <td>
                      <a href="{{ route('quiz.subject.show',$quiz->slug) }}">View Quiz</a>
                    </td>
                    <td>
                      <a href="{{ route('quiz.question.create',$quiz->slug) }}" class="btn btn-info">Add Questions</a>
                    </td>
                    <td>
                      @if(count($quiz->questions) <= 1) 
                        {{ $quiz->questions->count() }} Question 
                      @else 
                        {{ $quiz->questions->count() }} Questions 
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('quiz.start', $quiz->slug) }}" class="btn btn-success">Start Quiz</a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger" onclick="return deleteObject({{$quiz->id}})">Remove</a>
                      <form id="deleteObject-{{$quiz->id}}" action="{{route('quiz.subject.destroy',$quiz->id) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
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

        <a href="{{ route('quiz.subject.create') }}" class="btn btn-info btn-block">Create a new Quiz</a>
    </div>     
    </div>
  {{-- </form> --}}
</div>
@endsection
  {{-- For Custom JS --}}
@push('custom-js')
  @include('quizs.delete_confirm')  
@endpush