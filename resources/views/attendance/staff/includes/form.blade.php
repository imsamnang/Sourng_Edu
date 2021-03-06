<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('att_frm_staff_Search_Staff')}}</h4>
<div class="form-horizontal">
    <div class="form-group">
        {!! Form::label('Date', __('att_frm_staff_Date'), ['class' => 'col-sm-2 control-label']) !!}
        <div class=" col-sm-3">
                {!! Form::text('date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd","required", "onChange"=>"loadStaff(this);"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'date'])
        </div>

        <label class="col-sm-2 control-label">@lang('att_frm_staff_Designation')</label>
        <div class="col-sm-5">
            {!! Form::select('designation', $data['designation'], null, ['class' => 'form-control', 'onChange' => 'loadStaff(this);']) !!}
        </div>
    </div>
    <div class="hr hr-18 dotted hr-double"></div>
</div>
<!-- Option Values -->


