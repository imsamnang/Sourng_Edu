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
                    <th>{{ __('Faculty.S.N.') }}</th>
                    <th>{{ __('Faculty.Faculty/Level/Class') }}</th>
                    <th>{{ __('Faculty.Sem./Sec') }}</th>
                    <th>{{ __('Faculty.Status') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['faculty']) && $data['faculty']->count() > 0)
                    @php($i=1)
                    @foreach($data['faculty'] as $faculty)
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ $faculty->id }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>{{ $i }}</td>
                            <td>
                                {{ $faculty->faculty }}
                            </td>
                            <td >
                                @if(isset($faculty->semester))
                                    @foreach($faculty->semester as $semester)
                                        <div class="label label-info arrowed-right arrowed-in">
                                            {{ $semester->semester }}
                                        </div>
                                        <hr class="hr-2">
                                    @endforeach
                                @endif
                            </td>
                            {{--<td>{{ $faculty->status }}</td>--}}
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $faculty->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $faculty->status == 'active'?"Active":"In Active" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('faculty.active', ['id' => $faculty->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ route('faculty.in-active', ['id' => $faculty->id]) }}"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="{{ route($base_route.'.edit', ['id' => $faculty->id]) }}">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.delete', ['id' => $faculty->id]) }}" class="red bootbox-confirm">
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
                                                <a href="{{ route($base_route.'.edit', ['id' => $faculty->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route($base_route.'.delete', ['id' => $faculty->id]) }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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
                        <td colspan="6">{{ __('Faculty.Nodatafound.') }}</td>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
