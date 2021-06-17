<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloregistrar.css">
</head>

<body>
    <header class="header">
        <a href="pagprincipal.php" class="logo"><img
                src="http://localhost/TW/imagenes/logo.png" width="230"
                height="85" /></a>
        <div class="arriba">
            <a title="Telefono" class="telefono"><img
                    src="http://localhost/TW/imagenes/telefono.png"
                    width="30" height="30" /> 667 52 28 49</a>
            <a title="Carrito" class="carrito" href="cestaAdmin.php"><img
                    src="http://localhost/TW/imagenes/carrito.png"
                    alt="Carrito" width="30" height="30" /></a>
            <a title="Usuario" class="usuario" href="permisos.php"><img
                    src="http://localhost/TW/imagenes/usuario.png"
                    alt="Usuario" width="30" height="30" /></a>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="pagprincipal.php">INICIO</a></li>
                <li><a href="Catalogo.php">CATÁLOGO</a></li>
                <li><a href="personalizaTuProducto.php">PERSONALIZA TU PRODUCTO</a></li>
                <li><a href="masSobreNosotros.php">MÁS SOBRE NOSOTROS</a></li>
            </ul>
        </nav>
    </header>
    <hr>

       
        <?php

           session_start();

           $correo=$_SESSION['correo'];
    
           $db_host="localhost";
           $db_nombre="darprintcreations";  
           $db_usuario="ladymisti";
           $db_contra="A6B6B088";
           
           $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
           if (mysqli_connect_errno()) {
            printf("Falló la conexión failed: %s\n");
            exit();
           }
           
           $consulta="select * FROM usuario where correo='$correo'";
           $resultado=$conexion->query($consulta);
           
            if ($resultado) {

                         while ( $row = $resultado->fetch_array()) {

                            $nombre = $row['nombre'];
                            $apellidos = $row['apellidos'];
                            $dni = $row['dni'];
                            $password = $row['password'];
                            $localidad = $row['localidad'];
                            $direccion = $row['direccion'];
                            $codigoPostal = $row['codigoPostal'];
                            $telefono = $row['telefono'];
                            $id_rol=$row['id_rol'];
                        }
            }
                         
                      
        ?>

    <main class="main">
        <div class="container">
            <strong><a>MODIFICAR DATOS</a></strong>
        </div>

        <div class="titulo">
            <strong><a>INTRODUZCA LOS NUEVOS DATOS DE USUARIO</a></strong>
        </div>
        
        <form action="editarDatosPropios.php?correo=<?php echo $correo?>" method="POST" name="inicio">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $nombre?>" required id="nombre" placeholder="Escribe tu nombre" />

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $apellidos?>" required id="apellidos" placeholder="Escribe tus apellidos" />

            <label for="dni">DNI</label>
            <input type="text" name="dni" value="<?php echo $dni?>" id="dni" pattern="[0-9]{8}[A-Za-z]{1}" placeholder="Escribe 8 numeros y 1 letra" />

            <label for="password">Contraseña</label>
            <input type="text" name="password" value="<?php echo $password?>" id="password" placeholder="Escribe tu contraseña" />

            <label for="correo">Correo</label>
            <input type="text" value="<?php echo $correo?>" name="correo" id="correo" 
            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Escribe tu correo" />

            <label for="localidad">Localidad</label>
            <input type="text" name="localidad" value="<?php echo $localidad?>" required id="localidad" placeholder="Escribe tu localidad" />

            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" value="<?php echo $direccion?>" required id="direccion" placeholder="Escribe tu direccion" />

            <label for="codigoPostal">C.P</label>
            <input type="text" name="codigoPostal"value="<?php echo $codigoPostal?>" required id="codigoPostal" placeholder="Escribe tu código postal" />

            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" value="<?php echo $telefono?>" required id="telefono" pattern="[0-9]{9}" placeholder="Escribe tu telefono de 9 digitos" />

            <br>

            <?php
                if(isset($_GET["fallo"])  == 'true')
                 {
            echo "<div style='color:red'> Ya existe una cuenta con ese correo o DNI </div>";
                 }

            ?>

            
            <input type="submit"  value="Modificar datos">
        </form>


    </main>

    <hr>
    <footer class="footer">
        <div class="piedepagina">
            <div class="siguenos">
                <strong><a>SIGUENOS EN:</a></strong>
                <a title="Telefono" class="telefono"><img
                        src="http://localhost/TW/imagenes/instagram.png"
                        width="20" height="20" /> @darprintcreations</a>
                <a title="Telefono" class="telefono"><img
                        src="http://localhost/TW/imagenes/facebook.png"
                        width="20" height="20" /> Darprint Creations</a>
            </div>
            <div class="contacta">
                <strong><a>CONTACTA CON NOSOTROS:</a></strong>
                <a title="Telefono" class="telefono"><img
                        src="http://localhost/TW/imagenes/whatsapp.png"
                        width="20" height="20" /> 667 52 28 49</a>
                <a title="Telefono" class="telefono"><img
                        src="http://localhost/TW/imagenes/correo.png"
                        width="20" height="20" /> sanay_15@hotmail.com</a>
            </div>
            <div class="encuentra">
                <strong><a>ENCUENTRANOS EN:</a></strong>
                <a title="Telefono" class="telefono"> AVN OASIS 97, EL EJIDO (ALMERÍA)</a>
            </div>
        </div>
    </footer>

</body>

</html>