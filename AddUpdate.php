<?php
include('./resources/php/functionsPost.php');

$id = (isset($_POST['idHidden'])) ? $_POST['idHidden'] : 0;
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : 0;
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : 0;
$catID = (isset($_POST['categotia'])) ? $_POST['categotia'] : 0;

($id==0)?addProduct($nombre, $precio, $catID):modifProduct($id, $nombre, $precio, $catID);
?>