<?php 
include('conexion.php');


function listadoProductos(){

	$conn = conectar();
	$result = $conn->query('SELECT * FROM producto');
    desconectar($conn);

	return $result;

}


 ?>