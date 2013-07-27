$(function() {
    $('#add2').click(function() {  
	return !$('#left2 option:selected').remove().appendTo('#AddAllUsers');  
    });
    $('#remove2').click(function() {  
	return !$('#AddAllUsers option:selected').remove().appendTo('#left2');  
    });
    $('#remove').click(function() {  
	return !$('#AddCommonUsers option:selected').remove();  
    });
    $('form').submit(function() {  
	$('#AddCommonUsers option').each(function(i) {  
	    $(this).attr("selected", "selected");  
	});  
    }); 
    $('form').submit(function() {  
	$('#AddAllUsers option').each(function(i) {  
	    $(this).attr("selected", "selected");  
	});  
    }); 
})

function selectall(select_id){
    $('#' + select_id + ' option').each(function(i) {  
	$(this).attr("selected", "selected");  
    });      
}