$(document).ready(function(){
	$("#enviar").click(function(){
		$.post("save.php",
			{
				nombre: $("#nombre").val(),
				ciudad: $("#ciudad").val()
			},
			function(data, status){
				alert("Datos: "+ data+"Status:"+status);
				$("#formulario").trigger("reset");
			});
	});
});
