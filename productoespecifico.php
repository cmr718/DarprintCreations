<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Darprint Creations</title>
	<link rel="stylesheet" href="estiloproductoespecifico.css">
</head>

<body>
	
       

	<header class="header">
		
		<a href="pagprincipal.php" class="logo"><img
				src="imagenes/logo.png" width="230"
				height="85" />
		</a>
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

   
    <nav class="barra">
            <li><a href="ropa.php">ROPA</a>
            <li><a href="mascarillas.php">MASCARILLAS</a>
            <li><a href="tazas.php">TAZAS</a></li>
            <li><a href="gorras.php">GORRAS</a></li>
            <li><a href="regalos.php">REGALOS</a></li>
    </nav>

    <div class="container">		

	<div class="productos">
   
		<?php
	
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

		   $resultado=$conexion->query($sql);
		   
		    if ($resultado) {

                         while ( $row = $resultado->fetch_array()) {

                            $nombreProducto = $row['nombreProducto'];
                            $precio = $row['precio'];
                            $imagen = $row['imagen'];
							$descripcion = $row['descripcion'];
                         
		?> 

							<div class="titulo" >
									  <?php echo $nombreProducto; ?> 
									</div>
							<div class="precio" >
									 <?php echo "Precio: "; echo $precio; ?> €
									</div>
							<div class="descripcion" >
									 <?php echo $descripcion; ?> 
									</div>

							<a class="añadirCarrito" href="añadirproductoapedidos.php?id_producto=<?php echo $row['id_producto'];?>"><img src="imagenes/1393.png" width="40" height="40" ></a>
				
							<div class= producto>
								 <a><img src="imagenes/<?php echo $imagen ?>" width="230" height="230" /></a>
															
							</div>
						
		<?php					
						 }
			}
		?>
    </div> 
</div>
	
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
