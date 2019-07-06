        @extends('layouts.master')

        @section('css')
        <!-- page specific plugin styles -->
     
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
        
        @endsection

        @section('content')

        <div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
          <b><hr></b>
          <h4 style="color: white; font-family: Arial; background-color: #438eb9; padding: 10px;">Register Short Course</h4>
          <b><hr></b>
          <div class="card-body">
            <form  action="/action_page.php">
              <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="reg.no">Reg.No</label>
                        {{-- <input type="text" name="course_name" style="width: 100%"> --}}
                        <select style="width: 100%" name="reg.no" required="">
                          <option selected="" disabled="">Please Choose</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="curriculum">Curriculum Endorsement</label>
                        <select style="width: 100%" name="curriculum" required="">
                          <option selected="" disabled="">Please Choose</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="teacher_name">Teacher Name(2)</label>
                        <input type="text" name="teacher_name2" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" class="form-control input-sm" required="" style="width: 100%">
                      </div>

                      <div class="form-group">
                        <label for="curriculum-author">Curriculum Author</label>
                        <select style="width: 100%" name="curriculum-author" required="">
                          <option selected="" disabled="">Please Choose Curriculum</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="teaching_houre">Teaching Houre(2)</label>
                        <input type="text" name="teaching_houre1" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="overal_fund">Overal Fund</label>
                        <select style="width: 100%">
                          <option selected="" disabled="">Please Choose Overal Fund</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="teacher_name">Teacher Name(1)</label>
                        <input type="text" name="teacher_name" class="form-control input-sm" required="" style="width: 100%">
                      </div>

                      <div class="form-group">
                        <label for="curriculum-author">Modality</label>
                        <select style="width: 100%" required="" name="curriculum-author">
                          <option selected="" disabled="">Please Choose Modality</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="houre">Total Training Houre</label>
                        <input type="text" name="houre" class="form-control input-sm" required="" style="width: 100%">
                      </div>

                      <div class="form-group">
                        <label for="teaching_houre">Teaching Houre(1)</label>
                        <input type="text" name="teaching_houre1" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                    </div>
              </div>
              <b><hr></b>
              <h4 style="color: white; font-family: Arial; background-color: #438eb9; padding: 10px;">Training Location Detail</h4>
              <b><hr></b>
              <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="teacher_name">Village</label>
                        <input type="text" name="village" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                      <div class="form-group">
                        <label for="teacher_name">Start Date</label>
                        <input type="date" name="start_date" class="form-control input-sm" required="" style="width: 100%">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="curriculum-author">Province</label>
                        <select style="width: 100%" name="curriculum-author">
                          <option selected="" disabled="">Please Choose Province</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="teacher_name">End Date</label>
                        <input type="date" name="end_date" class="form-control input-sm" style="width: 100%">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="curriculum-author">District</label>
                        <select style="width: 100%" name="curriculum-author" required="">
                          <option selected="" disabled="">Please Choose District</option>
                          <option>djgldglvdfvjiidsojligf</option>
                          <option>djgldglvdfvjiidsojligf</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="curriculum-author">Commune</label>
                        <select style="width: 100%" name="curriculum-author" required="">
                          <option selected="" disabled="">Please Choose Commune</option>
                          <option>Tamourn Commune</option>
                          <option>Jroy Sdav Commune</option>
                        </select>
                      </div>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                  <a href="#" class="btn btn-info btn-sm" style="float: right; margin-left: 5px;">Back</a>
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

