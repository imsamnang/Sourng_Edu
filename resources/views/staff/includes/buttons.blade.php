<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('staff')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('staff') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Staff_Detail')}}</a>
        <a class="{!! request()->is('staff/add*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Registration')}}</a>
        <a class="{!! request()->is('staff/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.import') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Bulk_Registration')}}</a>
        <a class="{!! request()->is('staff/document*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.document') }}"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Documents')}}</a>
        <a class="{!! request()->is('staff/note*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.note') }}"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Notes')}}</a>
        <a class="{!! request()->is('account/payroll/balance')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.balance') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{__('staff_btt_Payroll')}}</a>
        <a class="{!! request()->is('library/staff*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.staff') }}"><i class="fa fa-book" aria-hidden="true"></i> {{__('staff_btt_Library')}}</a>
        <a class="{!! request()->is('attendance/staff*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.staff') }}"><i class="fa fa-calendar" aria-hidden="true"></i>{{__('staff_btt_Attendance')}}</a>
        <a class="{!! request()->is('staff/designation*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.designation') }}"><i class="fa fa-star-half-full" aria-hidden="true"></i>{{__('staff_btt_Designation')}}</a>
    </div>
</div>
<hr class="hr-6">