<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('acc_frm_payroll_Staff_Search')}}</h4>
<div class="clearfix">
    <div class="form-group">
        {!! Form::label('reg_no', __('acc_frm_payroll_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>

        {!! Form::label('join_date', __('acc_frm_payroll_Date'), ['class' => 'col-sm-1 control-label']) !!}
        <div class=" col-sm-4">
            <div class="input-group ">
                {!! Form::text('join_date_start', null, ["placeholder" => "", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                <span class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                </span>
                {!! Form::text('join_date_end', null, ["placeholder" => "", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'join_date_start'])
                @include('includes.form_fields_validation_message', ['name' => 'join_date_end'])
            </div>
        </div>

        <label class="col-sm-1 control-label">@lang('acc_frm_payroll_Status')</label>
        <div class="col-sm-2">
            <select class="form-control border-form" name="status" id="cat_id">
                <option value="all"> @lang('acc_frm_payroll_Select_Status') </option>
                <option value="active" >Active</option>
                <option value="in-active" >In-Active</option>
            </select>
        </div>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="align-right">
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            @lang('acc_frm_payroll_Search')
        </button>
    </div>
</div>