<?php

 include_once 'sesionBD.php';

session_start();

if(isset($_POST['dni'])){
        $dni = $_POST['dni'];

        $db = new Database();
        $query = $db->connect()->prepare ('SELECT * FROM usuario WHERE dni = :dni');

	 echo "Nombre: " . $_SESSION["nombre"];
         echo "Apellidos: " . $_SESSION["apellidos"];
         echo "DNI: " . $_SESSION["dni"];
         echo "Contraseña: " . $_SESSION["password"];
         echo "Localidad: " . $_SESSION["localidad"];    
         echo "Dirección: " . $_SESSION["direccion"];
         echo "C.P: " . $_SESSION["codigoPostal"];
         echo "Teléfono: " . $_SESSION["telefono"];

?>