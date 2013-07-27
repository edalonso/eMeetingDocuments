$(function() {
    // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
    $( "#dialog-modal1" ).dialog({
	dialogClass: 'dialogWithShadow',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth:500,
	position: [750, 250]
    });
    $("#dialog-modal-ado").dialog({
	dialogClass: 'dialogWithShadowAdoTest',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth: 760,
        open: function() {
            self = $(this);
            if (self.data("ajax")) {
                self.load(self.data("url"));
            }
        }
    });
    $("#dialog-modal-achievement").dialog({
	dialogClass: 'dialogWithShadow',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth: 500,
	position: [700, 250],
        open: function() {
            self = $(this);
            if (self.data("ajax")) {
                self.load(self.data("url"));
            }
        }

    });
    $("#dialog-modal-change-password").dialog({
	dialogClass: 'dialogWithShadow',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth: 600
    });
    $( "#opener" ).click(function() {
	$( "#dialog-modal-ado" ).dialog( "open" );
	return false;
    });
    $( "#opener1" ).click(function() {
        $( "#dialog-modal1" ).dialog( "open" );
        return false;
    });
    $( "#opener2" ).click(function() {
        $( "#dialog-modal-achievement" ).dialog( "open" );
        return false;
    });
    $( "#opener3" ).click(function() {
        $( "#dialog-modal-change-password" ).dialog( "open" );
        return false;
    });
});