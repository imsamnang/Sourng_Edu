<h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ $panel }} @lang('Panel_List') </h4>
<div class="clearfix">

    <span class="easy-link-menu">
        <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;@lang('btn_st_Active')</a>
        <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="in-active"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;@lang('btn_st_inActive')</a>
        <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;@lang('btn_st_Delete')</a>
    </span>

    <span class="pull-right tableTools-container"></span>
</div>
<div class="table-header">
    {{ $panel }}​ @lang('Panel_st_Record') 
</div>