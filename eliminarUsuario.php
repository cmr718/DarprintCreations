<?php

session_start();

	$mysqli = new mysqli("localhost","ladymisti","A6B6B088","darprintcreations");

 $correo = $_GET['correo'];

 $sql ="DELETE FROM usuario WHERE correo = '".$correo."'";

 $consulta = mysqli_query($mysqli,$sql);

 print_r($consulta);

 if($consulta){
 	header('location: gestionarClientes.php');; }
 	else {
 		echo "todo mal";
 	}
 
 ?>