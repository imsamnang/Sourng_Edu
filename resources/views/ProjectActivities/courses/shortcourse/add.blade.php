<?php  $flag = app()->getLocale();?>
@extends('Projectactivities.layout.master')

@push('custom-css')
  <!-- page specific plugin styles -->
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
  <script type="text/javascript">
    function onCourseCodeChange(e) {
      var selectedText = e.options[e.selectedIndex].text;
      selectedText=selectedText.replace(/\(\s+[0-9]+\s+\)/g, "");
      document.getElementById("txt_course_name").value = selectedText;    
    }
  </script>
@endpush
@section('menu-panel')
@include('Projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

<div class="container wrapper">
  <div class="card table-bordered" style="margin-top: 25px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 10px; padding-top: 5px; border-color: #79b0ce;">
    <h4 style=" margin-top: -25px; color: white; font-family: 'Khmer OS Battambang'; font-size:24px; background-color: #438eb9; padding: 10px;">{{ __('shortcoure_Register-Short-Course') }}</h4>     
    <div class="card-body">
      <form  action="{{ route('shortcourse.savedata') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
        <div class="row">
          {{-- Course Code --}}
          <div class="col-md-6">
            <div class="form-group">
              <label for="reg_no">{{ __('shortcoure_Course-Code') }}</label>
              <select style="width: 100%" name="cbo_course_cod" required="" onChange="onCourseCodeChange(this);">
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
          {{-- Course Name --}}
          <div class="col-md-6">
              <div class="form-group">
                <label for="course_name">{{ __('shortcoure_Course_Name') }}</label>
                <input type="text" name="txt_course_name" id="txt_course_name" class="form-control input-sm" required="" style="width: 100%">
              </div> 
            </div>          
          {{-- Curriculum Author --}}
          <div class="col-md-6">
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_Curriculum_Author') }}</label>
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
          {{-- Curriculum Endorsement --}}
          <div class="col-md-6">
              <div class="form-group">
                  <label for="curriculum">{{ __('shortcoure_Curriculum_Endorsement') }}</label>
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
          {{-- Overal Fund --}}
          <div class="col-md-6">
              <div class="form-group">
                <label for="overal_fund">{{ __('shortcoure_Overal-Fund') }}</label>
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
          {{-- Modality --}}
          <div class="col-md-4">
              <div class="form-group">
                <label for="curriculum-author">{{ __('shortcoure_Modality') }}</label>
                <select style="width: 100%" required="" name="cbo_modality">
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
          {{-- Total Training Hours --}}
          <div class="col-md-2">
              <div class="form-group">
                <label for="houre">{{ __('shortcoure_Total_Training_Houre') }}</label>
                <input type="text" maxlength="4" name="txt_training_hour" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control input-sm" required="" style="width: 100%">
              </div>
          </div>
          <hr>

         {{-- shortcourse teacher --}}
          <div class="field_wrapper">
              <div class="form-group control-group after-add-more">
                <label for="teacher_name" class="col-sm-2 control-label">{{__('shortcoure_Teacher_Name') }}</label>
                <div class="col-md-5">
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
                <label for="teaching_houre" class="col-sm-1 control-label">{{__('shortcoure_teacher_hours') }}</label>
                <div class="col-md-3">
                  <input type="text" maxlength="4" name="txt_teacher_hour[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control col-md-10" style="width: 100%">
                </div>
                <div class="col-md-1">
                  <a href="javascript:void(0);" class="btn btn-success btn-xs add_button" title="Add field">Add</a>
                </div>
              </div>
          </div>
     
        </div>
        {{-- End Row --}}
        <div class="clearfix"></div>
        <br>
        {{-- Location Training --}}        
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                  <h4 style="color: black; font-family: Khmer OS Battambang; background-color:white; padding: 10px;">{{ __('shortcoure_TrainingLocation_Detail') }}</h4>
              </div>            
            </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="teacher_name">{{ __('shortcoure_Village') }}</label>
              <input type="text" name="txt_tr_village" class="form-control input-sm" required="" style="width: 100%">
            </div>            
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_Province') }}</label>
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
          <div class="col-md-4">
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_District') }}</label>
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
          <div class="col-md-4">
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_Commune') }}</label>
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
          {{-- Start and End date --}}
          <div class="col-md-6">
              <div class="form-group">
                  <label for="teacher_name">{{ __('shortcoure_Start-Date') }}</label>
                  <input type="date" name="txt_start_date" class="form-control input-sm" required="" style="width: 100%">
                </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="teacher_name">{{ __('shortcoure_EndDate') }}</label>
                <input type="date" name="txt_end_date" required="" class="form-control input-sm" style="width: 100%">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <a href="{{ route('projects.shortcourse') }}" class="btn btn-info btn-sm" style="float: right; margin-left: 5px;">{{ __('shortcoure_Back') }}</a>
            <button type="submit" class="btn btn-primary btn-sm" style="float: right;">{{ __('shortcoure_Save') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div> 
</div>
<div style="margin-top:20px;"></div>
  <div class="field_wrapper_copy hide">
      <div class="clearfix"></div>
      <div class="form-group control-group">
        <label for="teacher_name" class="col-sm-2 control-label">{{__('shortcoure_Teacher_Name') }}</label>
        <div class="col-md-5">
          <select name="staff_id[]" id="staff_id" class="form-control select2copy" required="required">
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
        <label for="teaching_houre" class="col-sm-1 control-label">{{__('shortcoure_teacher_hours') }}</label>
        <div class="col-md-3">
          <input type="text" maxlength="4" name="txt_teacher_hour[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control col-md-10" style="width: 100%">
        </div>
        <div class="col-md-1">
          <a href="javascript:void(0);" class="btn btn-danger btn-xs Delbutton" title="Add field">Del</a>
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
  <script src="{{ asset('assets/js/select2.min.js') }}"></script>
  @include('includes.scripts.inputMask_script')
  @include('includes.scripts.datepicker_script')
  @include('ProjectActivities.includes.provinces')

<script type="text/javascript">
  $('.select2').css('width','100%').select2({allowClear:true});
  $(document).ready(function() {
      var maxField = 3; //Input fields increment limitation
      var x = 1; //Initial field counter is 1
    $(".add_button").click(function(){
      if (x < maxField) {
          x++; //Increment field counter
          var html = $(".field_wrapper_copy").html();
          $(".after-add-more").after(html);
          $('.select2copy').removeClass('select2copy').addClass('select2copy2');
      } else {
        alert("Maximium is 3 rows");
      }
    });
    $("body").on("click",".Delbutton",function(){
      $(this).parents(".control-group").remove();
      x--; //Decrement field counter
    });
  });
</script>

@endpush