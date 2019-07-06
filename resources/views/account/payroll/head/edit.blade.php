   <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Edit {{ __('acc_tbl_head_payroll_Payroll_Head') }}</h4>
@include('includes.flash_messages')
<!-- PAGE CONTENT BEGINS -->
    {!! Form::model($data['row'], ['route' => [$base_route.'.update', $data['row']->id], 'method' => 'POST', 'class' => 'form-horizontal',
                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
    {!! Form::hidden('id', $data['row']->id) !!}
        @include($view_path.'.includes.form')
        <div class="clearfix form-actions">
            <div class="col-md-offset-8 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    @lang('acc_frm_add_head_Update')
                </button>
            </div>
        </div>
        <div class="hr hr-24"></div>
    {!! Form::close() !!}
    <div class="hr hr-18 dotted hr-double"></div>
