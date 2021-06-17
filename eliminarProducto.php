<?php

    session_start();
     
    $db_host = "localhost";
    $db_nombre = "darprintcreations";
    $db_usuario = "root";
    $db_contra = "";

    $mysqli = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        
    include_once ('database.php');

    $idPr = $_POST['id_producto'];
    $corr = $_POST['correo'];
    print_r($_POST); 

    $con = "DELETE FROM pedidos WHERE id_producto = '$idPr' and correo = '$corr' ";
    $res = $mysqli->query($con);
    header('Location: cestaAdmin.php');

?>