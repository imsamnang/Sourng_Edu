<h4 class="header large lighter blue">
    <span class="align-left col-md-10">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('book_frm_Books')}}
    </span>
    <span class="align-right">
        <a class="btn-success btn-sm" href="{{ route('library.book.import') }}"><i class="fa fa-upload" aria-hidden="true"></i> {{__('book_frm_Bulk_Import_From_CSV')}}</a>
    </span>
</h4>
<div class="form-group">
    {!! Form::label('isbn_number', __('book_frm_ISBN_Number'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('isbn_number', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'isbn_number'])
    </div>

    {!! Form::label('code', __('book_frm_Code'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('code', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'code'])
    </div>


</div>

<div class="form-group">

    {!! Form::label('title', __('book_frm_Book_Name'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>

    {!! Form::label('sub_title', __('book_frm_Sub_Title'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('sub_title', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'sub_title'])
    </div>
</div>

<div class="form-group">

    {!! Form::label('categories', __('book_frm_Category'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::select('categories', $data['categories'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);', "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'faculty'])
    </div>

    {!! Form::label('edition', __('book_frm_Edition'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('edition', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'edition'])
    </div>

    {!! Form::label('edition_year', __('book_frm_Edition_Year'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('edition_year', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'edition_year'])
    </div>

</div>

<div class="form-group">
    {!! Form::label('language', __('book_frm_Language'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('language', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'language'])
    </div>

    {!! Form::label('publisher', __('book_frm_Publisher'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('publisher', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'publisher'])
    </div>

    {!! Form::label('publish_year', __('book_frm_Publish_Year'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('publish_year', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'publish_year'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('series', __('book_frm_Series'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('series', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'series'])
    </div>

    {!! Form::label('author', __('book_frm_Author'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('author', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'author'])
    </div>

    {!! Form::label('rack_location', __('book_frm_Rack_Location'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('rack_location', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'rack_location'])
    </div>
</div>

<div class="form-group">


    {!! Form::label('price', __('book_frm_Price'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('price', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'price'])
    </div>

    {!! Form::label('total_pages', __('book_frm_Total_Page'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::number('total_pages', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'total_pages'])
    </div>

    {!! Form::label('source', __('book_frm_Source'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('source', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'source'])
    </div>
</div>

<div class="form-group">

    {!! Form::label('notes', __('book_frm_Notes'), ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::textarea('notes', null, ["placeholder" => "", "class" => "form-control border-form", 'rows'=>"1"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'notes'])
    </div>
@if(!isset($data['row']))
        {!! Form::label('quantity', __('book_frm_Quantity'), ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::number('quantity', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'quantity'])
        </div>

    {!! Form::label('book_status', __('book_frm_Books_Status'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('book_status', $data['book_status'], null, ['class' => 'form-control', "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'book_status'])
    </div>
@endif
</div>

<div class="form-control">
    {!! Form::label('main_image', __('book_frm_Book_Image'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::file('main_image', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'main_image'])
    </div>
</div>
@if (isset($data['row']))

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Existing Image</label>
        <div class="col-sm-9">
            @if ($data['row']->image)
                <img src="{{ asset('images/'.$folder_name.'/'.$data['row']->image) }}" width="100">
            @else
                <p>@lang('book_frm_No_image')</p>
            @endif

        </div>
    </div>
@endif
