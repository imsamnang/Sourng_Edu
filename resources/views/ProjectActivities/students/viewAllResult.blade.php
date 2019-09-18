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
              <h3>The Result for All Quizs</h3>
            </center>
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                  <th class="center" width="100px">
                    <label class="pos-rel">
                      <input type="checkbox" class="ace" />
                      <span class="lbl"></span>
                    </label>
                  </th>
                  <th>No.</th>
                  <th>Date</th>
                  <th>Result</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @if($allResults)
                    @foreach($allResults as $quiz)
                      <tr>
                        <td class="center first-child">
                          <label>
                            <input type="checkbox" name="chkIds[]" value="{{ $quiz->id }}" class="ace" />
                            <span class="lbl"></span>
                          </label>
                        </td>                        
                        <td>{{$quiz->id}}</td>
                        <td>{{$quiz->created_at->format('d/m/Y')}}</td>
                        <td>{{$quiz->marks_scored}}</td>
                        <td>
                          <a href="{{route('quiz.single.result',$quiz->id)}}" class="btn btn-success btn-xs">View</a>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="3">You have no available quizzes.</td>
                    </tr>
                  @endif
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
  @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endpush