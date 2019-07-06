<div class="form-group">
    {!! Form::label('reg_no', __('stu_not_Reg_No') , ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

</div>
<div class="form-group">
    {!! Form::label('subject', __('stu_not_Sub'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('subject', null, ["placeholder" => "", "class" => "form-control border-form","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'subject'])
    </div>
</div>
<div class="form-group">
    {!! Form::label('note', __('stu_not_Note'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('note', null, ["placeholder" => "", "class" => "form-control border-form", "rows"=>"3"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'note'])
    </div>
</div>

