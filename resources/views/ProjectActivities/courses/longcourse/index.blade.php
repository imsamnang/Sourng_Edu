@extends('projectactivities.layout.master')

@push('css')
    <!-- page specific plugin styles -->
@endpush

@section('menu-panel')
    @include('projectactivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">           
        @include('projectactivities.courses.longcourse.includes.table')   
      </div>
    </div>
  </div>
@endsection

@push('custom-js')
  @include('projectactivities.courses.longcourse.includes.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endpush
