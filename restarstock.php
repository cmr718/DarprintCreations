<?php

  session_start();
    
    if(!isset($_SESSION['rol'])){
        	header('location: iniciosesion.php');
        }

    if(isset($_SESSION['rol'])){
        if($_SESSION['rol'] != 1){
                header('location: iniciosesion.php');
            } else {
            	 

    }
     
    $db_host = "localhost";
    $db_nombre = "darprintcreations";
    $db_usuario = "ladymisti";
    $db_contra = "A6B6B088";

    $mysqli = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        
    include_once ('database.php');

    $idPr = $_POST['id_producto'];
    $corr = $_POST['correo'];
    $cant = $_POST['cantidad'];

    $stock = "SELECT stock FROM pedidos WHERE correo = '$corr' AND id_producto = '$idPr' ";
    $con1 = $mysqli->query($stock);
    $row = mysqli_fetch_array($con1);

    $stockTot =$row[0] - $cant;
    print_r($stockTot);
    $stock = "UPDATE pedidos SET stock = '$stockTot' WHERE correo = '$corr' AND id_producto = '$idPr'";
    $res = $mysqli->query($stock);
    header('Location: realizarpago.php');
  }
?>
