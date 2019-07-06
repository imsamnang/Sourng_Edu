<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active">
            <a data-toggle="tab" href="#registrationinfo">{{ $panel }} General Information</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#profileimage">{{ __('report-staff.ProfileImages') }}</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="registrationinfo" class="tab-pane active">
            <span class="label label-info arrowed-in arrowed-right arrowed responsive">{{ __('report-staff.info') }} </span>
            <hr class="hr-16">
            <div class="form-group">
                {!! Form::label('reg_no', __('report-staff.REG.NO.'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
                </div>

                {!! Form::label('join_date', __('report-staff.JoinDate'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('join_date', null, [/*"data-date-format" => "yyyy-mm-dd",*/ "class" => "form-control date-picker border-form","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'join_date'])
                </div>

                {!! Form::label('designation', __('report-staff.Designation'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::select('designation', $data['designations'], null, ['class' => 'form-control', "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'designation'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('first_name', __('report-staff.NAMEOFSTAFF'), ['class' => 'col-sm-3 control-label',]) !!}
                <div class="col-sm-3">
                    {!! Form::text('first_name', null, ["placeholder" => "FIRST NAME", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'first_name'])
                </div>
                <div class="col-sm-3">
                    {!! Form::text('middle_name', null, ["placeholder" => "MIDDLE NAME", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
                </div>
                <div class="col-sm-3">
                    {!! Form::text('last_name', null, ["placeholder" => "LAST NAME", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'last_name'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('father_name', __('report-staff.FatherName'), ['class' => 'col-sm-2 control-label',]) !!}
                <div class="col-sm-4">
                    {!! Form::text('father_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'father_name'])
                </div>
                {!! Form::label('mother_name', 'Mother Name', ['class' => 'col-sm-2 control-label',]) !!}
                <div class="col-sm-4">
                    {!! Form::text('mother_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mother_name'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('date_of_birth', __('report-staff.DateofBirth'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "placeholder" => "", "class" => "form-control date-picker border-form input-mask-date","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
                </div>

                {!! Form::label('gender', __('report-staff.Gender'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::select('gender', ['' => '','male' => 'MALE', 'female' => 'FEMALE', 'others' => 'OTHER'], null, ['class'=>'form-control border-form',"required"]); !!}
                    @include('includes.form_fields_validation_message', ['name' => 'gender'])
                </div>

                {!! Form::label('blood_group', __('report-staff.BloodGroup'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
                    [ 'class'=>'form-control border-form']); !!}
                    @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('nationality', __('report-staff.Nationality'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'nationality'])
                </div>

                {!! Form::label('mother_tongue', __('report-staff.MotherTong'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
                </div>

                {!! Form::label('email', __('report-staff.E-mail'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('email', null, ["class" => "form-control border-form"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'email'])
                </div>
            </div>

            <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('report-staff.ContactDetail') }}</div>
            <hr class="hr-8">
            <div class="form-group">
                {!! Form::label('home_phone', {{ __('report-staff.HomePhone') }}, ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'home_phone'])
                </div>

                {!! Form::label('mobile_1', __('report-staff.Mobile1'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
                </div>

                {!! Form::label('mobile_2', __('report-staff.Mobile2'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mobile_2'])
                </div>
            </div>


            <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('report-staff.PermanentAddress') }}</div>
            <hr class="hr-8">
            <div class="form-group">
                {!! Form::label('address', __('report-staff.Address'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('address', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'address'])
                </div>

                {!! Form::label('state', __('report-staff.State'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('state', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'state'])
                </div>

                {!! Form::label('country', __('report-staff.Country'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('country', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'country'])
                </div>
            </div>


            <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('report-staff.TemporaryAddress') }}</div>

            <div class="control-group col-sm-12">
                <div class="radio">
                    <label>
                        {!! Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]) !!}
                        <span class="lbl"> {{ __('report-staff.tempory') }}</span>
                    </label>
                </div>
            </div>

            <hr>
            <hr class="hr-8">

            <div class="form-group">
                {!! Form::label('temp_address', __('report-staff.Address'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_address', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_address'])
                </div>

                {!! Form::label('temp_state', __('report-staff.State'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_state', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_state'])
                </div>

                {!! Form::label('temp_country', __('report-staff.Country'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_country', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_country'])
                </div>
            </div>

            <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('report-staff.QualificationDetail') }}</div>
            <hr class="hr-8">
            <div class="form-group">
                {!! Form::label('qualification', __('report-staff.Qualification'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('qualification', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'qualification'])
                </div>

                {!! Form::label('experience', __('report-staff.Experience'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('experience', null, ["class" => "form-control border-form upper",]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'experience'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('experience_info', __('report-staff.ExperienceInfo'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::textarea('experience_info', null, ["class" => "form-control border-form ", "rows"=>"3"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'experience_info'])
                </div>

                {!! Form::label('other_info', __('report-staff.OtherInfo'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::textarea('other_info', null, ["class" => "form-control border-form", "rows"=>"3"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'other_info'])
                </div>
            </div>
        </div>

        <div id="profileimage" class="tab-pane">
            <h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>{{ __('report-staff.ProfilePictures') }}</h4>
            <div class="form-group">
                {!! Form::label('main_image', 'Staff Profile Picture', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::file('main_image', ["class" => "form-control border-form"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'main_image'])
                </div>
            </div>

            @if (isset($data['row']))

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">{{ __('report-staff.ExistingImage') }}</label>
                    <div class="col-sm-10">
                        @if ($data['row']->staff_image)
                            <img id="avatar"  src="{{ asset('images/'.$folder_name.'/'.$data['row']->staff_image) }}" class="img-responsive" width="100">
                        @else
                            <p>{{ __('report-staff.Noimage.') }}</p>
                        @endif

                    </div>
                </div>
            @endif
        </div>


    </div>
    <div class="hr hr-24"></div>
</div>