<div class="clearfix hidden-print ">
    <div class=" ">
        <a class="{!! request()->is('attendance/staff')?'btn-success':'btn-primary' !!}  btn-sm"  href="{{ route('attendance.staff') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('att_btn_staff_Attendance_Detail')}}</a>
        <a class="{!! request()->is('attendance/staff/add')?'btn-success':'btn-primary' !!}  btn-sm" href="{{ route('attendance.staff.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('att_btn_staff_Add_Edit')}} </a>
    </div>
</div>
<hr class="hr-6">