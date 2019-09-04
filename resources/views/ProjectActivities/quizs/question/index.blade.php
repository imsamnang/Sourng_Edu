@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}


{{-- @section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection --}}

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        <div class="row">
            <div class="col-xs-12 ">

            </div><!-- /.col -->
        </div><!-- /.row -->
        @include('ProjectActivities.quizs.question.table')     
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection


@section('custom-js')
  {{-- @include('includes.scripts.jquery_validation_scripts') --}}
  <!-- inline scripts related to this page -->
  <script type="text/javascript">
  </script>
  @include('ProjectActivities.students.includes.dataTable_scripts')
@endsection