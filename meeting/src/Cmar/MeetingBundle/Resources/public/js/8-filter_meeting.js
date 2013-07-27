function filter_emeetings(text){
    $('#dropdown-title').html(text)
    if(text == 'All eMeetings') {
	$('.ui-state-default div').fadeIn('slow').removeClass('hidden');
    }
  else
    {
	$('.ui-state-default div').each(function() {
	    if(!$(this).hasClass(text)) {
		$(this).fadeOut('normal').addClass('hidden');
	    } else {
		$(this).fadeIn('slow').removeClass('hidden');
	    }
	});
    }
}
