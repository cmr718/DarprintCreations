<?php
            
    session_start();

 	$id_producto = $_GET['id_producto'];

               if (!empty($_POST)){

	$alert='';
	if (empty($_POST['nombreProducto']) || empty($_POST['categoria']) || empty($_POST['descripcion']) || empty($_POST['precio']) 
	|| empty($_POST['stock']))
	{
		header("location: modificarCatalogo.php");

	} else {

 session_start();

 $id_producto = $_GET['id_producto'];

 $nombreProducto = $_POST['nombreProducto'];
 $categoria = $_POST['categoria'];
 $descripcion = $_POST['descripcion'];
 $precio = $_POST['precio'];
 $stock = $_POST['stock'];

 $foto = $_FILES['foto'];
 $img_nombre = $foto['name'];
 $type = $foto['type'];
 $url_temp = $foto['tmp_name'];

 $imgProducto = 'img_producto.png';

 if($img_nombre != '') {

 	$destino = 'C:/xampp/htdocs/TW/imagenes/productos/';
 	$img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
 	$imgProducto = $img_nombre.'.jpg';
 	$src = $destino.$imgProducto;
 }


 $usuario = 'root';
 $password = '';
 $servidor = 'localhost';
 $basededatos = 'darprintcreations';

$mysqli = mysqli_connect($servidor, $usuario, $password, $basededatos);

$sql = "UPDATE productos SET nombreProducto = '$nombreProducto', id_categoria = '$categoria', descripcion = '$descripcion', precio = '$precio',
stock = '$stock', imagen = '$imgProducto' WHERE id_producto = '$id_producto.'";


if($sql) {
	if($img_nombre != ''){
		move_uploaded_file($url_temp, $src);
		} 
	}

 $consulta = $mysqli->query($sql);


 if ($consulta){

 	header ('location:modificarCatalogo.php'); 
 	 }
 	else{
 		header ("location: modificarCatalogo.php"); 
 		}
 	}
}

                ?>