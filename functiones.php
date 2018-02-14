<?php 
include('conexion.php');


function listadoProductos(){
	$conn = conectar();
	$result = $conn->query('SELECT * FROM producto order by nombre;');
    //desconectar($conn);

	return $result;

}

function buscarProd($id){
	$productoEncontrado = [];
	$todo = listadoProductos();
	foreach ($todo as $prod) {
		if ($prod['id']==$id){
			$productoEncontrado = json_encode($prod);
		}
	}
	return $productoEncontrado;
}

function addProduct($nombre, $precio){
	echo "nombre: " . $nombre . " precio " . $precio;
	$query = 'INSERT INTO producto (nombre, precio) VALUES (\''.$nombre.'\', '.$precio.')';
	echo "consulta: " . $query;
	$conn = conectar();
	$result = $conn->query($query);
    desconectar($conn);
}


 ?>
