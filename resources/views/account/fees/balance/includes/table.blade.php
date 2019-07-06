<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('acc_tbl_balance_List') }} </h4>
        {!! Form::open(['route' => 'info.smsemail.dueReminder', 'id' => 'send_reminder_message']) !!}
        <div class="clearfix">
            <span class="form-group due-reminder-submit">
                    <label>{!! Form::radio('type[]','sms' ,false, ["class" => "ace", "id"=>"typeSms"]) !!}<span class="lbl"> @lang('acc_tbl_balance_SMS') </span></label>
                    <label>{!! Form::radio('type[]','email' ,false, ["class" => "ace", "id"=>"typeEmail"]) !!}<span class="lbl"> {{__('acc_tbl_balance_Email')}} </span></label>
                    <a class="btn-primary btn-sm message-send-btn" ><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{__('acc_tbl_balance_Send_Reminder')}}</a>
                    <a class="btn-success btn-sm bulk-due-slip" >@lang('acc_tbl_balance_Bulk_Due_Detail_Slip') <i class="fa fa-print" aria-hidden="true"></i></a>
                    <a class="btn-primary btn-sm short-due-slip" >@lang('acc_tbl_balance_Bulk_Short_Due_Reminder_Slip') <i class="fa fa-print" aria-hidden="true"></i></a>
            </span>
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ $panel }}  {{ __('acount-fee-balance.info') }}
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>@lang('acc_tbl_balance_S_N')</th>
                    <th>@lang('acc_tbl_balance_Faculty')</th>
                    <th>@lang('acc_tbl_balance_Sem')</th>
                    <th>@lang('acc_tbl_balance_Reg_Number')</th>
                    <th>@lang('acc_tbl_balance_Name_of_Student')</th>
                    <th>@lang('acc_tbl_balance_Total_Fee')</th>
                    <th>@lang('acc_tbl_balance_Balance')</th>
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
                                <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                                <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                                <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                                <td><a href="{{ route('student.view', ['id' => $student->id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                                <td>
                                    {{ $student->fee_amount }}
                                </td>
                                <td>
                                    {{ $student->balance }}
                                </td>
                                <td>
                                    <div class="btn btn-primary btn-minier action-buttons ">
                                        <a class="white" href="{{ route('account.fees.collection.view', ['id' => $student->id]) }}">
                                            <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">No {{ $panel }} data found.</td>
                            </td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                    <tr style="font-size: 14px; background: orangered;color: white;">
                        <td colspan="6" class="text-right">Total</td>
                        <td>{{ $data['student']->sum('fee_amount') }}</td>
                        <td>
                            {{ $data['student']->sum('balance') }}
                        </td>
                        <td class="hdidden-print"> </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        {!! Form::close() !!}
    </div>
</div>


