<?php

function conectar(){
	$usuario = 'root';
	$pass = '';
	$db = 'Kiosco';
	$server = 'localhost';
	try {
	    return (new PDO('mysql:host='.$server.';dbname='.$db, $usuario, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") ));
	} catch (PDOException $e) {
	    print "¡Error al conectar!: " . $e->getMessage() . "<br/>";
	    return null;
	}	
}
function desconectar($conn){$conn = null;}

function execQuery($query){
	$conn = conectar();
    $result = $conn->query($query);
	desconectar($conn);
	return $result;
}

?>