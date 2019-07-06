
<div class="form-group">
    {!! Form::label('title', __('Faculty.Subject'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ["placeholder" => __('Faculty.e.g.English'), "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('code', __('Faculty.Code'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('code', null, ["placeholder" => __('Faculty.e.g.E01'), "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'code'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('full_mark_theory', __('Faculty.FM(T)'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('full_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_theory'])
    </div>
    {!! Form::label('pass_mark_theory', __('Faculty.PM(T)'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('pass_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'pass_mark_theory'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('full_mark_practical', __('Faculty.FM(P)'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('full_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_practical'])
    </div>
    {!! Form::label('pass_mark_practical', __('Faculty.PM(P)'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('pass_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'pass_mark_practical'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('credit_hour', __('Faculty.CreditHour'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::number('credit_hour', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'credit_hour'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('sub_type', __('Faculty.SubjectType'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('sub_type',['Compulsory'=>__('Faculty.Compulsory'),'Optional'=>'Optional'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'sub_type'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('class_type', __('Faculty.ClassType'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('class_type',['Theory'=>__('Faculty.Theory'),'Practical'=>'Practical','Both'=>'Both'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'class_type'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('staff_id', __('Faculty.Teacher/Staff'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('staff_id',$data['staffs'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'staffs'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', __('Faculty.Description'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description', null, ["class" => "form-control border-form upper",'rows'=>'1']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'description'])
    </div>
</div>
