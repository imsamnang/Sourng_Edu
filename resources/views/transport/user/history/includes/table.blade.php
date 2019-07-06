<div class="form-horizontal">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('Transport.TransportHistoryList') }}</h4>
            <div class="clearfix">

                    <span class="pull-right tableTools-container"></span>
            </div>
            <div class="table-header">
                {{ __('Transport.TransportUser') }}  {{ __('Transport.Record-list-on-table.-Filter-list-using-search-box-as-your-Wish.') }}
            </div>
            <!-- div.table-responsive -->
            <div class="table-responsive">
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead >
                        <tr>
                            <th>{{ __('Transport.S.N.') }}</th>
                            <th>{{ __('Transport.Year') }}</th>
                            <th>{{ __('Transport.Route') }}</th>
                            <th>{{ __('Transport.Vehicle') }}</th>
                            <th>{{ __('Transport.Type') }}</th>
                            <th>{{ __('Transport.REGNo') }} </th>
                            <th>{{ __('Transport.Name') }}</th>
                            <th>{{ __('Transport.History') }}</th>
                            <th>{{ __('Transport.Date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (isset($data['history']) && $data['history']->count() > 0)
                        @php($i=1)
                        @foreach($data['history'] as $history)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ ViewHelper::getYearById($history->years_id) }} </td>
                                <td>{{ ViewHelper::getRouteNameById($history->routes_id) }} </td>
                                <td>{{ ViewHelper::getVehicleById($history->vehicles_id) }}</td>
                                <td>{{ $history->user_type==1?"Student":"Staff" }}</td>
                                <td>
                                    @if($history->user_type == 1)
                                        <a href="{{ route('student.view', ['id' => $history->member_id]) }}">
                                            {{ ViewHelper::getStudentById($history->member_id) }}
                                        </a>
                                    @else
                                        <a href="{{ route('staff.view', ['id' => $history->member_id]) }}">
                                            {{ ViewHelper::getStaffById($history->member_id) }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($history->user_type==1)
                                        {{ ViewHelper::getStudentNameById($history->member_id) }}
                                    @else
                                        {{ ViewHelper::getStaffNameById($history->member_id) }}
                                    @endif
                                </td>
                                <td>
                                    <label class="label label-primary">{{$history->history_type}}</label>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($history->created_at)->format('Y-m-d')}} </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">No {{ $panel }} data found.</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

