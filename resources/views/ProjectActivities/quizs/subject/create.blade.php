@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}

@section('css')
  <link rel="stylesheet" href="{{asset('assets/quiz/custom.css')}}">
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="new-start">
                <h3 class="text-primary"><strong>New Quiz</strong></h3>
                <hr>
                {!! Form::open(['route'=>['quiz.subject.store'],'method'=>'post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::select('name', $quizzes,null, ['class' => 'form-control']) !!}
                    {{--{!! Form::input('text', 'name', null, ['class' => 'form-control']) !!} --}}
                </div>

                <div class="form-group">
                    {!! Form::label('max_attempts', 'Max Attempts') !!}
                    {!! Form::input('number', 'max_attempts', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pass_percentage', 'Pass Percentage') !!}
                    {!! Form::input('text', 'pass_percentage', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('question_duration', 'Question Duration') !!}
                    {!! Form::input('number', 'question_duration', null, ['class' => 'form-control']) !!}
                </div>

                {{-- status --}}
                <div class="form-group">
                  <label class="container">Active
                    <input type="checkbox" name="status" id="status" value="0">
                    <span class="checkmark"></span>
                  </label>                
                  <input type="hidden" name="active" id="active" value="0">
                </div>

                {!! Form::hidden('reference') !!}

                <div class="form-group">
                    {!! Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) !!}
                </div>
                {!! Form::close() !!}
            </div>            
          </div>
        </div><!-- /.row -->
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection

@section('js')
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <!-- inline scripts related to this page -->
  <script type="text/javascript">
    $("#status").click(function () {
      if ($(this).prop("checked")) {
        $("#active").val("1");
      }
      else {
        $("#active").val("0");
      }
    });    
  </script>
@endsection