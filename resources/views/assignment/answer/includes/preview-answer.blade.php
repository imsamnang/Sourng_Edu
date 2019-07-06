<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div>
            <table class="table table-striped table-bordered table-hover">
                <tr >
                    <td class="label-info white">{{ __('assignment.Status') }}</td>
                    <td>
                        @if( $data['answers']->approve_status == 1)
                            <button class="btn btn-success btn-minier dropdown-toggle" >
                                {{ __('assignment.Approve') }}
                            </button>
                        @elseif( $data['answers']->approve_status == 2)
                            <button class="btn btn-danger btn-minier dropdown-toggle" >
                                {{ __('assignment.Reject') }}
                            </button>
                        @else
                            <button class="btn btn-info btn-minier dropdown-toggle" >
                                {{ __('assignment.Pending') }}
                            </button>
                        @endif

                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-mini btn-primary dropdown-toggle" >
                                    Change Status : Approve/Reject &nbsp; <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                </button>
                                <ul class="dropdown-menu " >
                                    <li>
                                        <a href="{{ route('assignment.answer.approve', ['id' => $data['answers']->id]) }}">
                                            {{ __('assignment.Approve') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('assignment.answer.reject', ['id' => $data['answers']->id]) }}">
                                            {{ __('assignment.Reject') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('assignment.answer.delete', ['id' => $data['answers']->id]) }}">
                                            {{ __('assignment.Delete') }}
                                        </a>
                                    </li>

                                </ul>

                            </div>
                    </td>
                    <td class="label-info white">{{ __('assignment.File') }}</td>
                    <td>
                        @if($data['answers']->file)
                            <a href="{{ asset('assignments'.DIRECTORY_SEPARATOR.'answers'.DIRECTORY_SEPARATOR.$data['answers']->file) }}" target="_blank" >
                                {{ __('assignment.AttachmentFile') }}
                                <i class="ace-icon fa fa-download bigger-120"></i>
                            </a>
                        @endif
                    </td>
                </tr>
                <tr >
                    <td class="label-info white">{{ __('assignment.CreatedBy') }}</td>
                    @if($data['answers']->created_by)
                    <td>{{ auth()->user()->where('id',$data['answers']->created_by)->first()->name }}</td>
                    @endif
                    <td class="label-info white">{{ __('assignment.UpdatedBy') }}</td>
                    @if($data['answers']->last_updated_by)
                    <td>{{ auth()->user()->where('id',$data['answers']->last_updated_by)->first()->name }}</td>
                        @endif
                </tr>
                <tr >
                    <td class="label-info white">{{ __('assignment.CreatedOn') }}</td>
                    <td>{{ \Carbon\Carbon::parse($data['answers']->created_at)->format('M d, Y')}} </td>
                    <td class="label-info white">{{ __('assignment.UpdateOn') }}</td>
                    <td>{{ \Carbon\Carbon::parse($data['answers']->updated_at)->format('M d, Y')}} </td>
                </tr>
                <tr >
                    <td class="label-info white">{{ __('assignment.Detail') }}</td>
                    <td colspan="4">{!! $data['answers']->answer_text !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div><!-- /.row -->




