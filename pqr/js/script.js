$(document).ready(function() {
    $("#enviar").click( enviarFormulario)
});

function enviarFormulario(){

    var obj = [];
    obj.push( $("#nombre").val() )
    obj.push( $("#email").val() )
    obj.push( $("#telefono").val() )
    obj.push( $("#ciudad").val() )
    obj.push( $("#comentarios").val() )

	console.log(obj)

    //capturar todos los valores del formulario y añadirlos al arreglo obj
    $.post("services/guardarDatos.php", {datos:obj}, function(data) {
	   //Leer data y mostrar una alerta con la respuesta del PHP
	   alert(data.res);
    }, "json");
;
}

function obtenerComentarios(){
    $.get("services/listarComentarios.php", {}, function(data) {
    	 var cadena = "<tr><th>Nombre</th><th>Email</th></tr>"
           for(var i = 0; i < data.length; i++){
               cadena+="<tr><td>"+data[i].nombre+"</td></tr>"
            }
           $("#listapqr").html(cadena)
	   //Leer data y mostrar la lista en un table 
    }, "json");
}
