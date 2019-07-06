<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('account/payroll/master')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.payroll.master') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('acc_btn_payment_Payroll_Detail')}}</a>
        <a class="{!! request()->is('account/payroll/master/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.master.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('acc_btn_payment_Add_Salary')}}</a>
        <a class="{!! request()->is('account/salary/payment*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.salary.payment') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{__('acc_btn_payment_Pay_Salary')}}</a>
        <a class="{!! request()->is('account/payroll/balance')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.balance') }}"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;{{__('acc_btn_payment_Due_Salary')}}</a>
        <a class="{!! request()->is('account/payroll/head')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.head') }}"><i class="fa fa-header" aria-hidden="true"></i>&nbsp;{{__('acc_btn_payment_Payroll_Head')}}</a>
    </div>
</div>
<hr class="hr-6">