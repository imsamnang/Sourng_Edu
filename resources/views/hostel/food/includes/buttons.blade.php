<div class="clearfix hidden-print">
    <div class="align-left">
        <a class="{!! request()->is('hostel/food')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.food') }}"><i class="fa fa-spoon" aria-hidden="true"></i> {{ __('hostel.button.FoodMeal') }}</a>
        <a class="{!! request()->is('hostel/food/eating-time*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.food.eating-time') }}"><i class="fa fa-history" aria-hidden="true"></i>{{ __('hostel.button.EatingTime') }}</a>
        <a class="{!! request()->is('hostel/food/category*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.food.category') }}"><i class="fa fa-list-ol" aria-hidden="true"></i>{{ __('hostel.button.FoodCategory') }}</a>
        <a class="{!! request()->is('hostel/food/item*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('hostel.food.item') }}"><i class="fa fa-list" aria-hidden="true"></i>{{ __('hostel.button.FoodItem') }}</a>
    </div>
</div>
<hr class="hr-6">