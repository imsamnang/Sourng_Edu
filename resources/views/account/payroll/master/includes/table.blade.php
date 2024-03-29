<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('acc_tbl_inc_payroll_Payroll_List') }}</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ __('acc_tbl_inc_payroll_Payroll') }}  Record list on table. Filter list using search box as your Wish.
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
                    <th>@lang('acc_tbl_inc_payroll_S_N')</th>
                    <th>@lang('acc_tbl_inc_payroll_Reg_Number')</th>
                    <th>@lang('acc_tbl_inc_payroll_Join_Date')</th>
                    <th>@lang('acc_tbl_inc_payroll_Name_of_Staff')</th>
                    <th>@lang('acc_tbl_inc_payroll_Contact_Number')</th>
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

                            </td>
                            <td>{{ $i }}</td>
                            <td>{{ ViewHelper::getStaffById($staff->id)}}</td>
                            <td>{{ \Carbon\Carbon::parse($staff->join_date)->format('Y-m-d')}} </td>
                            <td>{{ $staff->first_name.' '.$staff->middle_name.' '.$staff->last_name }} </td>
                            <td><div class="label label-info arrowed">{{ $staff->mobile_1 }} </div></td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">No {{ $panel }} data found.</td>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


