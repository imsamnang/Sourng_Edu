

@extends('projectactivities.layout.master')

@push('custom-css')
    <!-- page specific plugin styles -->

@endpush

@section('menu-panel')
    @include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">           
        @include('projectactivities.courses.shortcourse.includes.table')   
      </div>
    </div><!-- /.page-content -->
  </div>
@endsection

@push('custom-js')
  @include('projectactivities.includes.delete_confirm')
  @include('projectactivities.courses.shortcourse.includes.dataTable_scripts') 
@endpush
