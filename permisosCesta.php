<?php

 include_once 'database.php';

    	session_start();

	if(!isset($_SESSION['rol'])){
        	header('location: iniciosesion.php');
        }

    if(isset($_SESSION['rol'])){
        if($_SESSION['rol'] == 1){
                header('location: cestaAdmin.php');
            } else {
            	header('location: cestaAdmin.php');
            }  

    }

    ?>