<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('member_frm_Members')}}</h4>

<div class="form-group">
    {!! Form::label('user_type', __('member_frm_Member_Type'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('user_type', $data['circulation'], null, ['class' => 'form-control', "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'user_type'])
    </div>

    {!! Form::label('reg_no', __('member_frm_REG_No'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', $data['reg_no'], ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('status', __('member_frm_Status'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('status', ['' => 'Select Semester','active' => 'Active', 'in-active' => 'InActive' ], null,
        [ 'class'=>'form-control border-form']); !!}
        @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
    </div>



</div>

