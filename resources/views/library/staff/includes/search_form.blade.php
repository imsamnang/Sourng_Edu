<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('member_frm_staff_Staff_Search')}}</h4>

    <div class="form-group">
        {!! Form::label('reg_no', __('member_frm_staff_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>

        {!! Form::label('mobile_number', __('member_frm_staff_Mobile_Number'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('mobile_number', null, ["placeholder" => "", "class" => "form-control border-form input-mask-mobile", "autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'mobile_number'])
        </div>

        <label class="col-sm-2 control-label">@lang('member_frm_staff_Status')</label>
        <div class="col-sm-2">
            <select class="form-control border-form" name="status" id="cat_id">
                <option value="all"> Select Semester </option>
                <option value="active" >Active</option>
                <option value="in-active" >In-Active</option>
            </select>
        </div>
    </div>
<div class="clearfix form-actions">
    <div class="align-right">
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            @lang('member_frm_staff_Search')
        </button>
    </div>
</div>