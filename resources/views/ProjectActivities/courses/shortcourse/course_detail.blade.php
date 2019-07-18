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

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; margin-bottom: 0px; padding-left: 30px; padding-right: 30px; padding-bottom: 20px; padding-top: 5px; border-color: #79b0ce;">

  <h5 style="color: white; font-family: Khmer OS Battambang; font-size: 24px;
  background-color: #438eb9; padding: 10px;">កម្មវិធីលម្អិត S- {{ $shortcourse_detail->id }}</h5>
  
  <div class="card-body">
      
            <div class="row">
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('shortcoure_Course-Code') }}</strong></label>
                             @if ($flag=='kh')
                              <label class="responsive" style="color: red;margin-left: 42px;">{{ $shortcourse_detail->faculty->faculty_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label class="responsive" style="color: red;margin-left: 28px;">{{ $shortcourse_detail->faculty->faculty_en }}</label>
                              @endif
                        </div>                        
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('shortcoure_Course_Name') }}</strong></label>&emsp;
                                @if ($flag=='kh')
                                <label style="color: red;margin-left: 42px;">{{ $shortcourse_detail->course_name }}</label>
                                @endif
                                @if ($flag=='en')
                                <label style="color: red;margin-left: 10px;">{{ $shortcourse_detail->course_name }}</label>
                                @endif
                        </div>
                  </div>
            </div>              
            <div class="row">
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>{{ __('shortcoure_Overal-Fund') }}</strong></label>&emsp;
                                   @if ($flag=='kh')
                                   <label class="responsive" style="color: red;margin-left: 20px;">{{ $shortcourse_detail->overalFund->title_kh }}</label>
                                   @endif
                                   @if ($flag=='en')
                                   <label class="responsive" style="color: red;margin-left: 20px;">{{ $shortcourse_detail->overalFund->title_en }}</label>
                                   @endif
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>{{ __('shortcoure_Training_Hour') }}</strong></label>&emsp;
                                @if ($flag=='kh')
                                <label style="color: red; margin-left: 23px;">{{ $shortcourse_detail->total_training_hour }}</labelp>
                                @endif
                                @if ($flag=='en')
                                <label style="color: red; margin-left: 15px;">{{ $shortcourse_detail->total_training_hour }}</label>
                                @endif
                          </div>
                    </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Teacher_Name') }}</strong></label>&emsp;
                             @if ($flag=='kh')
                             <label style="color: red;margin-left: 45px;">សន សុផល</label>
                             @endif
                             @if ($flag=='en')
                             <label style="color: red;margin-left: 5px;">សន សុផល</label>
                             @endif
                    </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Modality') }}</strong></label>&emsp;
                              @if ($flag=='kh')
                              <label style="color: red; margin-left: 0px;">{{ $shortcourse_detail->modalityName->modality_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label style="color: red; margin-left: 46px;">{{ $shortcourse_detail->modalityName->modality_en }}</label>
                              @endif
                    </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Training_Place') }}</strong></label>&emsp;
                              @if ($flag=='kh')
                              <label style="color: red; margin-left: 60px;">{{ $shortcourse_detail->province->name_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label style="color: red; margin-left: 8px;">{{ $shortcourse_detail->province->name_en }}</label>
                              @endif
                    </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Start-Date') }}</strong></label>&emsp;
                        <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}" style="color: red; margin-left: 35px;">{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}</label>
                    </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_EndDate') }}</strong></label>&emsp;
                        @if($flag=='kh')
                          <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}" style="color: red; margin-left: 50px;">{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}</label>
                        @endif
                        @if($flag=='en')
                          <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}" style="color: red; margin-left: 38px;">{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}</label>
                        @endif
                        
                    </div>
              </div>
            </div>
            
        
  </div>

  <a class="btn btn-primary" href="{{ route('projects.shortcourse') }}"><span class="menu-icon fa  fa-backward"></span> {{$flag=='kh'?'ត្រឡប់ក្រោយ':'Back to List'}}</a>
  </div>
@endsection
@push('custom-js')


@endpush
