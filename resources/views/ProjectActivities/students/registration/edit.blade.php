<?php $Flag=App()->getLocale();?>
@extends('layouts.master')
@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
@endsection
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                @include('layouts.includes.template_setting')
                <div class="page-header">
                    <h1>
                        @include($data['view_path'].'.registration.includes.breadcrumb-primary')
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            @lang('stu_frm_Edit_Registration')
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12 ">
                    @include($data['view_path'].'.includes.buttons')
                        <!-- PAGE CONTENT BEGINS -->
                        @include('includes.validation_error_messages')
                        {!! Form::model($data['row'], ['route' => ['student.update', $data['row']->id],'data-url'=> $data['url_update'].$data['row']->id, 'method' => 'POST', 'class' => 'form-horizontal',
                   'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                        {!! Form::hidden('id', $data['row']->id) !!}
                        {{--{!! Form::hidden('guardians_id', $data['row']->guardians_id) !!}--}}
                        @include($data['view_path'].'.registration.includes.form')
                        <div class="clearfix form-actions">
                            <div class="col-md-12 align-right">
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    @lang('stu_frm_Update')
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
    <!-- page specific plugin scripts -->
    @include('includes.scripts.jquery_validation_scripts')
    @include('student.registration.includes.student-comman-script')
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.datepicker_script')
    {{--@include('includes.scripts.table_tr_sort')--}}

    <script>
        (function($){
            var form = $('form#validation-form')
                url  = form.attr('data-url');
                form.attr('action',url)
                    .removeAttr('data-url')
                    .on('submit',function(e){
                        e.preventDefault();    
                        var formData = new FormData(e.target);

                        $.ajax({
                            url   : url,
                            method: 'POST',
                            data  : formData,
                            processData: false,
                            contentType: false,
                            success:function(data){                                
                                return  swal.fire({
                                            title: data.message.title,
                                            text: data.message.text,
                                            type: "success",
                                            buttonsStyling: !1,
                                            confirmButtonClass: "btn btn-success",
                                            confirmButtonText:data.message.button.confirm
                                        });
                            },
                            error:function(error){
                                var data  = erorr.responseJSON;
                                return  swal.fire({
                                            title: data.message.title,
                                            text: data.message.text,
                                            type: "error",
                                            buttonsStyling: !1,
                                            confirmButtonClass: "btn btn-warning",
                                            confirmButtonText:data.message.button.confirm
                                        });
                            }
                        });
                    });
        })(jQuery);
    </script>
@endsection


