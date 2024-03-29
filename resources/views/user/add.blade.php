@extends('layouts.master')

@section('css')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                @include('layouts.includes.template_setting')
                <div class="page-header">
                    <h1>
                        @include($view_path.'.includes.breadcrumb-primary')
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            {{ __('user.Create') }}
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12 ">
                    @include('user.includes.commanbuttons')
                    @include($view_path.'.includes.buttons')
                    @include('includes.flash_messages')
                    <!-- PAGE CONTENT BEGINS -->
                        @include('includes.validation_error_messages')
                        {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
                        'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                        @include($view_path.'.includes.form')

                        <div class="clearfix form-actions">
                            <div class="col-md-12 align-right">
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    {{ __('user.Reset') }}
                                </button>

                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    {{ __('user.Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>

                        {!! Form::close() !!}

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
@endsection

@section('js')
  @include('includes.scripts.jquery_validation_scripts')
  <script src="{{ asset('assets/js/notify.min.js') }}"></script>
  <script>
    $(document).ready(function () {

        /*function passCheck(){
            alert('Attention!, Please Enter Value Greater Than 0');
            pass = $("#pass").val();
            repeatpass = $("#repeatpass").val();
            if(pass == repeatpass){
                $.notify("Please, Choose Your Target Year.", "warning");
            }
        }*/

        jqueryValidation(
            {
                "name": {
                    required: true,
                },
                "email": {
                    required: true,
                },
                "password": {
                    required: true,
                },
                "contact_number": {
                    required: true,
                },
                "address": {
                    required: true,
                }

            },
            {
                "name": {
                    required: "Please, Add User Name.",
                },
                "email": {
                    required: "Please, Add User Email.",
                },
                "password": {
                    required: "Please, Add User Password.",
                },
                "contact_number": {
                    required: "Please, Add Contact Number.",
                },
                "address": {
                    required: "Please, Add Address.",
                }
            }
        );
    });
  </script>
@endsection
