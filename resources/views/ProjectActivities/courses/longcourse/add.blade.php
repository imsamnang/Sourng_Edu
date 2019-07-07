       <?php  $flag = app()->getLocale();?>
       @extends('projectactivities.layout.master')

       @section('css')
       <!-- page specific plugin styles -->
       <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
       @endsection
       @section('menu-panel')
       @include('projectactivities.layout.menu.menu_admin')
       @endsection

       @section('content')
       @if($message = Session::get('success'))
       <div class="alert alert-success">
              <p>{{ $message }}</p>
       </div>
       @endif
       <div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
              <b><hr></b>
              <h4 style="color: white; font-family: Arial; background-color: #438eb9; padding: 10px;">Register Long Course</h4>
              <b><hr></b>
              <div class="card-body">
                     <form  action="{{ route('longcourse.savedata') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                   <div class="col-md-3">
                                          <div class="form-group">
                                                 <label for="reg_no">Program Main Subject</label>
                                                 {{-- <input type="text" name="course_name" style="width: 100%"> --}}
                                                 <select style="width: 100%" name="cbo_subject" required="">
                                                       @if ($flag=='kh')
                                                          <option selected disabled>សូមជ្រើសរើស </option>
                                                        @endif
                                                          
                                                        @if ($flag=='en')
                                                          <option selected disabled>Please Choose </option>
                                                        @endif
                                                        @foreach ($faculty as $row)
                                                           @if($flag=='kh')
                                                               <option value="{{ $row->id }}">
                                                                      {{ $row->faculty_kh }}
                                                               </option>
                                                               @endif
                                                           @if($flag=='en')
                                                               <option value="{{ $row->id }}">
                                                                      {{ $row->faculty_en }}
                                                               </option>
                                                            @endif 
                                                        @endforeach
                                                 </select>
                                          </div>

                                          <div class="form-group">
                                                 <label for="curriculum-author">Curriculum Author</label>
                                                 <select style="width: 100%" name="cbo_author" required="">
                                                        @if ($flag=='kh')
                                                          <option selected disabled>សូមជ្រើសរើស </option>
                                                        @endif
                                                          
                                                        @if ($flag=='en')
                                                          <option selected disabled>Please Choose </option>
                                                        @endif
                                                        @foreach ($curriculum_author as $row)
                                                           @if($flag=='kh')
                                                               <option value="{{ $row->id }}">
                                                                      {{ $row->title_kh }}
                                                               </option>
                                                               @endif
                                                           @if($flag=='en')
                                                               <option value="{{ $row->id }}">
                                                                      {{ $row->title_en }}
                                                               </option>
                                                            @endif 
                                                        @endforeach
                                                 </select>
                                          </div>
                                   </div>

                             <div class="col-md-3">
                              <div class="form-group">
                               <label for="curriculum">Program Type</label>
                               <select style="width: 100%" name="cbo_type" required="">
                                   @if ($flag=='kh')
                                      <option selected disabled>សូមជ្រើសរើស </option>
                                   @endif
                                                          
                                   @if ($flag=='en')
                                      <option selected disabled>Please Choose </option>
                                   @endif
                                   @foreach ($program_type as $row)
                                   @if($flag=='kh')
                                   <option value="{{ $row->id }}">
                                          {{ $row->title_kh }}
                                   </option>
                                   @endif
                                   @if($flag=='en')
                                   <option value="{{ $row->id }}">
                                          {{ $row->title_en }}
                                   </option>
                                   @endif  
                                   @endforeach
                            </select>
                     </div>

                     <div class="form-group">
                            <label for="teacher_name">Promotion Start Date</label>
                            <input type="date" name="txt_start_date" class="form-control input-sm" required="" style="width: 100%">
                     </div>
              </div>

       <div class="col-md-3">
                     <div class="form-group">
                        <label for="overal_fund">Overal Fund</label>
                        <select style="width: 100%" name="cbo_fund_overall">
                               @if ($flag=='kh')
                                   <option selected disabled>សូមជ្រើសរើស </option>
                               @endif
                                                          
                               @if ($flag=='en')
                                   <option selected disabled>Please Choose </option>
                               @endif
                               @foreach ($overal_fund as $row)
                               @if($flag=='kh')
                               <option value="{{ $row->id }}">{{ $row->title_kh }}</option>
                               @endif

                               @if($flag=='en')
                               <option value="{{ $row->id }}">{{ $row->title_en }}</option>
                               @endif

                               @endforeach
                        </select>
                 </div>

                 <div class="form-group">
                      <label for="overal_fund">2018-2019</label>
                      <select style="width: 100%" name="cbo_pro_duration">
                            <option selected="" disabled="">Please Choose one</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                     </select>
              </div>
       </div>

       <div class="col-md-3">
         <div class="form-group">
               <label for="curriculum">Curriculum Endorsement</label>
               <select style="width: 100%" name="cbo_curriculum" required="">
                     @if ($flag=='kh')
                        <option selected disabled>សូមជ្រើសរើស </option>
                     @endif
                                                          
                     @if ($flag=='en')
                         <option selected disabled>Please Choose </option>
                     @endif
                     @foreach ($curriculum_endo as $row)
                        @if($flag=='kh')
                            <option  value="{{ $row->id }}">{{ $row->title_kh }}</option>
                        @endif

                        @if($flag=='en')
                            <option  value="{{ $row->id }}">{{ $row->title_en }}</option>
                        @endif
                     @endforeach
              </select>
       </div>

       <div class="form-group">
        <label for="txt_batch_name">Batch / Group</label>
        <input type="text" name="txt_batch_name" class="form-control input-sm" required="" style="width: 100%">
 </div>
</div>
</div>

<div class="row">
   <div class="col-md-10"></div>
   <div class="col-md-2">
         <a href="{{ route('projects.longcourse') }}" class="btn btn-info btn-sm" style="float: right; margin-left: 5px;">Back</a>
         <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Save</button>
  </div>
</div>
</form>
</div>
</div> 

@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


@include('includes.scripts.inputMask_script')
@include('includes.scripts.datepicker_script')

@endsection

