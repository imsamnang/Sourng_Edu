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
  background-color: #438eb9; padding: 10px; margin-bottom: 15px;">លម្អិតវគ្គវែង</h5>
  
  <div class="card-body">
    <fieldset>
      <table>
        <tbody><tr>
          <td style="width: 160px;"><strong>{{ __('longcourse-detail_ProgramMainSubject') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            @if($flag=='kh')
            <p>{{ $longcourse_detail->faculty->faculty_kh }}</p>
            @endif
            @if($flag=='en') 
            <p>{{ $longcourse_detail->faculty->faculty_en }}</p>
            @endif
          </td>
          <td style="width: 160px;"><strong>{{ __('longcourse-detail_Program Type') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            @if($flag=='kh')
            <p>{{ $longcourse_detail->program_type->title_kh }}</p>
            @endif
            @if($flag=='en') 
            <p>{{ $longcourse_detail->program_type->title_en }}</p>
            @endif

          </td>
        </tr>
        <tr>
          <td style="width: 160px;"><strong>{{ __('longcourse-detail_OveralFund') }}</strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
            @if($flag=='kh')
            <p>{{ $longcourse_detail->overalFundName->title_kh }}</p>
            @endif
            @if($flag=='en') 
            <p>{{ $longcourse_detail->overalFundName->title_en }}</p>
            @endif

          </td>
        </tr>
        <tr>
          <td style="width: 160px;"><strong>{{ __('longcourse-detail_PromotionStartDate') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            <p>{{ $longcourse_detail->promotion_start_date }}</p>
          </td>
          <td style="width: 160px;"><strong>{{ __('Studytime') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            <p>{{ $longcourse_detail->academic_year }}</p> 
          </td>
        </tr>
        <tr>
          <td style="width: 160px;"><strong></strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
            <p>{{ $longcourse_detail->batch_group }}</p>
          </td>
        </tr>
      </tbody></table>
    </fieldset>
    <h5 style="color: white; font-family: Khmer OS Battambang;
    background-color: #438eb9; padding: 10px; margin-bottom: 15px;">បញ្ជីឈ្មោះសិស្សរៀនវគ្គខាងលើ</h5>

    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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