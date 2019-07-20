@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>
@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@push('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />

@endpush
@section('content')

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">

  <h5 style="color: white; font-family: Khmer OS Battambang;
  background-color: #438eb9; padding: 10px; margin-bottom: 15px;">លម្អិតវគ្គវែង</h5>
  
  <div class="card-body">        
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label><strong>Main Subject</strong></label>
            @if($flag=='kh')
              <label class="responsive" style="color: red;margin-left: 10px;">{{ $longcourse_detail->faculty->faculty_kh }}</label>
            @endif
            @if($flag=='en') 
              <label class="responsive" style="color: red;margin-left: 28px;">{{ $longcourse_detail->faculty->faculty_en }}</label>
            @endif
        </div>                        
      </div>
      <div class="col-md-4">
            <div class="form-group">
                <label><strong>{{ __('longcourse-detail_Program Type') }}</strong></label>&emsp;
                    
                      @if($flag=='kh')
                      <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->program_type->title_kh }}</label>
                      @endif
                      @if($flag=='en') 
                      <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->program_type->title_en }}</label>
                      @endif
            </div>
      </div>
    </div>
    <div class="row">
            <div class="col-md-4">
                  <div class="form-group">
                      <label><strong>{{ __('longcourse-detail_OveralFund') }}</strong></label>&emsp;
                          @if($flag=='kh')
                          <label class="responsive" style="color: red;margin-left: 1px;">{{ $longcourse_detail->overalFundName->title_kh }}</label>
                          @endif
                          @if($flag=='en') 
                          <label class="responsive" style="color: red;margin-left: 20px;">{{ $longcourse_detail->overalFundName->title_en }}</label>
                          @endif
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="form-group">
                      <label><strong>Start Date</strong></label>&emsp;
                      @if($flag=='kh')
                        <label style="color: red; margin-left: 73px;">{{ $longcourse_detail->promotion_start_date }}</label>
                      @endif
                      @if($flag=='en')
                        <label style="color: red; margin-left: 35px;">{{ $longcourse_detail->promotion_start_date }}</label>
                      @endif


                  </div>
            </div>
    </div>
    <div class="row">
      <div class="col-md-4">
            <div class="form-group">
                <label><strong>{{ __('Studytime') }}</strong></label>&emsp;
                @if($flag=='kh')
                <label style="color: red;margin-left: 10px;">{{ $longcourse_detail->academic_year }}</label>
                @endif
                @if($flag=='en')
                <label style="color: red;margin-left: 32px;">{{ $longcourse_detail->academic_year }}</label>
                @endif
            </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
                <label><strong>Bath Group</strong></label>&emsp;
                @if($flag=='kh')
                <label style="color: red; margin-left: 63px;">{{ $longcourse_detail->batch_group }}</label>
                @endif
                @if($flag=='en')
                <label style="color: red; margin-left: 28px;">{{ $longcourse_detail->batch_group }}</label>
                @endif
            </div>
      </div>
    </div>
    {{-- Add Students --}}
    <h5 style="color: white; font-family: Khmer OS Battambang;
    background-color: #438eb9; padding: 10px; margin-bottom: 30px;">បន្ថែមសិស្ស</h5>
    
    <div class="card-body">
      <form   action="{{ route('longcourse_detail.savedata') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <center><label>ជ្រើសរើសសិស្ស</label></center>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              {{-- <input type="text" name="student_name" style="width: 100%"> --}}
              <select multiple="" name="student_name[]" class="chosen-select form-control" id="form-field-select-4" data-placeholder="ជ្រើសរើសសិស្ស..." style="width: 100% !important" >
                @foreach ($student as $stu)

                <?php 
                $gender=ucfirst($stu->gender);
                if($gender=='MALE'){
                  $gender='M';
                }else {
                  $gender='F';
                }

                ?>

                <option value="{{ $stu->id }}">{{ $stu->first_name }} - {{ $stu->last_name }} , {{ $gender }} , {{ Carbon\Carbon::parse($stu->date_of_birth)->format('d-m-Y') }} , ID:# {{ $stu->id }}</option>

                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" class="form-control">បន្ថែមសិស្ស</button>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <input type="hidden" name="cbo_faculty" value="{{ $longcourse_detail->id  }}">
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            
            <input type="hidden" name="cbo_overalfund" value="{{ $longcourse_detail->overalFundName->id  }}">
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





















{{--   <h5 style="color: white; font-family: Khmer OS Battambang;
  background-color: #438eb9; padding: 10px; margin-bottom: 15px;">បញ្ជីឈ្មោះសិស្សរៀនវគ្គខាងលើ</h5>

  <div class="table-responsive">
  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th width="50px;">{{ __('shortcoure_detail_ID') }}</th>
        <th width="170px;">{{ __('shortcoure_detail_StudentName') }}</th>
        <th width="90px;">{{ __('shortcoure_detail_Sex') }}</th>
        <th width="150px;">{{ __('shortcoure_detail_DateOfBirth') }}</th>
        <th width="100px;">{{ __('shortcoure_detail_OveralFund') }}</th>
        <th width="100px;">{{ __('shortcoure_detail_Finish?') }}</th>
        <th width="150px;">{{ __('shortcoure_detail_Currently Employment?') }}</th>
        <th width="100px;">{{ __('shortcoure_detail_Action') }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($student as $key=> $post)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$post->first_name}}</td>
        <td>{{ $post->gender }}</td>
        <td>{{$post->date_of_birth}}</td>
        <td>
        </td>
        <td></td>
        <td></td>

        <td>
          <center>

            <a href="#" type="button" data-toggle="modal" data-target="#exampleModal">
              {{ __('shortcoure_detail_ChangeFund') }}
            </a>
            |
            <a href="#">{{ __('shortcoure_detail_Delete') }}</a>
            <!-- Modal Form -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="example">{{ __('shortcoure_detail_ChangeFund') }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="">
                      <select style="width: 100%" name="cbo_fund_overall">
                        @if ($flag=='kh')
                        <option selected disabled>សូមជ្រើសរើស </option>
                        @else
                        <option selected disabled>Please Choose </option>
                        @endif

                        @foreach ($overal_fund as $row){
                        @if ($flag=='kh')
                        <option value="{{ $row->id }}">{{ $row->title_kh}}</option>
                        @else
                        <option value="{{ $row->id }}">{{ $row->title_en}}</option>                                  
                        @endif
                        @endforeach
                      </select>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-primary btn-sm">{{ __('shortcoure_Save') }}</button>
                  </div>
                </div>
              </div>
            </div><!-- End Modal Form -->




          </center>
        </td>
      </tr>
      @endforeach       
    </tbody>
  </table>
</div>
</div>
<div class="row">
  {{-- //Pagination --}}
{{--   <div class="col-md-12 align-left">
    {{ $student->onEachSide(1)->links() }}
  </div>
</div>
{{-- End pagination --}}
{{-- </div>
</div>
</div> --}}

{{-- @endsection
@push('custom-js')
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script type="text/javascript">
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
@endpush --}} {{-- --}} 







{{-- //========================New Table===================// --}}

<?php $TF=0; ?>
       @foreach ($longcoursestudent as $key=> $post)
          @if (strtoupper($post->stu->gender)=='2')
             <?php $TF=$TF+1; ?>
          @endif
       @endforeach
        <h5 style="color: white; font-family: Khmer OS Battambang;
        background-color: #438eb9; padding: 10px;">ចំនួន​សិស្ស​សរុប​ក្នុង​វគ្គ {{ $longcoursestudent->count() }} នាក់ (ស្រី {{ $TF }} នាក់)</h5>
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
              @foreach ($longcoursestudent as $key=> $post)
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
                  <td>{{ $post->fuculty->faculty_en }}</td>
                  @if($flag=='kh')
                  <td class="hidden-480">{{$post->overalFund->title_kh}}</td>
                  @endif
                  @if($flag=='en')
                  <td class="hidden-480">{{$post->overalFund->title_en}}</td>
                  @endif
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
                      <form id="delete-form-{{$post->id}}" action="{{ route('longcourse_detail.destroy', $post->id) }}"
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
          <form method="post" action="{{route('projects.longcoursedetail.updatefund')}}" id="frm-update">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="course_long_id" id="course_long_id" value="">
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
            $.get("{{route('projects.longcoursedetail.editfund')}}", {id:id},
                function (data) {
                    $('#frm-update').find('#id').val(data.id);
                    $('#frm-update').find('#course_long_id').val(data.course_long_id);
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