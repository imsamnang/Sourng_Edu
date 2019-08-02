<?php $flag=App()->getLocale();  ?>
<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; @lang('staff_search_Staff_Search')</h4>

<div class="clearfix">
    {!! Form::label('reg_no', __('staff_frm_search_REG_NO'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('designation', __('staff_frm_search_Designation'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {{-- {!! Form::select('designation', $data['designations'], null, ['class' => 'form-control', "required"]) !!} --}}
       
        <select class="form-control" name="designation" id="designation" required>
        <option value="0">  {{$flag=='kh'?'ជ្រើសរើស​តួនាទី':'Select Position'}}</option>
            @foreach ($data['designations'] as $item)
                <option value="{{$item->id}}">
                        @if ($flag=='kh')
                            {{$item->title_kh}}                          
                        @else
                            {{$item->title}} 
                        @endif
                    
                </option>           
            @endforeach
        </select>
       
        @include('includes.form_fields_validation_message', ['name' => 'designation'])   
    
    
    </div>
    <label class="col-sm-1 control-label">@lang('staff_frm_search_Status')</label>
    <div class="col-sm-2">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> @lang('staff_frm_search_Select_Status') </option>
            <option value="active" >@lang('staff_frm_search_Active')</option>
            <option value="in-active" >@lang('staff_frm_search_InActive')</option>
        </select>
    </div>
    <div class="col-sm-1">
            <div class="align-right">
                    <button class="btn btn-info" type="submit" id="filter-btn">
                        <i class="fa fa-filter bigger-110"></i>
                        @lang('staff_frm_search_Search')
                    </button>
            </div>
    </div>
</div>
{{-- <div class="clearfix form-actions">
    <div class="align-right">        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-info" type="submit" id="filter-btn">
            <i class="fa fa-filter bigger-110"></i>
            @lang('staff_frm_search_Search')
        </button>
    </div>
</div> --}}