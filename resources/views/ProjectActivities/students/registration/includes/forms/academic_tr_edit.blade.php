@foreach($academicInfos as $academicInfo)
{{--    <tr class="option_value">
    <td>
        <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
        </div>
    </td>
    <td>
        {!! Form::text('institution[]', $academicInfo->institution, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
    </td>
    <td>
        {!! Form::text('board[]', $academicInfo->board, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
    </td>
    <td>
        {!! Form::text('pass_year[]', $academicInfo->pass_year, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
    </td>
    <td>
        {!! Form::text('symbol_no[]', $academicInfo->symbol_no, ["class" => "col-xs-10 col-sm-11"]) !!}
    </td>
    <td>
        {!! Form::text('percentage[]', $academicInfo->percentage, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
    </td>
    <td>
        {!! Form::text('division_grade[]', $academicInfo->division_grade, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
    </td>
    <td>
        {!! Form::text('major_subjects[]', $academicInfo->major_subjects, ["class" => "col-xs-10 col-sm-11"]) !!}
    </td>
    <td>
        {!! Form::text('remark[]', $academicInfo->remark, ["class" => "col-xs-10 col-sm-11"]) !!}
    </td>
    <td width="5%">
        <div class="btn-group">
            <button type="button" class="btn btn-xs btn-danger" onclick="$(this).closest('tr').remove();">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
        </div>

    </td>
</tr>--}}
<tr class="option_value">
        <td>
            <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
            </div>
        </td>
        <td>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Institution')
                    </th>
                    <td>
                        {!! Form::text('institution[]', $academicInfo->institution, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_rge_Board_Training')
                    </th>
                    <td>
                        {!! Form::text('board[]', $academicInfo->board, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Pass_Year')
                    </th>
                    <td>
                        {!! Form::text('pass_year[]', $academicInfo->pass_year, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Symbol_Number')
                    </th>
                    <td>
                        {!! Form::text('symbol_no[]', $academicInfo->symbol_no, ["class" => "col-xs-10 col-sm-11"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Percentage')
                    </th>
                    <td>
                        {!! Form::text('percentage[]', $academicInfo->percentage, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('frm_stu_reg_Division_Grade')
                    </th>
                    <td>
                        {!! Form::text('division_grade[]', $academicInfo->division_grade, ["class" => "col-xs-10 col-sm-11", "required"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Major_Subject')
                    </th>
                    <td>
                        {!! Form::text('major_subjects[]', $academicInfo->major_subjects, ["class" => "col-xs-10 col-sm-11"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        @lang('stu_frm_reg_Remark')
                    </th>
                    <td>
                        {!! Form::text('remark[]', $academicInfo->remark, ["class" => "col-xs-10 col-sm-11"]) !!}
                    </td>
                </tr>
            </table>
        </td>
        <td width="5%">
            <div class="btn-group">
                <button type="button" class="btn btn-xs btn-danger" onclick="$(this).closest('tr').remove();">
                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </button>
            </div>

        </td>
    </tr>
@endforeach


