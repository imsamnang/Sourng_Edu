<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('account/fees')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.fees') }}"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Receive_History')}}</a>
        <a class="{!! request()->is('account/fees/master')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.fees.master') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Master_Detail')}}</a>
        <a class="{!! request()->is('account/fees/master/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.master.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Add_Fees')}}</a>
        <a class="{!! request()->is('account/fees/collection')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.collection') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Collect_Fees')}}</a>
        <a class="{!! request()->is('account/fees/balance')?'btn-success':'btn-warning' !!} btn-sm" href="{{ route('account.fees.balance') }}"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Due_Fees')}}</a>
        <a class="{!! request()->is('account/fees/head')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.head') }}"><i class="fa fa-header" aria-hidden="true"></i>&nbsp;{{__('acc_btn_fee_Fees_Head')}}</a>
    </div>
</div>
<hr class="hr-6">