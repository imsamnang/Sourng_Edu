<?php  $flag = app()->getLocale();?>
<span class="label label-info arrowed-in arrowed-right arrowed responsive">@lang('stu_Red_mark_input_are_required')</span>
<hr class="hr-16">
<div class="form-group">
    {!! Form::label('reg_no', __('stu_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('reg_date', __('stu_DATE'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_date', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control date-picker border-form input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_date'])
    </div>

    {!! Form::label('university_reg', __('stu_UNIVERSITY_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('university_reg', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'university_reg'])
    </div>
</div>

<div class="form-group">
    @if (!isset($data['row']))
        <label class="col-sm-2 control-label">@lang('stu_Faculty')</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, 
            ['class' => 'form-control', 'onChange' => 'loadSemesters(this);', "required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'faculty'])
        </div>

        <label class="col-sm-1 control-label">@lang('stu_Semester')</label>
        <div class="col-sm-2">
            <select name="semester" class="form-control semester" required >
            </select>
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>
        <label class="col-sm-1 control-label">@lang('stu_Status')</label>
        <div class="col-sm-2">
            {!! Form::select('academic_status', $data['academic_status'], 1, ['class' => 'form-control', "required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'academic_status'])
        </div>
    @else
        <label class="col-sm-2 control-label">@lang('stu_Faculty')</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'faculty'])
        </div>

        <label class="col-sm-1 control-label">@lang('stu_Semester')</label>
        <div class="col-sm-2">
            {!! Form::select('semester', $data['semester'], null, ['class' => 'form-control',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>
        <label class="col-sm-1 control-label">@lang('stu_Status')</label>
        <div class="col-sm-2">
            {!! Form::select('academic_status', $data['academic_status'], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'academic_status'])
        </div>
    @endif
</div>

<div class="form-group">
    {!! Form::label('first_name', __('stu_NAME_OF_STUDENT'), ['class' => 'col-sm-3 control-label',]) !!}
    <div class="col-sm-3">
        {!! Form::text('first_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('last_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'last_name'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('date_of_birth', __('stu_Date_of_Birth'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control border-form date-picker input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
    </div>

    {!! Form::label('gender', __('stu_Gender'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {{-- {!! Form::select('gender',
            $data['gender']
         ,null, ['class'=>'form-control border-form',"required"]); !!} --}}

         <select name="gender" id="" class="form-control border-form" required>
             
                @foreach ($data['gender'] as $row)
                    @if ($Flag=='kh')
                    <option value="{{ $row->id}}"> {{$row->gender_kh}}</option> 
                    @endif
                    @if ($Flag=='en')
                    <option value="{{ $row->id}}"> {{$row->gender_en}}</option> 
                    @endif
                                       
                @endforeach
         </select>
       
         @include('includes.form_fields_validation_message', ['name' => 'gender'])
    </div>

    {!! Form::label('blood_group', __('stu_Blood_Group'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
        [ 'class'=>'form-control border-form']); !!}
        @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('nationality', __('stu_Nationality'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'nationality'])
    </div>

    {!! Form::label('mother_tongue', __('stu_Mother_Tong'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
    </div>

    {!! Form::label('email', __('stu_Email'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('email', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('extra_info', __('stu_Extra_Info'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('extra_info', null, ["class" => "form-control border-form", "rows"=>"1"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_info'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('stu_Contact')</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('home_phone', __('stu_Phone'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'home_phone'])
    </div>

    {!! Form::label('mobile_1', __('stu_Mobile_1'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
    </div>

    {!! Form::label('mobile_2', __('stu_Mobile_2'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_2'])
    </div>
</div>


<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('stu_Permanent_Address')</div>
<hr class="hr-8">
{{-- <div class="form-group">
    {!! Form::label('address', __('stu_Address'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('address', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'address'])
    </div>

    {!! Form::label('state', __('stu_State'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('state', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'state'])
    </div>

    {!! Form::label('country', __('stu_Country'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('country', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'country'])
    </div>
</div> --}}


{{-- Address Province district commune --}}
<div class="form-group">
        {!! Form::label('address', __('stu_Address'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-11">
            {!! Form::text('address', null, ["placeholder"=>'ភូមិ គោករុន ឃុំមុខប៉ែន ស្រុកពួក ខេត្តសៀមរាប',"class" => "form-control border-form upper","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'address'])
        </div>           
</div>

<div class="form-group">
        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_Province') }}</label>
        <div class="col-sm-3">
        <select style="width: 100%" name="province_id" id="province">
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
        @include('includes.form_fields_validation_message', ['name' => 'province_id'])
        </div>

        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_District') }}</label>
        <div class="col-sm-3">
            <select style="width: 100%" name="district_id" id="district" required="" disabled>
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
        <label class="control-label col-xs-12 col-sm-1 control-label">{{ __('shortcoure_Commune') }}</label>
        <div class="col-sm-3">
            <select style="width: 100%" name="commune_id" id="commune" required="" disabled>
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
{{-- End Address Province district commune --}}





<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('stu_Temporary_Address')</div>

<div class="control-group col-sm-12">
    <div class="radio">
        <label>
            {!! Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]) !!}
            <span class="lbl"> @lang('lbl_Temporaray_Address')</span>
        </label>
    </div>
</div>

<hr>
<hr class="hr-8">
{{-- Temporary Address --}}
<div class="form-group">
    {!! Form::label('address', __('stu_Address'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-11">
        {!! Form::text('address', null, ["placeholder"=>'ភូមិ គោករុន ឃុំមុខប៉ែន ស្រុកពួក ខេត្តសៀមរាប',"class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'address'])
    </div>           
</div>
{{-- End temporary Address --}}


