@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
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
                            {{ __('assignment.Create') }}
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    @include('assignment.includes.buttons')
                    <div class="col-xs-12 ">
                    @include('includes.flash_messages')
                    @include('includes.validation_error_messages')
                    <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                                @include($view_path.'.includes.form')

                            <div class="clearfix form-actions">
                                <div class="col-md-12 align-right">
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        {{ __('assignment.Reset') }}
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-info" type="submit" id="assignment-btn">
                                        <i class="icon-ok bigger-110"></i>
                                        {{ __('assignment.CreateAssignment') }}
                                    </button>
                                </div>
                            </div>

                            <div class="hr hr-18 dotted hr-double"></div>
                            {!! Form::close() !!}
                        </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
    @endsection


@section('js')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#assignment-btn').click(function () {
                var faculty = $('select[name="faculty"]').val();
                var semester = $('select[name="semesters_id"]').val();
                var subject = $('select[name="semester_subject"]').val();
                var publish_date = $('input[name="publish_date"]').val();
                var title = $('input[name="title"]').val();
                var description = $('textarea[name="description"]').val();


                if (faculty == 0) {
                    toastr.info("Please, Select Faculty", "Info:");
                    return false;
                }

                if (semester == 0) {
                    toastr.info("Please, Select Semester", "Info:");
                    return false;
                }

                if (subject == 0) {
                    toastr.info("Please, Select Subject", "Info:");
                    return false;
                }

                if (publish_date == "") {
                    toastr.info("Please, Enter Publish Date", "Info:");
                    return false;
                }

                if (title == "") {
                toastr.info("Please, Enter Question Title", "Info:");
                    return false;
                }

                if (description == "") {
                    toastr.info("Please, Enter Question Detail", "Info:");
                    return false;
                }

            });

        });

        function loadSemesters($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('assignment.find-semester') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    faculty_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.semesters_id').html('').append('<option value="0">Select Semester</option>');
                        $.each(data.semester, function(key,valueObj){
                            $('.semesters_id').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                        });
                    }
                }
            });

        }

        function loadSubject($this) {
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semesters_id"]').val();


            if (faculty == 0) {
                toastr.info("Please, Select Faculty", "Info:");
                return false;
            }

            if (semester == 0) {
                toastr.info("Please, Select Semester", "Info:");
                return false;
            }

            if (!semester)
                toastr.warning("Please, Choose Semester.", "Warning");
            else {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('assignment.find-subject') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        faculty_id: faculty,
                        semester_id: semester
                    },
                    success: function (response) {
                        var data = $.parseJSON(response);
                        if (data.error) {
                            $('.semester_subject').html('')
                            toastr.warning(data.error, "Warning:");
                        } else {
                            $('.semester_subject').html('').append('<option value="0">Select Subject</option>');
                            $.each(data.subjects, function (key, valueObj) {
                                $('.semester_subject').append('<option value="' + key + '">' + valueObj + '</option>');
                            });
                            toastr.success(data.success, "Success:");
                        }
                    }
                });
            }

        }

    </script>
    @include('includes.scripts.summarnote')
    @include('includes.scripts.datepicker_script')
@endsection