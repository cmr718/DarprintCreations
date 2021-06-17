<?php

 $nombre = $_POST['usuario'];
 $apellidos = $_POST['ap'];
 $dni = $_POST['dni'];
 $pass = $_POST['pass'];
 $correo = $_POST['corr'];
 $localidad = $_POST['Localidad'];
 $direccion = $_POST['Direccion'];
 $cp = $_POST['cp'];
 $telefono = $_POST['telefono'];
 $rol = 2;

$usuario = 'ladymisti';
$password = 'A6B6B088';
$servidor = 'localhost';
$basededatos = 'darprintcreations';

$mysqli = mysqli_connect($servidor, $usuario, $password, $basededatos);


$resultado = $mysqli->query("SELECT * FROM usuario");

// if ($resultado){
// 	while($row = $resultado->fetch_array()){
// 		if ($row = $correo ) {
// 			header("location: registrar.php?fallo=true");
// 		}
// 	}
// }



$sql = "INSERT INTO usuario ( nombre , apellidos , dni, password, correo, localidad, direccion, codigoPostal, telefono, id_rol) VALUES('".$nombre."', '".$apellidos."', '".$dni."', '".$pass."',
        '".$correo."', '".$localidad."', '".$direccion."', '".$cp."', '".$telefono."','".$rol."')";

 $consulta = $mysqli->query($sql);

 print_r(!$consulta);

 if ($consulta){
 	header('location: registrorealizado.php'); }
 	else{
 		header('location: registrar.php?fallo=true");');
 	}

?>
