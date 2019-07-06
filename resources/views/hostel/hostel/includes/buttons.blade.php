<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="{!! request()->is('hostel')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('hostel') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;{{ __('hostel.button.detail') }}</a>
        <a class="{!! request()->is('hostel/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.add') }}"><i class="fa fa-plus" aria-hidden="true"></i> {{ __('hostel.button.addhostel') }}</a>
        <a class="{!! request()->is('hostel/room-type*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.room-type') }}"><i class="fa fa-th-list" aria-hidden="true"></i> {{ __('hostel.button.RoomType') }}</a>
        <a class="{!! request()->is('bed-status*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('bed-status') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> {{ __('hostel.button.BedStatus') }}</a>
    </div>
</div>
<hr class="hr-4">
