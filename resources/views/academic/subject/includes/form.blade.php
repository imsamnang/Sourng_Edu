{{-- @lang('btn_st_Subject') --}}
<div class="form-group">
    {!! Form::label('title', __('btn_st_Subject'), ['class' => 'col-sm-3 control-label']) !!}
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
    {!! Form::label('full_mark_theory', __('Faculty.FM(T)'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('full_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_theory'])
    </div>
    {!! Form::label('pass_mark_theory', __('Faculty.PM(T)'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('pass_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'pass_mark_theory'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('full_mark_practical', __('Faculty.FM(P)'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('full_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_practical'])
    </div>
    {!! Form::label('pass_mark_practical', __('Faculty.PM(P)'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-2">
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
{{-- Price --}}
<div class="form-group">
    {!! Form::label('subject_fee', __('btn_st_Subject_fee'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::number('subject_fee', null, ["class" => "form-control border-form upper","placeholder" => __('តម្លៃ ០ គឺ Free'),'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'subject_fee'])
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
{{-- objective --}}
<div class="form-group">
    {!! Form::label('objective', __('Objective'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('objective', null, ["class" => "form-control border-form upper",'rows'=>'2']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'objective'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('main_image', __('book_frm_Book_Image'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::file('main_image', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'main_image'])
    </div>
</div>


@if (isset($data['row']))

    {{-- <div class="space-4"></div> --}}

    <div class="form-group">
        <label class="col-sm-4 control-label no-padding-right">Existing Image</label>
        <div class="col-sm-8">
            @if ($data['row']->image)
            {!! Form::hidden('exist_Image', $data['row']->image, ["placeholder" => __('Your Old Image'), "class" => "form-control border-form upper"]) !!}
                {{-- <img src="{{ asset('images/'.$folder_name.'/'.$data['row']->image) }}" width="100"> --}}
                <img src="{{ asset('images/subject/'.$data['row']->image) }}" width="100">
            @else
                <p>@lang('book_frm_No_image')</p>
            @endif

        </div>
    </div>
@endif

