<?php $flag=App()->getLocale(); ?>
@extends('layouts.master')
@section('css')
<!-- page specific plugin styles -->
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
@endsection
@section('content')
<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      <div class="page-header">
        <h1>Teacher @lang('staff_frm_reg_Registration')</h1>
      </div><!-- /.page-header -->
      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          @include('includes.validation_error_messages')
          {!! Form::open(['route' =>'teacher.store', 'method' => 'POST', 'class' => 'form-horizontal',
          'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
          <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
          @include($view_path.'.includes.form')
          
          <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
              <button class="btn btn btn-info btn-sm" type="reset">
              <i class="icon-undo bigger-110"></i>
              @lang('staff_btn_reg_Reset')
              </button>
              <button class="btn btn-success btn-sm" type="submit">
              <i class="icon-ok bigger-110"></i>
              @lang('staff_btn_reg_Register')
              </button>
            </div>
          </div>
          {{-- <div class="hr hr-24"></div> --}}
          {!! Form::close() !!}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div><!-- /.main-content -->
@endsection

@section('js')
  @include('ProjectActivities.includes.provinces')
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
      }
    }
  </script>
  @include('ProjectActivities.includes.provinces')
  @include('includes.scripts.inputMask_script')
  @include('includes.scripts.datepicker_script')
@endsection