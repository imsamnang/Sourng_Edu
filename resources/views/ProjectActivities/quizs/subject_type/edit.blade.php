@extends('layouts.master')

@section('css')
@endsection

@section('content')
  <div class="main-content">
    <div class="main-content-inner">
      <div class="page-content">
        {{-- @include('layouts.includes.template_setting') --}}
        <div class="page-header">
          <h1>
            @include('ProjectActivities.quizs.subject_type.includes.breadcrumb-primary')
            <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
              {{ __('user.Create') }}
            </small>
          </h1>
        </div><!-- /.page-header -->

        <div class="row">
          <div class="col-xs-12 ">
          {{-- @include('ProjectActivities.quizs.subject_type.includes.buttons') --}}
          <!-- PAGE CONTENT BEGINS -->
            @include('includes.validation_error_messages')
              {!! Form::model($data['row'], ['route' => ['quiz.subject.type.update', $data['row']->id], 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
              {{method_field('PUT')}}
              {!! Form::hidden('id', $data['row']->id) !!}
              @include('ProjectActivities.quizs.subject_type.includes.form')
              <div class="clearfix form-actions">
                <div class="col-md-12 align-right">
                  <button class="btn btn-sm" type="reset">
                    <i class="icon-undo bigger-110"></i>
                    {{ __('user.Reset') }}
                  </button>
                  <button class="btn btn-success btn-sm" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    {{ __('user.Update') }}
                  </button>
                </div>
              </div>
                {{-- <div class="hr hr-24"></div> --}}
                {!! Form::close() !!}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.page-content -->
    </div>
  </div><!-- /.main-content -->
@endsection

@section('js')
  @include('includes.scripts.jquery_validation_scripts')
  <script src="{{ asset('assets/js/notify.min.js') }}"></script>
  <script>
      $(document).ready(function () {
          $('table th input:checkbox').on('click' , function(){
              var that = this;
              $(this).closest('table').find('input:checkbox')
                  .each(function(){
                      this.checked = that.checked;
                      $(this).closest('tr').toggleClass('selected');
                  });

          });

          $('.group').on('click' , function(){
              var that = this;
              $(this).closest('tr').find('input:checkbox')
                  .each(function(){
                      this.checked = that.checked;
                      $(this).closest('tr').toggleClass('selected');
                  });

          });


      });
  </script>
@endsection
