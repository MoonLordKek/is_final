function iniciar_Ses(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	apdata = {email : email, pass: pass}
	$.ajax({
		url: "/IS/IS.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var result = JSON.parse(data);
			//var result = data;;
			console.log(data);
			if (result.resul==true) {
				//alert("Sesión iniciada con éxito.");
				window.location.href = "cuenta_user.php";
			}else if(result.errores!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else{
				//alert("Por favor rellena todos los campos");
			}
		}
	});
}

function addUsu(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var nom_usu = document.getElementById("nom_usu").value;
	var pass_2 = document.getElementById("pass2").value;
	apdata = {email : email, pass: pass, pass2 : pass_2, nom_usu: nom_usu}
	console.log(apdata);
	$.ajax({
		url: "/is/registro.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var result = JSON.parse(data);
			var resul = data;
				console.log(data);
			if (result.resul==true) {
				alert("El usuario se ha registrado exitosamente.");
				window.location.href = "IS.php";
				//header("index.php");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}
		}
	});
}

function rec_Con(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var pass_2 = document.getElementById("pass2").value;

	apdata = {email : email, pass: pass, pass2 : pass_2}
	$.ajax({
		url: "/is/olvidar_c_nueva.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			var result = data;
			var result = JSON.parse(data);
			console.log(data);
			if (result.resul==true) {
				alert("Recuperación de contraseña exitoso.");
				//header("index.php");
				window.location.href = "IS.php";
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}else{
				alert("Es necesario que se llenen todos los campos.");
			}
		}
	});
}

function localizacion(){
	
}