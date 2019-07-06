<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;@lang('acc_fee_collec_Search_Student')</h4>
<div class="clearfix">
    <div class="form-group">
        {!! Form::label('reg_no', __('acc_fee_collec_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>

        {!! Form::label('reg_date', __('acc_fee_collec_Reg_Date'), ['class' => 'col-sm-2 control-label']) !!}
        <div class=" col-sm-5">
            <div class="input-group ">
                {!! Form::text('reg_start_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                <span class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                </span>
                {!! Form::text('reg_end_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'reg_start_date'])
                @include('includes.form_fields_validation_message', ['name' => 'reg_end_date'])
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">@lang('acc_fee_collec_Faculty')</label>
        <div class="col-sm-3">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}

        </div>

        <label class="col-sm-2 control-label">@lang('acc_fee_collec_Semester')</label>
        <div class="col-sm-2">
            <select name="semester_select[]" class="form-control semester_select" >
                <option> @lang('acc_fee_collec_Select_Semester') </option>
            </select>
        </div>

        <label class="col-sm-1 control-label">@lang('acc_fee_collec_Status')</label>
        <div class="col-sm-2">
            <select class="form-control border-form" name="status" id="cat_id">
                <option value="all"> @lang('acc_fee_collec_Select_Status') </option>
                <option value="active" >Active</option>
                <option value="in-active" >In-Active</option>
            </select>
        </div>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-12 align-right">        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            @lang('acc_fee_collect_Search')
        </button>
    </div>
</div>