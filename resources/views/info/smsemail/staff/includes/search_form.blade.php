<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{ __('info-smsemail.StaffSearch') }}</h4>

<div class="clearfix">
    {!! Form::label('reg_no', __('info-smsemail.REG.NO.'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('designation', __('info-smsemail.Designation'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('designation', $data['designations'], null, ['class' => 'form-control', "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'designation'])
    </div>
    <label class="col-sm-1 control-label">{{ __('info-smsemail.Status') }}</label>
    <div class="col-sm-2">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> {{ __('info-smsemail.SelectStatus') }} </option>
            <option value="active" >{{ __('info-smsemail.Active') }}</option>
            <option value="in-active" >{{ __('info-smsemail.In-Active') }}</option>
        </select>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="align-right">        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            {{ __('info-smsemail.Search') }}
        </button>
    </div>
</div>