<h4 class="header large lighter blue"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{ __('acc_tbl_add_Add_Form') }} </h4>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>@lang('acc_tbl_add_Warning')</strong>
    {{ __('acount-fee-master.info') }}
    <br>
</div>
{!! Form::open(['route' => $base_route.'.store', 'id' => 'fee_add_form']) !!}

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>@lang('acc_tbl_add_Fee_Head')</th>
            <th>@lang('acc_tbl_add_Due_Date')</th>
            <th>@lang('acc_tbl_add_Amount')</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="load-fee-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> @lang('acc_tbl_add_Insert_Rows')
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="fee_wrapper">

            @if (isset($data['row']))

                @foreach($data['product_attribute_array'] as $attribute)

                    @include($view_path.'.includes.fee_tr_edit', ['attribute_groups' => $data['attribute_groups'],'attribute' => $attribute])

                @endforeach

            @endif

        </tbody>

    </table>
</div>


<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            @lang('acc_tbl_add_Reset')
        </button>
        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-success" type="submit" id="fee-add-btn">
            <i class="icon-ok bigger-110"></i>
            @lang('acc_tbl_add_Add_Fee')
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>

