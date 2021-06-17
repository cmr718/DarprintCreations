<?php

 include_once 'database.php';

    	session_start();

	if(!isset($_SESSION['rol'])){
        	header('location: iniciosesion.php');
        }

    if(isset($_SESSION['rol'])){
        if($_SESSION['rol'] == 1){
                header('location: cuentaAdmin.php');
            } else {
            	header('location: cuentaCliente.php');
            }  

    }

    ?>