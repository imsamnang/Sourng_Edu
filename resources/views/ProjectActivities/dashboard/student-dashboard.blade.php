@extends('Projectactivities.layout.master')
@section('page-title')
    @if(isset($data['generalSetting']->institute))
        IMS | {{$data['generalSetting']->institute}}
    @else
        IMS Management
    @endif
@endsection

@push('custom-css')
    
@endpush

@section('left-panel')
    @include('ProjectActivities.layout.left.admin')
@endsection

@section('right-panel')
    @include('ProjectActivities.layout.right.admin')
@endsection

{{-- For Custom JS --}}
@push('custom-js')
    
@endpush