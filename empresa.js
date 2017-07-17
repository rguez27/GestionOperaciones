$('#ajax').submit(function(event){

	var data = $('form#ajax').serialize();
	console.log(data);
		event.preventDefault();

	$.ajax({
		url:"/Empresas",
		type:'POST',
		dataType:'json',
		data:data,

	success:function(){
		$("msj-ok").fadeIn();
		}

	});
});

$(document).ready(function(){
	var tablaDatos = $("#datos");
	var route = "/Empresas/show";
	var token =$("#token").val();

	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'GET',
		dataType: 'json',
		success: function(data){
			console.log(data.length);
			var datos = "";

			for(var i=0; i<data.length;i++){
				console.log(data[i].telefono);
				datos+=
				 "<tr><td>"+data[i].nombreEmpresa+"</td><td>"+
				 data[i].direccion+"</td><td>"+data[i].telefono+
				 "</td><td>"+data[i].inscripcion+
				 "</td><td><button class='btn btn-raised btn-warning'><span class='glyphicon glyphicon-edit'></span>Editar</button>&nbsp&nbsp<button class='btn btn-raised btn-danger'><span class='glyphicon glyphicon-trash'></span>Eliminar</button></td></tr>"
			}
			tablaDatos.append(datos);
		}
		
	});
});