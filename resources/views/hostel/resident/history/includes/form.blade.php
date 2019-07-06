<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{ __('hostel.table.searchhistory') }}</h4>
<div class="form-horizontal">
    <div class="form-group">
        {!! Form::label('user_type', __('label.form.Type'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('user_type', ["0"=>__('hostel.resident.SelectType'),"1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::label('reg_no', __('label.form.REG No.'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
        </div>

        {!! Form::label('year', __('hostel.form.year'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-1">
            {!! Form::select('year', $data['years'], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'year'])
        </div>

        {!! Form::label('history_type', __('hostel.form.HistoryType'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('history_type', ["0"=>__('hostel.resident.SelectHistory'), "Registration"=>"Registration", "Shift"=>"Shift","Leave"=>"Leave", "Renew"=>"Renew"], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'history_type'])
        </div>
    </div>

    <div class="form-group">

        {!! Form::label('hostel', __('hostel.button.Hostel'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::select('hostel', $data['hostels'], null, ['class' => 'form-control', "onChange" => "loadAllRooms(this)"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'hostel'])
        </div>

        <label class="col-sm-1 control-label">{{ __('hostel.table.Rooms') }}</label>
        <div class="col-sm-3">
            <select name="room_select" class="form-control room_select" onChange="loadAllBeds(this)">
                <option value="0"> {{ __('hostel.form.SelectRoom') }} </option>
            </select>
        </div>

        <label class="col-sm-1 control-label">{{ __('hostel.form.Bed') }}</label>
        <div class="col-sm-2">
            <select name="bed_select" class="form-control bed_select">
                <option value="0"> {{ __('hostel.form.SelectBed') }} </option>
            </select>
        </div>

    </div>
    <div class="clearfix form-actions">
        <div class="align-right">            &nbsp; &nbsp; &nbsp;
            <button class="btn btn-info" type="submit" id="filter-btn">
                <i class="fa fa-filter bigger-110"></i>
                {{ __('hostel.form.search') }}
            </button>
        </div>
    </div>
</div>