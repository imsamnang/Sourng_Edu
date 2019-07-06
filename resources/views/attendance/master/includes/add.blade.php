<h4 class="header large lighter blue"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; {{__('Monthly_Calendar_Add_Form')}}</h4>

{!! Form::open(['route' => $base_route.'.store', 'id' => 'bulk_action_form']) !!}
<div class="form-group">
    <div class="col-sm-4"></div>
    {!! Form::label('year', __('att_frm_calendar_Year'), ['class' => 'col-sm-1 control-label input-mask-date']) !!}
    <div class="col-sm-2">
        {!! Form::select('year', $data['year'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-sm-5"></div>
</div>

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th></th>
            <th>@lang('att_frm_calendar_Month')</th>
            <th>@lang('att_frm_calendar_Day_in_Month')</th>
            <th>@lang('att_frm_calendar_Holiday')</th>
            <th>@lang('att_frm_calendar_Open_Day')</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="month-tr-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> @lang('att_frm_calendar_GetActive_MonthsList')
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="month_wrapper">



        </tbody>

    </table>
</div>


<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            @lang('att_frm_calendar_Reset')
        </button>
        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-success" type="submit" id="filter-btn">
            <i class="icon-ok bigger-110"></i>
            @lang('att_frm_calendar_Add_Monthly_Calendar') 
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>
