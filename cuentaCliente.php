<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estilocuenta.css">
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
    <br>

    <div class="titulo">
        <strong><a>MI CUENTA</a></strong> 
    </div>
    
    <div class="barra"> </div>

    <main class="main">
        <nav class="navegador">
            <ul>
                <li><a href="cuentaCliente.php">DATOS DEL PERFIL</a></li>
            </ul>
        </nav>
        <hr>

        <div class="social">
                <strong><a>DATOS DEL PERFIL</a></strong> <br> <br>
            </div> <br> 

        <div class="container">

<div class="back">
            <div class="datos">
                <div class="cosas">

                    <?php

                    session_start();

                    $mysqli = new mysqli("localhost","ladymisti","A6B6B088","darprintcreations");

                    $correo = $_SESSION['correo'];

                    $resultado = $mysqli->query("SELECT * FROM usuario WHERE correo = '$correo'");


                    if ($resultado) {

                         while ( $row = $resultado->fetch_array()) {

                            $nombre = $row['nombre'];
                            $apellido = $row['apellidos'];
                            $dni = $row['dni'];
                            $password = $row['password'];
                            $correo = $row['correo'];
                            $localidad = $row['localidad'];
                            $direccion = $row['direccion'];
                            $codigoPostal = $row['codigoPostal'];
                            $telefono = $row['telefono'];

                            ?>
                    <div> 
                        <p> 
                            <b> Nombre: </b> <?php echo $nombre; ?><br>
                            
                            <b> Apellidos: </b> <?php echo $apellido; ?><br>
                            <b> DNI: </b> <?php echo $dni; ?><br>
                            <b> Contraseña: </b> <?php echo $password; ?><br>
                            <b> Localidad: </b> <?php echo $localidad; ?><br>
                            <b> Dirección: </b> <?php echo $direccion; ?><br>
                            <b> Codigo Postal: </b> <?php echo $codigoPostal; ?><br>
                            <b> Telefono: </b> <?php echo $telefono; ?><br>

                        </p>
                    </div> 

                    <?php
                            
                         }

                    }

                    ?>

                </div>
            </div>
        </div>
            
        </div>

        <div class="botones">
                        <a href="cerrarSesion.php" class="boton">CERRAR SESION</a>
                        <a href="modificarDatosPropios.php" class="boton">EDITAR DATOS</a>
        </div>

                        
                        

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