<?php  $flag = app()->getLocale();?>
@extends('ProjectActivities.layout.master')

@push('custom-css')
<!-- page specific plugin styles -->
<link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
<style>
  a.btn.btn-success.btn-xs.add_button {
    margin-left: -25px;      
  }
  a.btn.btn-danger.btn-xs.remove_button {
    margin-left: -25px;
  }
</style>
@endpush

@section('menu-panel')
@include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <div class="container-fluid wrapper" style="margin-right: 20px; margin-left: 20px;">
    <div class="tabbable"  style="margin-top:20px;">
      <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4" style="background-color:;">
        <li class="active">
          <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">{{ __('shortcoure_Register-Short-Course') }}</a>
        </li>
      </ul>
      <div class="tab-content">
        <form  action="{{ route('shortcourse.savedata') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
          <div class="row">
            {{-- Course Code & Course Name --}}
            <div class="col-md-6" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Course-Code') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_course_code" required="" onChange="onCourseCodeChange(this);">
                    @if ($flag=='kh')
                      <option selected disabled>សូមជ្រើសរើស </option>
                    @endif
                    @if ($flag=='en')
                      <option selected disabled>Please Choose </option>
                    @endif
                    @foreach ($faculty as $row){
                      @if ($flag=='kh')
                        <option value="{{ $row->id }}">{{ $row->faculty_kh}}</option>
                      @else
                        <option value="{{ $row->id }}">{{ $row->faculty_en}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right"> {{ __('shortcoure_Course_Name') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <input type="text" name="txt_course_name" id="txt_course_name" class="form-control input-sm" required="" style="width: 100%">
                </div>
              </div>
            </div>
            {{-- Curriculum Author & Curriculum Endorsement --}}          
            <div class="col-md-6" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Curriculum_Author') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_curr_author" required="">
                    @if ($flag=='kh')
                      <option selected disabled>សូមជ្រើសរើស </option>
                    @else
                      <option selected disabled>Please Choose </option>
                    @endif
                    @foreach ($curriculum_author as $row){
                      @if ($flag=='kh')
                        <option value="{{ $row->id }}">{{ $row->title_kh}}</option>
                      @else
                        <option value="{{ $row->id }}">{{ $row->title_en}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">Curri Endorsement</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_curr_endorsement" required="">
                    @if ($flag=='kh')
                      <option selected disabled>សូមជ្រើសរើស </option>
                    @else
                      <option selected disabled>Please Choose </option>
                    @endif
                    @foreach ($curriculum_End as $row){
                      @if ($flag=='kh')
                        <option value="{{ $row->id }}">{{ $row->title_kh}}</option>
                      @else
                        <option value="{{ $row->id }}">{{ $row->title_en}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            {{-- Overal Fund --}}
            <div class="col-md-4" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4 no-padding-right">{{ __('shortcoure_Overal-Fund') }}</label>
                <div class="col-xs-12 col-sm-8 ">
                  <select style="width: 100%" name="cbo_fund_overall">
                    @if ($flag=='kh')
                    <option selected disabled>សូមជ្រើសរើស </option>
                    @else
                    <option selected disabled>Please Choose </option>
                    @endif
                    @foreach ($overal_fund as $row){
                    @if ($flag=='kh')
                    <option value="{{ $row->id }}">{{ $row->title_kh}}</option>
                    @else
                    <option value="{{ $row->id }}">{{ $row->title_en}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            {{-- Modality --}}
            <div class="col-md-4" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Modality') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_modality">
                    @if ($flag=='kh')
                      <option selected disabled>សូមជ្រើសរើស </option>
                    @else
                      <option selected disabled>Please Choose </option>
                    @endif
                    @foreach ($modality as $row){
                      @if ($flag=='kh')
                        <option value="{{ $row->id }}">{{ $row->modality_kh}}</option>
                      @else
                        <option value="{{ $row->id }}">{{ $row->modality_en}}</option>                                  
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>            
            {{-- training hours --}}
            <div class="col-md-4" style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4 no-padding-right">{{ __('shortcoure_Total_Training_Hour') }}</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" maxlength="4" name="total_training_hour" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control input-sm" required="" style="width: 100%">
                </div>
              </div>
            </div>

            {{-- shortcourse teacher --}}
            <div class="field_wrapper">
              <div class="col-md-6" style="margin-bottom: 15px;">    
                <div class="form-group">
                  <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{__('shortcoure_Teacher_Name') }}</label>
                  <div class="col-xs-12 col-sm-9">
                    <select name="staff_id[]" id="staff_id" class="form-control select2" required="required">
                      @if($flag=='kh')
                      {
                        <option value="0">ជ្រើសខាងក្រោម៖ </option>
                      }
                      @endif
                      @if($flag=='en')
                      {
                        <option value="0">Please Choose</option>
                      }
                      @endif                    
                      @foreach ($staffs as $staff)
                        <?php
                          $gender=$staff->gender;//ucfirst($stu->gender);
                          if($flag=='kh'){
                            $gender=$gender=='1'?'ប':'ស';
                          }else {
                            $gender=$gender=='1'?'M':'F';
                          }                            
                        ?>                     
                        <option value="{{ $staff->id }}">{{ $staff->first_name }} - {{ $staff->last_name }} , {{ $gender }} , {{ Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d') }} , ID:# {{ $staff->id }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5" style="margin-bottom: 15px;">    
                    <div class="form-group">
                      <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{__('shortcoure_teacher_hours') }}</label>
                      <div class="col-xs-12 col-sm-9">
                        <input type="text" maxlength="4" name="txt_teacher_hour[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                    </div>
              </div>
              <div class="col-md-1">
                <a href="javascript:void(0);" class="btn btn-success btn-xs add_button" title="Add field">Add</a>
              </div>
            </div>
            {{-- Tranining Location --}}
            <div class="col-md-12" style="margin-bottom: 20px; margin-top: 20px">
              <div class="form-group">
                <b><label class="control-label col-xs-12 col-sm-3 no-padding-right" style="font-family: Khmer OS Battambang; font-size: 19px; color: orange;">{{ __('shortcoure_TrainingLocation_Detail') }}</label></b>
                {{-- <h4 style="color: black; font-family: Khmer OS Battambang; background-color:white; padding: 10px; background-color: pink;">{{ __('shortcoure_TrainingLocation_Detail') }}</h4> --}}
              </div>
            </div>
            {{-- province district commune --}}
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Province') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_province" id="province">
                    @if($flag=='kh')
                    {
                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                    }
                    @endif
                    @if($flag=='en')
                    {
                    <option value="0">Please Choose</option>
                    }
                    @endif
                    @foreach ($provinces as $row)
                    @if($flag=='kh')
                    {
                    <option value="{{$row->id}}">{{ $row->name_kh }}</option>
                    }
                    @endif
                    @if($flag=='en')
                    {
                    <option value="{{$row->id}}">{{ $row->name_en }}</option>
                    }
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_District') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="district" id="district" required="" disabled>
                    @if($flag=='kh')
                    {
                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                    }
                    @endif
                    @if($flag=='en')
                    {
                    <option value="0">Please Choose</option>
                    }
                    @endif
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Commune') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <select style="width: 100%" name="cbo_commune" id="commune" required="" disabled>
                    @if($flag=='kh')
                    {
                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                    }
                    @endif
                    @if($flag=='en')
                    {
                    <option value="0">Please Choose</option>
                    }
                    @endif
                  </select>
                </div>
              </div>
            </div>
            {{-- village row --}}
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Village') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <input type="text" name="txt_tr_village" class="form-control input-sm" required="" style="width: 100%">
                </div>
              </div>
            </div>
            {{-- Start Date --}}
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_Start-Date') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <input type="date" name="txt_start_date" class="form-control input-sm" required="" style="width: 100%">
                </div>
              </div>
            </div>
            {{-- End Date --}}
            <div class="col-md-6 " style="margin-bottom: 15px;">
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('shortcoure_EndDate') }}</label>
                <div class="col-xs-12 col-sm-9">
                  <input type="date" name="txt_end_date" required="" class="form-control input-sm" style="width: 100%">
                </div>
              </div>
            </div>
          </div>
          {{-- submit button --}}
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <a href="{{ route('projects.shortcourse') }}" class="btn btn-warning btn-sm" style="float: right; margin-left: 5px;">{{ __('shortcoure_Back') }}</a>
              <button type="submit" class="btn btn-success btn-sm" style="float: right;">{{ __('shortcoure_Save') }}</button>
            </div>
          </div>
        </form>           
      </div>
    </div>
  </div>
@endsection
@push('custom-js')
{{-- <script>
  $("#txt_training_hour").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
  $("#txt_teacher_hour_1").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
  $("#txt_teacher_hour_2").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
</script> --}}
@include('includes.scripts.inputMask_script')
@include('includes.scripts.datepicker_script')
@include('ProjectActivities.includes.provinces')
{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
{{-- <script src="{{ asset ('assets/js/jquery-typeahead.js') }}"></script> --}}
<script type="text/javascript">
  function onCourseCodeChange(e) {
    var selectedText = e.options[e.selectedIndex].text;
    selectedText=selectedText.replace(/\(\s+[0-9]+\s+\)/g, "");
    document.getElementById("txt_course_name").value = selectedText;    
  }
</script>
<script type="text/javascript">
  $('.select2').css('width','100%').select2({allowClear:true});
  $(document).ready(function () {
      var maxField = 3; //Input fields increment limitation
      var addButton = $('.add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper
      var fieldHTML =
        '<div class="clearfix"></div>'+
        '<div class="field_wrapper control-group">'+
          '<div class="col-md-6">'+
            '<div class="form-group">'+
              '<label class="control-label col-xs-12 col-sm-3 no-padding-right">{{__('shortcoure_Teacher_Name') }}</label>'+
              '<div class="col-xs-12 col-sm-9">'+
                '<select name="staff_id[]" id="staff_id" class="form-control select2" required="required">'+
                  '@if($flag=="kh"){'+
                    '<option value="0">ជ្រើសខាងក្រោម៖ </option>'+
                  '}'+
                  '@endif'+
                  '@if($flag=="en"){'+
                    '<option value="0">Please Choose</option>'+
                  '}'+
                  '@endif'+
                  '@foreach ($staffs as $staff)'+
                    '@if ($flag=="kh")'+
                      '{{$genter = $staff->gender==1?"ប":"ស"}}'+
                    '@endif'+
                    '@if ($flag=="en")'+
                      '{{$gender = $staff->gender==1?"M":"F"}}'+
                    '@endif'+
                      '{{ $bod = Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d') }}'+
                      '<option value="{{ $staff->id }}">{{ $staff->first_name }} - {{ $staff->last_name }} , {{$gender}} , {{$bod}}, ID:# {{ $staff->id }}</option>'+
                  '@endforeach'+
                '</select>'+
              '</div>'+
            '</div>'+
          '</div>'+  
          '<div class="col-md-5">'+
            '<div class="form-group">'+
              '<label class="control-label col-xs-12 col-sm-3 no-padding-right">{{__('shortcoure_teacher_hours') }}</label>'+
              '<div class="col-xs-12 col-sm-9">'+
                '<input type="text" maxlength="4" name="txt_teacher_hour[]" oninput="this.value = this.value.replace(/[^0-9.]/g, "").replace(/('+ '"\."'+'.*'+')\./g, "$1");" class="form-control col-md-10" required style="width: 100%">'+
              '</div>'+
            '</div>'+
          '</div>'+
          '<div class="col-md-1">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-xs remove_button" title="Delete field">Del</a>'+
          '</div>'+
        '</div>';
      var x = 1; //Initial field counter is 1
      //Once add button is clicked
      $(addButton).click(function () {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapper).append(fieldHTML); //Add field html
          $('.select2').css('width','100%').select2({allowClear:true});
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


@endpush
