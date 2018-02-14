<?php 
include('functiones.php');

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre']: '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : 0;
//echo $nombre . ' ' . $precio;
if (($nombre=='' || $precio==0)  ){
	echo"<script>alert('completa pue los campos ¬¬\"')</script>";
}else {
	addProduct($nombre, $precio);
	header("location: index.php");
}





// $nombre = (isset($_POST['nombre'])) ? $_POST['nombre']: '';
// $precio = (isset($_POST['precio'])) ? $_POST['precio'] : 0;
// //echo $nombre . ' ' . $precio;
// if (($nombre=='' || $precio==0) && ){

// 	//echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
// }

 ?>