@extends('projectactivities.layout.master')

@push('custom-css')
<!-- page specific plugin styles -->
<meta name="_token" content="{{ csrf_token() }}" />
@endpush

@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            {{-- @include('layouts.includes.template_setting') --}}
            {{-- <div class="page-header">                    
                </div> --}}
            <!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12 ">
                    {{-- @include($view_path.'.includes.buttons') --}}
                    {{-- @include('includes.flash_messages') --}}
                    <!-- PAGE CONTENT BEGINS -->
                    {{-- @include('includes.validation_error_messages') --}}
                    {{-- 
                        <div class="form-horizontal ">
                            @include('projectactivities.students.includes.form')
                            <div class="hr hr-18 dotted hr-double"></div>
                        </div> 
                        --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
            @include('projectactivities.students.includes.table')
        </div>
    </div><!-- /.page-content -->
</div>
</div>

<!-- /.main-content -->
@endsection

@push('custom-js')

{{-- @include('includes.scripts.jquery_validation_scripts') --}}
<!-- inline scripts related to this page -->
<script type="text/javascript">
    /*Change Field Value on Capital Letter When Keyup*/
    $(function() {
        $('.upper').keyup(function() {
            this.value = this.value.toUpperCase();
        });
    });

    $(document).ready(function () {
        $('#filter-btn').click(function () {
            var url = '{{ $data['url'] }}';
            var flag = false;
            var reg_no = $('input[name="reg_no"]').val();
            var reg_start_date = $('input[name="reg_start_date"]').val();
            var reg_end_date = $('input[name="reg_end_date"]').val();
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semester_select[]"]').val();
            var status = $('select[name="status"]').val();
            if (reg_no !== '') {
                url += '?reg_no=' + reg_no;
                flag = true;
            }
            if (reg_start_date !== '') {

                if (flag) {
                    url += '&reg-start-date=' + reg_start_date;
                } else {
                    url += '?reg-start-date=' + reg_start_date;
                    flag = true;
                }
            }
            if (reg_end_date !== '') {
                if (flag) {
                    url += '&reg-end-date=' + reg_end_date;
                } else {
                    url += '?reg-end-date=' + reg_end_date;
                    flag = true;
                }
            }
            if (faculty !== '' & faculty >0) {
                if (flag) {
                    url += '&faculty=' + faculty;
                } else {
                    url += '?faculty=' + faculty;
                    flag = true;
                }
            }
            if (semester !== '' & semester >0) {
                if (flag) {
                    url += '&semester=' + semester;
                } else {
                    url += '?semester=' + semester;
                    flag = true;
                }
            }
            if (status !== '' ) {
                if (status !== 'all') {
                    if (flag) {
                        url += '&status=' + status;
                    } else {
                        url += '?status=' + status;
                    }

                }
            }
            location.href = url;
        });
    });

    function loadSemesters($this) {
        $.ajax({
            type: 'POST',
            url: '{{ route('student.find-semester') }}',
            data: {
                _token: '{{ csrf_token() }}',
                faculty_id: $this.value
            },
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.error) {
                    $.notify(data.message, "warning");
                } else {
                    $('.semester_select').html('').append('<option value="0">Select Semester</option>');
                    $.each(data.semester, function(key,valueObj){
                        $('.semester_select').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                    });
                }
            }
        });

  

    }

</script>
{{-- @include('includes.scripts.inputMask_script') --}}
{{-- @include('includes.scripts.delete_confirm') --}}
{{-- @include('includes.scripts.bulkaction_confirm') --}}
{{-- @include('includes.scripts.datepicker_script') --}}
@include('projectactivities.students.includes.dataTable_scripts')



<script>
    (function($){
        var DeleteStudents = (function(){
            var e = $('[data-toggle="alert-delete"]');
                e.length &&
                e.each(function() {
                    $(this).on('click',function(e){
                        e.preventDefault();
                        var self    = $(this)
                            url     = self.attr('href'),
                            id      = self.attr('data-id'),
                            _token  = $('meta[name="_token"]').attr('content');

                            $.get(url).done(function(data){
                                console.log(data)
                            }).fail(function(error){                                
                                var data = error.responseJSON;
                                    swal.fire({
                                        title: data.message.title,
                                        text: data.message.text,
                                        type: "warning",
                                        showCancelButton: !0,
                                        buttonsStyling: !1,
                                        confirmButtonClass: "btn btn-danger",
                                        confirmButtonText: data.message.button.confirm,
                                        cancelButtonClass: "btn btn-secondary",
                                        cancelButtonText: data.message.button.cancel,
                                    }).then(e => {
                                        if(e.value){
                                            var formData = new FormData();
                                                formData.append('id' ,id);
                                                formData.append('_token' ,_token);
                                            $.ajax({
                                                url : url,
                                                method : 'POST',
                                                data: formData,
                                                processData: false,
                                                contentType: false,
                                                success : function(data) {
                                                    if(data.success){    
                                                        self.parents('tr').remove();
                                                        swal.fire({
                                                            title: data.message.title,
                                                            text: data.message.text,
                                                            type: "success",
                                                            buttonsStyling: !1,
                                                            confirmButtonClass: "btn btn-primary",
                                                            confirmButtonText: data.message.button.confirm,
                                                        });                
                                                    }
                                                },
                                                error :function(erorr){
                                                    var data  = erorr.responseJSON;
                                                    swal.fire({
                                                        title: data.message.title,
                                                        html:  data.errors +"<br>"+ data.message.text,
                                                        type: "error",
                                                        buttonsStyling: !1,
                                                        confirmButtonClass: "btn btn-warning",
                                                        confirmButtonText:data.message.button.confirm,
                                                    });
                                                }
                                            });             
                                        }          
                                    });

                            });     
                                                
                    });
                });
            })();                
    })(jQuery);
</script>

@endpush