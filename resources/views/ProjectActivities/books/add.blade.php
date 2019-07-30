<?php  $flag = app()->getLocale();?>
@extends('ProjectActivities.layout.master')

@push('custom-css')
  <!-- page specific plugin styles -->
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
  <script type="text/javascript">
    function onCourseCodeChange(e) {
      var selectedText = e.options[e.selectedIndex].text;
      selectedText=selectedText.replace(/\(\s+[0-9]+\s+\)/g, "");
      document.getElementById("txt_course_name").value = selectedText;    
    }
  </script>
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
<div class="card table-bordered" style="margin-top: 25px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 10px; padding-top: 5px; border-color: #79b0ce;">
  <h4 style=" margin-top: -25px; color: white; font-family: 'Khmer OS Battambang'; font-size:24px; background-color: #438eb9; padding: 10px;">{{ __('shortcoure_Register-Short-Course') }}</h4>     
  <div class="card-body">
    <form  action="{{ route('shortcourse.savedata') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="reg_no">{{ __('shortcoure_Course-Code') }}</label>
            <select style="width: 100%" name="cbo_course_cod" required="">                         
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

          <div class="form-group">
            <label for="teacher_name2">{{ __('shortcoure_Teacher_Name(2)') }}</label>
            <input type="text" name="txt_teacher_record_2" class="form-control input-sm" style="width: 100%">
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label for="course_name">{{ __('shortcoure_Course_Name') }}</label>
            <input type="text" name="txt_course_name" id="txt_course_name" class="form-control input-sm" required="" style="width: 100%">
          </div>

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

          <div class="form-group">
            <label for="teaching_houre">{{ __('shortcoure_Teaching_Houre(2)') }}</label>
            <input type="text" name="txt_teacher_hour_2" class="form-control input-sm" style="width: 100%">
          </div>
        </div>

        <div class="col-md-3">
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

          <div class="form-group">
            <label for="teacher_name">{{ __('shortcoure_Teacher_Name(1)') }}</label>
            <input type="text" name="txt_teacher_record_1" class="form-control input-sm" style="width: 100%">
          </div>

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

        <div class="col-md-3">
          <div class="form-group">
            <label for="houre">{{ __('shortcoure_Total_Training_Houre') }}</label>
            <input type="text" name="txt_training_hour" class="form-control input-sm" required="" style="width: 100%">
          </div>

          <div class="form-group">
            <label for="teaching_houre">{{ __('shortcoure_Teaching_Houre(1)') }}</label>
            <input type="text" name="txt_teacher_hour_1" class="form-control input-sm" style="width: 100%">
          </div>
        </div>
      </div>
      
      <h4 style="color: white; font-family: Khmer OS Battambang; background-color: #438eb9; padding: 10px;">{{ __('shortcoure_TrainingLocation_Detail') }}</h4>
      <b><hr></b>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="teacher_name">{{ __('shortcoure_Village') }}</label>
            <input type="text" name="txt_tr_village" class="form-control input-sm" required="" style="width: 100%">
          </div>
          <div class="form-group">
            <label for="teacher_name">{{ __('shortcoure_Start-Date') }}</label>
            <input type="date" name="txt_start_date" class="form-control input-sm" required="" style="width: 100%">
          </div>
        </div>
        <div class="col-md-3">
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
          <div class="form-group">
            <label for="teacher_name">{{ __('shortcoure_EndDate') }}</label>
            <input type="date" name="txt_end_date" class="form-control input-sm" style="width: 100%">
          </div>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
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
<div style="margin-top:20px;"></div>
@endsection

@push('custom-js')
  @include('includes.scripts.inputMask_script')
  @include('includes.scripts.datepicker_script')
  <script>
    $(document).ready(function(){
      // distrct get data by provice change
      var flag = $('#flag').val();
      $('#province').change(function(){
        var provinceID = $(this).val();
        if(flag=='kh'){
          var url = "{{url('get-district-list-kh')}}?province_id="+provinceID;
          var appDistrict = '<option value="0" data-value="">ជ្រើសរើស ខ័ណ្ឌ/ស្រុក</option>';
          var appCommune = '<option value="0" data-value="0">ជ្រើសរើស សង្កាត់/ឃុំ</option>';
        }
        if(flag=='en'){
          var url = "{{url('get-district-list')}}?province_id="+provinceID;
          var appDistrict = '<option value="0" data-value="">Select a Khan/District</option>';
          var appCommune = '<option value="0" data-value="0">Select a Sangkat/Commune</option>';
        }
        if(provinceID>=1){
          $.ajax({
           type:"GET",
           url:url,
           success:function(res){               
            if(res){
              // $("#district").removeAttr('disabled');
              $("#district" ).prop( "disabled", false );
              $("#district").empty();
              $("#district").append(appDistrict);
              $.each(res,function(key,value){
                $("#district").append('<option value="'+key+'">'+value+'</option>');
              });           
            }else{
                 $("#district").empty();
                 $("#district" ).prop( "disabled", true );
                 $("#commune" ).prop( "disabled", true );
              }
            }
          });
        } else {
          $("#district").empty();
          $("#commune").empty();
          $("#district").append(appDistrict);
          $("#commune").append(appCommune);
          $("#district" ).prop( "disabled", true );
          $("#commune" ).prop( "disabled", true );
        }      
      });
                
    // commune get data by district change    
    $('#district').on('change',function(){
      var districtID = $(this).val();
      if(flag=='kh'){
        var url = "{{url('get-commune-list-kh')}}?district_id="+districtID;
        var appDistrict = '<option value="0" data-value="">ជ្រើសរើស ខ័ណ្ឌ/ស្រុក</option>';
        var appCommune = '<option value="0" data-value="0">ជ្រើសរើស សង្កាត់/ឃុំ</option>';        
      }      
      if(flag=='en'){
        var url = "{{url('get-commune-list')}}?district_id="+districtID;
        var appDistrict = '<option value="0" data-value="">Select a Khan/District</option>';
        var appCommune = '<option value="0" data-value="0">Select a Sangkat/Commune</option>';
      }
      if(districtID>=1){
        $.ajax({
         type:"GET",
         url:url,
         success:function(res){               
          if(res){
            $("#commune" ).prop( "disabled", false );
            $("#commune").empty();
            $("#commune").append(appCommune);
            
            $.each(res,function(key,value){
              $("#commune").append('<option value="'+key+'">'+value+'</option>');
            });
            
          }else{
           $("#commune").empty();
           $("#commune" ).prop( "disabled", true );
         }
       }
     });
      }else{
        $("#commune").empty();
        $("#commune").append(appCommune);
        $("#commune" ).prop( "disabled", true );
      }        
    });
  });        
  </script>
@endpush

