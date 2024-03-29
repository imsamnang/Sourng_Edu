<div class="row">
    <div class="col-xs-12">
    <!-- div.table-responsive -->
        <div class="table-responsive">
            @if (isset($data['rows']) && $data['rows']->count() > 0)
                @php($i = 1)
                <div id="accordion" class="accordion-style2 ui-accordion ui-widget ui-helper-reset ui-sortable" role="tablist">
                    @foreach($data['rows'] as $row)
                        <div class="group">
                            <h3 class="accordion-header ui-accordion-header ui-state-default ui-accordion-icons ui-sortable-handle ui-corner-all" role="tab" id="ui-id-23" aria-controls="ui-id-24" aria-selected="false" aria-expanded="false" tabindex="0">
                                <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                                {{ $i.' '.$row->title }}

                            </h3>

                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-24" aria-labelledby="ui-id-23" role="tabpanel" style="display: none;" aria-hidden="true">
                                <p>
                                    {!! $row->message !!}
                                </p>
                                <div class="align-right" style="font-weight: 600">
                                    <hr class="hr-4">
                                    Publish Date: {{ \Carbon\Carbon::parse($row->publish_date)->format('Y-m-d')}}
                                    <hr class="hr-4">
                                    End Date: {{ \Carbon\Carbon::parse($row->end_date)->format('Y-m-d')}}
                                    <hr class="hr-4">

                                    Visible For:
                                    @if(isset($row->display_group))
                                        @php($groups = explode(',',$row->display_group))
                                        @foreach($groups as $group)
                                            <div class="btn-group">
                                            <span data-toggle="dropdown" class="btn btn-primary btn-minier btn-info" >
                                                {{\App\Facades\ViewHelperFacade::getRoleNameId($group)}}
                                            </span>
                                            </div>
                                        @endforeach
                                    @endif

                                    <hr class="hr-10">
                                    <a class="btn-primary btn-sm" href="{{ route($base_route.'.edit', ['id' => $row->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;{{ __('info-notice.Edit') }}</a>
                                    <a class="btn-danger btn-sm bootbox-confirm" href="{{ route($base_route.'.delete', ['id' => $row->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;{{ __('info-notice.Delete') }}</a>

                                </div>
                            </div>
                        </div>

                        @php($i++)
                    @endforeach
                </div>
            @else
                {{ __('info-notice.Nodatafound.') }}
            @endif
        </div>
    </div>
</div>