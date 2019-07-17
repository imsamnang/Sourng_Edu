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
              @if ($flag=='kh')
              <p>{{ $shortcourse_detail->faculty->faculty_kh }}</p>
              @endif
              @if ($flag=='en')
              <p>{{ $shortcourse_detail->faculty->faculty_en }}</p>
              @endif
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

          <tr class="hidden-480"style="margin: 15px;">
            <td style="width: 160px;"><strong>{{ __('shortcoure_Overal-Fund') }}</strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
             @if ($flag=='kh')
             <p>{{ $shortcourse_detail->overalFund->title_kh }}</p>
             @endif
             @if ($flag=='en')
             <p>{{ $shortcourse_detail->overalFund->title_en }}</p>
             @endif
           </td>
         </tr>

         <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Total_Training_Houre') }}</strong></td>
          <td style="width: 240px; font-size: 14px; color: red;">
            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->total_training_hour }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->total_training_hour }}</p>
            @endif
          </td>

          <td style="width: 160px;"> </td>
          <td style="width: 240px;"> </td>

        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Teacher_Name(1)') }}</strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
          សន សុផល (tel: 012 628 151 | dob: 1970-06-15) </td>
        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_Modality') }}</strong></td>
          <td colspan="3" style="font-size: 14px; color: red;">
            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->modalityName->modality_kh }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->modalityName->modality_en }}</p>
            @endif
          </td>
        </tr>

        <tr style="margin: 15px;">
          <td style="width: 160px;"><strong>{{ __('shortcoure_TrainingLocation_Detail') }} </strong></td>

          <td colspan="3" style="font-size: 14px; color: red;">

            @if ($flag=='kh')
            <p>{{ $shortcourse_detail->province->name_kh }}</p>
            @endif
            @if ($flag=='en')
            <p>{{ $shortcourse_detail->province->name_en }}</p>
            @endif
          </td>
        </td>
      </tr>

      <tr style="margin: 15px;">
        <td style="width: 160px;"><strong>{{ __('shortcoure_Start-Date') }}:</strong></td>
        <td style="width: 240px; font-size: 14px; color: red;">
          <label value="{{ $shortcourse_detail->start_date }}">{{ $shortcourse_detail->start_date }}</label>
        </td>
        <td style="width: 160px;"><strong>{{ __('shortcoure_EndDate') }}</strong></td>
        <td style="width: 240px; font-size: 14px; color: red;">
          <label value="{{ $shortcourse_detail->end_date }}">{{ $shortcourse_detail->end_date }}</label>
        </td>
      </tr>
    </tbody></table>
  </fieldset><br>
  <a href="{{ route('projects.shortcourse') }}" style="float: right; margin:0px;padding: 0px;">Back</a>
@endsection
@push('custom-js')


@endpush
