<div class="form-group">
    {!! Form::label('title', __('hostel.form.title'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('time', __('hostel.table.time'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('time', null, ["class" => "form-control border-form upper", "id"=>"timepicker1"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'time'])
    </div>
</div>


