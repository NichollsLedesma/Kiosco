<?php 
// include('functiones.php');
// $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
// //echo "asd".$id;
// $prodSeleccionado = buscarProd($id);
// // var_dump($prodSeleccionado);

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : 0;
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : 0;

echo $nombre . ' ' . $precio;
?>