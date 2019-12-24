<div class="clearfix hidden-print ">
  <div class="easy-link-menu align-left">
    <a class="{!! request()->is('student')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('quiz.subject.type.show','id') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('btn_Detail')}}</a>
    <a class="{!! request()->is('student/registration*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('quiz.subject.type.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('btn_Registration')}}</a>
  </div>
  <hr class="hr-6 ">
</div>
