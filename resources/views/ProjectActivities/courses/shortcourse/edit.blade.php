<?php  $flag = app()->getLocale();?>
      
@extends('projectactivities.layout.master')

  @push('custom-css')

  @endpush

  @section('menu-panel')
      @include('projectactivities.layout.menu.menu_admin')
  @endsection

  @section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
  <div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
    <b><hr></b>
    <h4 style="color: white; font-family: Arial; background-color: #438eb9; padding: 10px;">{{ __('shortcoure_EditShortCourse') }}</h4>
    <b><hr></b>
    <div class="card-body">
      <form  action="{{ route('update-book.update',$shortcourse->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="reg_no">{{ __('shortcoure_Course-Code') }}</label>                
              <select style="width: 100%" name="cbo_course_cod" required="">                         
                <option value="0">សូមជ្រើសរើស </option>
                @foreach ($faculty as $faculty){
                  @if ($flag=='kh')
                  <option value="{{ $faculty->id }}"
                    {{ $faculty->id==$data['faculty_selected']->id ?'selected':''}}
                    >( {{ $faculty->id}} ) {{ $faculty->faculty_kh}}
                  </option>
                  @else
                  <option value="{{ $faculty->id }}"
                    {{ $faculty->id==$data['faculty_selected']->id ?'selected':''}}
                    >( {{ $faculty->id}} ) {{ $faculty->faculty}}
                  </option>                                  
                  @endif                      
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="curriculum">{{ __('shortcoure_Curriculum_Endorsement') }}</label>
              <select style="width: 100%" name="cbo_curr_endorsement" required="">                    
                @foreach ($curriculum_End as $rows)
                  @if ($flag=='kh')
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->curriculum_endorsement_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_kh}}
                  </option>
                  @else
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->curriculum_endorsement_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_en}}
                  </option>
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
              <input type="text" name="txt_course_name" id="txt_course_name" value="{{ $shortcourse->course_name }}" class="form-control input-sm" required="" style="width: 100%">
            </div>
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_Curriculum_Author') }}</label>
              <select style="width: 100%" name="cbo_curr_author" required="">
                @foreach ($curriculum_author as $rows)
                  @if ($flag=='kh')
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->curriculum_author_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_kh}}
                  </option>
                  @else
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->curriculum_author_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_en}}
                  </option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="teaching_houre">{{ __('shortcoure_Teaching_Houre(2)') }}</label>
              <input type="text" name="txt_teacher_hour_2" class="form-control input-sm" value="{{ $shortcourse->teacher_course_hour }}" style="width: 100%">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="overal_fund">{{ __('shortcoure_Overal-Fund') }}</label>
              <select style="width: 100%" name="cbo_fund_overall">                         
                @foreach ($overal_fund as $rows)
                 @if ($flag=='kh')
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->overal_fund_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_kh}}
                  </option>
                  @else
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->overal_fund_id ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->title_en}}
                  </option>
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
                @foreach ($modality as $rows)
                  {{-- <option value="{{ $rows->id }}">{{ $rows->modality_en }} </option> --}}
                  @if ($flag=='kh')
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->modality ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->modality_kh}}
                  </option>
                  @else
                  <option value="{{ $rows->id }}"
                    {{ $rows->id==$shortcourse->overal_fund ?'selected':''}}
                    >( {{ $rows->id}} ) {{ $rows->modality_en}}
                  </option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="houre">{{ __('shortcoure_Total_Training_Houre') }}</label>
              <input type="text" name="txt_training_hour" class="form-control input-sm" value="{{ $shortcourse->total_training_hour }}" required="" style="width: 100%">
            </div>
            <div class="form-group">
              <label for="teaching_houre">{{ __('shortcoure_Teaching_Houre(1)') }}</label>
              <input type="text" name="txt_teacher_hour_1" class="form-control input-sm" style="width: 100%">
            </div>
          </div>
        </div>
        <b><hr></b>
        <h4 style="color: white; font-family: Arial; background-color: #438eb9; padding: 10px;">{{ __('shortcoure_TrainingLocationDetail') }}</h4>
        <b><hr></b>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="teacher_name">{{ __('shortcoure_Village') }}</label>
              <input type="text" name="txt_tr_village" class="form-control input-sm" value="{{ $shortcourse->village }}" required="" style="width: 100%">
            </div>
            <div class="form-group">
              <label for="teacher_name">{{ __('shortcoure_Start-Date') }}</label>
              <input type="date" name="txt_start_date" class="form-control input-sm" value="{{ $shortcourse->start_date }}" required="" style="width: 100%">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="curriculum-author">{{ __('shortcoure_Province') }}</label>
              <select style="width: 100%" name="cbo_province" id="province">
                @foreach ($provinces as $key => $province)
                  @if ($flag=='kh')
                    @if ($province->id==$shortcourse->_province_id)
                      <option value="{{$province->id}}" selected>{{$province->name_kh}}</option>
                    @else
                      <option value="{{$province->id}}">{{$province->name_kh}}</option>
                    @endif
                  @else
                    @if ($province->id==$shortcourse->id)
                      <option value="{{$province->id}}" selected>{{$province->name_en}}</option>
                    @else
                      <option value="{{$province->id}}">{{$province->name_en}}</option>
                    @endif
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="teacher_name">{{ __('shortcoure_EndDate') }}</label>
              <input type="date" name="txt_end_date" class="form-control input-sm" value="{{ $shortcourse->end_date }}" style="width: 100%">
            </div>
          </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="curriculum-author">{{ __('shortcoure_District') }}</label>
                  <select style="width: 100%" name="district" required="" id="district">
                    @foreach ($districts as $district)
                      @if ($flag=='kh')
                        @if ($district->id==$shortcourse->district_id)
                          <option value="{{$district->id}}" selected>{{$district->name_kh}}</option>
                        @else
                          <option value="{{$district->id}}">{{$district->name_kh}}</option>
                        @endif
                      @else
                        @if ($rows->id==$shortcourse->district_id)
                          <option value="{{$district->id}}" selected>{{$district->name_en}}</option>
                        @else
                          <option value="{{$district->id}}">{{$district->name_en}}</option>
                        @endif
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="curriculum-author">{{ __('shortcoure_Commune') }}</label>
                  <select style="width: 100%" name="cbo_commune" required="" id="commune">
                    @foreach ($communes as $commune) 
                      @if ($flag=='kh')
                        @if ($commune->id==$shortcourse->commune_id)
                          <option value="{{$commune->id}}" selected>{{$commune->name_kh}}</option>
                        @else
                          <option value="{{$commune->id}}">{{$commune->name_kh}}</option>
                        @endif
                      @else
                        @if ($commune->id==$shortcourse->commune_id)
                          <option value="{{$commune->id}}" selected>{{$commune->name_en}}</option>
                        @else
                          <option value="{{$commune->id}}">{{$commune->name_en}}</option>
                        @endif                      
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
        </div>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <a href="{{ route('projects.shortcourse') }}" class="btn btn-info btn-sm" style="float: right; margin-left: 5px;">{{ __('shortcoure_Back') }}</a>
            <button type="submit" class="btn btn-primary btn-sm" style="float: right;">{{ __('shortcoure_Update') }}</button>
          </div>
        </div>

      </form>
    </div>
  </div> 

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

