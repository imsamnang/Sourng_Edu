@extends('ProjectActivities.layout.master')

@push('custom-css')
    <!-- page specific plugin styles -->

@endpush

@section('menu-panel')
    {{-- @include('ProjectActivities.layout.menu.menu_admin') --}}
    @include('layouts.includes.menu')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">           
        @include('ProjectActivities.courses.shortcourse.includes.table')   
      </div>
    </div><!-- /.page-content -->
  </div>
@endsection

@push('custom-js')
  @include('ProjectActivities.includes.delete_confirm')
  @include('ProjectActivities.courses.shortcourse.includes.dataTable_scripts') 
@endpush
