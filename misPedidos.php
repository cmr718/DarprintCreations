<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloGestionarClientes.css">
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
        <strong><a>MI CUENTA: MODO ADMINISTRADOR</a></strong>
    </div>
    <div class="barra"> </div>

    <main class="main">
        <nav class="navegador">
            <ul>
                <li><a href="cuentaAdmin.php">DATOS PERFIL</a></li>
                <li><a href="gestionarClientes.php">MIS PEDIDOS</a></li>
            </ul>
        </nav>
        <hr>

            <div class="social">
                <strong><a>MIS PEDIDOS</a></strong>
                </div>
                <br> <br>


        <div class="container">
            
        <script type="text/javascript">
            function ConfirmDelete(){

                var respuesta = confirm("¿Está seguro de que desea cancelar el pedido?");

                if ( respuesta == true){
                    return true;
                } else{
                    return false;
                }

            }


        </script>

                    <table>
                        <tr> 
                            <th> Nombre Producto</th>
                            <th> Cantidad</th>
                            <th> Precio </th>
                            <th> Total</th>

                        </tr>

                         <?php

                        session_start();

                        $correo = $_SESSION('correo');

                        $mysqli = new mysqli("localhost","root","","darprintcreations");

                        $resultado = $mysqli->query("SELECT id_pedido FROM usuarios WHERE correo = :correo");

                        if ($resultado){

                            while($row = $resultado->fetch_array()){

                        ?>

                                 <tr> 
                                    
                                    <td> <?php echo $row['nombreProducto'] ?></td>
                                    <td> <?php echo $row['cantidad'] ?></td>
                                    <td> <?php echo $row['precio'] ?></td>
                                    <td> <?php echo $row['total']; ?></td>
                         <!--            <td> <?php echo $row['localidad'] ?></td>
                                    <td> <?php echo $row['direccion'] ?></td>
                                    <td> <?php echo $row['telefono'] ?></td>
                                    <td> <?php echo $row['id_rol'] ?></td> -->
                                    <td> 
                                        <a class= "link_delete" onclick="return ConfirmDelete()"
                                         href="eliminarUsuario.php?id_pedido=<?php echo $row['id_pedido'];?>">Cancelar Pedido</a>

                                    </td> 
                                </tr>



                                </tr>
<?php

                            }
                        }



                        ?>
                  
                    </table> 
                </div>
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