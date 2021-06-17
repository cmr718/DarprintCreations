<?php

  session_start();
     
    $db_host = "localhost";
    $db_nombre = "darprintcreations";
    $db_usuario = "ladymisti";
    $db_contra = "A6B6B088";

    $mysqli = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        
    include_once ('database.php');

    $idPr = $_POST['idProducto'];
    $corr = $_POST['correoUsuario'];
    $cant = $_POST['cantidad'];

    $stock = "SELECT stockProducto FROM pedidos WHERE correoUsuario = '$corr' AND idProducto = '$idPr' ";
    $con1 = $mysqli->query($stock);
    $row = mysqli_fetch_array($con1);

    $stockTot =$row[0] - $cant;
    print_r($stockTot);
    $stock = "UPDATE pedidos SET stockProducto = '$stockTot' WHERE correoUsuario = '$corr' AND idProducto = '$idPr'";
    $res = $mysqli->query($stock);
    header('Location: realizarpago.php');

?>