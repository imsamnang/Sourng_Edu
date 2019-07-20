<?php  $flag = App()->getLocale();?>
@extends('projectactivities.layout.master')
@section('menu-panel')
  @include('projectactivities.layout.menu.menu_admin')
@endsection
@push('custom-css')
  <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
@endpush
@section('content')
<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
  <h5 style="color: white; font-family: Khmer OS Battambang; font-size: 24px;
  background-color: #438eb9; padding: 10px;">បញ្ជីឈ្មោះសិស្ស S- {{ $shortcourse_detail->id }}</h5>
    <div class="card-body">
      
            <div class="row">
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('shortcoure_Course-Code') }}</strong></label>
                             @if ($flag=='kh')
                              <label class="responsive" style="color: red;margin-left: 42px;">{{ $shortcourse_detail->faculty->faculty_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label class="responsive" style="color: red;margin-left: 28px;">{{ $shortcourse_detail->faculty->faculty_en }}</label>
                              @endif
                        </div>                        
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>{{ __('shortcoure_Course_Name') }}</strong></label>&emsp;
                                @if ($flag=='kh')
                                <label style="color: red;margin-left: 42px;">{{ $shortcourse_detail->course_name }}</label>
                                @endif
                                @if ($flag=='en')
                                <label style="color: red;margin-left: 10px;">{{ $shortcourse_detail->course_name }}</label>
                                @endif
                        </div>
                  </div>
            </div>              
            <div class="row">
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>{{ __('shortcoure_Overal-Fund') }}</strong></label>&emsp;
                                   @if ($flag=='kh')
                                   <label class="responsive" style="color: red;margin-left: 20px;">{{ $shortcourse_detail->overalFund->title_kh }}</label>
                                   @endif
                                   @if ($flag=='en')
                                   <label class="responsive" style="color: red;margin-left: 20px;">{{ $shortcourse_detail->overalFund->title_en }}</label>
                                   @endif
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="form-group">
                              <label><strong>{{ __('shortcoure_Training_Hour') }}</strong></label>&emsp;
                                @if ($flag=='kh')
                                <label style="color: red; margin-left: 22px;">{{ $shortcourse_detail->total_training_hour }}</labelp>
                                @endif
                                @if ($flag=='en')
                                <label style="color: red; margin-left: 15px;">{{ $shortcourse_detail->total_training_hour }}</label>
                                @endif
                          </div>
                    </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Teacher_Name') }}</strong></label>&emsp;
                             @if ($flag=='kh')
                             <label style="color: red;margin-left: 44px;">សន សុផល</label>
                             @endif
                             @if ($flag=='en')
                             <label style="color: red;margin-left: 5px;">សន សុផល</label>
                             @endif
                    </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Modality') }}</strong></label>&emsp;
                              @if ($flag=='kh')
                              <label style="color: red; margin-left: 0px;">{{ $shortcourse_detail->modalityName->modality_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label style="color: red; margin-left: 46px;">{{ $shortcourse_detail->modalityName->modality_en }}</label>
                              @endif
                    </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Training_Place') }}</strong></label>&emsp;
                              @if ($flag=='kh')
                              <label style="color: red; margin-left: 60px;">{{ $shortcourse_detail->province->name_kh }}</label>
                              @endif
                              @if ($flag=='en')
                              <label style="color: red; margin-left: 8px;">{{ $shortcourse_detail->province->name_en }}</label>
                              @endif
                    </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_Start-Date') }}</strong></label>&emsp;
                        <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}" style="color: red; margin-left: 35px;">{{ date('d-m-Y',strtotime($shortcourse_detail->start_date)) }}</label>
                    </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{ __('shortcoure_EndDate') }}</strong></label>&emsp;
                        @if($flag=='kh')
                          <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}" style="color: red; margin-left: 50px;">{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}</label>
                        @endif
                        @if($flag=='en')
                          <label value="{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}" style="color: red; margin-left: 38px;">{{ date('d-m-Y',strtotime($shortcourse_detail->end_date)) }}</label>
                        @endif
                        
                    </div>
              </div>
            </div>



      <h5 style="color: white; font-family: Khmer OS Battambang; background-color: #438eb9; padding: 10px; margin-bottom: 30px;">បន្ថែមសិស្ស</h5>    
    <div class="card-body">
      <form   action="{{ route('shortcourse_detail.savedata') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <div class="form-group">
              <center>
                <label>ជ្រើសរើសសិស្ស</label>
              </center>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
            <div class="form-group">
              {{-- <input type="text" name="student_name" style="width: 100%"> --}}
              <select multiple="" name="student_name[]" class="chosen-select form-control" id="form-field-select-4" data-placeholder="ជ្រើសរើសសិស្ស..." style="width: 100% " style="color: white; font-family: Khmer OS Battambang; background-color: #438eb9; padding: 10px;">
                @foreach ($student as $stu)
                <?php
                  $gender=$stu->gender;//ucfirst($stu->gender);
                  if($flag=='kh'){
                    $gender=$gender=='1'?'ប':'ស';
                  }else {
                    $gender=$gender=='1'?'M':'F';
                  }                            
                ?>
                  <option value="{{ $stu->id }}">{{ $stu->first_name }} - {{ $stu->last_name }} , {{ $gender }} , {{ Carbon\Carbon::parse($stu->date_of_birth)->format('Y-m-d') }} , ID:# {{ $stu->id }}</option>
                @endforeach
              </select>
            </div>  
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm" class="form-control">បន្ថែមសិស្ស</button>
              </div>
          </div>
          </div>                    
        </div>
        <div class="row">                    
          <div class="col-md-3">
            <div class="form-group">
              {{-- <label for="reg_no">{{ __('shortcoure_Course-Code') }}</label> --}}
              <input type="hidden" name="cbo_faculty" value="{{ $shortcourse_detail->id  }}">
            </div>
          </div>  
          <div class="col-md-3">
              <div class="form-group">
                {{-- <label for="reg_no">{{ __('shortcoure_Overal-Fund') }}</label> --}}
                <input type="hidden" name="cbo_overalfund" value="{{ $shortcourse_detail->overalFund->id  }}">
              </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              {{-- <label for="reg_no">Institute</label> --}}
              <input type="hidden" name="Institute" value="">
            </div>
          </div>                      
        </div>
      </form>
    </div>
{{-- End add student --}}
      <?php $TF=0; ?>
       @foreach ($shortcoursestudent as $key=> $post)
          @if (strtoupper($post->stu->gender)=='2')
             <?php $TF=$TF+1; ?>
          @endif
       @endforeach
        <h5 style="color: white; font-family: Khmer OS Battambang;
        background-color: #438eb9; padding: 10px;">ចំនួន​សិស្ស​សរុប​ក្នុង​វគ្គ {{ $shortcoursestudent->count() }} នាក់ (ស្រី {{ $TF }} នាក់)</h5>
        <div class="table-responsive">
          <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th >{{ __('shortcoure_detail_ID') }}</th>
                <th >{{ __('shortcoure_detail_StudentName') }}</th>       
                <th >{{ __('shortcoure_Course_Name') }}</th>
                <th class="hidden-480" >{{ __('shortcoure_detail_OveralFund') }}</th>
                <th class="hidden-480" >{{ __('shortcoure_detail_Finish?') }}</th>
                <th class="hidden-480" >{{ __('shortcoure_detail_Currently Employment?') }}</th>
                <th >{{ __('shortcoure_detail_Action') }}</th>
              </tr>
            </thead>
            <tbody id="overal_fund_list">
              @foreach ($shortcoursestudent as $key=> $post)
                <tr id="{{$post->id}}">
                  <td>{{$key+1}}</td>
                  <td>{{$post->stu->first_name}} -{{$post->stu->last_name}} , 
                    <span style="color:red;">
                        @if ($flag=='en')
                          {{$post->stu->gender==1?'M':'F'}} 
                        @endif
                        @if ($flag=='kh')
                        {{$post->stu->gender==1?'ប':'ស'}} 
                      @endif
                    </span>          
                    ( ID: <a href="#"> {{$post->stu->id}}</a> )
                  </td>
                  <td>{{ $post->Course_Short->course_name }}</td>
                  <td class="hidden-480">{{$post->overalFund->title_kh}}</td>
                  <td class="hidden-480" id="finish"></td>
                  <td class="hidden-480" id="havework"></td>
                  <td>
                    <center>
                      <a href="#" type="button" data-id="{{$post->id}}" id="editFund">
                        {{ __('shortcoure_detail_ChangeFund') }}
                      </a>               
                      <a href="#" onclick="deletePost({{$post->id}})" style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">
                        {{ __('shortcoure_detail_Delete') }}    
                      </a>    
                      {{-- <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$post->id}})" style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">{{ __('shortcoure_detail_Delete') }}</button> --}}  
                      <form id="delete-form-{{$post->id}}" action="{{ route('shortcourse_detail.destroy', $post->id) }}"
                        method="POST" style="display: none">
                        @csrf
                        @method('DELETE')
                      </form>
                    </center>               
                  </td>
                </tr>       
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal Change Fund-->
  <div class="modal fade" id="changFund" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <center>          
            <h3 style="color: white; font-family: Khmer OS Battambang;
            background-color: #438eb9; padding: 10px;" class="modal-title">
              {{ __('shortcoure_detail_ChangeFund') }}
            </h3>
          </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('projects.coursedetail.updatefund')}}" id="frm-update">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="course_short_id" id="course_short_id" value="">
            <select style="width: 100%" name="overal_fund_id" id="overal_fund_id">
              @if ($flag=='kh')                                  
                <option selected disabled>សូមជ្រើសរើស </option>
              @else
                <option selected disabled>Please Choose </option>
              @endif
              @foreach ($overal_fund as $row){
                @if ($flag=='kh')
                  <option value="{{ $row->id }}">{{ $row->title_kh}}</option>
                @else
                  <option value="{{ $row->id }}" >{{ $row->title_en}}</option>                                  
                @endif
              @endforeach
            </select>
            <input type="hidden" name="student_id" id="student_id" value="">
            <input type="hidden" name="institute_id" id="institute_id" value="">
            <br/><br/>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm">{{ __('shortcoure_Save') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Form -->       
@endsection

@push('custom-js')
  <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        // get overalFund for edit from database
        $('body').delegate('#overal_fund_list tr #editFund','click',function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.get("{{route('projects.coursedetail.editfund')}}", {id:id},
                function (data) {
                    $('#frm-update').find('#id').val(data.id);
                    $('#frm-update').find('#course_short_id').val(data.course_short_id);
                    $('#frm-update').find('#overal_fund_id').val(data.overal_fund_id);
                    $('#frm-update').find('#student_id').val(data.student_id);
                    $('#frm-update').find('#institute_id').val(data.institute_id);
                    $('#changFund').modal('show');
                },
            );
        });
        //update data to database
        $('#frm-update').on('submit',function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var id = $('#id').val();
            var url =$(this).attr('action');
            var post = $(this).attr('method');
            $.ajax({
                type: post,
                url: url,
                data: data,
                dataTy: 'json',
                success: function (data) {
                    console.log(data);
                    $('#frm-update').trigger('reset');
                    $('#changFund').modal('hide');
                    location.reload();                                  }
            });
        })

      });

    $('#form-field-select-4').chosen();
  </script>
  <script type="text/javascript">
    function deletePost(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          document.getElementById('delete-form-'+id).submit();
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
      })
    }
   </script>

        @include('projectactivities.staff.includes.dataTable_scripts') 
@endpush
