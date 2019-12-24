@extends('layouts.master')
{{-- @extends('ProjectActivities.layout.master') --}}

@section('css')
    <!-- page specific plugin styles -->
@endsection

{{-- @section('menu-panel')
    @include('ProjectActivities.layout.menu.menu_admin')
@endsection --}}

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
        </div>
        <div class="row">
          @include('ProjectActivities.quizs.subject_type.includes.buttons')
          <div class="new-start">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
              <thead>
                <th>No.</th>
                <th width="15%">Subject Type</th>
                <th width="15%">Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Operation</th>
              </thead>
              <tbody>
								@if ($subject_type->count()>0)
									@foreach ($subject_type as $key =>$sub_type)
										<tr>
											<td>{{ ++$key }}</td>
											<td>{{ $sub_type->type }}</td>
											<td>{{ $sub_type->description}}</td>
											<td>{{ $sub_type->created_at }}</td>
											<td>{{ $sub_type->updated_at }}</td>
											<td>
		                    <div class="hidden-sm hidden-xs action-buttons">                   
	                        <a href="{{ route('quiz.subject.type.show',$sub_type->id) }}" class="btn btn-primary btn-minier btn-primary">
	                            <i class="ace-icon fa fa-eye bigger-130"></i>
	                        </a>

	                        <a href="{{ route('quiz.subject.type.edit',$sub_type->id) }}" class="btn btn-primary btn-minier btn-success">
	                            <i class="ace-icon fa fa-pencil bigger-130"></i>
	                        </a>

	                        <form method="POST" action="{{route('quiz.subject.type.destroy', $sub_type->id)}}" accept-charset="UTF-8" style="display:inline" id="deleteObject-{{$sub_type->id}}">
	                          {{csrf_field()}}
	                          {{method_field('DELETE')}}
	                          <a href="#" class="btn btn-primary btn-sx btn-danger btn-minier" onclick="deleteObject({{$sub_type->id}})"><i class="ace-icon fa fa-trash-o bigger-130"></i>
	                          </a>
	                        </form>
		                    </div>
		                    <center>
		                    <div class="hidden-md hidden-lg">
		                      <div class="inline pos-rel">
		                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
		                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
		                        </button>
		                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
		                            <li>
		                                <a href="{{ $sub_type->id }}" class="tooltip-success" data-rel="tooltip" title="Edit">
		                                <span class="blue">
		                                    <i class="ace-icon fa fa-eye bigger-120"></i>
		                                </span>
		                                </a>
		                            </li>
		                            <li>
		                              <a href="{{ route('quiz.subject.type.edit',$sub_type->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
		                                <span class="green">
		                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
		                                </span>
		                              </a>
		                            </li>
		                            <li>
		                              <center>
		                                <form method="POST" action="{{route('quiz.subject.type.destroy', $sub_type->id)}}" accept-charset="UTF-8" style="display:inline" id="deleteObject-{{$sub_type->id}}">
		                                  {{csrf_field()}}
		                                  {{method_field('DELETE')}}
		                                  <a href="#" onclick="deleteObject({{$sub_type->id}})"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span>
		                                  </a>
		                                </form>
		                              </center>                           
		                            </li>
		                        </ul>
		                      </div>
		                    </div>
		                    </center>
                      </td>
										</tr>
									@endforeach	
								@endif
              </tbody>
            </table>
          </div>
        </div><!-- /.row -->
      </div>
    </div><!-- /.page-content -->
  </div>
  <!-- /.main-content -->
@endsection

@section('js')
  @include('ProjectActivities.quizs.dataTable_scripts')
  @include('ProjectActivities.quizs.delete_confirm')
@endsection