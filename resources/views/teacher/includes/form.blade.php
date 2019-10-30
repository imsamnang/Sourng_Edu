<?php $flag=App()->getLocale(); ?>
<div class="tabbable">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
    <li class="active">
      <a data-toggle="tab" href="#registrationinfo">{{ $panel }} @lang('staff_frm_reg_General_Information')</a>
    </li>
    <li class="">
      <a data-toggle="tab" href="#profileimage">@lang('staff_frm_reg_Profile_Images')</a>
    </li>
  </ul>
  <div class="tab-content">
    <div id="registrationinfo" class="tab-pane active">
      <div class="label label-warning arrowed-in arrowed-right arrowed">@lang('staff_frm_Biographic_data')</div>
      <span class="label label-info arrowed-in arrowed-right arrowed responsive"><strong style="color:red;"> | </strong> Red @lang('staff_frm_remark_data')</span>
      <hr class="hr-16">
      {{-- Regno/JoinDate/Designation --}}
      <div class="form-group">
        {!! Form::label('reg_no', __('staff_frm_reg_Reg_No'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-1">
          {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>
        {!! Form::label('join_date', __('staff_frm_reg_Join_Date'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('join_date', Carbon\Carbon::today()->toDateString(), ["class" => "form-control date-picker border-form","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'join_date'])
        </div>
        {!! Form::label('designation', __('staff_frm_reg_Designation'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
          <select name="designation" id="designation" class="form-control border-form" required>
            @foreach ( $data['designations'] as $key => $item)
              <option value="{{ $key }}">{{  $item }}</option>
             @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'designation'])
        </div>
      </div>
      {{-- Name of staff/Institute --}}
      <div class="form-group">
        {!! Form::label('first_name', __('staff_frm_reg_NAME_OF_STAFF'), ['class' => 'col-sm-2 control-label',]) !!}
        <div class="col-sm-3">
          {!! Form::text('first_name', null, ["placeholder" => $data['firstName'], "class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'first_name'])
        </div>
        <div class="col-sm-3">
          {!! Form::text('last_name', null, ["placeholder" => $data['lastName'], "class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'last_name'])
        </div>
        @role('super-admin')
        {!! Form::label('institute_id','Institute',['class' => 'col-sm-1 control-label',]) !!}
        <div class="col-sm-3">
          <select name="institute_id" id="institute_id" class="form-control" required>
            @foreach ($data['institute'] as $key => $item)
              <option value="{{ $key }}">{{  $item }}</option>
            @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'institute_id'])
        </div>
        @endrole
      </div>
      {{-- Date of Birth/Gender/Blood Group --}}
      <div class="form-group">
        {!! Form::label('date_of_birth', __('staff_frm_reg_DOB'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "placeholder" => "1982-12-23", "class" => "form-control date-picker border-form input-mask-date","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
        </div>
        {!! Form::label('gender', __('staff_frm_reg_Gender'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          <select name="gender" id="gender" class="form-control border-form" required>
            @foreach ($data['gender'] as $key=> $item)
            <option value="{{ $key }}">{{ $item }}</option>
            @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'gender'])
        </div>
        {!! Form::label('blood_group', __('staff_frm_reg_Blood_Group'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
          [ 'class'=>'form-control border-form']); !!}
          @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
        </div>
      </div>
      {{-- Place Of Birth --}}
      <div class="form-group">
        {!! Form::label('pob', __('staff_frm_pob_Address'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
          {!! Form::text('pob', null, ["placeholder" => $data['pob'],"class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'address'])
        </div>
      </div>
      {{-- Nationality/Mother​ Tong/E-mail --}}
      <div class="form-group">
        {!! Form::label('nationality', __('staff_frm_reg_Nationality'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('nationality', null, ["placeholder" => $data['Nationality'], "class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'nationality'])
        </div>
        {!! Form::label('mother_tongue', __('staff_frm_reg_MotherTong'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('mother_tongue', null, ["placeholder" => $data['Nationality'],"class" => "form-control border-form upper"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
        </div>
        {!! Form::label('email', __('staff_frm_reg_Email'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-3">
          {!! Form::text('email', null, ["class" => "form-control border-form"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'email'])
        </div>
      </div>
      {{-- Parent Info --}}
      <div class="form-group">
        {!! Form::label('father_name', __('staff_frm_reg_Father_Name'), ['class' => 'col-sm-2 control-label',]) !!}
        <div class="col-sm-4">
          {!! Form::text('father_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'father_name'])
        </div>
        {!! Form::label('mother_name', __('staff_frm_reg_Mother_Name'), ['class' => 'col-sm-2 control-label',]) !!}
        <div class="col-sm-4">
          {!! Form::text('mother_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'mother_name'])
        </div>
      </div>
      {{-- Contact Detail --}}
      <div class="label label-warning arrowed-in arrowed-right arrowed">Contact Detail</div>
      <hr class="hr-8">
      <div class="form-group">
        {!! Form::label('home_phone', __('staff_frm_reg_Mobile_No'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone", "required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'home_phone'])
        </div>
        {!! Form::label('mobile_1', __('staff_frm_reg_Mobile_1'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
        </div>
        {!! Form::label('mobile_2', __('staff_frm_reg_Mobile_2'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'mobile_2'])
        </div>
      </div>
      {{-- Permanent Address --}}
      <div class="label label-warning arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Permanent_Address')</div>
      <hr class="hr-8">
      {{-- Address Province district commune --}}
      <div class="form-group">
        {!! Form::label('address', __('staff_frm_reg_Address'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
          {!! Form::text('address', null, ["placeholder"=>$data['pob'],"class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'address'])
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_Province') }}</label>
        <div class="col-sm-3">
          <select style="width: 100%" name="province_id" id="province">
              <option value="0">{{ $data['option'] }}</option>
            @foreach ($data['provinces'] as $key => $item)
              <option value="{{ $key }}">{{ $item }}</option>
            @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'province_id'])
        </div>
        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_District') }}</label>
        <div class="col-sm-3">
          <select style="width: 100%" name="district_id" id="district" required="" disabled>
            <option value="0">{{ $data['option'] }}</option>
          </select>
        </div>
        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_Commune') }}</label>
        <div class="col-sm-3">
          <select style="width: 100%" name="commune_id" id="commune" required="" disabled>
            <option value="0">{{ $data['option'] }}</option>
          </select>
        </div>
      </div>
      {{-- End Address Province district commune --}}
      {{-- Temporary Address --}}
      <div class="label label-warning arrowed-in arrowed-right arrowed">@lang('staff_frm_reg_Temporary_Address')</div>
      <br><br>
      {{-- <hr class="hr-8"> --}}
       <div class="control-group col-sm-12">
        <div class="radio">
          <label>
            {!! Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]) !!}
            <span class="lbl"> @lang('staff_frm_reg_Temporaray_Address_Same_As_Permanent_Address') </span>
          </label>
        </div>
        <br>
      </div>
      {{--Temporaray_Address Province district commune --}}
      <div class="form-group">
        {!! Form::label('temp_address', __('staff_frm_reg_Address'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
          {!! Form::text('temp_address', null, ["placeholder"=>$data['pob'],"class" => "form-control border-form upper","required"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'temp_address'])
        </div>
      </div>      
      {{-- End Temporaray_Address Province district commune --}}
      {{-- (D) Qualification Detail: --}}
      <div class="label label-warning arrowed-in arrowed-right arrowed">(D) @lang('staff_frm_reg_Qualification_Detail')</div>
      <hr class="hr-8">
      <div class="form-group">
        {!! Form::label('GeneralEducation', __('cbo_general_education'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">          
          <select name="general_education_id" class="form-control border-form upper" required>
            <option value="0">{{  $data['option'] }}</option>
            @foreach ($data['GeneralEducation'] as $key => $item)
              <option value="{{  $key }}">{{  $item }}</option>
            @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'general_education_id'])
        </div>
        {!! Form::label('qualification_id', __('staff_frm_reg_Qualification'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          <select name="qualification_id" class="form-control border-form upper" required>
            <option value="0">{{  $data['option'] }}</option>
            @foreach ($data['teacher_exam'] as $key => $item)
              <option value="{{  $key }}">{{  $item }}</option>
            @endforeach
          </select>
          @include('includes.form_fields_validation_message', ['name' => 'qualification_id'])
        </div>
        {!! Form::label('experience', __('staff_frm_reg_Experience'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::number('experience', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
          @include('includes.form_fields_validation_message', ['name' => 'experience'])
        </div>
      </div>
      <div class="form-group">
        {!! Form::label('experience_info', __('staff_frm_reg_Experience_Information'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
          {!! Form::textarea('experience_info', null, ["class" => "form-control border-form ", "rows"=>"3"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'experience_info'])
        </div>
        {!! Form::label('other_info', __('staff_frm_reg_Other_Information'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
          {!! Form::textarea('other_info', null, ["class" => "form-control border-form", "rows"=>"3"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'other_info'])
        </div>
      </div>
    </div>
    {{-- Profile Image --}}
    <div id="profileimage" class="tab-pane">
      <h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>Profile Pictures</h4>
      <div class="form-group">
        {!! Form::label('main_image', __('staff_frm_reg_Staff_Profile_Picture'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
          {!! Form::file('main_image', ["class" => "form-control border-form"]) !!}
          @include('includes.form_fields_validation_message', ['name' => 'main_image'])
        </div>
      </div>
      @if (isset($data['row']))
      <div class="space-4"></div>
      <div class="form-group">
        <label class="col-sm-2 control-label">@lang('staff_frm_reg_Existing_Image')</label>
        <div class="col-sm-10">
          @if ($data['row']->staff_image)
          <img id="avatar"  src="{{ asset('images/'.$folder_name.'/'.$data['row']->staff_image) }}" class="img-responsive" width="100">
          @else
          <p>@lang('staff_frm_reg_No_image')</p>
          @endif
        </div>
      </div>
      @endif
    </div>
  </div>
  <div class="hr hr-24"></div>
</div>