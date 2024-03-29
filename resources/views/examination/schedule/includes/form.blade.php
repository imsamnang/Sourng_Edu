<div class="form-group">
    {!! Form::label('years_id', __('exam_frm_sched_Year'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('years_id', $data['years'], null, ["class" => "form-control border-form","required", "onChange" => "loadSubject(this)"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'years_id'])
    </div>

    {!! Form::label('months_id', __('exam_frm_sched_Month'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('months_id', $data['months'], null, ["class" => "form-control border-form","required", "onChange" => "loadSubject(this)"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'months_id'])
    </div>

    {!! Form::label('exams_id', __('exam_frm_sched_Exam'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::select('exams_id', $data['exams'], null, ["class" => "form-control border-form","required", "onChange" => "loadSubject(this)"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'exams_id'])
    </div>

</div>
<div class="form-group">

    <label class="col-sm-2 control-label">@lang('exam_frm_sched_Faculty')</label>
    <div class="col-sm-5">
        {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}

    </div>

    <label class="col-sm-2 control-label">@lang('exam_frm_sched_Semester')</label>
    <div class="col-sm-3">
        <select name="semester_select" class="form-control semester_select" onChange ="loadSubject(this)">
            <option> Select Semester </option>
        </select>
    </div>
</div>

<div class="space-4"></div>
<!-- Option Values -->
@include($view_path.'.includes.subject')
