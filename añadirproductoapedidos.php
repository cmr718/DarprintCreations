<?php
           session_start(); 

           $correo=$_SESSION['correo'];
           echo $correo;
           $db_host="localhost";
           $db_nombre="darprintcreations";
           $db_usuario="ladymisti";
           $db_contra="A6B6B088";

           $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
           if (mysqli_connect_errno()) {
            printf("Falló la conexión failed: %s\n");
            exit();
           }

           $id_producto = $_GET['id_producto'];

           $sql ="SELECT * FROM productos WHERE id_producto = '".$id_producto."'";
            echo $sql;
           $resultado=$conexion->query($sql);

            if ($resultado) {

                         while ( $row = $resultado->fetch_array()) {

                            $nombreProducto = $row['nombreProducto'];
                            $precio = $row['precio'];
                            $imagen = $row['imagen'];
                            $descripcion = $row['descripcion'];
                            $stockProducto= $row['stock'];

                         }
            }
 
            $sql ="INSERT INTO pedidos (`id_producto`, `imagen`, `nombreProducto`, `cantidad`, `precio`, `precioTotalPedido`, `correo`, `stockProducto`, `total`) VALUES ('$id_producto','$imagen','$nombreProducto','1','$precio','$precio','$correo','$stockProducto','$precio')";

            $resultado=$conexion->query($sql);

            if ($resultado) {
                header('location: Catalogo.php');
            }else{
                header('location: Catalogo.php');
            }
        ?>
