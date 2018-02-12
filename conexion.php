<?php



function conectar(){
	$usuario = 'root';
	$pass = '';
	$db = 'Kiosco';
	$server = 'localhost';
	try {
	    return (new PDO('mysql:host='.$server.';dbname='.$db, $usuario, $pass));
	} catch (PDOException $e) {
	    print "¡Error al conectar!: " . $e->getMessage() . "<br/>";
	    return null;
	}	
}
function desconectar($conn){
	$conn = null;
}

?>