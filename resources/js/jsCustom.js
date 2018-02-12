
$(function(){
	//$('.tablaProd').append(tablaProductos());
	$.ajax({
		url: 'functiones.php',
		type: 'get',
		data: ''
	}).done(function(data){
		console.log(data);
	});
});

// function tablaProductos(){
// 	let retorno = '<table class="table table-striped table-bordered">';
// 	retorno+='<tr><th>Código</th><th>Nombre</th><th>Precio</th></tr>'; // columnas



// 	retorno+='</table>';
// 	return retorno;
// }