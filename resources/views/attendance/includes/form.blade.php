<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('Search_Student_Attendance')}}</h4>

<div class="form-group clearfix form-actions">
    {!! Form::label('year', __('att_frm_Year'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::select('year', $data['year'],null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'year'])
    </div>

    {!! Form::label('month', __('att_frm_Month'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('month', $data['month'],null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'month'])
    </div>

    <button class="btn btn-info" type="submit" id="filter-btn">
        <i class="icon-ok bigger-110"></i>
        @lang('att_frm_Search')
    </button>

</div>
