<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('report-staff.StaffReport') }} {{ __('report-staff.List') }}</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ __('report-staff.StaffReport') }} {{ __('report-staff.infos') }}
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{ __('report-staff.S.N.') }}</th>
                    <th>{{ __('report-staff.Reg.Num.') }}</th>
                    <th>{{ __('report-staff.JoinDate') }}</th>
                    <th>{{ __('report-staff.StaffName') }}</th>
                    <th>{{ __('report-staff.Designation') }}</th>
                    <th>{{ __('report-staff.FatherName') }}</th>
                    <th>{{ __('report-staff.MotherName') }}</th>
                    <th>{{ __('report-staff.DateofBirth') }}</th>
                    <th>{{ __('report-staff.Gender') }}</th>
                    <th>{{ __('report-staff.BloodGroup') }}</th>
                    <th>{{ __('report-staff.Nationality') }}</th>
                    <th>{{ __('report-staff.MotherTongue') }}</th>
                    <th>{{ __('report-staff.Address') }}</th>
                    <th>{{ __('report-staff.State') }}</th>
                    <th>{{ __('report-staff.Country') }}</th>
                    <th>{{ __('report-staff.Temp.Address') }}</th>
                    <th>{{ __('report-staff.Temp.State') }}</th>
                    <th>{{ __('report-staff.Temp.Country') }}</th>
                    <th>{{ __('report-staff.HomePhone') }}</th>
                    <th>{{ __('report-staff.MobileNumbe') }}r</th>
                    <th>{{ __('report-staff.Email') }}</th>
                    <th>{{ __('report-staff.Qualification') }}</th>
                    <th>{{ __('report-staff.Experience') }}</th>
                    <th>{{ __('report-staff.ExperienceInfo') }}</th>
                    <th>{{ __('report-staff.OtherInfo') }}</th>
                    <th>{{ __('report-staff.Status') }}</th>
                </tr>
                </thead>
                <tbody>
                    @if (isset($data['staff']) && $data['staff']->count() > 0)
                        @php($i=1)
                        @foreach($data['staff'] as $staff)
                            <tr>
                                {{--'id','reg_no', 'join_date',  'first_name',  'middle_name', 'last_name','designation',
           'father_name', 'mother_name', 'date_of_birth', 'gender', 'blood_group', 'nationality','mother_tongue',
            'address', 'state', 'country',
           'temp_address', 'temp_state', 'temp_country', 'home_phone', 'mobile_1', 'mobile_2', 'email', 'qualification',
           'experience', 'experience_info', 'other_info','status'--}}
                                <td>{{ $i }}</td>
                                <td><a href="{{ route('staff.view', ['id' => $staff->id]) }}">{{ $staff->reg_no }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($staff->join_date)->format('Y-m-d')}} </td>
                                <td><a href="{{ route('staff.view', ['id' => $staff->id]) }}"> {{ $staff->first_name.' '.$staff->middle_name.' '. $staff->last_name }}</a></td>
                                <td>{{ ViewHelper::getDesignationId($staff->designation) }}</td>
                                <td>{{ $staff->father_name }}</td>
                                <td>{{ $staff->mother_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d')}} </td>
                                <td>{{ $staff->gender }}</td>
                                <td>{{ $staff->blood_group }}</td>
                                <td>{{ $staff->nationality }}</td>
                                <td>{{ $staff->mother_tongue }}</td>
                                <td>{{ $staff->address }}</td>
                                <td>{{ $staff->state }}</td>
                                <td>{{ $staff->country }}</td>
                                <td>{{ $staff->temp_address }}</td>
                                <td>{{ $staff->temp_state }}</td>
                                <td>{{ $staff->temp_country }}</td>
                                <td>{{ $staff->home_phone }}</td>
                                <td>
                                    @if(isset($staff->mobile_2))
                                    {{ $staff->mobile_1.', '.$staff->mobile_2}}
                                        @else
                                        {{ $staff->mobile_1}}
                                    @endif
                                </td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->qualification }}</td>
                                <td>{{ $staff->experience }}</td>
                                <td>{{ $staff->experience_info }}</td>
                                <td>{{ $staff->other_info }}</td>
                                <td>{{ $staff->status=="active"?"Active":"In-Active" }}</td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">No {{ $panel }} data found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>