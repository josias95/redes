<?php 

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


include_once("db.php");
$data = $_POST["datos"];

if(!empty($data)){
	$nombre = $data[0];
	$email = $data[1];
	$telefono = $data[2];
	$ciudad = $data[3];
	$comentario = $data[4];
		
	$sql=sprintf("insert into comentario(nombres, email, telefono, ciudad, comentario) values ('%s','%s','%s','%s','%s')"
				,mysqli_real_escape_string($conn, $nombre)
				,mysqli_real_escape_string($conn, $email)
				,mysqli_real_escape_string($conn, $telefono)
				,mysqli_real_escape_string($conn, $ciudad)
				,mysqli_real_escape_string($conn, $comentario));

	$resultado = mysqli_query($conn, $sql);

      if($resultado){
      	echo '{"res":"OK"}';
      }else{
	      echo '{"res":"ERROR"}';
      }

}else{
	echo '{"res":"EMPTY"}';
}
