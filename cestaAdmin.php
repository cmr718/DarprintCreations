<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloCestaAdmin.css">
</head>

<body>
    <header class="header">
        <a href="pagprincipal.php" class="logo"><img src="http://localhost/TW/imagenes/logo.png" width="230" height="85" /></a>
        <div class="arriba">
            <a title="Telefono" class="telefono"><img src="http://localhost/TW/imagenes/telefono.png" width="30" height="30" /> 667 52 28 49</a>
            <a title="Carrito" class="carrito" href="cestaAdmin.php"><img src="http://localhost/TW/imagenes/carrito.png" alt="Carrito" width="30" height="30" /></a>
            <a title="Usuario" class="usuario" href="permisos.php"><img src="http://localhost/TW/imagenes/usuario.png" alt="Usuario" width="30" height="30" /></a>
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

    <footer class="raya">
        <div> </div>

    </footer>


    <main class="main">
        <div class="container">
            <strong><a>CESTA</a></strong>
            <div class="carro">
                <a><img src="http://localhost/TW/imagenes/cesta.png" /></a>
            </div>
        </div>
        <div class="cuerpo">
            <strong>SU PEDIDO:</strong>
        </div>


        <?php

        session_start();

        $db_host = "localhost";
        $db_nombre = "darprintcreations";
        $db_usuario = "root";
        $db_contra = "";

        $mysqli = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);

        $link = new PDO('mysql:host=localhost;dbname=darprintcreations', 'root', '');

        $correo = $_SESSION['correo'];

        ?>


        <?php foreach ($link->query("SELECT * from pedidos WHERE correo = '$correo' ") as $row) {
        ?>

            <table class="tabla">
                <tr>
                    <td> <img src= "https://localhost/TW/imagenes/productos/<?php echo $row['imagen'] ?>" width="200" height="200" /> </td>



                    <th><?php echo $row['nombreProducto'] ?></th>

                    <?php
                    $can = $row['cantidad'];
                    ?>
                    <td>Cantidad: <?php echo $can ?></th>
                    </td>

                    <?php
                    $precioTot = $row['precio'] * $row['cantidad'];
                    $idp = $row['id_producto'];
                    $precioq = "UPDATE pedidos SET precioTotalPedido = '$precioTot' WHERE correo = '$correo' AND id_producto = '$idp' ";
                    $con = $mysqli->query($precioq);
                    ?>
                    <th>Precio: <?php echo $precioTot ?>€</th>

                    <td>
                        <form action="eliminarProducto.php" method="POST">
                            <?php
                            echo ("<input id = 'correo' name ='correo' type='hidden' value='" . $correo . "'>");
                            echo ("<input id = 'id_producto' name ='id_producto' type='hidden' value='" . $idp . "'>");
                            ?>
                            <button type="submit">Eliminar Producto</button>
                        </form>
                    </td>

                </tr>
            </table>
        <?php
        }
        ?>
        <div class="precioTotal">
            <strong><a>PRECIO TOTAL:
                    <?php
                    $sql = "SELECT sum(precioTotalPedido) from pedidos WHERE correo = '$correo' ";
                    $q = $mysqli->query($sql);
                    $row = mysqli_fetch_array($q);
                    echo  $row[0];

                    $preciot = "UPDATE pedidos SET total = '$row[0]' WHERE correo = '$correo'";
                    $t = $mysqli->query($preciot);
                    ?>
                    €</a></strong>
        </div>

        <form name="realizar" action="restarstock.php" method="POST">
            <?php
            if (isset($can) && isset($idp)) {
                echo ("<input id = 'cantidad' name ='cantidad' type='hidden' value='" . $can . "'>");
                echo ("<input id = 'correo' name ='correo' type='hidden' value='" . $correo . "'>");
                echo ("<input id = 'id_producto' name ='id_producto' type='hidden' value='" . $idp . "'>");
            }
            ?>
            <button type="submit">REALIZAR PAGO</button>
        </form>

    </main>

    <footer class="raya">
        <div> </div>

    </footer>

    <footer class="footer">
        <div class="piedepagina">
            <div class="siguenos">
                <strong><a>SIGUENOS EN:</a></strong>
                <a title="Telefono" class="telefono"><img src="http://localhost/TW/imagenes/instagram.png" width="20" height="20" /> @darprintcreations</a>
                <a title="Telefono" class="telefono"><img src="http://localhost/TW/imagenes/facebook.png" width="20" height="20" /> Darprint Creations</a>
            </div>
            <div class="contacta">
                <strong><a>CONTACTA CON NOSOTROS:</a></strong>
                <a title="Telefono" class="telefono"><img src="http://localhost/TW/imagenes/whatsapp.png" width="20" height="20" /> 667 52 28 49</a>
                <a title="Telefono" class="telefono"><img src="http://localhost/TW/imagenes/correo.png" width="20" height="20" /> sanay_15@hotmail.com</a>
            </div>
            <div class="encuentra">
                <strong><a>ENCUENTRANOS EN:</a></strong>
                <a title="Telefono" class="telefono"> AVN OASIS 97, EL EJIDO (ALMERÍA)</a>
            </div>
        </div>
    </footer>

</body>

</html>