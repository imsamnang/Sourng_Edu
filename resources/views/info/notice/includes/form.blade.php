<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ $panel }}</h4>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('title', __('info-notice.Title'), ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form","autofocus", "required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'title'])
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('message', __('info-notice.Message'), ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::textarea('message', null, ["placeholder" => "", "class" => "form-control border-form","id"=>"summernote", "required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'message'])
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('publish_date', __('info-notice.PublishDate'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('publish_date', null, ["placeholder" => "", "class" => "form-control border-form input-mask-date date-picker","data-date-format" => "yyyy-mm-dd", "required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'publish_date'])
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('end_date', __('info-notice.EndDate'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('end_date', null, ["placeholder" => "", "class" => "form-control border-form input-mask-date date-picker","data-date-format" => "yyyy-mm-dd", "required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'end_date'])
            </div>
        </div>
        @if(isset($data['roles']) && $data['roles']->count() > 0)
            <span class="label label-warning arrowed-right arrowed-in">{{ __('info-notice.MessageDisplayGroups') }}</span>
            <div class="form-group">
                <div class="checkbox">
                    @foreach($data['roles'] as $role)
                        <label>
                            @if (!isset($data['row']))
                                {!! Form::checkbox('role[]', $role->id, false, ['class' => 'ace']) !!}
                            @else
                               {!! Form::checkbox('role[]', $role->id, in_array($role->id, $data['access_role']), ['class' => 'ace']) !!}
                            @endif
                            <span class="lbl"> {{ $role->display_name }} </span>
                        </label>
                        <hr class="hr-4">
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>