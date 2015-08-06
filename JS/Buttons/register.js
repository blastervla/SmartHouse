$(document).ready(function (){

	$("#btnRegister").click(function (){
		
		if($("#txtName").val() != "")
		{
			$.ajax({
				url: '../PHP/register.php',
				type: 'post',
				async: 'true',
				data: 'mail=' + $("#txtMail").val() + '&pass=' + $("#txtPass").val() + '&name=' + $("#txtName").val() + '&surname=' + $("#txtSurname").val(),
				success: function(result){
					alert("Enviado " + result);
				},
				error: function(result){
					alert("Hubo un error ameho")
				}
			});
		}
		else
		{
			
		}
	});


});