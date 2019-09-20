$(document).ready(function(){
    //Showing the firs question on site load
    $('ul.questions li.list-group-item:first').addClass('current');
    $('a#submit-single-question').on('click',function(event){
        event.preventDefault();
        $current = $(this).parent().parent()
        $prev = $current;
        $next = $current.next();
        $next.addClass('current');
        $prev.removeClass('current');
    })
});


