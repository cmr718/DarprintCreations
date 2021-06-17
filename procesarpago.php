<?php

 include_once 'sesionBD.php';

 $titular = $_POST['usuario'];
 $tarjeta = $_POST['tarjeta'];
 $fecha = $_POST['fechavencimiento'];
 $cvv = $_POST['cvv'];



$sql = "INSERT INTO datospago ( nombretitular , numerotarjeta  , fechavencimiento, cvv) VALUES('".$titular."', '".$tarjeta."',  '".$fecha."', '".$cvv."')";


$ejecutar = $mysqli->query($sql);

?>