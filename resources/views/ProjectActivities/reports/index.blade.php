

@extends('ProjectActivities.layout.master')

@section('css')
    <!-- page specific plugin styles -->

@endsection

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">           
        @include('ProjectActivities.reports.includes.table')   
      </div>
    </div><!-- /.page-content -->
  </div>
@endsection

@section('js')
    {{-- @include('includes.scripts.jquery_validation_scripts') --}}


    <!-- inline scripts related to this page -->
  
    {{-- @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script') --}}

    @include('ProjectActivities.courses.longcourse.includes.dataTable_scripts')
@endsection
