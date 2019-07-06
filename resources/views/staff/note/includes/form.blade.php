<div class="form-group">
    {!! Form::label('reg_no', __('staff_frm_note_Reg_No'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

</div>
<div class="form-group">
    {!! Form::label('subject', __('staff_frm_note_Subject'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('subject', null, ["placeholder" => "", "class" => "form-control border-form","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'subject'])
    </div>
</div>
<div class="form-group">
    {!! Form::label('note', __('staff_frm_note_Note'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('note', null, ["placeholder" => "", "class" => "form-control border-form", "rows"=>"3"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'note'])
    </div>
</div>

