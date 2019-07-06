<div class="row">
  <div class="col-xs-12">
    @include('projectactivities.courses.longcourse.includes.data_table_header')
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
            <th>@lang('lc_No')</th>
            <th>@lang('lc_BatchName')</th>
            <th class="hidden-480">@lang('lc_MainSubject')</th>
            <th class="hidden-480">@lang('lc_ProgramType')</th>                    
            <th class="hidden-480">Status</th>
            <th class="hidden-480">Action</th>
          </tr>
        </thead>
          <tbody>
            @if (isset($data['LongCourses']) && $data['LongCourses']->count() > 0)
              @php($i=1)
              @foreach($data['LongCourses'] as $row)
                <tr>
                  <td class="center first-child">
                    <label>
                      <input type="checkbox" name="chkIds[]" value="{{ $row->id }}" class="ace" />
                      <span class="lbl"></span>
                    </label>
                  </td>
                  <td>{{ $i }}</td>
                  <td class="action-buttons"><a href="{{ $row->id }}">{{ $row->batch_group }} <span style="color:red;">(11 នាក់)</span></a></td>
                  <td class="hidden-480"><a href="{{ $row->id }}">{{ $row->faculty->faculty_kh }} </a> </td>
                  <td class="hidden-480"><a href="{{ $row->id }}"> {{ $row->program_type->title_kh }}</a></td>
                  <td class="hidden-480 ">
                    <div class="btn-group">
                      {{-- <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $row->status == 'active'?"btn-info":"btn-warning" }}" >
                          {{ $row->status == 'active'?"Active":"In Active" }}
                          <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                      </button> --}}                         
                      @if ($row->status == 'active')
                          <a href="{{ $row->id }}" title="Active"><i class="fa fa-check success" aria-hidden="true"></i></a>
                      @else
                      <a href="{{ $row->id }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                      @endif
                    </div>
                  </td>                      
                  <td>
                    <div class="hidden-sm hidden-xs action-buttons">
                        <a href="#">បញ្ជីឈ្មោះសិស្ស <span style="color:red;">(11 នាក់)</span></a> |
                        <a href="#"> ធ្វើបច្ចុប្បន្នភាព</a>
                        <a href="{{ $row->id }}" class="btn btn-primary btn-minier btn-primary">
                            <i class="ace-icon fa fa-eye bigger-130"></i>
                        </a>

                        <a href="{{ $row->id }}" class="btn btn-primary btn-minier btn-success">
                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                        </a>

                        <a href="{{ $row->id }}" class="btn btn-primary btn-minier btn-danger bootbox-confirm" >
                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                        </a>
                    </div>
                    <div class="hidden-md hidden-lg">
                      <div class="inline pos-rel">
                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="{{ $row->id }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                <span class="blue">
                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                </span>
                                </a>
                            </li>
                            <li>
                              <a href="{{ $row->id }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                <span class="green">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="{{ $row->id }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                <span class="red "><i class="ace-icon fa fa-trash-o bigger-120"></i></span>
                              </a>
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