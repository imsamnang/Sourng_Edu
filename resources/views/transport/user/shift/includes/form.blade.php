<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ $panel }}</h4>

<div class="form-group">
    {!! Form::label('user_type', __('label.form.Type'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('reg_no', __('label.form.REG No.'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
    </div>

    {!! Form::label('hostel', __('hostel.button.Hostel'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('hostel', $data['hostels'], null, ['class' => 'form-control', "required", "onChange" => "loadRooms(this)"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'hostel'])
    </div>
</div>

@if(!isset($data['row']))
    <div class="form-group">
        <label class="col-sm-2 control-label">{{ __('hostel.table.Rooms') }}</label>
        <div class="col-sm-4">
            <select name="room_select" class="form-control room_select" onChange="loadBeds(this)">
                <option> {{ __('hostel.form.SelectRoom') }} </option>
            </select>
        </div>

        <label class="col-sm-2 control-label">{{ __('hostel.form.Bed') }}</label>
        <div class="col-sm-4">
            <select name="bed_select" class="form-control bed_select">
                <option> {{ __('hostel.form.SelectBed') }} </option>
            </select>
        </div>
    </div>
@endif
