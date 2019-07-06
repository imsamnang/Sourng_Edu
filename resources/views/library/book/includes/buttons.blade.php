<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="{!! request()->is('library/book')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('library.book') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;{{__('book_btn_Book_Detail')}}</a>
        <a class="{!! request()->is('library/book/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.book.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('book_btn_New_Book')}}</a>
        <a class="{!! request()->is('library/book/category')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.book.category') }}"><i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;{{__('book_btn_Book_Category')}}</a>
    </div>
</div>
<hr class="hr-4">