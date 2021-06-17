<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloedusuarionormal.css">
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
        <nav class="navegador">
            <ul>
                <li><a href="cuentaAdmin.php">DATOS PERFIL</a></li>
                <li><a href="modificarCatalogo.php">MODIFICAR CATÁLOGO</a></li>
                <li><a href="gestionarClientes.php">GESTIONAR CLIENTES</a></li>
            </ul>
        </nav>
        <hr>

        <div class="container">
            <strong><a>DATOS DEL PERFIL: EDITOR</a></strong>
            <div class="social">
                <a><img
                        src="imagenes/ed.png" /></a>
            </div>
        </div>

        <div class="back">
            <div class="datos">
                <div class="cosas">
                    <form action="editarUsuario1.php" target="" method="get" name="inicio">

                        <label for="usuario">Nombre</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Escriba el nuevo nombre" />
            
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="ap" id="ap" placeholder="Escriba los nuevos apellidos" />

                        <label for="dni">DNI</label>
                        <input type="text" name="dni" id="dni" placeholder="Escriba el nuevo DNI" />
            
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Escribe la nueva contraseña" />
            
                        <label for="corr">Correo</label>
                        <input type="text" name="corr" id="corr" placeholder="Escribe el nuevo correo" />
            
                        <label for="Localidad">Localidad</label>
                        <input type="text" name="Localidad" id="Localidad" placeholder="Escribe la nueva localidad" />
            
                        <label for="Direccion">Dirección</label>
                        <input type="text" name="Direccion" id="Direccion" placeholder="Escribe la nueva direccion" />
            
                        <label for="cp">Codigo Postal</label>
                        <input type="text" name="cp" id="cp" placeholder="Escribe el nuevo código postal" />
            
                        <label for="telf">Telefono</label>
                        <input type="text" name="telefono" id="telefono" placeholder="Escribe el nuevo telefono" />
                        
                        
                    </form>
                </div>
            </div>
        </div>

        <div class="boton">
            <a href="usuariomodificado.php" class="boton">CONFIRMAR CAMBIOS</a>
        </div>

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