<?php $flag=App()->getLocale();  ?>
<div class="row">
  <div class="col-sm-12 align-right hidden-print">
    <a href="#" class="" onclick="window.print();">
      <i class="ace-icon fa fa-print bigger-200"></i>
    </a>
  </div>
  <div class="col-xs-12 col-sm-3 center">
    <div>
      <span class="profile-picture">
        @if($data['staff']->staff_image != '')
        <img id="avatar" class="editable img-responsive" alt="{{ $data['staff']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['staff']->staff_image) }}" width="300px" />
        @else
        <img id="avatar" class="editable img-responsive" alt="{{ $data['staff']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
        @endif
      </span>
      <div class="space-4"></div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-9">
    <?php    
    $designation = \App\Models\StaffDesignation::where('id',$data['staff']->designation)->first();
    ?>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">
      {{ $data['staff']->first_name.' '.
      $data['staff']->middle_name.' '.$data['staff']->last_name  }}
    </div>
    <span>
      @if ($flag=='kh')
      {{$designation->title_kh}}
      @else
      {{$designation->title}}
      @endif
    </span>    
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Reg_No') </div>
        <div class="profile-info-value">
          <span class="editable" id="reg_no">{{ $data['staff']->reg_no }} |
          </span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Join_Date') </div>
        <div class="profile-info-value">
          <span class="editable" id="reg_date">{{\Carbon\Carbon::parse($data['staff']->join_date)->format('Y-m-d')}}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Name') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">{{ $data['staff']->first_name.' '.
          $data['staff']->middle_name.' '.$data['staff']->last_name }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_DOB') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">{{\Carbon\Carbon::parse($data['staff']->date_of_birth)->format('Y-m-d')}}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Gender') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">
            {{ $data['staff']->gender }}
                  
          </span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Blood_Group') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">{{ $data['staff']->blood_group }}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Nationality') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">{{ $data['staff']->nationality }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_MotherTong') </div>
        <div class="profile-info-value">
          <span class="editable" id="student_name">{{ $data['staff']->mother_tongue }}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Email') </div>
        <div class="profile-info-value">
          <span class="editable" id="email">{{ $data['staff']->email }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Mobile_No') </div>
        <div class="profile-info-value">
          <span class="editable" id="email">{{ $data['staff']->mobile_1.','.$data['staff']->mobile_2 }}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_HomeTel') </div>
        <div class="profile-info-value">
          <span class="editable" id="email">{{ $data['staff']->home_phone }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Qualification') </div>
        <div class="profile-info-value">
          <span class="editable" id="email">{{ $data['staff']->qualification }}</span>
        </div>
      </div>


      <div class="profile-info-row">
          <div class="profile-info-name"> {{$flag=='kh'?'កន្លែងកំណើត':'Place Of Birth'}} </div>
          <div class="profile-info-value">
              <span class="editable" id="permanent_place">{{ $data['staff']->pob }}</span>
             
              
          </div>
          
        </div>



    </div>
    
  </div>

  

  
  </div><!-- /.row -->

  <div class="row">
    <div class="space-6"></div>
    {{-- Permanent Address --}}
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Permanent_Address')</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">

        <div class="profile-info-name"> @lang('staff_frm_reg_Permanent_Address') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_place">{{ $data['staff']->address }}</span>
          <span class="editable" id="permanent_zone">{{ 
              $flag=='kh'?$data['staff']->commune->name_kh:$data['staff']->commune->name_en 
              }}
          </span>
          <span class="editable" id="permanent_zone">{{ 
              $flag=='en'?$data['staff']->district->name_en:$data['staff']->district->name_kh 
              }}</span>
          <span class="editable" id="permanent_district">{{ 
              $flag=='kh'?$data['staff']->province->name_kh:$data['staff']->province->name_en 
              }}</span>


        </div>

        {{-- <div class="profile-info-name"> @lang('staff_frm_reg_commune') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_zone">{{ 
            $flag=='kh'?$data['staff']->commune->name_kh:$data['staff']->commune->name_en 
            }}
          </span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_district') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_zone">{{ 
            $flag=='en'?$data['staff']->district->name_en:$data['staff']->district->name_kh 
            }}</span>
        </div>

        <div class="profile-info-name"> @lang('staff_frm_reg_province') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_district">{{ 
            $flag=='kh'?$data['staff']->province->name_kh:$data['staff']->province->name_en 
            }}</span>
        </div> --}}
        

       
      {{--<div class="profile-info-name"> @lang('staff_frm_reg_Country') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_zone">{{ $data['staff']->village }}</span>
        </div> --}}

      </div>
    </div>
    <div class="space-6"></div>
    {{-- Temporary Address --}}
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Temporary_Address')</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Address') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_place">{{ $data['staff']->temp_address }}</span>
        </div>
        {{--<div class="profile-info-name"> @lang('staff_frm_reg_State') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_district">{{ $data['staff']->temp_state }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Country') </div>
        <div class="profile-info-value">
          <span class="editable" id="permanent_zone">{{ $data['staff']->temp_country }}</span>
        </div> --}}
      </div>
    </div>
    <div class="space-6"></div>
    {{-- Parential Info: --}}
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Parential_Info')</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">
        <div class="profile-info-name">@lang('staff_frm_reg_Father_Name')  </div>
        <div class="profile-info-value">
          <span class="editable" id="temporary_place">{{ $data['staff']->father_name }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Mother_Name')  </div>
        <div class="profile-info-value">
          <span class="editable" id="temporary_place">{{ $data['staff']->mother_name }}</span>
        </div>
      </div>
    </div>
    <div class="space-6"></div>
    <div class="space-6"></div>
    {{-- Qualification Detail: --}}
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Qualification_Detail')</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Qualification')   </div>
        <div class="profile-info-value">
          <span class="editable" id="temporary_place">{{ $data['staff']->qualification }}</span>
        </div>
        <div class="profile-info-name"> @lang('staff_frm_reg_Experience')</div>
        <div class="profile-info-value">
          <span class="editable" id="guardian_eligibility">{{ $data['staff']->experience }}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Experience_Information')   </div>
        <div class="profile-info-value">
          <span class="editable" id="guardian_office">{{ $data['staff']->experience_info }}</span>
        </div>
      </div>
      <div class="profile-info-row">
        <div class="profile-info-name"> @lang('staff_frm_reg_Other_Information')   </div>
        <div class="profile-info-value">
          <span class="editable" id="mother_mobile_1">{{ $data['staff']->other_info }}</span>
        </div>
      </div>
    </div>
  </div>