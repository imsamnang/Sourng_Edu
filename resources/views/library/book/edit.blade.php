@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
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
                            @lang('book_frm_Books_Edit')
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="col-md-12 col-xs-12">

                @include('library.includes.buttons')
                @include('includes.flash_messages')
                @include('includes.validation_error_messages')
                <!-- PAGE CONTENT BEGINS -->
                    {!! Form::model($data['row'], ['route' => [$base_route.'.update', $data['row']->id], 'method' => 'POST', 'class' => 'form-horizontal',
                                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                    {!! Form::hidden('id', $data['row']->id) !!}
                    @include($view_path.'.includes.form')


                    <div class="clearfix form-actions">
                        <div class="col-md-12 align-right">
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                @lang('book_frm_Reset')
                            </button>
                            &nbsp; &nbsp; &nbsp;
                            <button class="btn btn-info" type="submit" id="filter-btn">
                                <i class="icon-ok bigger-110"></i>
                               @lang(' book_frm_Update')
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <div class="hr hr-18 dotted hr-double"></div>
                </div><!-- /.col -->

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
@endsection


@section('js')
    @include('includes.scripts.inputMask_script')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*Change Field Value on Capital Letter When Keyup*/
            $(function () {
                $('.upper').keyup(function () {
                    this.value = this.value.toUpperCase();
                });
            });
            /*end capital function*/
        });
    </script>
@endsection