<h4 class="header large lighter blue"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{__('acc_frm_payroll_ms_Payroll_Add_Form')}}</h4>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>Warning!</strong>
    Please be patient when adding Payroll because it effects on selected staff and after that you will change manually.
    <br>
</div>
{!! Form::open(['route' => $base_route.'.store', 'id' => 'bulk_action_form']) !!}

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>@lang('acc_frm_payroll_ms_Tag_Line')</th>
                <th>@lang('acc_frm_payroll_ms_Payroll_Head')</th>
                <th>@lang('acc_frm_payroll_ms_Due_Date')</th>
                <th>@lang('acc_frm_payroll_ms_Amount')</th>
                <th>
                    <button type="button" class="btn btn-xs btn-primary pull-right" id="load-payroll-html">
                        <i class="fa fa-plus" aria-hidden="true"></i> @lang('acc_frm_payroll_ms_Insert_Row')
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id="payroll_wrapper">

        </tbody>
    </table>
</div>

<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            @lang('acc_frm_payroll_ms_Reset')
        </button>
        <button class="btn btn-success" type="submit" id="filter-btn">
            <i class="icon-ok bigger-110"></i>
            @lang('acc_frm_payroll_ms_Add_Payroll')
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>
