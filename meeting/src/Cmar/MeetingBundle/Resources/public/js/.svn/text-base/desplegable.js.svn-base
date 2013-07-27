$(document).ready(function(){
    $("dd").hide();
    $("dt").click(function(event){
        var desplegable = $(this).next();
        $('dd').not(desplegable).slideUp('fast');
        desplegable.slideToggle('fast');
        event.preventDefault();
    })
    $(function(){
	$(".showr").tipTip({ 
	    edgeOffset: 5,
	    defaultPosition: 'right'
	})
    })
});

function truncar(elem, i) {
    var encoje = false;
    e = $(elem);
    tamano_height = e.height();
    while (tamano_height > 56){
	e.text(e.text().substring(0, e.text().length -1))
        tamano_height = e.height();
	encoje = true;
    }
    if (encoje) {
	e.text(e.text().substring(0, e.text().length -3))
	e.text(e.text() + ' ' + '...');
    }
}

function plegardesplegar(identificacion){
    var elemento = document.getElementById(identificacion);
    if(elemento.className == "invisible"){
	elemento.className = "visible";
    }
    else{
	elemento.className = "invisible";
    }
}