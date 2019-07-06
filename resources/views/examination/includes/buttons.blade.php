<div class="clearfix hidden-print ">
    <div class="align-right">
		<a class="{!! request()->is('exam')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('exam') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('exam_btn_sched_Exam_Type')}}</a>
		<a class="{!! request()->is('exam/schedule*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('exam.schedule') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;{{__('exam_btn_sched_Schedule')}}</a>
		<a class="{!! request()->is('exam/mark-ledger*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('exam.mark-ledger') }}"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;{{__('exam_btn_sched_Mark_Ledger')}}</a>
    </div>
</div>
<hr class="hr-6">