$('#ajax').submit(function(event){

	var data = $('form#ajax').serialize();
	console.log(data);
		event.preventDefault();

	$.ajax({
		url:"/Empleados",
		type:'POST',
		dataType:'json',
		data:data,

	success:function(){
		$("msj-ok").fadeIn();
		}

	});
});