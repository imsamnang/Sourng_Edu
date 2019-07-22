@extends('projectactivities.layout.master')
<?php  $flag = app()->getlocale();?>
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

<div class="container-fluid">
            <div class="tabbable"  style="margin-top:20px;">
                  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="mytab4">
                        {{-- <h2>record # ps-852</h2> --}}
                        <li class="active">
                              <a style="font-family: 'khmer os battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">កម្មវិធីលម្អិត # ps - {{ $longcourse_detail->id }}&#8203;</a>
                        </li>
      
                  </ul>
                  <div class="tab-content" >                   
                        <div class="card-body">                        
                              <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                                <label><strong>{{ __('longcourse-mainsubject') }}</strong></label>
                                                @if($flag=='kh')
                                                <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->faculty->faculty_kh }}</label>
                                                @endif
                                                @if($flag=='en') 
                                                <label class="responsive" style="color: red;margin-left: 46px;">{{ $longcourse_detail->faculty->faculty_en }}</label>
                                                @endif
                                          </div>                        
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                                <label><strong>{{ __('longcourse-detail_program type') }}</strong></label>&emsp;
                                                     @if($flag=='kh')
                                                    <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->program_type->title_kh }}</label>
                                                    @endif
                                                    @if($flag=='en') 
                                                    <label style="color: red;margin-left: 28px;">{{ $longcourse_detail->program_type->title_en }}</label>
                                                    @endif
                                          </div>
                                    </div>
                
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('longcourse-detail_overalfund') }}</strong></label>&emsp;
                                                      @if($flag=='kh')
                                                      <label class="responsive" style="color: red;margin-left: 28px;">{{ $longcourse_detail->overalfundname->title_kh }}</label>
                                                      @endif
                                                      @if($flag=='en') 
                                                      <label class="responsive" style="color: red;margin-left: 36px;">{{ $longcourse_detail->overalfundname->title_en }}</label>
                                                      @endif
                                                </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('longcourse-curriculumendorsement') }}</strong></label>&emsp;
                                                      @if($flag=='kh')
                                                      <label class="responsive" style="color: red;margin-left: 0px;">{{ $longcourse_detail->curri_edorsement->title_kh }}</label>
                                                      @endif
                                                      @if($flag=='en') 
                                                      <label class="responsive" style="color: red;margin-left: 0px !important;">{{ $longcourse_detail->curri_edorsement->title_en }}</label>
                                                      @endif
                                                </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('longcourse-curriculumauthor') }}</strong></label>&emsp;
                                                      @if($flag=='kh')
                                                      <label class="responsive" style="color: red;margin-left: 0px;">{{ $longcourse_detail->curri_author->title_kh }}</label>
                                                      @endif
                                                      @if($flag=='en') 
                                                      <label class="responsive" style="color: red">{{ $longcourse_detail->curri_author->title_en }}</label>
                                                      @endif
                                                </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('longcourse-startdate') }}</strong></label>&emsp;
                                                            @if ($flag=='kh')
                                                            <label style="color: red; margin-left: 20px;">{{ $longcourse_detail->promotion_start_date }}</label>
                                                          @endif
                                                          @if($flag=='en')
                                                            <label style="color: red; margin-left: 52px;">{{ $longcourse_detail->promotion_start_date }}</label>
                                                          @endif
                                                </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                                <label><strong>{{ __('longcourse-studyyear') }}</strong></label>&emsp;
                                                @if($flag=='kh')
                                                <label style="color: red;margin-left: 57px;">{{ $longcourse_detail->academic_year }}</label>
                                                @endif
                                                @if($flag=='en')
                                                <label style="color: red;margin-left: 45px;">{{ $longcourse_detail->academic_year }}</label>
                                                @endif
                                          </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('longcourse-bath/group') }}</strong></label>&emsp;
                                                      @if($flag=='kh')
                                                      <label class="responsive" style="color: red;margin-left: 30px;">{{ $longcourse_detail->batch_group }}</label>
                                                      @endif
                                                      @if($flag=='en') 
                                                      <label class="responsive" style="color: red;margin-left: 44px;">{{ $longcourse_detail->batch_group }}</label>
                                                      @endif
                                                </div>
                                    </div>

                              </div> 
                        </div>
                  
                        <a class="btn btn-primary" href="{{ route('projects.longcourse') }}"><span class="menu-icon fa  fa-backward"></span> {{$flag=='kh'?'ត្រឡប់ក្រោយ':'back to list'}}</a>
                  </div>
            </div>
</div>

@endsection

@push('custom-js')


@endpush