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
	var lat;
	var longi;
	$(document).ready(function(){
		$("#pedirvan").click(function(){
			if(!!navigator.geolocation){
				navigator.geolocation.getCurrentPosition(
					function(position){
						window.alert("nav permitido");
						lat = position.coords.latitude;
						longi = position.coords.longitude;
						console.log(position.coords.latitude);
						console.log(position.coords.longitude);
						getdist(lat,longi)
					},
					function(){
						window.alert("No permitir la localización no mostrará las instituciones de acuerdo a tu localización");
					}
				)
			}
		});
	});
}
function getdist(lat,long){
	apdata = {lat : lat, long: long}
	$.ajax({
		url: "/is/instituciones.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			var result = data;
			console.log(data);
			var result = JSON.parse(data);
			var i=1;
			var distancias=[];
			while(result[i]!=undefined){
				distancias.push(result[i].rows[0].elements[0].distance.value);
				console.log(result[i++]);
			}
			console.log(distancias);
			distancias.sort();
			console.log(distancias);
			var html="",distancia1;
			for(var j =0; j<3;j++){
				console.log("while grande\n");
				i = 1;
				while(i<=3){
					distancia1=result[i].rows[0].elements[0].distance.value;
					if(distancias[j]==distancia1){
						//datos html será la estructura html para mostrar las instituciones, deberá cambiar dinámicamente
						html += "datos html "+distancia1+"\n";
						i=4;
					}else{
						i++;
					}
				}
			}
			console.log(html);
			//console.log(result["1"].rows[0].elements[0].distance.text);
		}
	});
}

function pruebas(){
	var id = document.getElementById("idCuestionario").value;
	apdata = {id: id};
	$.ajax({
		url: "/is/pruebas.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			//console.log(data);
			var result = JSON.parse(data);
			console.log(result);
			
			var tests = document.getElementById('tests');
			var html = "<table>";
			var contador = 1;
			for (let i = 0; i < Object.keys(result).length; i++) {
				//tipo de pregunta
				switch (result[i][2]){
					case "1":
						console.log("i'm in case 1");
						html+="<tr><th></th>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							html+="<th>"+result[i][3][j].adicion+"</th>";	
						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+="<td><input type='radio' name='question"+(contador)+"'></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					case "2":
						console.log("i'm in case 2");
						html+="<tr><th>"+result[i][1]+"</th><th>Sí</th><th>No</th></tr>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							if(result[i][3][j][1]=="sustancia")
								html+="<tr><td>"+result[i][3][j][0]+"</td><td><input type='radio' name='question"+(contador)+"'></td><td><input type='radio' name='question"+(contador)+"'></td>";
						}
						
						html+="</tr>";
						break;
					case "3":
						console.log("i'm in case 3");
						html+="<tr><th>"+result[i][1]+"</th>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							if(result[i][3][j][1]=="frecuencia")
								html+="<th>"+result[i][3][j].adicion+"</th>";	
						}
						html+="</tr>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							if(result[i][3][j][1]=="sustancia"){
								html+="<tr><td>"+result[i][3][j].adicion+"</td>";
								for (let k = 0; k < 5; k++) {
									html+="<td><input type='radio' name='question"+(contador)+"' value='"+result[i][3][k][2]+"'></td>";	
									console.log(result[i][3][k]);
								}
								html+="</tr>";
							}
						}
						html+="</tr>";
						break;
					case "4":
						console.log("i'm in case 1");
						html+="<tr><th></th>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							html+="<th>"+result[i][3][j].adicion+"</th>";	
						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+="<td><input type='radio' name='question"+(contador)+"'></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
						break;
					default:
						console.log("i'm in default case "+ result[i][2]);
						break;
				}
				html+="</tr>";
				console.log("pregunta: "+result[i][2]);
			}
			html+="</table>";
			//console.log(html);
			tests.innerHTML=html;
		}
	});
}

function getInfo(){
	var apdata = {id : 9};
	$.ajax({
		url: "/is/informacion.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			var video = document.getElementById("video");
			var imgs = document.getElementById("imgs");
			
			video.innerHTML = '<iframe width="900" height="500" src="'+result[0]+'" title="Celeste Chapter 8 All Strawberries, Crystal Heart & B-Side Unlock Tape 100% Gameplay Walkthrough" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			result[2].forEach(element => {
				console.log(element);
				imgs.innerHTML+="<br><img src='"+element.ruta_imagen+"'>";
			});
		}
	});
}
function getTecnica(){
	var apdata = {id : 9};
	$.ajax({
		url: "/is/tecnicas.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			var video = document.getElementById("video");
			var imgs = document.getElementById("imgs");
			
			video.innerHTML = '<iframe width="900" height="500" src="'+result[0]+'" title="Celeste Chapter 8 All Strawberries, Crystal Heart & B-Side Unlock Tape 100% Gameplay Walkthrough" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			result[2].forEach(element => {
				console.log(element);
				imgs.innerHTML+="<br><img src='"+element.ruta_imagen+"'>";
			});
		}
	});
}