<div class="col-md-8 sms">
    <div class="form-group">
        {!! Form::label('message', __('info-notice.Message'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('message', null, ["class" => "form-control border-form", "rows"=>"10"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'message'])
        </div>
    </div>
</div>