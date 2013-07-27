$(function() {
    function log( message ) {
	$( "<option/>" ).text( message ).prependTo( "#AddCommonUsers" );
	$( "#AddCommonUsers" ).scrollTop( 0 );
    }

    $( "#users" ).autocomplete({
	source: '/u_list',
	minLength: 1,
	select: function( event, ui ) {
	    log( ui.item ?
		 ui.item.value :
		 "Nothing selected, input was " + this.value );
	}
    });
});

$(function() {
    function log( message ) {
	$( "<option/>" ).text( message ).prependTo( "#AddUsers" );
	$( "#AddUsers" ).scrollTop( 0 );
    }

    $( "#users1" ).autocomplete({
	source: '/u_list',
	minLength: 1,
	select: function( event, ui ) {
	    log( ui.item ?
		 ui.item.value :
		 "Nothing selected, input was " + this.value );
	}
    });
});