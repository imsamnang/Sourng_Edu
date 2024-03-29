<div class="row">
    <div class="col-xs-12">
    @include('includes.data_table_header')
        <!-- div.table-responsive -->
        <div class="table-responsive">
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>{{ __('acount-fee-master.S.N.') }}</th>
                        <th>{{ __('acount-fee-master.Reg.Number.') }}</th>
                        <th>{{ __('acount-fee-master.NameofStudent') }}</th>
                        <th>{{ __('acount-fee-master.Semester') }}</th>
                        <th>{{ __('acount-fee-master.FeeHead') }}</th>
                        <th>{{ __('acount-fee-master.DueDate') }}</th>
                        <th>{{ __('acount-fee-master.FeeAmount') }}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($data['fee_master']) && $data['fee_master']->count() > 0)
                        @php($i=1)
                        @foreach($data['fee_master'] as $fee_master)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $fee_master->id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                </td>
                                <td>{{ $i }}</td>
                                <td>{{ ViewHelper::getStudentById($fee_master->students_id)}}</td>
                                <td>{{ ViewHelper::getStudentNameById($fee_master->students_id)}}</td>
                                <td> {{ ViewHelper::getSemesterById($fee_master->semester)  }}</td>
                                <td>{{ ViewHelper::getFeeHeadById($fee_master->fee_head) }} </td>
                                <td>{{ \Carbon\Carbon::parse($fee_master->fee_due_date)->format('Y-m-d')}} </td>
                                <td>{{ $fee_master->fee_amount }} </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="green" href="{{ route($base_route.'.edit', ['id' => $fee_master->id]) }}">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>
                                        @if(auth()->user()->roles[0]->slug == "super_admin" || auth()->user()->roles[0]->slug == "college_admin")
                                            <a href="{{ route($base_route.'.delete', ['id' => $fee_master->id]) }}" class="red bootbox-confirm">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="{{ route($base_route.'.edit', ['id' => $fee_master->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                    </a>
                                                </li>
                                                @if(auth()->user()->roles[0]->slug == "super_admin" || auth()->user()->roles[0]->slug == "college_admin")
                                                    <li>
                                                        <a href="{{ route($base_route.'.delete', ['id' => $fee_master->id]) }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                            <span class="red ">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">{{ __('acount-fee-balance.Nodatafound.') }}</td>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


