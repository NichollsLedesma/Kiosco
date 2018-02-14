$(function(){
	// $('#productos').val();
	// console.log($('#productos').val());
});
// $(function(){
// 	//$('.tablaProd').append(tablaProductos());
// 	$.ajax({
// 		url: 'functiones.php',
// 		type: 'get',
// 		data: ''
// 	}).done(function(data){
// 		console.log(data);
// 	});
// });

// function tablaProductos(){
// 	let retorno = '<table class="table table-striped table-bordered">';
// 	retorno+='<tr><th>Código</th><th>Nombre</th><th>Precio</th></tr>'; // columnas



// 	retorno+='</table>';
// 	return retorno;
// }

function modificar(id){
	//alert(id);
	$.ajax({
		url: 'ajax.php',
		type: 'POST',
		data: {idProd: id}
	}).done(function(data){
		console.log(data);
	});
}
