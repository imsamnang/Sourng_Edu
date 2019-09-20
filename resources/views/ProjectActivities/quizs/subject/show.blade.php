@extends('layouts.master')

@section('page-title')
  @if(isset($generalSetting->institute))
    IMS | {{$generalSetting->institute}}
  @else
    IMS Management
  @endif
@endsection

@section('css')
    
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="new-start">
      <h4>Quiz: {{ $quiz->title }}</h4>
      <hr>
      <div class="bottom-10"></div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <th>Questions</th>
          <th>Options</th>
          <th>Correct Answer</th>
          <th>Tools</th>
        </thead>
        <tbody>
          @foreach($quiz->questions as $question)
            <tr>
              <td><a href="{{ route('quiz.question.show', [$quiz->slug, $question->slug]) }}">{{ $question->title }}</a></td>
              <td class="text-center"><strong>{{ count($question->options) }}</strong></td>
              <td>
                @if(count($question->answers) === 0)
                  <a href="{{ route('quiz.question.show',[$quiz->slug, $question->slug]) }}" class="btn btn-primary btn-sm btn-minier">Add Answer</a>
                @else
                  <a href="#" class="btn btn-success btn-sm btn-minier">
                    {{ \App\Models\Quiz\Option::find($question->answers->first()->option_id)->title }}
                  </a>
                @endif
              </td>
              <td>
                <form method="POST" action="{{route('quiz.question.destroy',$question->id)}}" accept-charset="UTF-8" style="display:inline" id="deleteObject-{{$question->id}}">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <a href="#" class="btn btn-danger btn-xs btn-minier	" onclick="deleteObject({{$question->id}})">Remove
                  </a>
                </form>	                        
              </td>	
            </tr>
          @endforeach
        </tbody>
      </table>
			<hr>
      <a href="{{ route('quiz.subject.index') }}" class="btn btn-success btn-sm">Home</a>
      <a href="{{ route('quiz.question.create', $quiz->slug) }}" class="btn btn-info btn-sm">Add Questions</a>
    </div>    
  </div>
</div>
@endsection
  {{-- For Custom JS --}}
@section('js')
  @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endsection