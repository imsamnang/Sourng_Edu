<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
			<a class="{!! request()->is('permission')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('permission') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('user.Detail') }}</a>
    	{{-- <a class="{!! request()->is('role/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('role.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ __('user.CreateRole') }}</a> --}}
    	<a class="{!! request()->is('permission/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('permission.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ __('Create Permission') }}</a>
    </div>
</div>
<hr class="hr-6">