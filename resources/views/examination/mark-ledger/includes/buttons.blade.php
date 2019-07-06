<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('exam/mark-ledger')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('exam.mark-ledger') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('exam_btn_mark_Mark_Ledger_Detail')}}</a>
        <a class="{!! request()->is('exam/mark-ledger/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('exam.mark-ledger.add') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;{{__('exam_btn_mark_Prepare_Ledger_Edit')}}</a>
    </div>
</div>
<hr class="hr-6">