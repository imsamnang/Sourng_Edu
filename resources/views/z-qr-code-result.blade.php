<?php $flag=App()->getLocale();  ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>
        @if(isset($generalSetting->institute))
            {{-- {{ $panel }} | {{$generalSetting->institute}} --}}
            {{$generalSetting->institute}}
        @else
            {{-- {{ isset($panel)?$panel:'' }} | UNLIMITED Edu Firm --}}
            UNLIMITED Edu Firm
        @endif
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="top menu &amp; navigation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @if(isset($generalSetting->favicon))
        <link rel="icon" href="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$generalSetting->favicon ) }}" type="image/x-icon" />
    @endif
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />
    <!-- inline styles related to this page -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <!-- ace settings handler -->
    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    {{-- <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" />

    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    
    <style>
        body{
            background:#fff!important;
            margin :10px;
        }
    </style>
 

</head>
<body>
        <div class="container">
            
<div class="row">
        <div class="col-sm-12 align-right hidden-print">
            <a href="#" class="" onclick="window.print();">
                <i class="ace-icon fa fa-print bigger-200"></i>
            </a>
        </div>
    
        <div class="col-xs-12 col-sm-3 col-print-3">
            <div>
                <span class="profile-picture">
                   @if($data['student']->student_image != '')
                        <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$data['folder_name'].DIRECTORY_SEPARATOR.$data['student']->student_image) }}" width="300px" />
                    @else
                        <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                    @endif
                </span>
    
                <div class="space-4"></div>
                {{--<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                            <i class="ace-icon fa fa-circle light-green"></i>
                            &nbsp;
                            <span class="white">Alex M. Doe</span>
                        </a>
    
                        <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                            <li class="dropdown-header"> Change Status </li>
    
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle green"></i>
                                    &nbsp;
                                    <span class="green">Available</span>
                                </a>
                            </li>
    
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle red"></i>
                                    &nbsp;
                                    <span class="red">Busy</span>
                                </a>
                            </li>
    
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle grey"></i>
                                    &nbsp;
                                    <span class="grey">Invisible</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>--}}
    
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-print-9">
            {{--<div class="center">
                <span class="btn btn-app btn-sm btn-light no-hover">
                    <span class="line-height-1 bigger-170 blue"> 1,411 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Views </span>
                </span>
                <span class="btn btn-app btn-sm btn-yellow no-hover">
                    <span class="line-height-1 bigger-170"> 32 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Followers </span>
                </span>
                <span class="btn btn-app btn-sm btn-pink no-hover">
                    <span class="line-height-1 bigger-170"> 4 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Projects </span>
                </span>
                <span class="btn btn-app btn-sm btn-grey no-hover">
                    <span class="line-height-1 bigger-170"> 23 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Reviews </span>
                </span>
                <span class="btn btn-app btn-sm btn-success no-hover">
                    <span class="line-height-1 bigger-170"> 7 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Albums </span>
                </span>
                <span class="btn btn-app btn-sm btn-primary no-hover">
                    <span class="line-height-1 bigger-170"> 55 </span>
                    <br>
                    <span class="line-height-1 smaller-90"> Contacts </span>
                </span>
            </div>--}}
    
            <div class="space-3"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">{{ $data['student']->first_name.' '.
                        $data['student']->middle_name.' '.$data['student']->last_name }}</div>
            <div class="space-6"></div>
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Faculty: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="faculty">{{  ViewHelper::getFacultyTitle( $data['student']->faculty ) }}</span>
                    </div>
                    <div class="profile-info-name"> Semester :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="semester">{{  ViewHelper::getSemesterTitle( $data['student']->semester ) }}</span>
                    </div>
                </div>
    
                <div class="profile-info-row">
                    <div class="profile-info-name"> Reg. No.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_no">{{ $data['student']->reg_no }}</span>
                    </div>
                    <div class="profile-info-name"> Reg. Date :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($data['student']->reg_date)->format('Y-m-d')}}</span>
                    </div>
                </div>
    
    
                <div class="profile-info-row">
                    <div class="profile-info-name"> Univ.Reg.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="university_reg">{{ $data['student']->university_reg }}</span>
                    </div>
                    <div class="profile-info-name"> DOB : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="student_name">{{ \Carbon\Carbon::parse($data['student']->date_of_birth)->format('Y-m-d')}}</span>
                    </div>
                </div>
    
    
    
                <div class="profile-info-row">
                    <div class="profile-info-name"> Gender : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="student_name">
                            {{-- {{ $data['student']->gender }} --}}
                            @if ($flag=='kh')
                                {{$data['student']->gender==1?'ប្រុស':'ស្រី'}}                            
                            @else
                            {{$data['student']->gender==1?'Male':'Female'}}
                            @endif
    
    
                        </span>
                    </div>
                    <div class="profile-info-name"> Blood Group : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="student_name">{{ $data['student']->blood_group }}</span>
                    </div>
                </div>
    
                <div class="profile-info-row">
                    <div class="profile-info-name"> Nationality : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="student_name">{{ $data['student']->nationality }}</span>
                    </div>
                    <div class="profile-info-name"> MotherTong: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="student_name">{{ $data['student']->mother_tongue }}</span>
                    </div>
                </div>
    
                <div class="profile-info-row">
                    <div class="profile-info-name"> E-mail : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="email">{{ $data['student']->email }}</span>
                    </div>
    
                    <div class="profile-info-name"> Mobile No : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="email">{{ $data['student']->mobile_1.','.$data['student']->mobile_2 }}</span>
                    </div>
                </div>
            </div>
    
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="space-6"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Permanent Address</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Address : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->address }}</span>
                </div>
                <div class="profile-info-name"> State :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->state }}</span>
                </div>
                <div class="profile-info-name"> Country : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->country }}</span>
                </div>
            </div>
        </div>
    
        <div class="space-6"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Temporary Address</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Address : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->temp_address }}</span>
                </div>
                <div class="profile-info-name"> State :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->temp_state }}</span>
                </div>
                <div class="profile-info-name"> Country : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->temp_country }}</span>
                </div>
            </div>
        </div>
    
        <div class="space-6"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Parential Info</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Grand Father :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->grandfather_first_name.' '.$data['student']->grandfather_middle_name.' '.$data['student']->grandfather_last_name }}</span>
                </div>
            </div>
        </div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Father Name :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->father_first_name.' '.$data['student']->father_middle_name.' '.$data['student']->father_last_name }}</span>
                </div>
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_eligibility">{{ $data['student']->father_eligibility }}</span>
                </div>
                <div class="profile-info-name"> Occupation :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_occupation">{{ $data['student']->father_occupation }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office">{{ $data['student']->father_office }}</span>
                </div>
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office_number">{{ $data['student']->father_office_number }}</span>
                </div>
                <div class="profile-info-name"> Residence : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_residence_number">{{ $data['student']->father_residence_number }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_1">{{ $data['student']->father_mobile_1 }}</span>
                </div>
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_2">{{ $data['student']->father_mobile_2 }}</span>
                </div>
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_email">{{ $data['student']->father_email }}</span>
                </div>
            </div>
        </div>
    
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Mother Name :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->mother_first_name.' '.$data['student']->mother_middle_name.' '.$data['student']->mother_last_name }}</span>
                </div>
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_eligibility">{{ $data['student']->mother_eligibility }}</span>
                </div>
                <div class="profile-info-name"> Occupation : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_occupation">{{ $data['student']->mother_occupation }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office">{{ $data['student']->mother_office }}</span>
                </div>
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office_number">{{ $data['student']->mother_office_number }}</span>
                </div>
                <div class="profile-info-name"> Residence : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_residence_number">{{ $data['student']->mother_residence_number }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_1">{{ $data['student']->mother_mobile_1 }}</span>
                </div>
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->mother_mobile_2 }}</span>
                </div>
                <div class="profile-info-name"> E-mail :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_email">{{ $data['student']->mother_email }}</span>
                </div>
            </div>
        </div>
    
        <div class="space-6"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Guardian Info</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Guardian :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->guardian_first_name.' '.$data['student']->guardian_middle_name.' '.$data['student']->guardian_last_name }}</span>
                </div>
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_eligibility">{{ $data['student']->guardian_eligibility }}</span>
                </div>
                <div class="profile-info-name"> Occupation :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_occupation">{{ $data['student']->guardian_occupation }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office">{{ $data['student']->guardian_office }}</span>
                </div>
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office_number">{{ $data['student']->guardian_office_number }}</span>
                </div>
                <div class="profile-info-name"> Residence :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_residence_number">{{ $data['student']->guardian_residence_number }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_1">{{ $data['student']->guardian_mobile_1 }}</span>
                </div>
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_mobile_2">{{ $data['student']->guardian_mobile_2 }}</span>
                </div>
                <div class="profile-info-name"> E-mail :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_email">{{ $data['student']->guardian_email }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Relation :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_relation">{{ $data['student']->guardian_relation }}</span>
                </div>
                <div class="profile-info-name"> Address :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->guardian_address }}</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row hidden-print">
        <div class="space-8"></div>
        <div class="col-xs-12 col-sm-3 center">
            <div>
                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                            <span class="white">Guardian</span>
                        </a>
                    </div>
                </div>
                <div class="space-4"></div>
    
                <span class="profile-picture">
                        @if($data['student']->guardian_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->guardian_image) }}" width="300px" />
                    @else
                        <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                    @endif
                </span>
            </div>
        </div>
    
    
        <div class="col-xs-12 col-sm-3 center">
            <div>
                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                            <span class="white">Father</span>
                        </a>
                    </div>
                </div>
                <div class="space-4"></div>
    
                <span class="profile-picture">
                   @if($data['student']->father_image != '')
                        <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->father_image) }}" width="300px" />
                    @else
                        <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                    @endif
                </span>
            </div>
        </div>
    
    
        <div class="col-xs-12 col-sm-3 center">
            <div>
                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                            <span class="white">Mother</span>
                        </a>
                    </div>
                </div>
                <div class="space-4"></div>
    
                <span class="profile-picture">
                    @if($data['student']->mother_image != '')
                        <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->mother_image) }}" width="300px" />
                    @else
                        <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                    @endif
                </span>
            </div>
        </div>
    </div>
    
    
        </div>
</body>
