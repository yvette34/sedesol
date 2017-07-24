$(document).ready(function() {
    selectPersonal();
});

function selectPersonal(){
	cargarPersonal();
}


function cargarPersonal(){
    var url = "control_personal.php?op=cargarPersonal";
    $.ajax({
        type: "POST",
        url: url,
        data: {'personal': 'personal'},
        success: function(data)
        {
    	//console.log(data);
            $("#personal").html("");
            $("#personal").html(data);
        }
    });
}