<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('Staff_Book_Return_Over_Period_List')}}</h4>
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ __('library-return-over.StaffReturn') }}</h4>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>@lang('return_tbl_student_S_N')</th>
                    <th>@lang('return_tbl_student_Reg_Num')</th>
                    <th>@lang('return_tbl_student_Member_Name')</th>
                    <th>@lang('return_tbl_student_Ref_No')</th>
                    <th>@lang('return_tbl_student_Book_Name')</th>
                    <th>@lang('return_tbl_student_Issued_On')</th>
                    <th>@lang('return_tbl_student_Due_Date')</th>
                    <th>@lang('return_tbl_student_Day')</th>
                    <th>{{ __('library-return-over.S.N.') }}</th>
                    <th>{{ __('library-return-over.RegNum') }}</th>
                    <th>{{ __('library-return-over.MemberName') }}</th>
                    <th>{{ __('library-return-over.Ref.No.') }}</th>
                    <th>{{ __('library-return-over.BookName') }}</th>
                    <th>{{ __('library-return-over.IssuedOn') }}</th>
                    <th>{{ __('library-return-over.DueDate') }}</th>
                    <th>{{ __('library-return-over.Day') }}</th>
                </tr>
                </thead>
                <tbody>
                    @if (isset($data['staff_return_over']) && $data['staff_return_over']->count() > 0)
                        @php($i=1)
                        @foreach($data['staff_return_over'] as $staff_return_over)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><a href="{{ route('library.staff.view', ['id' => $staff_return_over->member_id]) }}"> {{ ViewHelper::getStaffById($staff_return_over->member_id) }} </a></td>

                                <td><a href="{{ route('staff.view', ['id' => $staff_return_over->stud_id]) }}"> {{ $staff_return_over->first_name.' '.$staff_return_over->middle_name.' '. $staff_return_over->last_name }}</a></td>
                                <td>{{ $staff_return_over->book_code }} </td>

                                <td><a href="{{ route('library.book.view', ['id' => $staff_return_over->bookmaster_id]) }}">{{ $staff_return_over->title }}</a> </td>
                                <td>{{ \Carbon\Carbon::parse($staff_return_over->issued_on)->format('Y-m-d') }} </td>
                                <td>{{ \Carbon\Carbon::parse($staff_return_over->due_date)->format('Y-m-d') }} </td>
                                <td>
                                    <div class="label label-danger label-lg ">
                                        {{ \Carbon\Carbon::parse($staff_return_over->due_date)->diffForHumans(\Carbon\Carbon::now()) }}
                                    </div>
                                </td>

                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">{{ __('library-return-over.StaffBookReturn') }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>



