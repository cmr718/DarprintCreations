<?php

    include_once 'database.php';

    	session_start();
	$_SESSION["newsession"]=$value;

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: pagprincipal.php');
            break;

            case 2:
            header('location: pagprincipal.php');
            break;

            default:
        }
    }

    if(isset($_POST['correo']) && isset($_POST['password'])){
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare ('SELECT * FROM usuario WHERE correo = :correo AND password = :password');
        $query->execute(['correo' => $correo, 'password' => $password]);


        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[9];
	    $correo = $row[4];	
            $_SESSION['rol'] = $rol;
	    $_SESSION['correo'] = $correo;

            switch($_SESSION['rol']){
                case 1:
                    header('location: pagprincipal.php');
		
                break;
    
                case 2:
                header('location: pagprincipal.php');
                break;
    
                default:
            }
        }else{
	 
	header("location: iniciosesion.php?fallo=true");

        }

	
	

    }
    

?>
