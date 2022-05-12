<?php
require_once 'conection.php';

if(isset($_POST)){

	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';

	$sql = "INSERT INTO usuarios (nombre, ciudad)
					VALUES('$nombre', '$ciudad')";

	$resultado = pg_query($con, $sql);

  	if($result){
    	echo json_encode("Formulario enviado");
    }else{
      echo json_encode("Error en formulario enviado");
		}

?>
