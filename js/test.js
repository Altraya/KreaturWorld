var KreaturAReproduire = new Array();
	$("input:checked").each(function(id)) {
    	idKreaturAReproduire = $("input:checked").get(id);
    	KreaturAReproduire.push(idKreaturAReproduire.value);
});