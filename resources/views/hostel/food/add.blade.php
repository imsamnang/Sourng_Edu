<div class="col-md-4 col-xs-12">
    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{ __('hostel.create') }} {{ __('hostel.FoodSchedules') }}</h4>
<!-- PAGE CONTENT BEGINS -->
    {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
        @include($view_path.'.includes.form')
        <div class="clearfix form-actions">
            <div class="align-right">
                <button class="btn btn-info schedule-btn" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    {{ __('hostel.create') }}
                </button>
            </div>
        </div>
        <div class="hr hr-24"></div>
    {!! Form::close() !!}
    <div class="hr hr-18 dotted hr-double"></div>
</div>