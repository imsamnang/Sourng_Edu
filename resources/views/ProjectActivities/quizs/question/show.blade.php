@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}
@section('page-title')
  @if(isset($generalSetting->institute))
    IMS | {{$generalSetting->institute}}
  @else
    IMS Management
  @endif
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="new-start">
        <h4>Question: {{ $question->title }}</h4>
        <div class="bottom-10"></div>
        @if($question->answerIsSet())
          <table class="table">
            <thead>
              <th>Answer Option</th>
              <th>Correct</th>
            </thead>
            <tbody>
              @foreach($question->options as $option)
                <tr>
                  <td>{{ $option->title }}</td>
                  <td>
                    @if($option->isCorrect())
                      <p class="btn btn-success btn-xs btn-minier">Correct</p>
                    @else
                      <p class="btn btn-danger btn-xs btn-minier">Incorrect</p>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{ route('quiz.subject.show', $quiz->slug) }}" class="btn btn-warning btn-sm">Back to Quiz</a>
        @else
          <p><strong>Please select your answers for this question</strong></p>
          <hr>
          {!! Form::open(['method' => 'post', 'route' => [ 'quiz.answer.store', $question->slug ]]) !!}
            @foreach($question->options as $option)
              <div class="checkbox">
                <label>
                  <input type="checkbox" class="" name="option[]" value="{{ $option->id }}">
                  {{ $option->title }}
                </label>
              </div>
            @endforeach
          <hr>
            {!! Form::submit('Save Changes', ['class' => 'btn btn-info btn-xs']) !!}
          {!! Form::close() !!}
        @endif
      </div>
    </div>
  </div>
@endsection
  {{-- For Custom JS --}}
@section('js')
    
@endsection