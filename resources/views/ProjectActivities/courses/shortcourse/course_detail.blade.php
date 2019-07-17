@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>


@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@push('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />

@endpush
@section('content')

<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; margin-bottom: 0px; padding-left: 30px; padding-right: 30px; padding-bottom: 0px; padding-top: 5px; border-color: #79b0ce;">

  <h5 style="color: white; font-family: Khmer OS Battambang; font-size: 24px;
  background-color: #438eb9; padding: 10px;">កម្មវិធីលម្អិត S- {{ $shortcourse_detail->id }}</h5>
  
  <div class="card-body">
    <fieldset>
      <table>
        <tbody>
          <tr style="margin: 15px;">
            <td style="width: 160px;"><strong>{{ __('shortcoure_Course-Code') }}</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              {{-- @if ($flag=='kh')
              <p>{{ $shortcourse_detail->faculty->faculty_kh }}</p>
              @endif
              @if ($flag=='en')
              <p>{{ $shortcourse_detail->faculty->faculty_en }}</p>
              @endif --}}
              <?php 
                $fact=$flag=='kh'?$shortcourse_detail->faculty->faculty_kh:$shortcourse_detail->faculty->faculty_en;
                echo $fact;
              ?>


            </td>
            <td class="hidden-480" style="width: 160px;"><strong>  {{ __('shortcoure_Course_Name') }}</strong></td>
            <td class="hidden-480" style="width: 240px; font-size: 14px; color: red;">
              @if ($flag=='kh')
              <p>{{ $shortcourse_detail->course_name }}</p>
              @endif
              @if ($flag=='en')
              <p>{{ $shortcourse_detail->course_name }}</p>
              @endif
            </td>
          </tr>

  <a href="{{ route('projects.shortcourse') }}" style="float: right; margin:0px;padding: 0px;">Back</a>
@endsection
@push('custom-js')


@endpush
