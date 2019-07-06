<div class="clearfix hidden-print ">
    <div class=" ">
        <a class="{!! request()->is('attendance/student')?'btn-success':'btn-primary' !!}  btn-sm"  href="{{ route('attendance.student') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('att_btn_student_Attendance_Detail')}}</a>
        <a class="{!! request()->is('attendance/student/add')?'btn-success':'btn-primary' !!}  btn-sm" href="{{ route('attendance.student.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('att_btn_student_Add_Edit')}} {{ $panel }}</a>
    </div>
</div>
<hr class="hr-6">