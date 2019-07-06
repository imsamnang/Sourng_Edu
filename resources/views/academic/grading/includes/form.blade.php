<div class="form-group">
    {!! Form::label('title', __('Faculty.Title'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('title', null, ["placeholder" => __('Faculty.e.g.UniversityLevel'), "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>{{ __('Faculty.Name') }}</th>
            <th>{{ __('Faculty.From(%)') }}</th>
            <th>{{ __('Faculty.To(%)') }}</th>
            <th>{{ __('Faculty.Point') }}</th>
            <th>{{ __('Faculty.Desc.') }}</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="load-grade-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Faculty.Add') }}
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="grade_wrapper">

        @if (isset($data['row']))

            @foreach($data['grade_scale'] as $grade_scale)

                @include($view_path.'.includes.grade_tr_edit', ['attribute_groups' => $data['grade_scale'],'attribute' => $grade_scale])

            @endforeach

        @endif

        </tbody>

    </table>
</div>