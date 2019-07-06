@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/test/quiz.css') }}" />

@endsection

@section('content')


  <div class="main-content">

    <div class="container">
      <form method="POST" action="{{route('stu.pro.save')}}" accept-charset="UTF-8" class="form-horizontal" id="validation-form" enctype="multipart/form-data">
        {{csrf_field()}}
        <h1 style="text-align: center;">English Test</h1>
<div class="form-group">

        <div class="row"><br><br>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="loader">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar" style="display: none;">
                            <img src="{{ asset('images/reload_emi.gif') }}" style="">
                        </div>
                    </div>

                    <div id="quiz">
                  
                        <div class="question">
                            <h3><span class="label label-warning" id="qid">1</span>
                            <span id="question"> How can you add a single line comment in a JavaScript?</span>
                            </h3>
                        </div>
                        <ul id="altcontainer">
                          <li>
                            <input  type="radio" id="f-option" name="selector" value="1">
                            <label for="f-option" class="element-animation">/*-- comment --*/</label>
                            <div class="check"></div>
                          </li>
                          
                          <li>
                            <input type="radio" id="s-option" name="selector" value="2">
                            <label for="s-option" class="element-animation">comment //</label>
                            <div class="check"><div class="inside"></div></div>
                          </li>
                          
                          <li>
                            <input type="radio" id="t-option" name="selector" value="3">
                            <label for="t-option" class="element-animation">comment [ ]</label>
                            <div class="check"><div class="inside"></div></div>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="text-muted">
                    <span id="answer"></span>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div id="result-of-question" class="pulse animated" style="display: none;">
                    <span id="totalCorrect" class="pull-right"></span>
                    <table class="table table-hover table-responsive" >
                        <thead>
                            <tr>
                                <th>Question No.</th>
                                <th>Our answer</th>
                                <th>Your answer</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody id="quizResult"></tbody>
                    </table>
                </div>
            </div>
        </div>
</div>






</div>
       {{--  <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
                <a class="btn btn-danger" href="{{ url('projects/student-course')}}"> Back</a>


                <button class="btn" type="reset">
                    <i class="icon-undo bigger-110"></i> Reset </button>
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i> Register </button>
            </div>
        </div> --}}
      
</form>

</div>

</div><!-- /.main-content -->
    
@endsection

@section('js')
    @include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
    <script src="{{ asset('assets/test/quiz.js') }}"></script>
    <script type="text/javascript">

        /*Change Field Value on Capital Letter When Keyup*/
        $(function() {
            $('.upper').keyup(function() {
                this.value = this.value.toUpperCase();
            });
        });
        /*end capital function*/

        /*copy permanent address on temporary address*/
        function CopyAddress(f) {
            if(f.permanent_address_copier.checked == true) {
                f.temp_address.value = f.address.value;
                f.temp_state.value = f.state.value;
                f.temp_country.value = f.country.value;
            }
        }

    </script>
    
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.datepicker_script')

    @endsection

