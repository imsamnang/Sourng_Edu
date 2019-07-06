<h4 class="header large lighter blue" id="filterBox"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search {{ $panel }}</h4>
<div class="form-horizontal" id="filterDiv">
    <div class="form-group">
        {!! Form::label('user_type', __('label.form.Type'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::label('reg_no', __('label.form.REG No.'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
        </div>


        {!! Form::label('hostel', __('m_Hostels'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::select('hostel', $data['hostels'], null, ['class' => 'form-control', "onChange" => "loadRooms(this)"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'hostel'])
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">{{ __('hostel.table.Rooms') }}</label>
        <div class="col-sm-2">
            <select name="room_select" class="form-control room_select" onChange="loadBeds(this)">
                <option value="0"> {{ __('hostel.form.SelectRoom') }} </option>
            </select>
        </div>

        <label class="col-sm-2 control-label">{{ __('hostel.form.Bed') }}</label>
        <div class="col-sm-2">
            <select name="bed_select" class="form-control bed_select">
                <option value="0"> {{ __('hostel.form.SelectBed') }} </option>
            </select>
        </div>

        {!! Form::label('status', __('hostel.table.Status'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('status', ["0"=>"Select Status...", "1"=>"Active","2"=>"Leave"], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'status'])
        </div>
    </div>
    <div class="clearfix form-actions">
        <div class="align-right">            &nbsp; &nbsp; &nbsp;
            <button class="btn btn-info" type="submit" id="filter-btn">
                <i class="fa fa-filter bigger-110"></i>
                {{ __('stu_trans_Search') }}
            </button>
        </div>
    </div>
</div>