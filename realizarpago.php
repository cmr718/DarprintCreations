<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estilorealizarpago.css">
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
            <strong><a>DATOS DE PAGO</a></strong>
            <div class="pago">
                <a><img src="imagenes/pago.png" /></a>
            </div>
        </div>
        <div class="cuerpo">
            <div class="formulario">
                <form action="pagorealizado.php" target="" method="post" name="inicio">

                    <label for="usuario">Nombre de Titular</label>
                    <input type="text" name="usuario" requiredid="usuario" placeholder="Escribe el nombre del titular"/>
                
                    <label for="tarjeta">Numero de Tarjeta</label>
                    <input type="text" name="tarjeta" requiredid="tarjeta" placeholder="Escribe el numero de tarjeta"/>

                    <label for="fechavencimiento">Fecha de Vencimiento</label>
                    <input type="text" name="fechavencimiento" requiredid="fechavencimiento" placeholder="aa/dd"/>

                    <label for="cvv">CVV</label>
                    <input type="text" name="cvv" requiredid="cvv" placeholder="CVV"/>
                    
                    <input type="submit"  value="Realizar Pago">

                </form>
            </div>
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

</php>