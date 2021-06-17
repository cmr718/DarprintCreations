
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Darprint Creations</title>
    <link rel="stylesheet" href="estiloAñadirProducto.css">

</head>

<body>

<script>

$(document).ready(function(){

    //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
    $("#foto").on("change",function(){
        var uploadFoto = document.getElementById("foto").value;
        var foto       = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');
        
            if(uploadFoto !='')
            {
                var type = foto[0].type;
                var name = foto[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                {
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                    $("#img").remove();
                    $(".delPhoto").addClass('notBlock');
                    $('#foto').val('');
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        $("#img").remove();
                        $(".delPhoto").removeClass('notBlock');
                        var objeto_url = nav.createObjectURL(this.files[0]);
                        $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                        $(".upimg label").remove();
                        
                    }
              }else{
                alert("No selecciono foto");
                $("#img").remove();
              }              
    });

    $('.delPhoto').click(function(){
        $('#foto').val('');
        $(".delPhoto").addClass('notBlock');
        $("#img").remove();

    });

});
</script>



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
            <strong><a>AÑADIR PRODUCTO</a></strong> <br>
        

        <form action="addProducto.php" target="" method="POST" name="inicio" enctype="multipart/form-data">

            <label class="atributosProducto" for="nombreProducto">Nombre de producto</label> 
            <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Nombre del producto" />

            <label class="atributosProducto" for="categoria">Categoria de producto</label>

            <?php

            $usuario = 'ladymisti';
            $password = 'A6B6B800';
            $servidor = 'localhost';
            $basededatos = 'darprintcreations';

            $mysqli = mysqli_connect($servidor, $usuario, $password, $basededatos);

            $query_categorias = mysqli_query($mysqli,"SELECT * FROM categorias ORDER BY nombreCategoria ASC");

            $result_categoria = mysqli_num_rows($query_categorias);

            ?>

            <select name="categoria" id="categoria">

                <?php

                if ($result_categoria > 0) {
                    while ($categoria = mysqli_fetch_array($query_categorias)) {

                ?>

                <option value="<?php echo $categoria['id_categoria']; ?>"><?php echo $categoria['nombreCategoria'];?></option>
                <?php 
                        }
                    }

                ?>

            </select>



            <label class="atributosProducto" for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion del producto" />

            <label class="atributosProducto" for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="Precio del producto" />

            <label class="atributosProducto" for="stock">Stock</label>
            <input type="text" name="stock" id="stock" placeholder="Stock del producto disponible" />

                <div class="atributosProducto" id="photo">
                     <label for="foto">Foto</label>
                     <div class="prevPhoto">
                     <span class="delPhoto notBlock">X</span>
                     <label for="foto"></label>
                </div>
                  <div class="upimg">
                        <input type="file" name="foto" id="foto">
                  </div>
                         <div id="form_alert"></div>
                  </div>

                  <?php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                 {
                    echo "<div style='color:red'>Producto invalido </div>";
                 }
                ?>

            <input type="submit"  value="Añadir producto">
        </form>

        <div class="botones">
                        <a href="modificarCatalogo.php" class="boton">VOLVER</a>
                </div>

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
                        src="http://localhost/TW/imagenes/imagenes\facebook.png"
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