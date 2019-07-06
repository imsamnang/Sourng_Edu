<h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('Participants_List')}}</h4>
{!! Form::open(['route' => 'print-out.exam.mark-sheet', 'id' => 'print-student-marksheet']) !!}

    <div class="clearfix">
        <label class="pos-rel">
            <input type="radio" name="result-type" value="grading" id="typeGrading" class="ace" />
            <span class="lbl"></span> @lang('mark_sheet_Grading')
        </label>
        <label class="pos-rel">
            <input type="radio" name="result-type" value="percentage" id="typePercentage" class="ace" />
            <span class="lbl"></span> @lang('mark_sheet_Percentage')
        </label>
        <a type="submit" class="btn-primary btn-sm print-marksheets" ><i class="fa fa-print" aria-hidden="true"></i>&nbsp; {{__('mark_sheet_Print_Mark_Sheets')}}</a>
        <span class="pull-right tableTools-container"></span>
    </div>
    <div class="table-header">
        {{ $panel }}  Record list on table. Filter list using search box as your Wish.
    </div>
    <!-- div.table-responsive -->
    <div class="table-responsive">
        <input type="hidden" name="exam_schedule_id" value="{{ $data['exam_schedule_id'] }}"/>
        <input type="hidden" name="exams_id" value="{{ $data['exam'] }}"/>
        <input type="hidden" name="year_id" value="{{ $data['year'] }}"/>
        <input type="hidden" name="faculty_id" value="{{ $data['faculty'] }}"/>
        <input type="hidden" name="semester_id" value="{{ $data['semester'] }}"/>
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>@lang('mark_sheet_tbl_S_N')</th>
                        <th>@lang('mark_sheet_tbl_Reg_Number')</th>
                        <th>@lang('mark_sheet_tbl_Student_Name')</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data['ledger_exist']) && $data['ledger_exist']->count() > 0)
                        @php($i=1)
                        @foreach($data['ledger_exist'] as $student)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $student->students_id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>{{ $i }}</td>
                                <td><a href="{{ route('student.view', ['id' => $student->students_id]) }}">{{ $student->reg_no }}</a></td>
                                <td>{{ $student->first_name.' '.$student->middle_name.' '.$student->last_name }}</td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No {{ $panel }} data found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
    </div>

{!! Form::close() !!}

</div>
