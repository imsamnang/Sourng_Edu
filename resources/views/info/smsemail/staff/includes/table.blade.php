<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('info-smsemail.StaffList') }}</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ __('info-smsemail.info') }}
        </div>
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
                    <th>{{ __('info-smsemail.S.N.') }}</th>
                    <th>{{ __('info-smsemail.Designation') }}</th>
                    <th>{{ __('info-smsemail.Reg.Num') }}</th>
                    <th>{{ __('info-smsemail.StaffName') }}</th>
                    <th>{{ __('info-smsemail.Phone') }}</th>
                    <th>{{ __('info-smsemail.Qualification') }}</th>
                    <th>{{ __('info-smsemail.Status') }}</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['staff']) && $data['staff']->count() > 0)
                    @php($i=1)
                    @foreach($data['staff'] as $staff)
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ $staff->id }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>{{ $i }}</td>
                            <td>{{ ViewHelper::getDesignationId($staff->designation) }}</td>

                            <td>{{ $staff->reg_no }}</td>
                            {{--<td>
                                <img src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$staff->staff_image) }}"
                                     alt="{{ $staff->staff_image }}" class="img-responsive" width="80px">
                            </td>--}}
                            <td>{{ $staff->first_name.' '.$staff->middle_name.' '. $staff->last_name }}</td>
                            <td><div class="label label-info arrowed">{{ $staff->mobile_1 }}</div></td>
                            <td>{{ $staff->qualification }}
                            </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $staff->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $staff->status == 'active'?"Active":"In Active" }}
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">{{ __('info-notice.Nodatafound.') }}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>