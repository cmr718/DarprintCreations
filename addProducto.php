<?php

if (!empty($_POST)){

	$alert='';
	if (empty($_POST['nombreProducto']) || empty($_POST['categoria']) || empty($_POST['descripcion']) || empty($_POST['precio']) 
	|| empty($_POST['stock']))
	{
		header("location: añadirProducto.php?fallo=true");

	} else {

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

 	$destino = 'imagenes/productos/';
 	$img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
 	$imgProducto = $img_nombre.'.jpg';
 	$src = $destino.$imgProducto;
 }


 $usuario = 'ladymisti';
 $password = 'A6B6B088';
 $servidor = 'localhost';
 $basededatos = 'darprintcreations';

$mysqli = mysqli_connect($servidor, $usuario, $password, $basededatos);

$sql = "INSERT INTO productos ( nombreProducto , id_categoria , descripcion, precio, stock, imagen) VALUES('".$nombreProducto."', '".$categoria."', '".$descripcion."', '".$precio."', '".$stock."', '".$imgProducto."')";

if($sql) {
	if($img_nombre != ''){
		move_uploaded_file($url_temp,$src);
		} 
	}

	

 $consulta = $mysqli->query($sql);


 if ($consulta){

 	header ('location:productoCreadoCorrectamente.php'); 
 	 }
 	else{
 		header ("location: añadirProducto.php?fallo=true"); 
 		}
 	}
}

?>
