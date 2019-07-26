<?php  $flag = app()->getLocale();?>
  <div class="row">
    <div class="col-xs-12">
      @include('projectactivities.courses.shortcourse.includes.data_table_header')
      <!-- div.table-responsive -->
      <div class="table-responsive">
        {!! Form::open() !!}
          <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="center">
                  <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                  </label>
                </th>
                <th>{{ __('shortcoure_id') }}</th>
                <th>{{ __('shortcoure_Course-Code') }}</th>
                <th>{{ __('shortcoure_Course_Name') }}</th>
                <th class="hidden-480">{{__('shortcoure_teacher_hours') }}</th>
                <th class="hidden-480">{{ __('shortcoure_Overal-Fund') }}</th>    
                <th class="hidden-480">{{ __('staff_frm_search_Status') }}</th>
                <th>{{ __('shortcoure_Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @if (isset($data['ListCourse']) && $data['ListCourse']->count() > 0)
              @php($i=1)
                @foreach($data['ListCourse'] as $row)
                  <tr>
                    <td class="center first-child">
                      <label>
                        <input type="checkbox" name="chkIds[]" value="{{ $row->id }}" class="ace" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>{{ $i }}</td>                
                    @if($flag=='kh')
                      <td class="action-buttons"><a href="{{ route('projects.coursedetail',$row->id) }}">{{ $row->faculty->faculty_kh }} </a> <span style="color:red;">({{ App\Models\Courseshortstudent::where('course_short_id',$row->id)->count() }} នាក់)</span></td>
                    @endif
                    @if($flag=='en')
                      <td class="action-buttons"><a href="{{ route('projects.coursedetail',$row->id) }}">{{ $row->faculty->faculty_en }} </a><span style="color:red;">({{ App\Models\Courseshortstudent::where('course_short_id',$row->id)->count() }} នាក់)</span> </td>
                    @endif
                    <td ><a href="#"> {{ $row->course_name }}</a></td>
                    <td class="hidden-480"><a href="#"> {{ $row->total_training_hour }}</a></td>                
                    @if($flag=='kh')
                      <td class="hidden-480"><a href="#"> {{ $row->overalFund->title_kh }}</a></td>
                    @endif
                    @if($flag=='en')
                      <td class="hidden-480"><a href="#"> {{ $row->overalFund->title_en }}</a></td>
                    @endif                
                    <td class="hidden-480 ">
                      <div class="btn-group">            
                        @if ($row->status == 'active')
                        <a href="#" title="Active"><i class="fa fa-check success" aria-hidden="true"></i></a>
                        @else
                        <a href="#" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                        @endif
                      </div>
                    </td>                      
                    <td>
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a href="{{route('projects.shortcourse_detail',$row->id)}}">បញ្ជីឈ្មោះសិស្ស <span style="color:red;">({{ App\Models\Courseshortstudent::where('course_short_id',$row->id)->count() }} នាក់)</span></a>
                        <a href="{{route('projects.shortcourse_detail',$row->id)}}" class="btn btn-primary btn-minier btn-primary">
                          <i class="ace-icon fa fa-eye bigger-130"></i>
                        </a>
                        <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="btn btn-primary btn-minier btn-success">
                          <i class="ace-icon fa fa-pencil bigger-130"></i>
                        </a>
                          <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$row->id}})" style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;"><i class="ace-icon fa fa-trash-o bigger-130"></i></button>
                          <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy', $row->id) }}"
                            method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                          </form>
                      </div>
                      <div class="hidden-md hidden-lg">
                        <div class="inline pos-rel">
                          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                              <a href="{{route('projects.shortcourse_detail',$row->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                <span class="blue">
                                  <i class="ace-icon fa fa-eye bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                <span class="blue">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                              {{-- <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="btn btn-primary btn-minier btn-success">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                              </a> --}}
                            </li>
                            <li>
                              <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$row->id}})" style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;"><i class="ace-icon fa fa-trash-o bigger-130"></i></button>

                              <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy', $row->id) }}"
                                method="POST" style="display: none">
                                @csrf
                                @method('DELETE')
                              </form>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                @php($i++)
                @endforeach
              @else
                <tr>
                  <td colspan="11">No data found.</td>
                </tr>
              @endif
            </tbody>
          </table>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>