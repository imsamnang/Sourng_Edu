<!-- Modal -->
<div class="modal fade" id="activeAgain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => $base_route.'.renew', 'method' => 'POST', 'class' => 'form-horizontal',
                       'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

        <div class="modal-content">
            <div class="modal-header">
                {{--<button type="button" class="close top-close" data-dismiss="modal" id="close-button">×</button>
                <h4 class="modal-title title text-center fees_title" id="MasterTitle"><b>Class 6 General:</b> admission-fees</h4>--}}
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input type="hidden" name="userId" id="userId" value=""/>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">{{ __('Transport.Route') }}</label>
                                    <div class="col-sm-9">
                                        {!! Form::select('route_assign', $data['routes'], null, ['class' => 'form-control', "onChange" => "loadVehicle(this)"]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">{{ __('Transport.Vehicle') }}</label>
                                    <div class="col-sm-9">
                                        <select name="vehicle_assign" class="form-control vehicle_select" onChange="loadBeds(this)">
                                            <option value="0"> {{ __('Transport.SelectVehicle') }} </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="box-body">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ __('Transport.Cancel') }}</button>
                    <button type="submit" class="btn cfees save_button btn-success" id="renew-btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> <i class="fa fa-car" aria-hidden="true"></i> {{ __('Transport.AssignTransport') }} </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>