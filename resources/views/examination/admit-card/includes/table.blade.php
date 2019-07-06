<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('Target_Exam_List')}}</h4>
        {!! Form::open(['route' => 'print-out.exam.admit-card', 'id' => 'bulk_action_form']) !!}
        <div class="clearfix">
            <div class="form-horizontal ">
                <div class="clearfix">
                    <div class="form-group">
                        {!! Form::label('years_id', __('exam_frm_admit_Year'), ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::select('years_id', $data['years'], null, ["class" => "form-control border-form","required"]) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'years_id'])
                        </div>

                        {!! Form::label('months_id', __('exam_frm_admit_Month'), ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::select('months_id', $data['months'], null, ["class" => "form-control border-form","required"]) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'months_id'])
                        </div>

                        {!! Form::label('exams_id', __('exam_frm_admit_Exam'), ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::select('exams_id', $data['exams'], null, ["class" => "form-control border-form","required"]) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'exams_id'])
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">@lang('exam_frm_admit_Faculty')</label>
                        <div class="col-sm-5">
                            {!! Form::select('target_faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}
                        </div>

                        <label class="col-sm-2 control-label">@lang('exam_frm_admit_Semester')</label>
                        <div class="col-sm-3">
                            <select name="semester_select" class="form-control semester_select">
                                <option> Select Semester </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="print-btn">
                            <i class="fa fa-print bigger-110"></i>
                            @lang('exam_frm_admit_Print_Admit_Card')
                        </button>
                    </div>
                </div>
                <div class="hr hr-24"></div>
            </div>
            <hr class="hr-8">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ $panel }}  Record list on table. Filter list using search box as your Wish.
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
                        <th>@lang('exam_frm_admit_S_N')</th>
                        <th>@lang('exam_frm_admit_Faculty')</th>
                        <th>@lang('exam_frm_admit_Semester')</th>
                        <th>@lang('exam_frm_admit_Reg_Date')</th>
                        <th>@lang('exam_frm_admit_Reg_Number')</th>
                        <th>@lang('exam_frm_admit_Name_of_Student')</th>
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
                                <td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}}
                                </td>
                                <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                                <td> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</td>

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
                </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


