<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloiniciosesion.css">
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
            <a title="Carrito" class="carrito" href="permisosCesta.php"><img
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
            <strong><a>INICIO DE SESION</a></strong>
            <div class="social">
                <a><img src="imagenes/inicio.png" /></a>
            </div>
        </div>
              
        <form action="login.php" target="" method="post" name="inicio">

            <label for="correo">Correo</label>
            <input type="text" name="correo" required id="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Escribe tu correo" />
        
            <label for="password">Contraseña</label>
            <input type="password" name="password" required id="password" placeholder="Escribe tu contraseña" />  

            <?php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                 {
            echo "<div style='color:red'>Usuario o contraseña invalido </div>";
                 }
            ?>
            <br>
            <input type="submit"  value="Iniciar Sesion">

            
        </form>

        <div class="noreg">
            <a>¿No estás registrado?</a>
            <a href="registrar.php">Pulse Aquí</a>
        </div>
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
© 2021 GitHub, Inc.
