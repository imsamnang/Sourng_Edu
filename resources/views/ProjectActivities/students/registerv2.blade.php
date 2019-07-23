<?php $Flag=App()->getLocale();?>
@extends('projectactivities.layout.master')

@push('custom-css')
  <style>
      .hidden{
      display: none;
      }
  </style>   
@endpush

@section('menu-panel')
    @include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="container">
      <h2 style="font-family: 'Khmer OS Battambang'; font-size:28px; padding:10px 5px 5px 5px; ">ចុះឈ្មោះសិស្សថ្មី</h2>
      <form method="POST" action="{{route('studentRegister2.save')}}" accept-charset="UTF-8" class="form-horizontal" id="validation-form" enctype="multipart/form-data">
        <input type="hidden" name="flag" value="{{ $Flag }}" id="flag">
          {{csrf_field()}}
        <div class="tabbable">
          <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
            <li class="active">
              <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">ព័ត៌មានទូទៅសិស្ស​</a>
            </li>            
          </ul>
          <div class="tab-content">
            <div id="registrationinfo" class="tab-pane active">
              <span class="label label-info arrowed-in arrowed-right arrowed responsive">Red mark input are required</span>
              <hr class="hr-16">
              {{-- row-1 --}}
              <div class="form-group">
                <label for="reg_no" class="col-sm-2 control-label">{{ __('st-register.Reg.No') }}</label>
                <div class="col-sm-2">
                  <input placeholder="" class="form-control border-form input-mask-registration" required="" name="reg_no" type="text" id="reg_no">
                </div>
                <label for="reg_date" class="col-sm-2 control-label">{{ __('st-register.RegDate') }}</label>
                <div class="col-sm-2">                    
                  <input data-date-format="yyyy-mm-dd" class="form-control date-picker border-form input-mask-date" required="" name="reg_date" type="text" id="reg_date">
                </div>
                <label for="university_reg" class="col-sm-2 control-label">{{ __('st-register.UniversityReg.No') }}</label>
                <div class="col-sm-2">
                  <input placeholder="" class="form-control border-form" name="university_reg" type="text" id="university_reg">
                </div>
              </div>
              {{-- hidden faculty--}}
              <div class="form-group">
                <label class="hidden">
                  <label class="col-sm-2 control-label">Faculty</label>
                  <div class="col-sm-4">
                    <select class="form-control" onchange="loadSemesters(this);" name="faculty">
                      <option value="0">Select Faculty</option>
                      <option value="1">BBA</option>
                      <option value="2">ACC</option>
                      <option value="3">ICT-B1</option>
                      <option value="4">EEE-B1</option>
                      <option value="5">ICT-CUS-B14</option>
                      <option value="6">ICT-CUS-B15</option>
                    </select>
                  </div>
                </label>
                <label class="hidden">
                  <label class="col-sm-1 control-label">Semester</label>
                  <div class="col-sm-2">
                    <select name="semester" class="form-control semester" value="2">
                        <option value="0">Select Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
                </label>
                <label class="hidden">
                  <label class="col-sm-1 control-label">Status</label>
                  <div class="col-sm-2">
                    <select class="form-control" required="" name="academic_status">
                    <option value="0">Select Status</option>
                    <option value="1" selected="selected">New Admission</option>
                    <option value="2">Continue</option>
                    <option value="3">Pass Out</option>
                    <option value="4">Back Continue</option>
                    <option value="5">Drop Out</option>
                    <option value="6">Transfer in</option>
                    <option value="7">Transfer Out</option>
                    </select>
                  </div>
                </label>
              </div>
              {{-- row-2 --}}
              <div class="form-group">
                <label for="first_name" class="col-sm-3 control-label">{{ __('st-register.StudentName') }}</label>
                <div class="col-sm-3">
                    <input class="form-control border-form upper" required="" name="first_name" type="text" id="first_name" placeholder="{{ __('st-register.firstname') }}">
                </div>
                <div class="col-sm-3">
                    <input class="form-control border-form upper" name="middle_name" type="text" placeholder="{{ __('st-register.middlename') }}">
                </div>
                <div class="col-sm-3">
                    <input class="form-control border-form upper" required="" name="last_name" type="text" placeholder="{{ __('st-register.lastname') }}">
                </div>
              </div>
              {{-- row-3 --}}
              <div class="form-group">
                <label for="date_of_birth" class="col-sm-2 control-label">{{ __('staff-register.DateofBirth:') }}</label>
                <div class="col-sm-2">
                    <input data-date-format="yyyy-mm-dd" class="form-control border-form date-picker input-mask-date" required="" name="date_of_birth" type="text" id="date_of_birth">
                </div>
                <label for="gender" class="col-sm-2 control-label">{{ __('st-register.Gender') }}</label>
                <div class="col-sm-2">
                  <select class="form-control border-form" required="" id="gender" name="gender">
                    @foreach ($data['Gender'] as $gender)
                      @if ($Flag=='kh')
                        <option value="{{$gender->id}}">{{$gender->gender_kh}}</option>
                      @else
                        <option value="{{$gender->id}}">{{$gender->gender_en}}</option>
                      @endif               
                    @endforeach
                  </select>
                </div>
                <label for="email" class="col-sm-1 control-label">{{ __('st-register.E-mail') }}</label>
                <div class="col-sm-3">
                    <input class="form-control border-form" name="email" type="text" id="email">
                </div>
                <label class="hidden">
                  <label for="blood_group" class="col-sm-2 control-label">Blood Group</label>
                  <div class="col-sm-2">
                    <select class="form-control border-form" id="blood_group" name="blood_group">
                      <option value="0" selected="selected"></option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>
                  </div>
                </label>
              </div>
              {{-- hidden --}}
              <div class="form-group">
                <label class="hidden">
                  <label for="nationality" class="col-sm-2 control-label">Nationality</label>
                  <div class="col-sm-2">
                    <input placeholder="" class="form-control border-form upper"  name="nationality" type="text" id="nationality" value="0">
                  </div>
                  <label for="mother_tongue" class="col-sm-2 control-label">Mother Tong</label>
                  <div class="col-sm-2">
                      <input class="form-control border-form upper" name="mother_tongue" type="text" id="mother_tongue" value="0">
                  </div>
                </label>          
              </div>
              {{-- row-4 --}}
              <div class="form-group">
                <label for="extra_info" class="col-sm-2 control-label">{{ __('st-register.ExtraInfo') }}</label>
                <div class="col-sm-10">
                  <textarea class="form-control border-form" rows="1" name="extra_info" cols="50" id="extra_info"></textarea>
                </div>
              </div>
              {{-- contact infor --}}
              <div class="label label-warning arrowed-in arrowed-right arrowed">Contact</div>
              <hr class="hr-8">
              <div class="form-group">
                <label for="home_phone" class="col-sm-1 control-label">{{ __('st-register.Phone') }}</label>
                <div class="col-sm-3">
                  <input class="form-control border-form input-mask-phone" name="home_phone" type="text" id="home_phone">
                </div>
                <label for="mobile_1" class="col-sm-1 control-label">{{ __('st-register.Mobile1') }}</label>
                <div class="col-sm-3">
                  <input class="form-control border-form input-mask-mobile"  name="mobile_1" type="text" id="mobile_1">
                </div>
                <label for="mobile_2" class="col-sm-1 control-label">{{ __('st-register.Mobile2') }}</label>
                <div class="col-sm-3">
                  <input class="form-control border-form input-mask-mobile" name="mobile_2" type="text" id="mobile_2">
                </div>
              </div>
              {{-- Permanent Address --}}
              <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('st-register.PermanentAddress') }}</div>
              <hr class="hr-8">
              {{-- Location Training --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <h4 style="color: black; font-family: Khmer OS Battambang; background-color:white; padding: 10px;">{{ __('shortcoure_TrainingLocation_Detail') }}</h4>
                    </div>            
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="txt_village">{{ __('shortcoure_Village') }}</label>
                    <input type="text" name="txt_village" class="form-control input-sm" required="" style="width: 100%">
                  </div>            
                </div>
                <div class="clearfix"></div>
                {{-- Provice District Commune --}}
                <div class="form-group">
                  <label for="province" class="col-sm-1 control-label">{{ __('shortcoure_Province') }}</label>
                  <div class="col-sm-3">
                    <select style="width: 100%" name="cbo_province" id="province">
                      @if($Flag=='kh')
                      {
                        <option value="0">ជ្រើសខាងក្រោម៖ </option>
                      }
                      @endif
                      @if($Flag=='en')
                      {
                        <option value="0">Please Choose</option>
                      }
                      @endif              
                      @foreach ($provinces as $row)
                        @if($Flag=='kh')
                        {
                          <option value="{{$row->id}}">{{ $row->name_kh }}</option>
                        }
                        @endif
                        @if($Flag=='en')
                        {
                          <option value="{{$row->id}}">{{ $row->name_en }}</option>
                        }
                        @endif              
                      @endforeach              
                    </select>
                  </div>
                  <label for="district" class="col-sm-1 control-label">{{ __('shortcoure_District') }}</label>
                  <div class="col-sm-3">
                    <select style="width: 100%" name="cbo_district" id="district" required="" disabled>
                      @if($Flag=='kh')
                      {
                        <option value="0">ជ្រើសខាងក្រោម៖ </option>
                      }
                      @endif
                      @if($Flag=='en')
                      {
                        <option value="0">Please Choose</option>
                      }
                      @endif
                    </select>
                  </div>
                  <label for="commune" class="col-sm-1 control-label">{{ __('shortcoure_Commune') }}</label>
                  <div class="col-sm-3">
                    <select style="width: 100%" name="cbo_commune" id="commune" required="" disabled>
                      @if($Flag=='kh')
                      {
                        <option value="0">ជ្រើសខាងក្រោម៖ </option>
                      }
                      @endif
                      @if($Flag=='en')
                      {
                        <option value="0">Please Choose</option>
                      }
                      @endif                         
                    </select>
                  </div>
                </div>        
                {{-- Start and End date --}}
                <div class="form-group">
                  <label for="txt_start_date" class="col-sm-2 control-label">{{ __('shortcoure_Start-Date') }}</label>
                  <div class="col-sm-4">                    
                    <input data-date-format="yyyy-mm-dd" class="form-control date-picker border-form input-mask-date" required="" name="txt_start_date" type="text" id="txt_start_date">
                  </div>

                  <label for="txt_end_date" class="col-sm-2 control-label">{{ __('shortcoure_EndDate') }}</label>
                  <div class="col-sm-4">                    
                    <input data-date-format="yyyy-mm-dd" class="form-control date-picker border-form input-mask-date" required="" name="txt_end_date" type="text" id="txt_end_date">
                  </div>
                </div>
              <label class="hidden">
                <div class="label label-warning arrowed-in arrowed-right arrowed">Temporary Address</div>
                <div class="control-group col-sm-12">
                  <div class="radio">
                    <label>
                      <input class="ace" onclick="CopyAddress(this.form)" name="permanent_address_copier" type="checkbox" value="0">
                      <span class="lbl"> Temporary Address</span>
                    </label>
                  </div>
                </div>
                <hr>
                <hr class="hr-8">
                <div class="form-group">
                  <label for="temp_address" class="col-sm-1 control-label">Address</label>
                  <div class="col-sm-3">
                    <input class="form-control border-form upper" name="temp_address" type="text" id="temp_address" value="0">
                  </div>
                  <label for="temp_state" class="col-sm-1 control-label">State</label>
                  <div class="col-sm-3">
                    <input class="form-control border-form upper" name="temp_state" type="text" id="temp_state" value="0">
                  </div>
                  <label for="temp_country" class="col-sm-1 control-label">Country</label>
                  <div class="col-sm-3">
                    <input class="form-control border-form upper" name="temp_country" type="text" id="temp_country" value="0">
                  </div>
                </div>
              </label>
              {{-- hidden --}}
              <label class="hidden">
                <div class="form-group">
                  <label for="guardian_relation" class="col-sm-2 control-label">Relation</label>
                  <div class="col-sm-4">
                    <input class="form-control border-form upper"  name="guardian_relation" type="text" id="guardian_relation" value="0">
                  </div>
                  <label for="guardian_address" class="col-sm-2 control-label">Guardian Address</label>
                  <div class="col-sm-4">
                    <input class="form-control border-form upper"  name="guardian_address" type="text" id="guardian_address" value="0">
                  </div>
                </div>
              </label>
              <div id="link-guardian-detail" style="display: none;">
                <div class="form-group">
                  <label for="guardian_info" class="col-sm-12 control-label align-center">Find Guardian Using Name | Mobile Number | Email &amp; Click on Link Now </label>
                  <div class="col-sm-12">
                    <select class="col-xs-12 col-sm-12 select2-hidden-accessible" style="width: 100%;" name="guardian_link_id" tabindex="-1" aria-hidden="true">
                      <option selected="selected" value="">Type Student Reg.No. or Guardians Name...</option>
                    </select>
                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-guardian_link_id-y0-container">
                          <span class="select2-selection__rendered" id="select2-guardian_link_id-y0-container">
                            <span class="select2-selection__placeholder">Select Guardian...</span>
                          </span>
                          <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                    <hr>
                    <div class="align-right">
                      <button type="button" class="btn btn-sm btn-primary" id="load-guardian-html-btn">
                        <i class="fa fa-link bigger-120"></i> Link_Now </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="student_main_image" class="col-sm-2 control-label">{{ __('st-register.StudentProfilePicture') }}</label>
                <div class="col-sm-6">
                  <input class="form-control border-form" name="student_main_image" type="file" id="student_main_image">
                </div>
                <img id="" class="img-responsive" alt="Avatar" src="http://eduims.sourngedu.com/assets/images/avatars/profile-pic.jpg" width="100px">
              </div>
            </div>
          </div>
          {{-- button submit --}}
          <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
              <a class="btn btn-danger" href="{{ url('projects/student-list')}}"> Back</a>
              <button class="btn" type="reset"><i class="icon-undo bigger-110"></i> Reset </button>
              <button class="btn btn-info" type="submit"><i class="icon-ok bigger-110"></i> Register </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div><!-- /.main-content -->      
@endsection

@push('custom-js')
  @include('ProjectActivities.includes.provinces')
  @include('includes.scripts.jquery_validation_scripts')
  <!-- inline scripts related to this page -->
  @include('includes.scripts.inputMask_script')
  @include('includes.scripts.datepicker_script')  
@endpush

