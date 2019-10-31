
<div class="form-group">
    {!! Form::label('title', __('Title'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ["placeholder" => __('Faculty.e.g.English'), "class" => "form-control border-form","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('detail', __('Detail'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::textarea('detail', null, ["id"=>"summernote" ,"class" => "summernote form-control border-form",'rows'=>'4']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'detail'])
    </div>
</div>


<div class="form-group">
    {!! Form::label('video_type', __('Video Type'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('video_type',['yt'=>'YouTube','fb'=>'Facebook','gplus'=>'Google Plus','none'=>'NONE'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'video_type'])
    </div>

    {!! Form::label('hours', __('ប៉ុន្មាន នាទី?'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('hours', null, ["class" => "form-control border-form","placeholder" => __('15'),'min'=>'1']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'credit_hour'])
    </div>

</div>
{{-- Video Link --}}
<div class="form-group">
    {!! Form::label('video', __('Video Link'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('video', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'video'])
    </div>
</div>


<div class="form-group">
    {!! Form::label('subject_id', __('Subject'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::hidden('subject_id', $data['subject_id'], ['readonly' => 'true',"placeholder" => __('Title.e.g.Introduction'), "class" => "form-control border-form upper","required"]) !!}
        {!! Form::text('subject', $data['subject_title']->title!=""?$data['subject_title']->title:" No Subject", ['readonly' => 'true',"placeholder" => __('Title.e.g.Introduction'), "class" => "form-control border-form upper","required"]) !!}

        @include('includes.form_fields_validation_message', ['name' => 'subject_id'])
    </div>
</div>




<div class="form-group">
    {!! Form::label('main_image', __('book_frm_Book_Image'), ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::file('main_image', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'main_image'])
    </div>
</div>


@if (isset($data['row']))

  

    <div class="form-group">
        <label class="col-sm-4 control-label no-padding-right">Existing Image</label>
        <div class="col-sm-8">
            @if ($data['row']->image)
            {!! Form::hidden('exist_Image', $data['row']->image, ["placeholder" => __('Your Old Image'), "class" => "form-control border-form upper"]) !!}
                {{-- <img src="{{ asset('images/'.$folder_name.'/'.$data['row']->image) }}" width="100"> --}}
                <img src="{{ asset('images/subject/'.$data['row']->image) }}" width="100">
            @else
                <p>@lang('book_frm_No_image')</p>
            @endif

        </div>
    </div>
@endif

