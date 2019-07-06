@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    @endsection

@section('content')

  <div class="main-content">
    <div class="container">
      <h2>Register New Student</h2>
      <form method="POST" action="{{route('stu.pro.save')}}" accept-charset="UTF-8" class="form-horizontal" id="validation-form" enctype="multipart/form-data">
        {{csrf_field()}}
<div class="tabbable">
  <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
    <li>
      <a style="font-family: 'Khmer OS Battambang'; font-size:18px; padding:10px 5px 10px 5px; " data-toggle="tab" href="#registrationinfo">បង្កើតសំណួរ</a>
    </li>
   
  </ul>

  <div class="tab-content">

    <div class="form-group">
    <table id="responsive" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="10%">Sort</th>
                <th width="80%">Detail</th>
                <th width="10%">
                    <button type="button" class="btn btn-xs btn-primary pull-right" id="load-academicinfo-html">
                        <a class="btn btn-primary" href="{{ route('addquestl') }}">
                        <i  class="fa fa-plus" aria-hidden="true"></i> @lang('stu_btn_reg_New')
                    </a>

                       {{--  <a class="btn btn-primary" href="{{ route('addquest') }}"><i class="ace-icon fa fa-key"></i>
                      <span class="bigger-110">Save</span></a> --}}
                    </button>
                </th>
            </tr>
        </thead>

        <tbody id="academicInfo_wrapper">

        @if (isset($data['academicInfo-html']))
            {!! $data['academicInfo-html'] !!}
        @endif

        </tbody>

    </table>
</div>

</div>
        <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
                <a class="btn btn-danger" href="{{ url('projects/student-course')}}"> Back</a>
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110" </i> Save </button>
            </div>
        </div>
      
</form>

</div>

</div><!-- /.main-content -->
    
@endsection

@section('js')
    @include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">

        /*Change Field Value on Capital Letter When Keyup*/
        $(function() {
            $('.upper').keyup(function() {
                this.value = this.value.toUpperCase();
            });
        });
        /*end capital function*/

        /*copy permanent address on temporary address*/
        function CopyAddress(f) {
            if(f.permanent_address_copier.checked == true) {
                f.temp_address.value = f.address.value;
                f.temp_state.value = f.state.value;
                f.temp_country.value = f.country.value;
            }
        }

    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.datepicker_script')

    @endsection

