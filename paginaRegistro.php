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

    <main class="main">
        <div class="container">
            <strong><a>REGISTRAR SESIÓN</a></strong>
            <div class="social">
                <a><img src="http://localhost/TW/imagenes/editar.png" /></a>
            </div>
        </div>

        <div class="titulo">
            <strong><a>INTRODUZCA DATOS DE REGISTRO</a></strong>
        </div>

        <form action="registroBUENO.php" target="" method="POST" name="inicio">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required id="nombre" placeholder="Escribe tu usuario" />

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" requiredid="apellidos" placeholder="Escribe tus apellidos" />

            <label for="dni">DNI</label>
            <input type="text" name="dni" required id="dni" placeholder="Escribe tu DNI" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" required id="password" placeholder="Escribe tu contraseña" />

            <label for="correo">Correo</label>
            <input type="text" name="correo" required id="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Escribe tu correo" />

            <label for="localidad">Localidad</label>
            <input type="text" name="localidad" required id="localidad" placeholder="Escribe tu Localidad" />

            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" required id="direccion" placeholder="Escribe tu Direccion" />

            <label for="codigoPostal">Codigo Postal</label>
            <input type="text" name="codigoPostal" required id="codigoPostal" placeholder="Escribe tu código postal" />

            <label for="telfono">Telefono</label>
            <input type="text" name="telefono" required id="telefono" placeholder="Escribe tu telefono" />
            
            <input  type="submit"  value="Registrar">
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