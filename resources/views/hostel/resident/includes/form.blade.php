<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ __('m_Resident') }}</h4>

<div class="form-group">
    {!! Form::label('user_type',  __('label.form.Type'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('user_type', ["0"=>__('hostel.resident.SelectType'),"1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('reg_no', __('label.form.REG No.'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('reg_no', $data['reg_no'], ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
    </div>

   {{-- {!! Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('status', ["1"=>"Active","0"=>"Leave"], null, ['class' => 'form-control']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'status'])
    </div>--}}

</div>

@if(!isset($data['row']))
    <div class="form-group">

    {!! Form::label('hostel', __('hostel.button.Hostel'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('hostel', $data['hostels'], null, ['class' => 'form-control', "required", "onChange" => "loadRooms(this)"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'hostel'])
    </div>
        <label class="col-sm-1 control-label">{{ __('hostel.table.Rooms') }}</label>
        <div class="col-sm-2">
            <select name="room_select" class="form-control room_select" onChange="loadBeds(this)">
                <option> {{ __('hostel.form.SelectRoom') }} </option>
            </select>
        </div>

        <label class="col-sm-1 control-label">{{ __('hostel.form.Bed') }}</label>
        <div class="col-sm-2">
            <select name="bed_select" class="form-control bed_select">
                <option> {{ __('hostel.form.SelectBed') }} </option>
            </select>
        </div>
    </div>
@endif
