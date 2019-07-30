@extends('ProjectActivities.layout.master')

@push('css')
    <!-- page specific plugin styles -->
@endpush

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">           
        @include('ProjectActivities.courses.longcourse.includes.table')   
      </div>
    </div>
  </div>
@endsection

@push('custom-js')
  @include('ProjectActivities.courses.longcourse.includes.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endpush
