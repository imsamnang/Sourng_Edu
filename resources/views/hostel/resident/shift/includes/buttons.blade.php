<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="{!! request()->is('hostel/resident')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('hostel.resident') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{ __('Panel_Detail') }}</a>
        <a class="{!! request()->is('hostel/resident/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.resident.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ __('btn_Registration') }}</a>
        <a class="{!! request()->is('hostel/resident/history')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.resident.history') }}"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;{{ __('hostel.button.History') }}</a>
    </div>
</div>