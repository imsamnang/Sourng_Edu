       <?php  $flag = app()->getLocale();?>
       @extends('ProjectActivities.layout.master')

       @section('css')
       <!-- page specific plugin styles -->
       <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
       @endsection
       @section('menu-panel')
       {{-- @include('ProjectActivities.layout.menu.menu_admin') --}}
       @include('layouts.includes.menu')
       @endsection

       @section('content')
       @if($message = Session::get('success'))
       <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif




<div class="container-fluid wrapper" style="margin-right: 20px; margin-left: 20px;">
  <div class="tabbable"  style="margin-top:20px;">
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4" style="background-color:;">
              <li class="active">
                <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">Edit Long Course</a>
              </li>
            </ul>
        <div class="tab-content">
            <form  action="{{ route('longcourse.update',$longcourse->id) }}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <input type="hidden" name="flag" value="{{ $flag }}" id="flag">
                  <div class="row">
                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">Main Subject</label>
                            <div class="col-xs-12 col-sm-9">
                                    <select style="width: 100%" name="cbo_subject" required="">
                                      @if ($flag=='kh')
                                      <option selected disabled>សូមជ្រើសរើស </option>
                                      @endif

                                      @if ($flag=='en')
                                      <option selected disabled>Please Choose </option>
                                      @endif
                                      @foreach ($faculty as $fac)
                                          @if($flag=='kh')
                                          <option value="{{ $fac->id }}"
                                            {{ $fac->id==$longcourse->faculties_id?'selected' :'' }}>
                                            {{ $fac->faculty_kh }}
                                          </option>
                                          @endif
                                          @if($flag=='en')
                                          <option value="{{ $fac->id }}"
                                            {{ $fac->id==$longcourse->faculties_id?'selected' :'' }}>
                                            {{ $fac->faculty_en }}
                                          </option>
                                          @endif 
                                      @endforeach
                                    </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('longcourse-detail_Program Type') }}</label>
                            <div class="col-xs-12 col-sm-9">
                                    <select style="width: 100%" name="cbo_type" required="">
                                     @if ($flag=='kh')
                                        <option selected disabled>សូមជ្រើសរើស </option>
                                     @endif

                                     @if ($flag=='en')
                                        <option selected disabled>Please Choose </option>
                                     @endif
                                     @foreach ($program_type as $p_type)
                                         @if($flag=='kh')
                                         <option value="{{ $p_type->id }}"
                                          {{ $p_type->id==$longcourse->program_type_id?'selected' :'' }}>
                                          {{ $p_type->title_kh }}
                                        </option>
                                        @endif
                                        @if($flag=='en')
                                        <option value="{{ $p_type->id }}"
                                          {{ $p_type->id==$longcourse->program_type_id?'selected' :'' }}>
                                          {{ $p_type->title_en }}
                                        </option>
                                        @endif 
                                    @endforeach
                                  </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('longcourse-detail_OveralFund') }}</label>
                            <div class="col-xs-12 col-sm-9">
                                    <select style="width: 100%" name="cbo_fund_overall">
                                       @if ($flag=='kh')
                                       <option selected disabled>សូមជ្រើសរើស </option>
                                       @endif

                                       @if ($flag=='en')
                                       <option selected disabled>Please Choose </option>
                                       @endif
                                       @foreach ($overal_fund as $ov_fund)
                                       @if($flag=='kh')
                                       <option value="{{ $ov_fund->id }}"
                                        {{ $ov_fund->id==$longcourse->overall_fund_id?'selected' :'' }}>
                                        {{ $ov_fund->title_kh }}
                                      </option>
                                      @endif
                                      @if($flag=='en')
                                      <option value="{{ $ov_fund->id }}"
                                        {{ $ov_fund->id==$longcourse->overall_fund_id?'selected' :'' }}>
                                        {{ $ov_fund->title_en }}
                                      </option>
                                      @endif 

                                      @endforeach
                                    </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">Curri Endorsement</label>
                            <div class="col-xs-12 col-sm-9">
                                    <select style="width: 100%" name="cbo_curriculum" required="">
                                     @if ($flag=='kh')
                                     <option selected disabled>សូមជ្រើសរើស </option>
                                     @endif

                                     @if ($flag=='en')
                                     <option selected disabled>Please Choose </option>
                                     @endif
                                     @foreach ($curriculum_endo as $row)
                                     @if($flag=='kh')
                                     <option value="{{ $row->id }}"
                                      {{ $row->id==$longcourse->curriculum_endorsement_id?'selected' :'' }}>
                                      {{ $row->title_kh }}
                                    </option>
                                    @endif
                                    @if($flag=='en')
                                    <option value="{{ $row->id }}"
                                      {{ $row->id==$longcourse->curriculum_endorsement_id?'selected' :'' }}>
                                      {{ $row->title_en }}
                                    </option>
                                    @endif 
                                    @endforeach
                                  </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('longcourse-detail_CurriculumAuthor') }}</label>
                            <div class="col-xs-12 col-sm-9">
                                    <select style="width: 100%" name="cbo_author" required="">
                                      @if ($flag=='kh')
                                      <option selected disabled>សូមជ្រើសរើស </option>
                                      @endif

                                      @if ($flag=='en')
                                      <option selected disabled>Please Choose </option>
                                      @endif
                                      @foreach ($curriculum_author as $author)
                                          @if($flag=='kh')
                                          <option value="{{ $author->id }}"
                                            {{ $author->id==$longcourse->curriculum_author_id?'selected' :'' }}>
                                            {{ $author->title_kh }}
                                          </option>
                                          @endif
                                          @if($flag=='en')
                                          <option value="{{ $author->id }}"
                                            {{ $author->id==$longcourse->curriculum_author_id?'selected' :'' }}>
                                            {{ $author->title_en }}
                                          </option>
                                          @endif 
                                      @endforeach
                                    </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">Promotion Date</label>
                            <div class="col-xs-12 col-sm-9">
                                <input type="date" name="txt_start_date" value="{{ $longcourse->promotion_start_date }}" class="form-control input-sm" required="" style="width: 100%">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('longcourse-detail_AcademicYear') }}</label>
                            <div class="col-xs-12 col-sm-9">
                                <input type="text" name="academic_year" value="{{ $longcourse->academic_year }}" class="form-control input-sm" required="" style="width: 100%">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 15px;">
                          <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">{{ __('longcourse-detail_Batch/Group') }}</label>
                            <div class="col-xs-12 col-sm-9">
                                <input type="text" name="txt_batch_name" value="{{ $longcourse->batch_group }}" class="form-control input-sm" required="" style="width: 100%">
                            </div>
                          </div>
                        </div> 
                  </div>
                    {{-- submit button --}}
                  <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <a href="{{ route('projects.longcourse') }}" class="btn btn-info btn-sm" style="float: right; margin-left: 5px;">{{ __('longcourse-Back') }}</a>
                      <button type="submit" class="btn btn-primary btn-sm" style="float: right;">{{ __('longcourse-detail_Save') }}</button>
                    </div>
                  </div>
            </form>           
        </div>
  </div>
</div>
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


@include('includes.scripts.inputMask_script')
@include('includes.scripts.datepicker_script')

@endsection

