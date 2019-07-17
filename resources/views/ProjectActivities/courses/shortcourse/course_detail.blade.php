@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>


@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@push('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />

@endpush
@section('content')

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; margin-bottom: 0px; padding-left: 30px; padding-right: 30px; padding-bottom: 0px; padding-top: 5px; border-color: #79b0ce;">

  <h5 style="color: white; font-family: Khmer OS Battambang; font-size: 24px;
  background-color: #438eb9; padding: 10px;">កម្មវិធីលម្អិត S- {{ $shortcourse_detail->id }}</h5>
  
  <div class="card-body">
      
            <div class="row">
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('shortcoure_Course-Code') }}</strong></label>
                             @if ($flag=='kh')
                              <label class="responsive" style="color: red;margin-left: 28px;">{{ $shortcourse_detail->faculty->faculty_kh }}</label>
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
                                <label style="color: red;margin-left: 10px;">{{ $shortcourse_detail->course_name }}</label>
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
                              <label><strong>Training Houre</strong></label>&emsp;
                                @if ($flag=='kh')
                                <label style="color: red; margin-left: 5px;">{{ $shortcourse_detail->total_training_hour }}</labelp>
                                @endif
                                @if ($flag=='en')
                                <label style="color: red; margin-left: 5px;">{{ $shortcourse_detail->total_training_hour }}</label>
                                @endif
                          </div>
                    </div>
            </div>

            <div class="row">
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>Teacher Name</strong></label>&emsp;
                                 @if ($flag=='kh')
                                 <label style="color: red;margin-left: 5px;">សន សុផល</label>
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
                                  <label style="color: red; margin-left: 46px;">{{ $shortcourse_detail->modalityName->modality_kh }}</label>
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
                        <label><strong>Training Place</strong></label>&emsp;
                              @if ($flag=='kh')
                              <label style="color: red; margin-left: 8px;">{{ $shortcourse_detail->province->name_kh }}</label>
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
                        <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}" style="color: red; margin-left: 38px;">{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}</label>
                    </div>
              </div>
            </div>
  </div>

  <a href="{{ route('projects.shortcourse') }}" style="float: right; margin:0px;padding: 0px;">Back</a>
@endsection
@push('custom-js')


@endpush
