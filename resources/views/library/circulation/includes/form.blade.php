<div class="form-group">
    {!! Form::label('user_type', __('circul_frm_User_Type'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('user_type', null, ["placeholder" => "", "class" => "form-control border-form ","required", "readonly"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'user_type'])
    </div>

    {!! Form::label('code_prefix', __('circul_frm_Use_Code_Prefix'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('code_prefix', null, ["placeholder" => "", "class" => "form-control border-form upper","required", "readonly"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'code_prefix'])
    </div>

</div>


<div class="form-group">
    {!! Form::label('issue_limit_days', __('circul_frm_Issue_Limit_Days'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('issue_limit_days', null, ["placeholder" => "", "class" => "form-control border-form ","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'issue_limit_days'])
    </div>

    {!! Form::label('issue_limit_books', __('circul_frm_Issue_Limit_Book'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('issue_limit_books', null, ["placeholder" => "", "class" => "form-control border-form ","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'issue_limit_books'])
    </div>

    {!! Form::label('fine_per_day', __('circul_frm_Fine_Per_Days'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('fine_per_day', null, ["placeholder" => "", "class" => "form-control border-form","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'fine_per_day'])
    </div>

</div>


