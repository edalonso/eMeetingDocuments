// increase the default animation speed to exaggerate the effect
$.fx.speeds._default = 1000;
$(function() {
    $( "#dialog" ).dialog({
	autoOpen: false,
	show: "blind",
	hide: "explode",
	minWidth: 350
    });

    $( "#opener" ).click(function() {
	$( "#dialog" ).dialog( "open" );
	return false;
    });
});