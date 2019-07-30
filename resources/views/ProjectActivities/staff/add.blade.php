@extends('ProjectActivities.layout.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    @endsection

    @section('menu-panel')

    @include('ProjectActivities.layout.menu.menu_admin')

    @endsection

@section('content')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                
                {{-- @include('layouts.includes.template_setting') --}}
                <h4 class="header large lighter blue">
                    <i class="fa fa-list" aria-hidden="true">
                    </i>&nbsp;{{ __('staff_breadcrumb_Staff_Manager') }}
                    <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            @lang('staff_frm_reg_Registration')
                        </small>
                
                </h4>
                <div class="clearfix" style="padding-bottom:10px;">

                    <span class="easy-link-menu">
                        <a href="{{route('staff-add')}}" class="btn-success btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;@lang('btn_st_Add')</a>
                        <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;@lang('btn_st_Active')</a>
                        <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="in-active"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;@lang('btn_st_inActive')</a>
                        <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;@lang('btn_st_Delete')</a>
                    </span>

                    {{-- <span class="pull-right tableTools-container"></span> --}}
                </div>
                {{-- <div class="table-header">
                    Staff @lang('Panel_st_Record') 
                </div> --}}


                {{-- <div class="page-header">
                    <h1>
                        @include('ProjectActivities.staff.includes.breadcrumb-primary')
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            @lang('staff_frm_reg_Registration')
                        </small>
                    </h1>
                </div> --}}
                <!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {{-- @include('ProjectActivities.staff.includes.buttons') --}}

                        @include('includes.validation_error_messages')
                       
                        {!! Form::open(['route'=>'staff-save','method' => 'POST', 'class' => 'form-horizontal',
                        'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                        @include('ProjectActivities.staff.includes.form')

                        <div class="clearfix form-actions">
                            <div class="col-md-12 align-right">
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    @lang('staff_btn_reg_Reset')
                                </button>

                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    @lang('staff_btn_reg_Register')
                                </button>
                            </div>
                        </div>

                        {{-- <div class="hr hr-24"></div> --}}

                        {!! Form::close() !!}

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
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

