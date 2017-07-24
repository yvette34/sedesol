$(document).ready(function() {
    SelectAreas();
});

function SelectAreas(){
	cargarAreas();
}


function cargarAreas(){
    var url = "control_areas.php?op=cargarAreas";
    $.ajax({
        type: "POST",
        url: url,
        data: {'area': 'area'},
        success: function(data)
        {
    	//console.log(data);
            $("#area").html("");
            $("#area").html(data);
        }
    });
}