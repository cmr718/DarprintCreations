<?php
            

 session_start();

 $correo = $_SESSION['correo'];

 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $dni = $_POST['dni'];
 $password = $_POST['password'];
 $correoNuevo = $_POST['correo'];
 $localidad = $_POST['localidad'];
 $direccion = $_POST['direccion'];
 $codigoPostal = $_POST['codigoPostal'];
 $telefono = $_POST['telefono'];


 $usuario = 'root';
 $contrasena = '';
 $servidor = 'localhost';
 $basededatos = 'darprintcreations';

$mysqli = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

$sql = "UPDATE usuario SET nombre = '$nombre', apellidos = '$apellidos', dni = '$dni', password = '$password',
correo = '$correoNuevo', localidad = '$localidad', direccion = '$direccion', codigoPostal = '$codigoPostal', telefono = '$telefono' WHERE correo = '$correo'";


 $consulta = $mysqli->query($sql);


 	if ($consulta){

 		header ('location:cuentaCliente.php'); 
 	 			}
 	else{
 		header ("location: cuentaCliente.php"); 
 	 }
 	 


?>