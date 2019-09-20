@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}

@section('css')
  <link rel="stylesheet" href="{{asset('assets/quiz/custom.css')}}">
  <style>
    a.btn.btn-success.btn-xs.add_button {
      margin-left: -25px;      
    }
    a.btn.btn-danger.btn-xs.remove_button {
      margin-left: -25px;
    }
  </style>
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
                    {!! Form::label('title', 'Question Title') !!}
                    {!! Form::input('text', 'title', null, ['class' => 'form-control']) !!}
                </div>

                <hr>
                <div class="question-options"></div>


                {{-- Question Options --}}
{{--                 <div class="field_wrapper">
                  <div class="row">
                    <div class="col-md-11">    
                      <div class="form-group">
                        <input type="text" name="options[]" id="options" class="form-control" placeholder="Question Options"/> 
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="btn btn-success btn-xs add_button">Add</div>
                    </div>
                  </div>
                </div> --}}

                {{-- status --}}
                <div class="form-group">
                    {!! Form::label('status', 'Active', ['class'=>'control-label']) !!}
                      {!! Form::checkbox('status') !!}
                      <input type="hidden" name="active" id="active" value="0">                      
                </div>
                <div class="add-question-option btn btn-info btn-xs">Add New Option</div> 
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
    $(document).ready(function () {
        var nextRowID = 0;
        var newName = 1;
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add-question-option'); //Add button selector
        var wrapper = $('.question-options'); //Input field wrapper
        var x = 1; //Initial field counter is 1
        $(addButton).click(function () { //Once add button is clicked
            setTimeout(function () {
             $('.question-options').fadeIn()
            }, 500);
            // console.log('click');
            var id = ++nextRowID;
            var name = ++newName
            var name = ++newName
            var fieldHTML = '<div class="row"> <div class="col-md-12" id="' + id + '"> <div class="form-group form-group-default  "><input type="text" name="options[' + id + '][title]' + name + '" id="name' + id + '"class="form-control" placeholder="Option Title"/> </div> </div> </div>'
            if (x < maxField) { //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); // Add field html
            }
        });
    });
    $('div.alert-success').delay(3000).slideUp(400);
    $(function(){
      $('a#btn-delete').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        var $a = this;
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this category!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#DD6B55',
          confirmButtonText: 'Yes, delete it!',
          closeOnConfirm: false
        },
        function(){
          document.location.href=$($a).attr('href');
        });
      });
    });
  </script>
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

{{--   <script type="text/javascript">
    $(document).ready(function () {
        var maxField = 6; //Input fields increment limitation
        var addButtonK = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML =
          '<div class="clearfix"></div>'+
          '<div class="row">'+
          '<div class="field_wrapper control-group">'+
            '<div class="col-md-11">'+
              '<div class="form-group">'+
              '<input type="text" name="options[]" id="options" class="form-control" placeholder="Question Options"/>'+
              '</div>'+
            '</div>'+
            '<div class="col-md-1">'+
              '<div class="btn btn-danger btn-xs remove_button">Del</div>'
            '</div>'+
            '</div>'+
          '</div>';
        var x = 1; //Initial field counter is 1
        //Once add button is clicked
        $(addButtonK).click(function () {
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
  </script> --}}
@endsection