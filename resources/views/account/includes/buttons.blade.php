<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-right">
        <a class="{!! request()->is('account/fee*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Student_Fee')}}</a>
        <a class="{!! request()->is('account/transaction*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.transaction') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Transaction')}}</a>
        <a class="{!! request()->is('account/payroll*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.master.add') }}"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Staff_Payroll')}}</a>
    </div>
</div>
<hr class="hr-6">