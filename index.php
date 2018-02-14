<?php include('functiones.php'); $productos = listadoProductos(); ?>

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
<h1 class="text-center"><a href="index.php">Kiosco</a></h1><hr>

<div class="container">
	<h3>Listado de productos</h3><hr>

	<!-- Cabecera -->
	<div class="row">
		<div class="col-md-2">Código</div>
		<div class="col-md-5">Nombre</div>
		<div class="col-md-3">Precio</div>
		<div class="col-md-2"><button class="btn btn-default" data-toggle="modal" data-target="#addProd">Nuevo Producto</button></div>
	</div>
	<!-- Listtado -->
	<?php foreach ($productos as $prod) {?>
		<hr>
		<div class="row">
			<div class="col-md-2 idProd" id="<?=$prod['id']; ?>"><?=$prod['id']; ?></div>
			<div class="col-md-5"><?=$prod['nombre']; ?></div>
			<div class="col-md-3"><?=$prod['precio']; ?></div>
			<div class="col-md-2"><button class="btn btn-default" data-toggle="modal" data-target="#modifProd">Modificar</button></div>
			
			
		</div>	
	<?php } ?>
	
	
</div><!-- fin container -->

<!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div id="addProd" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
				<h4 class="modal-title">Nuevo Producto</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="add.php" >
					<label>Nombre: </label><input id="nombre" name="nombre"  placeholder='Nombre del producto...'>
					<label>Precio: </label><input id="precio" name="precio" type="number" step='0.01' placeholder='0.00'>
					<button type="submit" class="btn btn-default">Guardar</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>

	</div>
</div>
<div id="modifProd" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
				<h4 class="modal-title">Modificar Producto</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="modif.php" >

					<label>Nombre: </label><input id="nombre" name="nombre"  placeholder='Nombre del producto...'>
					<label>Precio: </label><input id="precio" name="precio" type="number" step='0.01' placeholder='0.00'>
					<button type="submit" class="btn btn-default">Guardar</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>

	</div>
</div>
</body>
</html>

