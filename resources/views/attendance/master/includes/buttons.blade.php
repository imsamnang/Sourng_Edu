<div class="clearfix hidden-print ">
    <div class="">
        <a class="{!! request()->is('attendance/master')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('attendance.master') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('att_btn_calendar_List')}}</a>
        <a class="{!! request()->is('attendance/master/add*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.master.add') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;{{__('att_btn_calendar_Add')}}</a>
    </div>
</div>
<hr class="hr-6">