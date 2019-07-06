@extends('layouts.master')

@section('css')
<!-- page specific plugin styles -->

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
@endsection

@section('content')
{{-- <div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            @include('layouts.includes.template_setting')

            <div class="page-header">
                <h1>
                    @include($view_path.'.registration.includes.breadcrumb-primary')
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        @lang('stu_Registration')
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12 ">
                    @include($view_path.'.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                    @include('includes.validation_error_messages')
                    <div class="align-right">
                        <a class="{!! request()->is('studentregister/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('studentregister.register') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;{{__('stu_Bulk_Student_Registration')}}</a>
                    </div>
                    
                    {!! Form::open(['route' => $base_route.'.register', 'method' => 'POST', 'class' => 'form-horizontal',
                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                    @include($view_path.'.registration.includes.form')

                    <div class="clearfix form-actions">
                        <div class="col-md-12 align-right">
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                @lang('stu_Reset')
                            </button>

                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                @lang('stu_Register')
                            </button>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    {!! Form::close() !!}

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content --> --}}
    <div class="container" style="margin-top: 15px;">
       <i><b><h3 style="text-align: left; margin-bottom: 15px;"> {{ __('st-register.PleaseRgisterNow') }}</h3></b></i>
            <form method="POST" action="{{route('stu.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                    <label style="background-color: pink;padding: 5px; width: 16.40%; text-align: right; color: blue; required="true">{{ __('st-register.Reg.No') }}</label>
                    <input type="text" name="reg_no" required="true">

                    <label style="background-color: pink;padding: 5px; width: 16.40%; text-align: right; color: blue;">{{ __('st-register.RegDate') }}</label>
                    <input type="date" name="reg_date" required="true" style="width: 14%">

                    <label style="background-color: pink;padding: 5px; width: 16.40%; text-align: right; color: blue;">{{ __('st-register.UniversityReg.No') }}</label>
                    <input type="text" name="university_reg" required="true">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 17%; text-align: right; color: blue;">{{ __('st-register.Faculty') }}</label>
                    <select required="true" name="Faculty" style="width: 15%">
                        <option value="" disabled="true" selected="true">{{ __('st-register.SelectFaculty') }}</option>
                        @foreach ($faculty as $key=> $row)
                            <option value="{{ $row->id }}">{{ $row->faculty }}</option>
                        @endforeach
                    </select>

                    <label style="background-color: pink;padding: 5px; width: 17%; color: blue; text-align: right;">{{ __('st-register.Semester') }}</label>
                    <select required="true" name="Semester" style="width: 15%">
                        <option value="" disabled="true" selected="true">{{ __('st-register.SelectSemester') }}</option>
                        @foreach ($semester as $key=> $row)
                            <option value="{{ $row->id }}">{{ $row->semester }}</option>
                        @endforeach
                    </select>

                    <label style="background-color: pink;padding: 5px; width: 17%; color: blue; text-align: right;">{{ __('st-register.Status') }}</label>
                    <select required="true" name="studentstatus" style="width: 15%">
                        <option value="" disabled="true" selected="true">{{ __('st-register.SelectStatus') }}</option>
                        @foreach ($studentstatus as $key=> $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 17%; color: blue; text-align: right;">{{ __('st-register.StudentName') }}</label>
                    <input type="text" name="first_name" placeholder="{{ __('st-register.firstname') }}" required="true" style="width: 310px;">

                    <input type="text" name="middle_name" placeholder="{{ __('st-register.middlename') }}" style="width: 310px;">

                    <input type="text" name="last_name" placeholder="{{ __('st-register.lastname') }}" style="width: 310px;" required="true">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 17.50%; text-align: right; color: blue;">{{ __('st-register.DateofBirth') }}</label>
                    <input type="date" name="dob" required="true" style="width: 14.70%">

                    <label style="background-color: pink;padding: 5px; width: 17%; text-align: right; color: blue;">{{ __('st-register.Gender') }}</label>
                    <select required="true" name="gender" style="width: 14.70%">
                        <option value="" disabled="true" selected="true">Please Select Gender</option>
                        <option value="male">{{ __('st-register.Male') }}</option>
                        <option value="female">{{ __('st-register.Female') }}</option>
                    </select>

                    <label style="background-color: pink;padding: 5px; width: 17.85%; text-align: right; color: blue;">{{ __('st-register.BloodGroup') }}</label>
                    <select required="true" name="blood_group" style="width: 14.70%">
                        <option value="" disabled="true" selected="true">{{ __('st-register.SelectBloodGroup') }}</option>
                        ">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right; color:blue;">{{ __('st-register.Nationality') }}</label>
                    <input type="text" name="nationality" required="true">

                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right; color: blue;">{{ __('st-register.MotherTong') }}</label>
                    <input type="text" name="mother_tongue" required="true">

                    <label style="background-color: pink;padding: 5px; width: 16.70%; text-align: right; color: blue;">{{ __('st-register.E-mail') }}</label>
                    <input type="email" name="email" required="true">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right;color: blue;">{{ __('st-register.ExtraInfo') }}</label>
                    <input type="text" name="extra_info" width="90%">

                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right;color: blue;">{{ __('st-register.Phone') }}</label>
                    <input type="text" name="phone" required="true">

                    <label style="background-color: pink;padding: 5px; width: 16.70%; text-align: right; color: blue;">{{ __('st-register.Mobile') }}</label>
                    <input type="text" name="mobile">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right;color: blue;">{{ __('st-register.PermanentAddress') }}</label>
                    <input type="text" name="temp_address" required="true">

                    <label style="background-color: pink;padding: 5px; width: 15.40%; text-align: right; color: blue">{{ __('st-register.State') }}</label>
                    <input type="text" name="state" required="true">

                    <label style="background-color: pink;padding: 5px; width: 16.70%; text-align: right; color: blue;">{{ __('st-register.Country') }}</label>
                    <input type="text" name="country" required="true">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <input type="submit" name="" class="btn btn-primary btn-sm" value="{{ __('st-register.Register') }}">
                    <a href="/login" class="btn btn-info btn-sm">{{ __('st-register.BackLogin') }}</a>
                </div>
            </form>    
    </div>
@endsection
@section('js')
<!-- page specific plugin scripts -->
@include('includes.scripts.jquery_validation_scripts')
@include('student.registration.includes.student-comman-script')
@include('includes.scripts.inputMask_script')
@include('includes.scripts.datepicker_script')
@endsection