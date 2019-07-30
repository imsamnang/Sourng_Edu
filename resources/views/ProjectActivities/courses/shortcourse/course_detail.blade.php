@extends('ProjectActivities.layout.master')
<?php  $flag = app()->getLocale();?>


@section('menu-panel')
@include('ProjectActivities.layout.menu.menu_admin')
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
                  
                  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                        {{-- <h2>Record # PS-852</h2> --}}
                        <li class="active">
                              <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">កម្មវិធីលម្អិត # PS - {{ $shortcourse_detail->id }}&#8203;</a>
                        </li>
      
                  </ul>
                  <div class="tab-content" > 
                                              
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
                                    <div class="col-md-8">
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
                                                      <label><strong>{{ __('shortcoure_Modality') }}</strong></label>&emsp;
                                                            @if ($flag=='kh')
                                                            <label style="color: red; margin-left: 0px;">{{ $shortcourse_detail->modalityName->modality_kh }}</label>
                                                            @endif
                                                            @if ($flag=='en')
                                                            <label style="color: red; margin-left: 5px;">{{ $shortcourse_detail->modalityName->modality_en }}</label>
                                                            @endif
                                                </div>
                                          </div>

                                    <div class="col-md-3">
                                          <div class="form-group">
                                                <label><strong>{{ __('shortcoure_Training_Hour') }}</strong></label>&emsp;
                                                @if ($flag=='kh')
                                                <label style="color: red;">{{ $shortcourse_detail->total_training_hour }} ម៉ោង</label>
                                                @endif
                                                @if ($flag=='en')
                                                <label style="color: red; margin-left: 15px;">{{ $shortcourse_detail->total_training_hour }} Hours</label>
                                                @endif
                                          </div>
                                    </div>

                                    <?php $i=0;?>
                                                
                        @foreach ($teacher_course as $item)
                                    {{-- <div class="col-md-2">
                                                <div class="form-group">
                                                                                                            
                                                </div>
                                    </div> --}}
                                    <div class="col-md-4">
                                                <div class="form-group">    
                                                      <label><strong>{{ __('shortcoure_Teacher_Name') }} (<?php echo $i=$i+1; ?>)</strong></label>&emsp;                                                 
                                                      @if ($flag=='kh')
                                                      <label style="color: red;">{{$item->first_name}} </label>
                                                      @endif
                                                      @if ($flag=='en')
                                                      <label style="color: red;">{{$item->last_name}} </label>
                                                      @endif
                                                </div>
                                    </div>                                    
                                    <div class="col-md-3">
                                                <div class="form-group">                                                       
                                                            <label style="color: red;"> <i class="fa fa-phone-square" style="color:green;" aria-hidden="true"></i> {{$item->home_phone}} - <i class="fa fa-calendar" style="color:green;"  aria-hidden="true"></i>{{date('Y-m-d',strtotime($item->date_of_birth))}}</label>
                                                </div>
                                    </div>

                                    <div class="col-md-4">
                                                <div class="form-group">
                                                      <label><strong>{{__('total_teacher_hours1')}} ({{$i}})</strong></label>&emsp;
                                                      @if ($flag=='kh')
                                                      <label style="color: red; margin-left: 20px;" >{{$item->total_training_hour}} ម៉ោង</label>
                                                      @endif
                                                      @if ($flag=='en')
                                                      <label style="color: red; margin-left: 5px;">{{$item->total_training_hour}} Hours</label>
                                                      @endif
                                                </div>
                                    </div>                                        
                        @endforeach
                                   
               
                                    <div class="col-md-12">
                                                <div class="form-group">
                                                      <label><strong>{{ __('shortcoure_Training_Place') }}</strong></label>&emsp;
                                                            @if ($flag=='kh')
                                                            <label style="color: red; margin-left: 50px;">{{ $shortcourse_detail->province->name_kh }}</label>
                                                            @endif
                                                            @if ($flag=='en')
                                                            <label style="color: red; margin-left: 20px;">{{ $shortcourse_detail->province->name_en }}</label>
                                                            @endif
                                                </div>
                                    </div>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                                <label><strong>{{ __('shortcoure_Start-Date') }}</strong></label>&emsp;
                                                <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}" style="color: red; margin-left: 20px;">{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}</label>
                                          </div>
                                    </div>
                  
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
            </div>
</div>

@endsection
@push('custom-js')


@endpush
