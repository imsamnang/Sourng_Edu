@extends('ProjectActivities.layout.master')
@section('page-title')
    @if(isset($data['generalSetting']->institute))
        IMS | {{$data['generalSetting']->institute}}
    @else
        IMS Management
    @endif
@endsection

@push('custom-css')
    
@endpush

@section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_student')
@endsection

@section('content')
  {{-- @include('ProjectActivities.layout.left.admin') --}}
  @include('ProjectActivities.layout.right.student')
@endsection
{{-- For Custom JS --}}
@push('custom-js')
    
@endpush