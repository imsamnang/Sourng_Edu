<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('member_frm_student_List')}}</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ $panel }}  Record list on table. Filter list using search box as your Wish.
        </div>
        <!-- div.table-responsive -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>@lang('member_tbl_student_S_N')</th>
                    <th>@lang('member_tbl_student_Faculty_Sem')</th>
                    <th>@lang('member_tbl_student_Reg_Num')</th>
                    <th>@lang('member_tbl_student_Student_Name')</th>
                    <th>@lang('member_tbl_student_Status')</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['student']) && $data['student']->count() > 0)
                    @php($i=1)
                    @foreach($data['student'] as $student)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>
                                {{ ViewHelper::getFacultyTitle($student->faculty)}}
                                <span class="label label-primary label-sm arrowed-in arrowed-right arrowed">{{ ViewHelper::getSemesterById($student->semester) }}</span>
                            </td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->member_id]) }}">{{ ViewHelper::getStudentById($student->member_id) }}</a></td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->member_id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <span data-toggle="dropdown" class="btn btn-primary btn-minier {{ $student->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $student->status == 'active'?"Active":"In Active" }}
                                    </span>
                                </div>
                            </td>
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
    </div>
</div>