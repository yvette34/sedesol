$(document).ready(function(){
	$(".validateText").keypress(function(e){
        if((e.keyCode >= 65 && e.keyCode <= 122 && e.keyCode != 95 ) || (e.keyCode == 32)) { // allow letters only.
            return; 
        }
        return false;
    });
	$(".validateNumber").keydown(function (e) {
	    if (e.keyCode >= 48 && e.keyCode <= 57) { //0-9 only
		    return;
	    }
	    return false;
	});
});
