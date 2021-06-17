<?php

include_once login.php;

 if($row == true){
            // validar rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                header('location: colab.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }


?>