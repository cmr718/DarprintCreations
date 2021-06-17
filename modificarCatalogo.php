<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloModificarCatalogo.css">
</head>

<body>
    <header class="header">
        <a href="pagprincipal.php" class="logo"><img
                src="https://github.com/cmr718/DarprintCreations.git/imagenes/logo.png" width="230"
                height="85" /></a>
        <div class="arriba">
            <a title="Telefono" class="telefono"><img
                    src="https://github.com/cmr718/DarprintCreations.git/imagenes/telefono.png"
                    width="30" height="30" /> 667 52 28 49</a>
            <a title="Carrito" class="carrito" href="cestaAdmin.php"><img
                    src="https://github.com/cmr718/DarprintCreations.git/imagenes/carrito.png"
                    alt="Carrito" width="30" height="30" /></a>
            <a title="Usuario" class="usuario" href="permisos.php"><img
                    src="https://github.com/cmr718/DarprintCreations.git/imagenes/usuario.png"
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
                <li><a href="modificarCatalogo.php">MODIFICAR CATÁLOGO</a></li>
                <li><a href="gestionarClientes.php">GESTIONAR CLIENTES</a></li>
            </ul>
        </nav>
        <hr>

        <div class="social">
                <strong><a>GESTIONAR CATÁLOGOS</a></strong> <br> <br>
            </div> <br> 

        <div class="container">

            <script type="text/javascript">
            function ConfirmDelete(){

                var respuesta = confirm("¿Estas seguro de que deseas eliminar el producto?");

                if ( respuesta == true){
                    return true;
                } else{
                    return false;
                }

            }


        </script>

                    <table>
                        <tr> 
                            <th> id_producto</th>
                            <th> Nombre Producto</th>
                            <th> Categoria </th>
                            <th> Descripcion</th>
                            <th> Precio</th>
                            <th> Stock</th>
                            <th> Opciones</th>
            
                        </tr>

                         <?php

                        session_start();

                        $mysqli = new mysqli("localhost","ladymisti","A6B6B088","darprintcreations");

                        $resultado = $mysqli->query("SELECT * FROM productos");

                        if ($resultado){

                            while($row = $resultado->fetch_array()){

                        ?>

                                 <tr> 
                                    
                                    <td> <?php echo $row['id_producto'] ?></td>
                                    <td> <?php echo $row['nombreProducto'] ?></td>
                                    <td> <?php echo $row['id_categoria'] ?></td>
                                    <td> <?php echo $row['descripcion']; ?></td>
                                    <td> <?php echo $row['precio'] ?></td>
                                    <td> <?php echo $row['stock'] ?></td>

                                    <td> 
                                        <a class= "link_edit" href="editarProductoFormulario.php?id_producto=<?php echo $row['id_producto'];?>">Editar</a>
                                        <a class= "link_delete" onclick="return ConfirmDelete()"
                                         href="eliminarProductoCELIA.php?id_producto=<?php echo $row['id_producto'];?>">Eliminar</a>

                                    </td> 
                                </tr>



                                </tr>
<?php

                            }
                        }



                        ?>
                  
                    </table> 

                <div class="botones">
                        <a href="añadirProducto.php" class="boton">AÑADIR PRODUCTO</a>
                </div>

            
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