<?php 
include('conexion.php');

function modifProduct($id, $nombre, $precio, $idCat){
    execQuery('UPDATE producto SET nombre = "'.$nombre.'" WHERE id = '.$id);
    execQuery('UPDATE producto SET precio = '.$precio.' WHERE id = '.$id);
    execQuery('UPDATE producto SET idCategoria = '.$idCat.' WHERE id = '.$id);
    header("location: index.html");
}

function addProduct($nombre, $precio, $idCategoria){
    execQuery('INSERT INTO producto (nombre, precio, idCategoria) VALUES (\''.$nombre.'\', '.$precio.', '. $idCategoria .')');
    header("location: index.html");
}

 ?>
