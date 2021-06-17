<?php

session_start();

	$mysqli = new mysqli("localhost","ladymisti","A6B6B088","darprintcreations");

 $id_producto = $_GET['id_producto'];

 $sql ="DELETE FROM productos WHERE id_producto = '".$id_producto."'";

 $consulta = mysqli_query($mysqli,$sql);

 print_r($consulta);

 if($consulta){
 	header('location: modificarCatalogo.php');; }
 	else {
 		echo "todo mal";
 	}
 
 ?>