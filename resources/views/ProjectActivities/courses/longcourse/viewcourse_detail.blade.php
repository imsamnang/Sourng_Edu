@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>
@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@push('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
<style>
      .btn-primary {
      color: #fff;
      background-color: #337ab7;
      border-color: #2e6da4;
      }
      .btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      border-radius: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }
</style>
@endpush
@section('content')

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">

  <h5 style="color: white; font-family: Khmer OS Battambang;
  background-color: #438eb9; padding: 10px; margin-bottom: 15px;">លម្អិតវគ្គវែង</h5>
  
        <div class="card-body">
              
            <div class="row">
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>Main Subject</strong></label>
                              @if($flag=='kh')
                              <label class="responsive" style="color: red;margin-left: 10px;">{{ $longcourse_detail->faculty->faculty_kh }}</label>
                              @endif
                              @if($flag=='en') 
                              <label class="responsive" style="color: red;margin-left: 28px;">{{ $longcourse_detail->faculty->faculty_en }}</label>
                              @endif
                        </div>                        
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('longcourse-detail_Program Type') }}</strong></label>&emsp;
                                
                                  @if($flag=='kh')
                                  <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->program_type->title_kh }}</label>
                                  @endif
                                  @if($flag=='en') 
                                  <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->program_type->title_en }}</label>
                                  @endif
                        </div>
                  </div>
            </div>

            <div class="row">
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>{{ __('longcourse-detail_OveralFund') }}</strong></label>&emsp;
                                  @if($flag=='kh')
                                  <label class="responsive" style="color: red;margin-left: 1px;">{{ $longcourse_detail->overalFundName->title_kh }}</label>
                                  @endif
                                  @if($flag=='en') 
                                  <label class="responsive" style="color: red;margin-left: 20px;">{{ $longcourse_detail->overalFundName->title_en }}</label>
                                  @endif
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>Start Date</strong></label>&emsp;
                              @if($flag=='kh')
                                <label style="color: red; margin-left: 73px;">{{ $longcourse_detail->promotion_start_date }}</label>
                              @endif
                              @if($flag=='en')
                                <label style="color: red; margin-left: 35px;">{{ $longcourse_detail->promotion_start_date }}</label>
                              @endif


                          </div>
                    </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('Studytime') }}</strong></label>&emsp;
                        @if($flag=='kh')
                        <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->academic_year }}</label>
                        @endif
                        @if($flag=='en')
                        <label style="color: red;margin-left: 32px;">{{ $longcourse_detail->academic_year }}</label>
                        @endif
                    </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Bath Group</strong></label>&emsp;
                        @if($flag=='kh')
                        <label style="color: red; margin-left: 63px;">{{ $longcourse_detail->batch_group }}</label>
                        @endif
                        @if($flag=='en')
                        <label style="color: red; margin-left: 28px;">{{ $longcourse_detail->batch_group }}</label>
                        @endif
                    </div>
              </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('projects.longcourse') }}"><span class="menu-icon fa  fa-backward"></span> {{$flag=='kh'?'ត្រឡប់ក្រោយ':'Back to List'}}</a>
</div>

@endsection

@push('custom-js')


@endpush