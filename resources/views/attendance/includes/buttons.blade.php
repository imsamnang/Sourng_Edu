<div class="clearfix hidden-print ">
    <div class=" align-right">
        <a class="{!! request()->is('attendance/student*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.student') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;{{__('att_btn_Student_Attendance')}}</a>
        <a class="{!! request()->is('attendance/staff*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.staff') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;{{__('att_btn_Staff_Attendance')}}</a>
        {{--<a class="{!! request()->is('attendance')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('attendance') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Attendance</a>
        <a class="{!! request()->is('attendance/master*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.master') }}"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Attendance Master</a>--}}
    </div>
</div>
<hr class="hr-6">