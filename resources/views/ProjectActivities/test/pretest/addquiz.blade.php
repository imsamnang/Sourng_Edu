@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    @endsection

@section('content')

  <div class="main-content">
    <div class="container">
      <h2>Register New Student</h2>
      <form method="POST" action="{{route('stu.pro.save')}}" accept-charset="UTF-8" class="form-horizontal" id="validation-form" enctype="multipart/form-data">
        {{csrf_field()}}
<div class="tabbable">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
    <li>
      <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">ព័ត៌មានទូទៅសិស្ស​</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="registrationinfo" class="tab-pane active">
      <span class="label label-info arrowed-in arrowed-right arrowed responsive">Red mark input are required</span>
      <hr class="hr-16">
      <div class="form-group">
        <label for="course_title" class="col-sm-2 control-label">Course Title</label>
        <div class="col-sm-2">
          <input  name="course_title" type="text" id="course_title">
        </div>

        <label for="course_sub" class="col-sm-2 control-label">Course Subtitl</label>
        <div class="col-sm-2">
          <input name="course_sub" type="text" id="course_sub" placeholder="">
        </div>

        <label class="col-sm-2 control-label">Author</label>
          <div class="col-sm-2">
              <select class="form-control" required="" name="academic_status">
                <option value="1" selected="selected">Select Author</option>
                <option value="2">Siekheng Han</option>
                <option value="3">Im Samnang</option>
                <option value="4">Seng Sourng</option>
                
              </select>
          </div>
        </label>
      </div>


</div>
        <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
                <a class="btn btn-danger" href="{{ url('projects/student-course')}}"> Back</a>
              
                  <a class="btn btn-primary" href="{{ route('addquest') }}"><i class="ace-icon fa fa-key"></i>
                      <span class="bigger-110">Save</span></a>
                
            </div>
        </div>
      
</form>

</div>

</div><!-- /.main-content -->
    
@endsection

@section('js')
    @include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
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

