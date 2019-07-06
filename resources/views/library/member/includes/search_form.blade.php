<h4 class="header large lighter blue" id="filterBox"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('member_frm_search_Search_Member')}}</h4>
<div class="form-horizontal" id="filterDiv">
    <div class="form-group">
        {!! Form::label('user_type', __('member_frm_Member_Type'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('user_type', $data['circulation'], null, ['class' => 'form-control', "required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'user_type'])
        </div>

        {!! Form::label('reg_no', __('member_frm_REG_No'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
        </div>

        <label class="col-sm-1 control-label">@lang('member_frm_Status')</label>
        <div class="col-sm-2">
            <select class="form-control border-form" name="status" id="cat_id">
                <option value="all"> @lang('member_frm_search_Select_Status') </option>
                <option value="active" >Active</option>
                <option value="in-active" >In-Active</option>
            </select>
        </div>
    </div>

    <div class="clearfix form-actions">
        <div class="align-right">            &nbsp; &nbsp; &nbsp;
            <button class="btn btn-info" type="submit" id="filter-btn">
                <i class="fa fa-filter bigger-110"></i>
                @lang('member_frm_search_Search')
            </button>
        </div>
    </div>
</div>