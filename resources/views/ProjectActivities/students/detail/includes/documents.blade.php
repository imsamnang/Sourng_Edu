<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{__('stu_frm_doc_Document_List')}}</h4>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr >
                    <th width="5%">@lang('stu_frm_doc_S_N')</th>
                    <th>@lang('stu_frm_doc_Document_With_Link')</th>
                    <th>@lang('stu_frm_doc_Description')</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['document']) && $data['document']->count() > 0)
                    @php($i=1)
                    @foreach($data['document'] as $document)
                        <tr>
                            <td>{{ $i }}</td>
                            <td class="text-left">
                                <a href="{{ asset('documents'.DIRECTORY_SEPARATOR.'student'.DIRECTORY_SEPARATOR.ViewHelper::getStudentById( $document->member_id ).DIRECTORY_SEPARATOR.$document->file) }}" target="_blank">
                                    <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;{{ $document->title }}
                                </a>
                            </td>
                            <td class="text-left">{{ $document->description }}</td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="align-left">No {{ $data['panel'] }} documents data found.</td>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.row -->