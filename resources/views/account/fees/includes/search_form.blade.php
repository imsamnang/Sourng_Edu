<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;@lang('acc_frm_fee_Search_Fees')</h4>
<div class="clearfix">
    <div class="form-group">
        {!! Form::label('reg_no', __('acc_frm_fee_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>

        {!! Form::label('fee_collection_date', __('acc_frm_fee_Date'), ['class' => 'col-sm-1 control-label']) !!}
        <div class=" col-sm-3">
            <div class="input-group ">
                {!! Form::text('fee_collection_date_start', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                <span class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                </span>
                {!! Form::text('fee_collection_date_end', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'fee_collection_date_start'])
                @include('includes.form_fields_validation_message', ['name' => 'fee_collection_date_end'])
            </div>
        </div>
        <label class="col-sm-1 control-label">@lang('acc_frm_fee_Head')</label>
        <div class="col-sm-3">
            {!! Form::select('fee_heads', $data['fee_heads'], null, ['class' => 'form-control']) !!}

        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">@lang('acc_frm_fee_Faculty')</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}
        </div>

        <label class="col-sm-2 control-label">@lang('acc_frm_fee_Semester')</label>
        <div class="col-sm-4">
            <select name="semester_select[]" class="form-control semester_select" >
                <option> @lang('acc_frm_fee_Select_Semester') </option>
            </select>
        </div>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-12 align-right">        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            @lang('acc_frm_fee_Search')
        </button>
    </div>
</div>
