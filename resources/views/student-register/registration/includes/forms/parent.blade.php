<h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>&nbsp;@lang('stu_Parent_Details')</h4>

<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('Grand_Father_Detail')</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('grandfather_name', __('NAME_OF_GRAND_FATHER'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('grandfather_first_name', null, [ "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'grandfather_first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('grandfather_middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'grandfather_middle_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('grandfather_last_name', null, [ "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'grandfather_last_name'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('stu_Fathers_Detail')</div>
<hr class="hr-8">

<div class="form-group">
    {!! Form::label('father_name', __('stu_NAME_OF_FATHER'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('father_first_name', null, [ "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('father_middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('father_last_name', null, [ "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_last_name'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('father_eligibility', __('stu_Eligibility'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_eligibility', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_eligibility'])
    </div>

    {!! Form::label('father_occupation', __('stu_Ocupation'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_occupation', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_occupation'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('father_office', __('stu_Office'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_office', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_office'])
    </div>

    {!! Form::label('father_office_number', __('stu_Office_Number'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_office_number', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_office_number'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('father_residence_number', __('stu_Residence_Number'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_residence_number', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_residence_number'])
    </div>

    {!! Form::label('father_mobile_1', __('stu_fa_Mobile_1'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_mobile_1', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_mobile_1'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('father_mobile_2', __('stu_fa_Mobile_2'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_mobile_2'])
    </div>

    {!! Form::label('father_email', __('stu_fa_Email'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('father_email', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'father_email'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">@lang('stu_Mothers_Detail')</div>
<hr class="hr-8">

<div class="form-group">
    {!! Form::label('mother_name', __('stu_NAME_OF_MOTHER'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('mother_first_name', null, [ "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('mother_middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('mother_last_name', null, [ "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_last_name'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('mother_eligibility', __('stu_mo_Eligibility'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_eligibility', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_eligibility'])
    </div>

    {!! Form::label('mother_occupation', __('stu_mo_Ocupation'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_occupation', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_occupation'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('mother_office', __('stu_mo_Office'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_office', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_office'])
    </div>

    {!! Form::label('mother_office_number', __('stu_mo_Office_Number'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_office_number', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_office_number'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('mother_residence_number', __('stu_mo_Residence_Number'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_residence_number', null, ["class" => "form-control border-form input-mask-phone"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_residence_number'])
    </div>

    {!! Form::label('mother_mobile_1', __('stu_mo_Mobile_1'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_mobile_1', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_mobile_1'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('mother_mobile_2', __('stu_mo_Mobile_2'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_mobile_2'])
    </div>

    {!! Form::label('mother_email', __('stu_mo_Email'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mother_email', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_email'])
    </div>
</div>

<hr class="hr-8">
<div class="label label-warning arrowed-in arrowed-right arrowed">stu_Guardians_Detail</div>

<div class="control-group col-sm-12">
    <div class="radio">
        <label>
            {!! Form::radio('guardian_is', 'father_as_guardian', false, ['class' => 'ace', "onclick"=>"FatherAsGuardian(this.form)"]) !!}
            <span class="lbl"> @lang('stu_Father_is_Guardian')</span>
        </label>
        <label>
            {!! Form::radio('guardian_is', 'mother_as_guardian', false, ['class' => 'ace',"onclick"=>"MotherAsGuardian(this.form)"]) !!}
            <span class="lbl"> @lang('stu_Mother_is_Guardian')</span>
        </label>
        <label>
            {!! Form::radio('guardian_is', 'other_guardian', true, ['class' => 'ace', "onclick"=>"OtherGuardian(this.form)"]) !!}
            <span class="lbl"> @lang('stu_Others')</span>
        </label>
        <label>
            {!! Form::radio('guardian_is', 'link_guardian', false, ['class' => 'ace', "onclick"=>"linkGuardian(this.form)"]) !!}
            <span class="lbl"> @lang('stu_Link_Guardian')</span>
        </label>
    </div>
</div>
<hr>
<div id="guardian-detail">
    <hr class="hr-8">
    <div class="form-group">
        {!! Form::label('guardian_name', __('stu_NAME_OF_GUARDIAN'), ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('guardian_first_name', null, [ "class" => "form-control border-form upper","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_first_name'])
        </div>
        <div class="col-sm-3">
            {!! Form::text('guardian_middle_name', null, ["class" => "form-control border-form upper"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_first_name'])
        </div>
        <div class="col-sm-3">
            {!! Form::text('guardian_last_name', null, [ "class" => "form-control border-form upper","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_last_name'])
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('guardian_eligibility', __('stu_gu_Eligibility'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_eligibility', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_eligibility'])
        </div>

        {!! Form::label('guardian_occupation', __('stu_gu-Ocupation'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_occupation', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_occupation'])
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('guardian_office', __('stu_gu_Office'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_office', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_office'])
        </div>

        {!! Form::label('guardian_office_number', __('stu_gu_Office_Number'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_office_number', null, ["placeholder" => "", "class" => "form-control border-form input-mask-mobile"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_office_number'])
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('guardian_residence_number', __('stu_gu_Residence_Number'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_residence_number', null, ["class" => "form-control border-form input-mask-phone"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_residence_number'])
        </div>

        {!! Form::label('guardian_mobile_1', __('stu_gu_Mobile_1'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_mobile_1'])
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('guardian_mobile_2', __('stu_gu_Mobile_2'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_mobile_2'])
        </div>

        {!! Form::label('guardian_email', __('stu_gu_Email'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_email', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_email'])
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('guardian_relation', __('stu_gu_Relation'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_relation', null, ["class" => "form-control border-form upper","required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_relation'])
        </div>

        {!! Form::label('guardian_address', __('stu_gu_Guardian_Address'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('guardian_address', null, ["class" => "form-control border-form upper", "required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'guardian_address'])
        </div>
    </div>
</div>
<div id="link-guardian-detail">
    <div class="form-group">
        {!! Form::label('guardian_info', 'Find Guardian Using Name | Mobile Number | Email & Click on Link Now ', ['class' => 'col-sm-12 control-label align-center']) !!}
        <div class="col-sm-12">
            {!! Form::select('guardian_link_id', [], null, ["placeholder" => "Type Student Reg.No. or Guardians Name...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'subject_id'])

            <hr>
            <div class="align-right">
                <button type="button" class="btn btn-sm btn-primary" id="load-guardian-html-btn">
                    <i class="fa fa-link bigger-120"></i> @lang('Link_Now')
                </button>
            </div>
        </div>
    </div>
    <div class="space-4"></div>
<div id="guardian_wrapper">

</div>
</div>
