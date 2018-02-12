<?php 
include('functiones.php');
$productos = listadoProductos();
// $result = listadoProductos();
// foreach($result as $row) {
// 	echo $row['id'].' nombre: '.$row['nombre'].' precio: '.$row['precio']. ' --- ' ; 
// }

 ?>

<!DOCTYPE html>
<html>
<head>

	<title>Kiosco</title>
	
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">

	<script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="resources/js/jsCustom.js"></script>


</head>
<body>
<h1 class="text-center">Kiosco</h1>

<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Listado</a></li>
		<li><a data-toggle="tab" href="#addProd">Agregar Producto</a></li>
		
	</ul>	

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<h3>Listado de productos</h3>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					
					<tr><th>Código</th><th>Nombre</th><th>Precio</th><th></th></tr>
					<?php foreach ($productos as $prod) {?>
						<tr>
							<td><?= $prod['id']; ?></td>
							<td><?= $prod['nombre']; ?></td>
							<td><?= $prod['precio']; ?></td>
							<td><button class="btnModif">Modificar</button></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			
		</div>
		<div id="addProd" class="tab-pane fade">
			<h3>Agregar</h3>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>

	</div>
</div><!-- fin container -->



</body>
</html>