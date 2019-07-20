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
              <table class="table">
                <thead>
                <th>Quiz Title</th>
                <th>Correct Answer</th>
                <th>My Answer</th>
                <th>Mark</th>
                <th>Total Mask</th>
                <th></th>
                </thead>
                <tbody>
                @if($allQuestions)
                  @foreach($allQuestions as $quiz)
                    <tr>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->option_id }}</td>
                        <td>{{ $quiz->user_response }}</td>
                        <td>{{ $quiz->per_q_mark }}</td>
                        <td>{{ $totalQuestion }}</td>
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
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <!-- inline scripts related to this page -->
  <script type="text/javascript">

  </script>
  {{-- @include('includes.dataTable_scripts') --}}
  @include('ProjectActivities.quizs.delete_confirm')
@endpush