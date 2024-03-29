<h4 class="header large lighter blue"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp; {{__('acc_tbl_trans_Transaction_Add_Form')}}</h4>
<div class="form-group">
    <div class="col-sm-3"></div>
    {!! Form::label('tr_date', __('acc_tbl_trans_Transaction_Date'), ['class' => 'col-sm-3 control-label input-mask-date']) !!}
    <div class="col-sm-3">
        {!! Form::text('tr_date', null, ["class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd","id"=>"tr_date","required"]) !!}
    </div>
    <div class="col-sm-3"></div>
</div>

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>@lang('acc_tbl_trans_Transaction_Head')</th>
                <th>@lang('acc_tbl_trans_Amount')</th>
                <th>@lang('acc_tbl_trans_Description')</th>
                <th>
                    <button type="button" class="btn btn-xs btn-primary pull-right" id="load-tr-html">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id="transaction_wrapper">

        </tbody>
    </table>
</div>

<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            @lang('acc_tbl_trans_Reset')
        </button>
        <button class="btn btn-success" type="submit" id="tr-add-btn">
            <i class="icon-ok bigger-110"></i>
            @lang('acc_tbl_trans_Add_Transaction')
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>
