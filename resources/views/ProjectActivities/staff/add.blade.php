<?php $flag=App()->getLocale(); ?>
@extends('ProjectActivities.layout.master')

@push('custom-css')
  <!-- page specific plugin styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
@endpush
@section('menu-panel')
  @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        @include('layouts.includes.template_setting')
        <div class="page-header">
          <h1>
            @include('ProjectActivities.staff.includes.breadcrumb-primary')
            <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
                @lang('staff_frm_reg_Registration')
            </small>
          </h1>
        </div><!-- /.page-header -->
        <div class="row">
          <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            @include('ProjectActivities.staff.includes.buttons')
            @include('includes.validation_error_messages')
            <div class="align-right">
              <a class="{!! request()->is('staff/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.import') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Bulk Staff Registration</a>
            </div>
            {!! Form::open(['route' =>'staff-save', 'method' => 'POST', 'class' => 'form-horizontal',
            'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
              @include('ProjectActivities.staff.includes.form')
              <div class="clearfix form-actions">
                <div class="col-md-12 align-right">
                  <button class="btn" type="reset">
                    <i class="icon-undo bigger-110"></i>
                      @lang('staff_btn_reg_Reset')
                  </button>
                  <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i>
                      @lang('staff_btn_reg_Register')
                  </button>
                </div>
              </div>
              <div class="hr hr-24"></div>
            {!! Form::close() !!}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.page-content -->
    </div>
  </div><!-- /.main-content -->
@endsection

@push('custom-js')
  @include('includes.scripts.jquery_validation_scripts')
  <!-- inline scripts related to this page -->
  <script type="text/javascript">
    /*Change Field Value on Capital Letter When Keyup*/
    $(function() {
        $('.upper').keyup(function() {
            this.value = this.value.toUpperCase();
        });
    });
    /*end capital function*/
    /*copy permanent address on temporary address*/
    function CopyAddress(f) {
      if(f.permanent_address_copier.checked == true) {
        f.temp_address.value = f.address.value;
        f.temp_country.value = f.country.value;
        f.temp_province.value = f.province.value;
        f.temp_district.value = f.district.value;
        f.temp_commune.value = f.commune.value;
        f.temp_village.value = f.village.value;
      }
    }
  </script>
  @include('ProjectActivities.includes.provinces')
  @include('includes.scripts.inputMask_script')
  @include('includes.scripts.datepicker_script')
@endpush

