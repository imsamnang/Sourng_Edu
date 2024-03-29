    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;@lang('acc_frm_add_Create Head')</h4>
<!-- PAGE CONTENT BEGINS -->
    {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
        @include($view_path.'.includes.form')
        <div class="clearfix form-actions align-right">
            <div class="col-md-12">
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    @lang('acc_frm_add_Create')
                </button>
            </div>
        </div>
        <div class="hr hr-24"></div>
    {!! Form::close() !!}
    <div class="hr hr-18 dotted hr-double"></div>
