<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('acc_tbl_collec_Student_List')}}</h4>
        <div class="clearfix">
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
                        <th>@lang('acc_tbl_collec_S_N')</th>
                        <th>@lang('acc_tbl_collec_Faculty')</th>
                        <th>@lang('acc_tbl_collec_Sem_Sec')</th>
                        <th>@lang('acc_tbl_collec_Reg_No')</th>
                        <th>@lang('acc_tbl_collec_Name')</th>
                        <th>@lang('acc_tbl_collec_Contact_No')</th>
                        <th></th>
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
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                            <td><div class="label label-info arrowed">{{ $student->mobile_1 }}</div></td>
                            <td>
                                <div class="btn btn-primary btn-minier action-buttons ">
                                    <a class="white" href="{{ route($base_route.'.view', ['id' => $student->id]) }}">
                                        <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                    </a>
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