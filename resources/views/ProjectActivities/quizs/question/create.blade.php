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
          <div class="col-sm-8 col-sm-offset-2">
            <div class="new-start">
              <h4>Quiz: {{ $quiz->title }}</h4>
              <hr>
              {!! Form::open(['method' => 'post', 'route' => ['quiz.question.store', $quiz->slug]]) !!}
              <div class="form-group">
                <label for="title"><strong>Questin Title</strong></label>
                {!! Form::input('text', 'title', null, ['class' => 'form-control']) !!}
              </div>
              <hr>
              {{-- <div class="question-options"></div> --}}

              {{-- Question Options --}}
              <div class="field_wrapper">
                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label for="question_option"><strong>Questin Options</strong></label>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <input type="text" name="options[1][title]1" id="options1" class="form-control" placeholder="Question Options"/> 
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="btn btn-success btn-xs add_button">Add</div>
                  </div>
                </div>
              </div>

              {{-- status --}}
              <div class="form-group">
                <label class="container">Active
                  <input type="checkbox" name="status" id="status" value="0">
                  <span class="checkmark"></span>
                </label>                
                <input type="hidden" name="active" id="active" value="0">
              </div>
              {{--<div class="add-question-option btn btn-info btn-xs">Add New Option</div>  --}}
              <hr>
              <div class="form-group">
                  <a href="{{ route('quiz.subject.show', $quiz->slug) }}" class="btn btn-warning btn-xs">Back to quiz</a>
                  {!! Form::submit('Submit', ['class' => 'btn btn-success btn-xs']) !!}
              </div>
              {!! Form::close() !!}
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection

@section('js')
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <script src="{{asset('assets/quiz/jquery.session.js')}}"></script>
  <script src="{{asset('assets/quiz/custom.js')}}"></script>
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

  <script type="text/javascript">
    $(document).ready(function () {
      setTimeout(function () {
       $('.field_wrapper').fadeIn()
      }, 500);
      var nextRowID = 1;
      var newName = 1;
      var maxField = 15; //Input fields increment limitation
      var addButtonK = $('.add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper
      var x = 1; //Initial field counter is 1
      //Once add button is clicked
      $(addButtonK).click(function () {
        var id = ++nextRowID;
        var name = ++newName
        var fieldHTML =
          '<div class="clearfix"></div>'+
          '<div class="row">'+
          '<div class="field_wrapper control-group">'+
            '<div class="col-md-11">'+
              '<div class="form-group">'+
              '<input type="text" name="options['+id+'][title]'+name+'" id="options'+id+'" class="form-control" placeholder="Question Options"/>'+
              '</div>'+
            '</div>'+
            '<div class="col-md-1">'+
              '<div class="btn btn-danger btn-xs remove_button">Del</div>'
            '</div>'+
            '</div>'+
          '</div>';        
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapper).append(fieldHTML); //Add field html
        } else {
          alert("Maximium is 3 rows");
        }
      });
      //Once remove button is clicked
      // $(wrapper).on('click', '.remove_button', function (e) {
      $("body").on("click",".remove_button",function(e){        
        e.preventDefault();
        $(this).parents('.control-group').remove(); //Remove field html
        x--; //Decrement field counter
      });
    });
  </script>
@endsection