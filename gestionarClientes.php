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
                <strong><a>GESTIONAR CLIENTES</a></strong>
                </div>
                <br> <br>


        <div class="container">
            
        <script type="text/javascript">
            function ConfirmDelete(){

                var respuesta = confirm("¿Estas seguro de que deseas eliminar al usuario?");

                if ( respuesta == true){
                    return true;
                } else{
                    return false;
                }

            }


        </script>

                    <table>
                        <tr> 
                            <th> Nombre</th>
                            <th> Apellidos</th>
                            <th> DNI </th>
                            <th> Correo</th>
                            <th> Localidad</th>
                            <th> Direccion</th>
                            <th> Telefono</th>
                            <th> Rol</th>
                            <th> Opciones</th>
    <!--                         <th> Localidad</th>
                            <th> Direccion</th>
                            <th> Telefono</th>
                            <th> Operación</th> -->
                        </tr>

                         <?php

                        session_start();

                        $mysqli = new mysqli("localhost","ladymisti","A6B6B088","darprintcreations");

                        $resultado = $mysqli->query("SELECT * FROM usuario");

                        if ($resultado){

                            while($row = $resultado->fetch_array()){

                        ?>

                                 <tr> 
                                    
                                    <td> <?php echo $row['nombre'] ?></td>
                                    <td> <?php echo $row['apellidos'] ?></td>
                                    <td> <?php echo $row['dni'] ?></td>
                                    <td> <?php echo $row['correo']; $correo = $row['correo']; ?></td>
                                    <td> <?php echo $row['localidad'] ?></td>
                                    <td> <?php echo $row['direccion'] ?></td>
                                    <td> <?php echo $row['telefono'] ?></td>
                                    <td> <?php echo $row['id_rol'] ?></td>
                                    <td> 
                                        <a class= "link_edit" href="gestionarClientesFormulario.php?correo=<?php echo $row['correo'];?>">Editar</a>
                                        <a class= "link_delete" onclick="return ConfirmDelete()"
                                         href="eliminarUsuario.php?correo=<?php echo $row['correo'];?>">Eliminar</a>

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