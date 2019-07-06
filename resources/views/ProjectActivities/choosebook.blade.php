<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>

        @if(isset($generalSetting->institute))
            IMS | {{$generalSetting->institute}}
        @else
            UNLIMITED SMS
        @endif
    </title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/ace.min.css" />

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center" style="margin-top: 10%;">
                        <h1>
                            <span class="red"><img src="{{asset('/images/setting/general/')}}/{{ $generalSetting->logo }}" alt=""></span>
                            <span class="white" id="id-text2"></span>
                        </h1>
                    </div>
                </div> 
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3"​ style="padding-top:10px; ">
                    <a href="{{ route('readbook-now') }}" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                  សៀវភៅថ្នាក់ទី១
                                    <br>
                                    Grade 1
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី២
                                    <br>
                                    Grade 2
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;  ">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                  សៀវភៅថ្នាក់ទី៣
                                    <br>
                                    Grade 3
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី៤
                                    <br>
                                    Grade 4
                                </p>
                            </div>
                        </div>
                    </a>
                <br>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                  សៀវភៅថ្នាក់ទី៥
                                    <br>
                                    Grade 5
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី៦
                                    <br>
                                    Grade 6
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                  សៀវភៅថ្នាក់ទី៧
                                    <br>
                                    Grade 7
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី៨
                                    <br>
                                    Grade 8
                                </p>
                            </div>
                        </div>
                    </a>
                    <br>
                </div>

            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3"​ style="padding-top:10px; ">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                 សៀវភៅថ្នាក់ទី៩
                                    <br>
                                    Grade 9
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                               សៀវភៅថ្នាក់ទី១០
                                    <br>
                                    Grade 10
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;  ">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី១១
                                    <br>
                                    Grade 11
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                សៀវភៅថ្នាក់ទី១២
                                    <br>
                                    Grade 12
                            </div>
                        </div>
                    </a>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                 សៀវភៅឆ្នាំទី១
                                    <br>
                                    Year I
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                ​សៀវភៅឆ្នាំទី២
                                    <br>
                                    Year II
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                                 សៀវភៅឆ្នាំទី៣
                                    <br>
                                    Year III
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"​ style="padding-top:10px;">
                    <a href="#" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title">
                                <i class="ace-icon fa fa-book"></i>
                                </h4>
                                <p class="card-text">
                              សៀវភៅឆ្នាំទី៤
                                    <br>
                                    Year IV 
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
           
        </div>
        

    </div><!-- /.main-content -->

    <!-- <div class="space-6"></div> -->


<div style="style=margin-top: 10%;"></div>

<div class="space-6"></div>

</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });



    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>
</body>
</html>
