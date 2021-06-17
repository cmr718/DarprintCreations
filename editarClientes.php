<?php
            

 session_start();

 $correo = $_GET['correo'];



 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $dni = $_POST['dni'];
 $correoNuevo = $_POST['correo'];
 $localidad = $_POST['localidad'];
 $direccion = $_POST['direccion'];
 $codigoPostal = $_POST['codigoPostal'];
 $telefono = $_POST['telefono'];
 $rol = $_POST['rol'];


 $usuario = 'ladymisti';
 $password = 'A6B6B088';
 $servidor = 'localhost';
 $basededatos = 'darprintcreations';

$mysqli = mysqli_connect($servidor, $usuario, $password, $basededatos);

$sql = "UPDATE usuario SET nombre = '$nombre', apellidos = '$apellidos', dni = '$dni',
correo = '$correoNuevo', localidad = '$localidad', direccion = '$direccion', codigoPostal = '$codigoPostal', telefono = '$telefono', id_rol = '$rol'
 WHERE correo = '$correo'";


 $consulta = $mysqli->query($sql);


 	if ($consulta){

 		header ('location:gestionarClientes.php'); 
 	 			}
 	else{
 		header ("location: gestionarCxslientes.php"); 
 	 }
 	 


?>