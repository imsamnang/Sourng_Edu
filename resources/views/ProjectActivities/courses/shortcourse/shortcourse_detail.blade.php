@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>
@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@section('css')

@endsection
@section('content')

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
 
  <h5 style="color: white; font-family: Khmer OS Battambang;
  background-color: #438eb9; padding: 10px;">លម្អិតវគ្គខ្លី</h5>
  
  <div class="card-body">
    <fieldset>
      <table>
        <tbody>
          <tr style="margin: 15px;">
            <td style="width: 160px;"><strong>{{ __('shortcoure_Course-Code') }}</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              @if ($flag=='kh')
              <p>{{ $shortcourse_detail->faculty->faculty_kh }}</p>
              @endif
              @if ($flag=='en')
              <p>{{ $shortcourse_detail->faculty->faculty_en }}</p>
              @endif
            </td>
            <td style="width: 160px;"><strong>  {{ __('shortcoure_Course_Name') }}</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              @if ($flag=='kh')
              <p>{{ $shortcourse_detail->course_name }}</p>
              @endif
              @if ($flag=='en')
              <p>{{ $shortcourse_detail->course_name }}</p>
              @endif
            </td>
          </tr>

          <tr style="margin: 15px;">
            <td style="width: 160px;"><strong>{{ __('shortcoure_Overal-Fund') }}</strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
             @if ($flag=='kh')
             <p>{{ $shortcourse_detail->overalFund->title_kh }}</p>
             @endif
             @if ($flag=='en')
             <p>{{ $shortcourse_detail->overalFund->title_en }}</p>
             @endif
           </td>
         </tr>

         <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Total_Training_Houre') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->total_training_hour }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->total_training_hour }}</p>
            @endif
          </td>

          <td style="width: 160px;"> </td>
          <td style="width: 240px;"> </td>
        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Teacher_Name(1)') }}</strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
          សន សុផល (tel: 012 628 151 | dob: 1970-06-15) </td>
        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Modality') }}</strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->modalityName->modality_kh }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->modalityName->modality_en }}</p>
            @endif
          </td>
        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_TrainingLocation_Detail') }} </strong></td>

          <td colspan="3" style="font-size: 14px; color: red;">
            
            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->provinceName->name_kh }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->provinceName->name_en }}</p>
            @endif
          </td>
        </td>
      </tr>

      <tr style="margin: 15px;">
        <td style="width: 160px;"><strong>{{ __('shortcoure_Start-Date') }}:</strong></td>
        <td style="width: 240px; font-size: 14px; color: red;">
          <label value="{{ $shortcourse_detail->start_date }}">{{ $shortcourse_detail->start_date }}</label>
        </td>
        <td style="width: 160px;"><strong>{{ __('shortcoure_EndDate') }}</strong></td>
        <td style="width: 240px; font-size: 14px; color: red;">
          <label value="{{ $shortcourse_detail->end_date }}">{{ $shortcourse_detail->end_date }}</label>
        </td>
      </tr>
    </tbody></table>
  </fieldset><br>

  <h5 style="color: white; font-family: Khmer OS Battambang;
  background-color: #438eb9; padding: 10px;">បញ្ជីសិស្សឈ្មោះសិស្សរៀនវគ្គខាងលើ</h5>

  {{--  //Form Add Studetn to this course --}}
    {{-- <div class="row">
      <form method="post" action="">
        <div class="col-md-1">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">
              Add Student
            </button>
          </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
          <input type="text" class="form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Student Name" style="width: 100%">
        </div>
      </div>
    </form>
  </div> --}}
  {{--   //End Form add student --}}



  <table class="table table-bordered table-striped table-hover dataTable js-exportable">
    <thead>
      <tr>
        <th width="50px;">ID</th>
        <th width="170px;">Student Name</th>
        <th width="90px;">Sex</th>
        <th width="150px;">Date Of Birth</th>
        <th width="100px;">Overal Fund</th>
        <th width="100px;">Finish?</th>
        <th width="150px;">Currently Employment?</th>
        <th width="100px;">Action</th>
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
                                           {{--  <a href="{{ asset('documents'.DIRECTORY_SEPARATOR.'staff'.DIRECTORY_SEPARATOR.ViewHelper::getStaffById( $post->member_id ).'/'.$post->file) }}" target="_blank">
                                                <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;{{ $post->file }}
                                              </a> --}}
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>
                                              <center>

                                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal">
                                                  Change Fund
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h4 class="modal-title" id="example">Change Overal Fund</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="post" action="">
                                                          {{-- <select name="cbo_fund_overall" style="width: 100%">
                                                            <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                            <option value="1">មូល​និធិ​ជាតិ​បណ្ដុះ​បណ្ដាល (NTF)</option>
                                                            <option value="2">ថវិកា​ទ្រទ្រង់​គ្រឹះស្ថាន</option>
                                                            <option value="3">មូល​និធិ​ពិសេស​របស់​សម្តេច​តេជោ​នាយក​រដ្ឋមន្រ្តី (SF)</option>
                                                            <option value="4">កម្មវិធី​បណ្ដុះ​បណ្ដាល​ជំនាញ​តាម​លិខិត​បញ្ជាក់ (VSTP)</option>
                                                            <option value="5">គម្រោង​សាក​ល្បង​លើ​បច្ចេក​ទេស​ក្រោយ​ប្រមូលផល</option>
                                                            <option value="6">សិក្សា​បង់ថ្លៃ</option>
                                                            <option value="7">ផ្សេងៗ</option>
                                                          </select> --}}
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
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary btn-sm">Save</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div><!-- End Modal Form -->

                                                |
                                                <a href="#" {{-- class="btn btn-primary btn-minier btn-primary" --}}>
                                                  {{-- <i class="ace-icon fa fa-pencil bigger-130"> --}}</i>
                                                  Delete
                                                </a>

                                                {{-- <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$post->id}})" style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;"><i class="ace-icon fa fa-trash-o bigger-130"></i></button>

                                                <form id="delete-form-{{$post->id}}" action="{{ route('shortcoursedetail.delete', $post->id) }}"
                                                  method="POST" style="display: none">
                                                  @csrf
                                                  @method('DELETE')
                                                </form> --}}
                                              </center>
                                            </td>
                                          </tr>
                                          @endforeach


                                          
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="row">
                                      {{-- //Pagination --}}
                                      <div class="col-md-12 align-left">
                                        {{ $student->onEachSide(1)->links() }}
                                      </div>
                                    </div>
                                    {{-- End pagination --}}
                                  </div>
                                </div>
                              </div>
                              @endsection
                              @section('js')
{{--                               <script type="text/javascript">
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

                              </script> --}}
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

                              @endsection
