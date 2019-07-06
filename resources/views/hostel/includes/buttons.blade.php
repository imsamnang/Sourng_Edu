<div class="clearfix hidden-print " >
    <div class="align-right">
        <a class="{!! request()->is('hostel/resident*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('hostel.resident') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{{ __('hostel.button.Resident') }}</a>
        <a class="{!! request()->is('hostel*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel') }}"><i class="fa fa-bed" aria-hidden="true"></i> {{ __('hostel.button.Hostel') }}</a>
        <a class="{!! request()->is('hostel/food*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.food') }}"><i class="fa fa-spoon" aria-hidden="true"></i> {{ __('hostel.button.FoodMeal') }}</a>
    </div>
</div>
<hr class="hr-6">
