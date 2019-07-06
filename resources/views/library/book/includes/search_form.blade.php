<h4 class="header large lighter blue" id="filterBox"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;{{__('book_frm_Search_Books')}}</h4>
<div class="form-horizontal" id="filterDiv">
    <div class="form-group">
        {!! Form::label('isbn_number', __('book_frm_ISBN_Number'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('isbn_number', null, ["class" => "form-control border-form","autofocus"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'isbn_number'])
        </div>

        {!! Form::label('code', __('book_frm_Code'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('code', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'code'])
        </div>

        {!! Form::label('categories', __('book_frm_Category'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('categories', $data['categories'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'faculty'])
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', __('book_frm_Book_Name'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('title', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'title'])
        </div>


        {!! Form::label('author', __('book_frm_Author'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('author', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'author'])
        </div>

        {!! Form::label('rack_location', __('book_frm_Rack_Location'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('rack_location', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'rack_location'])
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('language', __('book_frm_Language'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('language', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'language'])
        </div>

        {!! Form::label('publisher', __('book_frm_Publisher'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('publisher', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'publisher'])
        </div>

        {!! Form::label('publish_year', __('book_frm_Publish_Year'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('publish_year', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'publish_year'])
        </div>
    </div>

    <div class="form-group">

        {!! Form::label('edition', __('book_frm_Edition'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('edition', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'edition'])
        </div>

        {!! Form::label('series', __('book_frm_Series'), ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('series', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'series'])
        </div>

        {!! Form::label('edition_year', __('book_frm_Edition_Year'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::text('edition_year', null, ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'edition_year'])
        </div>


    </div>

    <div class="clearfix form-actions">
        <div class="col-md-12 align-right">
            <button class="btn btn-info" type="submit" id="filter-btn">
                <i class="fa fa-filter bigger-110"></i>
                @lang('book_frm_Search')
            </button>
        </div>
    </div>
</div>