<div class="form-horizontal">
    <div class="row">
        <div class="col-xs-12">
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
            <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('hostel.table.List') }}{{ __('m_Resident') }}</h4>
            <div class="clearfix">
                <label class="col-sm-2 control-label">{{ __('hostel.button.Hostel') }}</label>
                <div class="col-sm-4">
                    {!! Form::select('hostel_bulk', $data['active_hostels'], null, ['class' => 'form-control', "onChange" => "loadRooms(this)"]) !!}
                </div>
                <label class="col-sm-1 control-label">{{ __('hostel.table.Rooms') }}</label>
                <div class="col-sm-2">
                    <select name="room_bulk" class="form-control room_select" onChange="loadBeds(this)">
                        <option value="0">{{ __('hostel.form.SelectRoom') }} </option>
                    </select>
                </div>
                <label class="col-sm-1 control-label">{{ __('hostel.form.Bed') }}</label>
                <div class="col-sm-2">
                    <select name="bed_bulk" class="form-control bed_select">
                        <option value="0">{{ __('hostel.form.SelectBed') }}</option>
                    </select>
                </div>
            </div>
            <hr class="hr-12">
            <div class="clearfix">
                <span class="easy-link-menu">
                    {{--<a class="btn-success btn-sm bulk-action-btn" attr-action-type="Shift" id="shift-btn"><i class="fa fa-exchange" aria-hidden="true"></i>&nbsp;Shift Now </a>--}}
                    <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="Shift" id="shift-btn"><i class="fa fa-exchange" aria-hidden="true"></i>&nbsp;{{ __('hostel.table.Shift.Now') }}</a>
                    <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="Active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;{{ __('hostel.table.active') }}</a>
                    <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="Leave"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;{{ __('hostel.button.Leave') }}</a>
                    <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="Delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;{{ __('hostel.button.delete') }}</a>
                </span>
                <span class="pull-right tableTools-container"></span>
            </div>
            <div class="table-header">
                {{ __('hostel.button.Resident') }} {{ __('hostel.message.Record list on table. Filterlis.using.search.box.as.your.Wish.') }}
            </div>
            <!-- div.table-responsive -->
            <div class="table-responsive">
                {{--{!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}--}}
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead >
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>{{ __('hostel.table.S.N.') }}</th>
                            <th>{{ __('hostel.button.Hostel') }}</th>
                            <th>{{ __('hostel.table.Rooms') }}</th>
                            <th>{{ __('hostel.form.Bed') }}</th>
                            <th>{{ __('search.label.Type') }}</th>
                            <th>{{ __('m_stu_detail.regno') }}</th>
                            <th>{{ __('hostel.table.Name') }}</th>
                            <th>{{ __('hostel.table.Status') }}</th>
                            <th>{{ __('hostel.form.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (isset($data['resident']) && $data['resident']->count() > 0)
                        @php($i=1)
                        @foreach($data['resident'] as $resident)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $resident->id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>{{ $i }}</td>
                                <td>
                                    <a href="{{ route('hostel.view', ['id' => $resident->hostels_id]) }}">{{ ViewHelper::getHostelNameById($resident->hostels_id) }} </a>

                                </td>
                                <td>{{ $resident->rooms_id ==""?"":ViewHelper::getRoomNumberById($resident->rooms_id) }}</td>
                                <td>{{ $resident->beds_id == ""?"":ViewHelper::getBedNumberById($resident->beds_id) }}</td>
                                <td>{{ $resident->user_type==1?"Student":"Staff" }}</td>
                                <td>
                                    @if($resident->user_type==1)
                                        <a href="{{ route('student.view', ['id' => $resident->member_id]) }}">
                                            {{ ViewHelper::getStudentById($resident->member_id) }}
                                        </a>
                                    @else
                                        <a href="{{ route('staff.view', ['id' => $resident->member_id]) }}">
                                            {{ ViewHelper::getStaffById($resident->member_id) }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($resident->user_type==1)
                                        {{ ViewHelper::getStudentNameById($resident->member_id) }}
                                    @else
                                        {{ ViewHelper::getStaffNameById($resident->member_id) }}
                                    @endif
                                </td>
                                <td>
                                    @if($resident->status == "active")
                                        <label class="label label-primary">Active</label>
                                    @else
                                        <label class="label label-default">Leave</label>
                                    @endif
                                </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        @if($resident->status == 'active')
                                            <a class="open-ShiftResident green" data-toggle="modal"
                                               data-target="#shiftResident"
                                               data-id="{{ $resident->id }}"
                                               data-reg="{{ $resident->reg_no }}">
                                                 <span>
                                                     <i class="ace-icon fa fa-exchange bigger-130"></i> Shift
                                                 </span>
                                            </a>
                                            <a href="{{ route('hostel.resident.leave', ['id' => $resident->id]) }}" class="red resident-confirm" attr-action-type="Leave">
                                                <i class="ace-icon fa fa-sign-out bigger-130"></i> Leave
                                            </a>
                                            @else
                                            {{--<a href="{{ route('hostel.resident.renew', ['id' => $resident->id]) }}" class="blue resident-confirm" attr-action-type="Active">
                                                <i class="ace-icon fa fa-check bigger-130"></i> Active
                                            </a>--}}
                                            <a class="open-ActiveAgain label label-primary" data-toggle="modal"
                                               data-target="#activeAgain"
                                               data-id="{{ $resident->id }}"
                                               data-reg="{{ $resident->reg_no }}">
                                                 <span>
                                                     <i class="ace-icon fa fa-check bigger-130"></i> {{ __('hostel.table.active') }}
                                                 </span>
                                            </a>
                                        @endif
                                        <a class="green" href="{{ route($base_route.'.edit', ['id' => $resident->id]) }}">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a href="{{ route($base_route.'.delete', ['id' => $resident->id]) }}" class="red bootbox-confirm">
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
                                                    <a href="{{ route($base_route.'.edit', ['id' => $resident->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route($base_route.'.delete', ['id' => $resident->id]) }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                        <span class="red ">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
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
                            <td colspan="10">{{ __('Faculty.Nodatafound.') }}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>

