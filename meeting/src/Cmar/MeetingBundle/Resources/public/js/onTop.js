$(function () {
    /* set variables locally for increased performance */
    var scroll_timer;
    var $message = $('#message');

    var $doc = $(document);
    scroll_top($doc, $message);

    $doc.scroll(function(e){
	scroll_top($doc, $message);
    });
});

/* react to scroll event on window */
function scroll_top($doc, $message) {
    var displayed = false;
    var top = $(document.body).children(0).position().top;
    if($doc.scrollTop() <= top)
    {
        displayed = false;
        $message.css("display", "none");
    }
    else if(displayed == false)
    {
        displayed = true;
        $message.css("display", "block");
    }
}