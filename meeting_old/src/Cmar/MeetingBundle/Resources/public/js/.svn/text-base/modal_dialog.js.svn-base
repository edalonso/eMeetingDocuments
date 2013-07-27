$(function() {
    // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
    $( "#dialog-modal1" ).dialog({
	dialogClass: 'dialogWithShadow',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth: 400,
	position: [750, 250]
    });
    $("#dialog-modal").dialog({
	dialogClass: 'dialogWithShadowAdoTest',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minheight: 19,
	minWidth: 760
    });
    $("#dialog-modal-achievement").dialog({
	dialogClass: 'dialogWithShadow',
	hide: "highlight",
	autoOpen: false,
	modal: true,
	minWidth: 460,
	position: [700, 250],
        open: function() {
            self = $(this);
            if (self.data("ajax")) {
                self.load(self.data("url"));
            }
        }

    });
    $( "#opener1" ).click(function() {
        $( "#dialog-modal1" ).dialog( "open" );
        return false;
    });
    $( "#opener" ).click(function() {
        $( "#dialog-modal" ).dialog( "open" );
        return false;
    });
    $( "#opener2" ).click(function() {
        $( "#dialog-modal-achievement" ).dialog( "open" );
        return false;
    });
});