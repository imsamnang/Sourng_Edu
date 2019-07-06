<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-right">
        <a class="{!! request()->is('library/book*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.book') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;{{__('book_btn_Book_Detail')}}</a>
        <a class="{!! request()->is('library/issue-history*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.issue-history') }}"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;{{__('book_btn_Issue_History')}}</a>
        <a class="{!! request()->is('library/member*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.member') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{__('book_btn_Membership')}}</a>
        <a class="{!! request()->is('library/student*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.student') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{__('book_btn_Students_Member')}}</a>
        <a class="{!! request()->is('library/staff*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.staff') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{__('book_btn_Staffs_Member')}}</a>
        <a class="{!! request()->is('library/return-over')?'btn-success':'btn-danger' !!} btn-sm " href="{{ route('library.return-over') }}"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;  {{__('book_btn_Return_Period_Over')}}&nbsp;</a>
        <a class="{!! request()->is('library/book*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.book') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.BookDetail') }}</a>
        <a class="{!! request()->is('library/issue-history*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.issue-history') }}"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.IssueHistory') }}</a>
        <a class="{!! request()->is('library/member*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.member') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.Membership') }}</a>
        <a class="{!! request()->is('library/student*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.student') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.StudentsMember') }}</a>
        <a class="{!! request()->is('library/staff*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.staff') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.StaffsMember') }}</a>
        <a class="{!! request()->is('library/return-over')?'btn-success':'btn-danger' !!} btn-sm " href="{{ route('library.return-over') }}"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;  {{ __('library-return-over.ReturnPeriodOver') }}&nbsp;</a>
    </div>
</div>
<hr class="hr-6">