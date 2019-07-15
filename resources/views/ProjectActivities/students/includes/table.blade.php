<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp; @lang('Panel_List') </h4>
        <div class="clearfix" >

            <span class="easy-link-menu" >
                    <a href="{{url('projects/student/registerv2')}}" class="btn-success btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;@lang('btn_st_Add')</a>
                    <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;@lang('btn_st_Active')</a>
                <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="in-active"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;@lang('btn_st_inActive')</a>
                <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;@lang('btn_st_Delete')</a>
            </span>

            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header" >
            {{-- {{ $panel }}​ @lang('Panel_st_Record')  --}}
        </div>
        <!-- div.table-responsive -->
            <!-- div.table-responsive -->
        <div class="table-responsive" style="margin-top:12px;">
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
                    <th>@lang('tbl_S_N')</th>
                    {{-- <th>@lang('tbl_Faculty')</th>
                    <th>@lang('tbl_Sem')</th> --}}
                    <th>@lang('tbl_Reg_Num')</th>
                    {{--<th>Reg.Date</th>--}}
                    <th>@lang('tbl_Student_Name')</th>
                    {{-- <th>Phone</th> --}}
                    <th>ភេទ​</th>
                    <th class="hidden-480">ឆ្នាំកំណើត</th>
                    <th>Phone</th>
                    {{-- <th>@lang('tbl_Status')</th> --}}
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['student']) && $data['student']->count() > 0)
                    @php($i=1)
                    @foreach($data['student'] as $student)
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ $student->id }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>{{ $i }}</td>
                            {{-- <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                            <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td> --}}
                            {{--<td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}} </td>--}}
                            <td><a href="{{ $student->id }}">{{ $student->reg_no }}</a></td>
                            <td><a href="{{ $student->id }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                            <td><div>{{ $student->gender }}</div></td>
                            <td class="hidden-480 "><div>{{ date('Y-m-d', strtotime($student->date_of_birth)) }}</div></td>
                           
                            <td><div>{{ $student->mobile_1 }}</div></td>
                           
                            {{-- <td class="hidden-480 ">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $student->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $student->status == 'active'?"Active":"In Active" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ $student->id }}" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ $student->id }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </td> --}}

                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="#" class="btn btn-primary btn-minier btn-primary">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-minier btn-success">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-minier btn-danger bootbox-confirm" >
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
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="blue">
                                                        <i class="ace-icon fa fa-eye bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $student->id}}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ $student->id }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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
                        <td colspan="11">No  data found.</td>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}

        </div>
    </div>
</div>