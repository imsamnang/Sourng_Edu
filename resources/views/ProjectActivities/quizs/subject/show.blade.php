@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}
@section('page-title')
{{--   @if(isset($generalSetting->institute))
    IMS | {{$generalSetting->institute}}
  @else
    IMS Management
  @endif --}}
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
	                        <td>{{ count($question->options) }}</td>
	                        <td>
	                            @if(count($question->answers) === 0)
	                                <a href="{{ route('quiz.question.show',[$quiz->slug, $question->slug]) }}">Add Answer</a>
	                            @else
	                                {{ \App\Models\Quiz\Option::find($question->answers->first()->option_id)->title }}
	                            @endif
	                        </td>
	                        <td>
                            <form method="POST" action="{{route('quiz.question.destroy',$question->id)}}" accept-charset="UTF-8" style="display:inline" id="deleteObject-{{$question->id}}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <a href="#" class="btn btn-danger btn-xs" onclick="deleteObject({{$question->id}})">Remove
                              </a>
                            </form>	                        
                          </td>
{{-- <td><a href="{{route('quiz.question.destroy',$question->slug)}}">Delete Question</a></td> --}}
	                    </tr>
	                @endforeach
	            </tbody>
	        </table>

	        <a href="{{ route('quiz.subject.index') }}" class="btn btn-success btn-sm">Home</a>
	        <a href="{{ route('quiz.question.create', $quiz->slug) }}" class="btn btn-info btn-sm">Add Questions</a>
	    </div>    
    </div>
  {{-- </form> --}}
</div>
@endsection
  {{-- For Custom JS --}}
@section('js')
  @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endsection