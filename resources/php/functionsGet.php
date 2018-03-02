<?php
include('conexion.php');

switch($_GET['command']) {
    case 'listadoProd':
        listadoProductos();
        break;
    case 'listadoCategoria':
        listadoCategorias();
        break;
    default:
        return;
 }

function listadoProductos(){
    $enJson = [];

    $query = 'SELECT p.id, p.nombre, p.precio, p.idCategoria, c.descripcion FROM producto p INNER JOIN categoria c on c.id = p.idCategoria ORDER BY p.nombre;';
    foreach (execQuery($query) as $row){
        $cat = new Categoria();
        $prod = new Producto();

        $cat->id = $row['idCategoria'];
        $cat->descripcion = $row['descripcion'];

        $prod->id = $row['id']; 
        $prod->nombre = $row['nombre']; 
        $prod->precio = $row['precio']; 
        $prod->categoria = $cat;
        
        $enJson[] = $prod;
    }
    echo json_encode($enJson);
    

}

function listadoCategorias(){
    $enJson = []; 
    foreach (execQuery('SELECT * FROM Categoria') as $row){
        $cat = new Categoria();

        $cat->id = $row['id'];
        $cat->descripcion = $row['descripcion'];

        $enJson[] = $cat;
    }
    echo json_encode($enJson);

    
}

class Categoria{var $id;var $descripcion;function __construct(){}}
class Producto{var $id;var $nombre;var $precio;var $categoria;function __construct(){}}
?>