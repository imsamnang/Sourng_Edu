<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('att_frm_student_Search_Student')}}</h4>
<div class="form-horizontal">
    <div class="form-group">
        {!! Form::label('Date', __('att_frm_student_Date'), ['class' => 'col-sm-1 control-label']) !!}
        <div class=" col-sm-2">
            <div class="input-group ">
                {!! Form::text('date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd","required", "onChange"=>"loadStudent(this);"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'date'])
            </div>
        </div>

        <label class="col-sm-1 control-label">@lang('att_frm_student_Faculty')</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}

        </div>

        <label class="col-sm-1 control-label">@lang('att_frm_student_Semester')</label>
        <div class="col-sm-3">
            <select name="semester_select" class="form-control semester_select" onChange="loadStudent(this);">
                <option> Select Semester </option>
            </select>
        </div>
    </div>
    <div class="hr hr-18 dotted hr-double"></div>
</div>
<!-- Option Values -->


