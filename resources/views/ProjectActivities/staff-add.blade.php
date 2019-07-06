@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
@endsection

@section('content')

    <div class="main-content">
      <div class="container">
      <h2>{{ __('staff-register.AddNewStaff') }}</h2>
        <form method="POST" action="{{ route('staff-register.store') }}" accept-charset="UTF-8" class="form-horizontal" id="validation-form" enctype="multipart/form-data"><input name="_token" type="hidden" value="cF5CWJfxVYth39bbUZ5AVQNPKvd6LItBFHwnI2KB">
                {{ csrf_field() }}
                <div class="tabbable">
                <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                <li class="active">
                <a data-toggle="tab" href="#registrationinfo">{{ __('staff-register.GeneralInformation') }}</a>
                </li>
                <li class="">
                <a data-toggle="tab" href="#profileimage">{{ __('staff-register.ProfileImages') }}</a>
                </li>
                </ul>

                <div class="tab-content">
                <div id="registrationinfo" class="tab-pane active">
                <span class="label label-info arrowed-in arrowed-right arrowed responsive">{{ __('staff-register.Redmarkinput') }}</span>
                <hr class="hr-16">
                <div class="form-group">
                <!-- <label for="reg_no" class="col-sm-1 control-label">__('staff_frm_reg_Reg_No')</label> -->
                {!! Form::label('reg_no', __('staff_frm_reg_Reg_No'), ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-2">
                <input placeholder="" class="form-control border-form input-mask-registration" required="" name="reg_no" type="text" id="reg_no">
                            </div>

                {!! Form::label('join_date', __('staff_frm_reg_Join_Date'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                <input class="form-control date-picker border-form" required="" name="join_date" type="text" id="join_date">
                            </div>

                            {!! Form::label('designation', __('staff_frm_reg_Designation'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-3">
                <select class="form-control" required="" id="designation" name="designation">
                    @foreach ($StaffDesignation as $rows)
                        <option value="{{ $rows->id }}">{{ $rows->title }}</option>
                    @endforeach
                    
                </select>
                </div>
                </div>

                <div class="form-group">
                <label for="first_name" class="col-sm-3 control-label">{{ __('staff-register.Nameofstaff') }}</label>
                <div class="col-sm-3">
                <input placeholder="{{ __('staff-register.FIRSTNAME') }}" class="form-control border-form upper" required="" name="first_name" type="text" id="first_name">
                            </div>
                <div class="col-sm-3">
                <input placeholder="{{ __('staff-register.MIDDLENAME') }}" class="form-control border-form upper" name="middle_name" type="text">
                            </div>
                <div class="col-sm-3">
                <input placeholder="{{ __('staff-register.LASTNAME') }}" class="form-control border-form upper" required="" name="last_name" type="text">
                            </div>
                </div>

                <div class="form-group">
                <label for="father_name" class="col-sm-2 control-label">{{ __('staff-register.FatherName') }}</label>
                <div class="col-sm-4">
                <input placeholder=" " class="form-control border-form upper" name="father_name" type="text" id="father_name">
                            </div>
                <label for="mother_name" class="col-sm-2 control-label">{{ __('staff-register.MotherName') }}</label>
                <div class="col-sm-4">
                <input placeholder=" " class="form-control border-form upper" name="mother_name" type="text" id="mother_name">
                            </div>
                </div>

                <div class="form-group">
                <label for="date_of_birth" class="col-sm-2 control-label">{{ __('staff-register.DateofBirth:') }}</label>
                <div class="col-sm-2">
                <input data-date-format="yyyy-mm-dd" placeholder="" class="form-control date-picker border-form input-mask-date" required="" name="date_of_birth" type="text" id="date_of_birth">
                            </div>

                <label for="gender" class="col-sm-2 control-label">{{ __('staff-register.Gender:') }}</label>
                <div class="col-sm-2">
                <select class="form-control border-form" required="" id="gender" name="gender"><option value="" selected="selected"></option><option value="MALE">MALE</option><option value="FEMALE">FEMALE</option><option value="OTHER">OTHER</option></select>
                            </div>

                <label for="blood_group" class="col-sm-2 control-label">{{ __('staff-register.BloodGroup:') }}</label>
                <div class="col-sm-2">
                <select class="form-control border-form" id="blood_group" name="blood_group"><option value="" selected="selected"></option><option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option><option value="AB+">AB+</option><option value="AB-">AB-</option><option value="O+">O+</option><option value="O-">O-</option></select>
                            </div>
                </div>

                <div class="form-group">
                <label for="nationality" class="col-sm-2 control-label">{{ __('staff-register.Nationality:') }}</label>
                <div class="col-sm-2">
                <input placeholder="" class="form-control border-form upper" required="" name="nationality" type="text" id="nationality">
                            </div>

                <label for="mother_tongue" class="col-sm-2 control-label">{{ __('staff-register.MotherTong:') }}</label>
                <div class="col-sm-2">
                <input class="form-control border-form upper" name="mother_tongue" type="text" id="mother_tongue">
                            </div>

                <label for="email" class="col-sm-1 control-label">{{ __('staff-register.E-mail:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form" name="email" type="text" id="email">
                            </div>
                </div>

                <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('staff-register.ContactDetail') }}</div>
                <hr class="hr-8">
                <div class="form-group">
                <label for="home_phone" class="col-sm-2 control-label">{{ __('staff-register.MobileNo:') }}</label>
                <div class="col-sm-2">
                <input class="form-control border-form input-mask-phone" name="home_phone" type="text" id="home_phone">
                            </div>

                <label for="mobile_1" class="col-sm-2 control-label">{{ __('staff-register.Mobile1') }}</label>
                <div class="col-sm-2">
                <input class="form-control border-form input-mask-mobile" required="" name="mobile_1" type="text" id="mobile_1">
                            </div>

                <label for="mobile_2" class="col-sm-2 control-label">{{ __('staff-register.Mobile2') }}</label>
                <div class="col-sm-2">
                <input class="form-control border-form input-mask-mobile" name="mobile_2" type="text" id="mobile_2">
                            </div>
                </div>


                <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('staff-register.PermanentAddress') }}</div>
                <hr class="hr-8">
                <div class="form-group">
                <label for="address" class="col-sm-1 control-label">{{ __('staff-register.Address:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" required="" name="address" type="text" id="address">
                            </div>

                <label for="state" class="col-sm-1 control-label">{{ __('staff-register.State:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" required="" name="state" type="text" id="state">
                            </div>

                <label for="country" class="col-sm-1 control-label">{{ __('staff-register.Country:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" required="" name="country" type="text" id="country">
                            </div>
                </div>


                <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('staff-register.TemporaryAddress') }}</div>

                <div class="control-group col-sm-12">
                <div class="radio">
                <label>
                <input class="ace" onclick="CopyAddress(this.form)" name="permanent_address_copier" type="checkbox" value="">
                <span class="lbl"> {{ __('staff-register.Temporaray AddressSame') }} </span>
                </label>
                </div>
                </div>

                <hr>
                <hr class="hr-8">

                <div class="form-group">
                <label for="temp_address" class="col-sm-1 control-label">{{ __('staff-register.Address:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" name="temp_address" type="text" id="temp_address">
                            </div>

                <label for="temp_state" class="col-sm-1 control-label">{{ __('staff-register.State:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" name="temp_state" type="text" id="temp_state">
                            </div>

                <label for="temp_country" class="col-sm-1 control-label">{{ __('staff-register.Country:') }}</label>
                <div class="col-sm-3">
                <input class="form-control border-form upper" name="temp_country" type="text" id="temp_country">
                            </div>
                </div>

                <div class="label label-warning arrowed-in arrowed-right arrowed">{{ __('staff-register.QualificationDetail:') }}</div>
                <hr class="hr-8">
                <div class="form-group">
                <label for="qualification" class="col-sm-2 control-label">{{ __('staff-register.Qualification:') }}</label>
                <div class="col-sm-4">
                <input class="form-control border-form upper" required="" name="qualification" type="text" id="qualification">
                            </div>

                <label for="experience" class="col-sm-2 control-label">{{ __('staff-register.Experience:') }}</label>
                <div class="col-sm-4">
                <input class="form-control border-form upper" name="experience" type="text" id="experience">
                            </div>
                </div>

                <div class="form-group">
                <label for="experience_info" class="col-sm-2 control-label">{{ __('staff-register.ExperienceInformation:') }}</label>
                <div class="col-sm-4">
                <textarea class="form-control border-form " rows="3" name="experience_info" cols="50" id="experience_info"></textarea>
                            </div>

                <label for="other_info" class="col-sm-2 control-label">{{ __('staff-register.OtherInformation') }}</label>
                <div class="col-sm-4">
                <textarea class="form-control border-form" rows="3" name="other_info" cols="50" id="other_info"></textarea>
                            </div>
                </div>
                </div>

                <div id="profileimage" class="tab-pane">
                <h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>{{ __('staff-register.ProfilePictures') }}</h4>
                <div class="form-group">
                <label for="main_image" class="col-sm-2 control-label">{{ __('staff-register.StaffProfilePicture') }}</label>
                <div class="col-sm-10">
                <input class="form-control border-form" name="main_image" type="file" id="main_image">
                            </div>
                </div>

                </div>


                </div>
                <div class="hr hr-24"></div>
                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-12 align-right">
                    <a  class="btn btn-danger" href="{{ route('projects') }}"> {{ __('staff-register.Back') }}</a>
                    
                        <button class="btn" type="reset">
                            <i class="icon-undo bigger-110"></i> {{ __('staff-register.Reset') }}  </button>

                        <button class="btn btn-info" type="submit">
                            <i class="icon-ok bigger-110"></i> {{ __('staff-register.Register') }} </button>
                    </div>

                </div>

                <div class="hr hr-24"></div>

        </form>
</div>







    </div><!-- /.main-content -->
    
@endsection

@section('js')
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
                f.temp_state.value = f.state.value;
                f.temp_country.value = f.country.value;
            }
        }

    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.datepicker_script')

    @endsection

