<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('report-student.StudentReport') }} {{ __('report-student.List') }}</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ __('report-student.StudentReport') }} {{ __('report-student.info') }}
        </div>
        <!-- div.table-responsive -->
            <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">

                <thead>
                <tr>
                    <th>{{ __('report-student.S.N.') }}</th>
                    <th>{{ __('report-student.Faculty') }}</th>
                    <th>{{ __('report-student.Sem.') }}</th>
                    <th>{{ __('report-student.Reg.Num.') }}</th>
                    <th>{{ __('report-student.Reg.Date') }}</th>
                    <th>{{ __('report-student.UniversityReg.') }}</th>
                    <th>{{ __('report-student.StudentName') }}</th>

                    <th>{{ __('report-student.DateOfBirth') }}</th>
                    <th>{{ __('report-student.Gender') }}</th>
                    <th>{{ __('report-student.BloodGroup') }}</th>
                    <th>{{ __('report-student.Nationality') }}</th>
                    <th>{{ __('report-student.MotherTongue') }}</th>
                    <th>{{ __('report-student.Email') }}</th>
                    <th>{{ __('report-student.Address') }}</th>
                    <th>{{ __('report-student.State') }}</th>
                    <th>{{ __('report-student.Country') }}</th>

                    <th>{{ __('report-student.Temp.Address') }}</th>
                    <th>{{ __('report-student.Temp.State') }}</th>
                    <th>{{ __('report-student.Temp.Country') }}</th>

                    <th>{{ __('report-student.HomePhone') }}</th>
                    <th>{{ __('report-student.MobileNumber') }}</th>

                    <th>{{ __('report-student.AcademicStatus') }}</th>
                    <th>{{ __('report-student.Status') }}</th>

                    <th>{{ __('report-student.GrandFatherName') }}</th>
                    <th>{{ __('report-student.FatherName') }}</th>
                    <th>{{ __('report-student.FatherEligibility') }}</th>
                    <th>{{ __('report-student.FatherOccupation') }}</th>
                    <th>{{ __('report-student.FatherOffice') }}</th>
                    <th>{{ __('report-student.FatherOfficeNumber') }}</th>
                    <th>{{ __('report-student.FatherResidentNumber') }}</th>
                    <th>{{ __('report-student.FatherMobile') }}</th>
                    <th>{{ __('report-student.FatherEmail') }}</th>

                    <th>{{ __('report-student.MotherName') }}</th>
                    <th>{{ __('report-student.MotherEligibility') }}</th>
                    <th>{{ __('report-student.MotherOccupation') }}</th>
                    <th>{{ __('report-student.MotherOffice') }}</th>
                    <th>{{ __('report-student.MotherOfficeNumber') }}</th>
                    <th>{{ __('report-student.MotherResidentNumber') }}</th>
                    <th>{{ __('report-student.MotherMobile') }}</th>
                    <th>{{ __('report-student.MotherEmail') }}</th>

                    <th>{{ __('report-student.GuardianName') }}</th>
                    <th>{{ __('report-student.GuardianEligibility') }}</th>
                    <th>{{ __('report-student.GuardianOccupation') }}</th>
                    <th>{{ __('report-student.GuardianOffice') }}</th>
                    <th>{{ __('report-student.GuardianOfficeNumber') }}</th>
                    <th>{{ __('report-student.GuardianResidentNumber') }}</th>
                    <th>{{ __('report-student.GuardianMobile') }}</th>
                    <th>{{ __('report-student.GuardianEmail') }}</th>
                    <th>{{ __('report-student.GuardianRelation') }}</th>
                    <th>{{ __('report-student.GuardianAddress') }}</th>

                    <th>{{ __('report-student.ExtraInfo') }}</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['student']) && $data['student']->count() > 0)
                    @php($i=1)
                    @foreach($data['student'] as $student)
                        <tr>
                            <td>{{ $i }}</td>
                            <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                            <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                            <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                            <td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}} </td>
                            <td>{{ $student->university_reg }}</td>
                            <td><a href="{{ route('student.view', ['id' => $student->id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                            <td>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d')}}</td>

                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->blood_group }}</td>
                            <td>{{ $student->nationality }}</td>
                            <td>{{ $student->mother_tongue }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->state }}</td>
                            <td>{{ $student->country }}</td>
                            <td>{{ $student->temp_address }}</td>
                            <td>{{ $student->temp_state }}</td>
                            <td>{{ $student->temp_country }}</td>
                            <td>{{ $student->home_phone }}</td>
                            <td>
                                @if(isset($student->mobile_2))
                                    {{ $student->mobile_1.', '.$student->mobile_2}}
                                @else
                                    {{ $student->mobile_1}}
                                @endif
                            </td>
                            <td>{{ ViewHelper::getStudentAcademicStatusId($student->academic_status) }}</td>
                            <td>{{ $student->status=="active"?"Active":"In-Active" }}</td>

                            <td>{{ $student->grandfather_first_name.' '.$student->grandfather_middle_name.' '. $student->grandfather_last_name }}</td>
                            <td>{{ $student->father_first_name.' '.$student->father_middle_name.' '. $student->father_last_name }}</td>
                            <td>{{ $student->father_eligibility }}</td>
                            <td>{{ $student->father_occupation }}</td>
                            <td>{{ $student->father_office }}</td>
                            <td>{{ $student->father_office_number }}</td>
                            <td>{{ $student->father_residence_number }}</td>
                            <td>{{ $student->father_mobile_1.', '.$student->father_mobile_1 }}</td>
                            <td>{{ $student->father_email }}</td>

                            <td>{{ $student->mother_first_name.' '.$student->mother_middle_name.' '. $student->mother_last_name }}</td>
                            <td>{{ $student->mother_eligibility }}</td>
                            <td>{{ $student->mother_occupation }}</td>
                            <td>{{ $student->mother_office }}</td>
                            <td>{{ $student->mother_office_number }}</td>
                            <td>{{ $student->mother_residence_number }}</td>
                            <td>{{ $student->mother_mobile_1.', '.$student->mother_mobile_1 }}</td>
                            <td>{{ $student->mother_email }}</td>

                            <td>{{ $student->guardian_first_name.' '.$student->guardian_middle_name.' '. $student->guardian_last_name }}</td>
                            <td>{{ $student->guardian_eligibility }}</td>
                            <td>{{ $student->guardian_occupation }}</td>
                            <td>{{ $student->guardian_office }}</td>
                            <td>{{ $student->guardian_office_number }}</td>
                            <td>{{ $student->guardian_residence_number }}</td>
                            <td>{{ $student->guardian_mobile_1.', '.$student->guardian_mobile_1 }}</td>
                            <td>{{ $student->guardian_email }}</td>
                            <td>{{ $student->guardian_relation }}</td>
                            <td>{{ $student->guardian_address }}</td>

                            <td>{{ $student->extra_info }}</td>

                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="51">No {{ $panel }} data found.</td>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}

        </div>
    </div>
</div>