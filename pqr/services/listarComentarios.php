<?php 

include_once("db.php");
		
$lista = mysqli_query($conn, "select * from comentario");
$respuesta = array();

while($fila = mysqli_fetch_array($lista)) {
   //Completar, añadiendo cada valor al arreglo
   array_push($respuesta, array("nombre"=>$fila["nombre"], etc...) );
}

echo json_encode($respuesta);
