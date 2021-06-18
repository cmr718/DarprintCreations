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
                src="imagenes/logo.png" width="230"
                height="85" /></a>
        <div class="arriba">
            <a title="Telefono" class="telefono"><img
                    src="imagenes/telefono.png"
                    width="30" height="30" /> 667 52 28 49</a>
            <a title="Carrito" class="carrito" href="cestaAdmin.php"><img
                    src="imagenes/carrito.png"
                    alt="Carrito" width="30" height="30" /></a>
            <a title="Usuario" class="usuario" href="permisos.php"><img
                    src="imagenes/usuario.png"
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

    <main class="main">
        <div class="container">
            <strong><a>REGISTRARSE</a></strong>
        </div>

        <div class="titulo">
            <strong><a>INTRODUZCA DATOS DE REGISTRO</a></strong>
        </div>

        <form action="registroBUENO.php" target="" method="POST" name="inicio">

            <label for="usuario">Nombre</label>
            <input type="text" name="usuario" required id="usuario" placeholder="Escribe tu nombre" />

            <label for="apellidos">Apellidos</label>
            <input type="text" name="ap" requiredid="ap" placeholder="Escribe tus apellidos" />

            <label for="dni">DNI</label>
            <input type="text" name="dni" required id="dni" pattern="[0-9]{8}[A-Za-z]{1}" placeholder="Escribe 8 numeros y 1 letra" />

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" required id="pass" placeholder="Escribe tu contraseña" />

            <label for="corr">Correo</label>
            <input type="text" name="corr" required id="corr" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Escribe tu correo" />

            <label for="Localidad">Localidad</label>
            <input type="text" name="Localidad" required id="Localidad" placeholder="Escribe tu localidad" />

            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" required id="Direccion" placeholder="Escribe tu direccion" />

            <label for="cp">C.P</label>
            <input type="text" name="cp" required id="cp" placeholder="Escribe tu código postal" />

            <label for="telf">Telefono</label>
            <input type="text" name="telefono" required id="telefono" pattern="[0-9]{9}" placeholder="Escribe tu telefono de 9 digitos" />

            <?php
                if(isset($_GET["fallo"])  == 'true')
                 {
            echo "<div style='color:red'> Ya existe una cuenta con ese correo o DNI </div>";
                 }

            ?>
        
            
            <input type="submit"  value="Registrar">
        </form>


    </main>

    <hr>
    <footer class="footer">
        <div class="piedepagina">
            <div class="siguenos">
                <strong><a>SIGUENOS EN:</a></strong>
                <a title="Telefono" class="telefono"><img
                        src="imagenes/instagram.png"
                        width="20" height="20" /> @darprintcreations</a>
                <a title="Telefono" class="telefono"><img
                        src="imagenes/facebook.png"
                        width="20" height="20" /> Darprint Creations</a>
            </div>
            <div class="contacta">
                <strong><a>CONTACTA CON NOSOTROS:</a></strong>
                <a title="Telefono" class="telefono"><img
                        src="imagenes/whatsapp.png"
                        width="20" height="20" /> 667 52 28 49</a>
                <a title="Telefono" class="telefono"><img
                        src="imagenes/correo.png"
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
