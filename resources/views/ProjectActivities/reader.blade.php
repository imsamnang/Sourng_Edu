@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
@endsection

@section('content')
        <div class="row" style="margin-top: 15px; margin-left: 5px;">
            <div class="col-md-12">
                <a href="{{ route('add-newbook') }}" class="btn btn-primary">Add New Book</a>
            </div>
        </div>
        <div class="row" style="margin-left: 5px; margin-right: 5px;">
            @foreach( $data['projectCourses'] as $key =>$projectCourse)
               <div class="col-md-3" style="padding-top:10px;">
                  {{-- <a href="{{ url('projects/readbook-now',$projectCourse->id) }}" class="easy-link-menu"> --}}
                  <a href="{{ url('projects/readbook-now') }}" class="easy-link-menu">
                     <div class="{!! $projectCourse->color !!}">
                     <div class="card-block" style="height: 180px;vertical-align: middle !important; padding: 0x !important; background-color: #33ccff;">
                        <img style="height: 100%;" src="{{isset($projectCourse->image)?asset('/images/book/'.$projectCourse->image):asset('/images/course.png')}}" alt="">

                     </div>
                     </div>
                  </a>
                 <b><center><p class="card-text" style="padding:10px 10px 0px 0px; color: black;"> {!! $projectCourse->title !!}&nbsp;&nbsp;&nbsp;&nbsp;<i class="ace-icon fa fa-eye"></i></p></center></b>
               </div>
            @endforeach
         </div>
         
         <div class="row" style="margin-bottom: 15px; margin-left: 5px;">
            <div class="col-md-2" style="padding-top:20px;">
               <a href="{{ route('projects') }}" class="easy-link-menu">
                  <div class="dash-card card-softred text-xs-center" style="background-color: #33ccff;">
                     <div class="card-block">
                        <h6 class="card-title">
                            <i class="ace-icon fa fa-tasks"></i>
                    <!-- <i class="ace-icon fa fa-users"></i> -->
                        </h6>
                        <p class="card-text" style="color: black;"> សកម្មភាពគម្រោង</p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      
@endsection

@section('js')
   
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

@endsection

