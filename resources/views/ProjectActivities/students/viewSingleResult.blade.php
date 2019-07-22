@extends('ProjectActivities.layout.master')

@push('custom-css')
    <!-- page specific plugin styles -->
@endpush

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        <div class="row">
          <div class="new-start">
            <center>              
              <h3>The Result of {{$subjectName->subject->title }} Quizs</h3>
            </center>
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                  <th class="center" width="100px">
                    <label class="pos-rel">
                      <input type="checkbox" class="ace" />
                      <span class="lbl"></span>
                    </label>
                  </th>                  
                  <th>Quiz Title</th>
                  <th>Correct Answer</th>
                  <th>My Answer</th>
                  <th>Mark</th>
                  <th>Total Mask</th>
                </thead>
                <tbody>
                  @if($allUserAnswer)
                    @foreach($allUserAnswer as $quiz)
                      <tr>
                        <td class="center first-child">
                          <label>
                            <input type="checkbox" name="chkIds[]" value="{{ $quiz->id }}" class="ace" />
                            <span class="lbl"></span>
                          </label>
                        </td>                        
                        <td>{{ $quiz->question->title }}</td>
                        <td>{{ $quiz->answer->option->title }}</td>
                        <td>{{ $quiz->option->title }}</td>
                        <td>{{ $quiz->subject->per_q_mark }}</td>
                        <td>{{ $totalQuestion }}</td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="3">You have no available quizzes.</td>
                    </tr>
                  @endif
                  <tr>
                    <td>Total Correct</td>
                    <td>{{ $countTrue }}</td>
                    <td>Total Incorrect</td>
                    <td>{{ $countFalse }}</td>
                    <td>Total Score = </td>
                    <td>{{ $countTrue }}</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div><!-- /.row -->
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection

@push('custom-js')
  @include('projectactivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endpush