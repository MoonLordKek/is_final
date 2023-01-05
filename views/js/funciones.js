function iniciar_Ses(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	apdata = {email : email, pass: pass}
	$.ajax({
		url: "/is/iniciar_sesion.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			//var result = data;;
			console.log(result);
			if (result.result==true) {
				alert("Sesión iniciada con éxito.");
				window.location.href = "index.php";
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
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
	

function rec_con(){
	var info = ["ac","bc","cc"];
	$.ajax({
		url: "/is/pruebas.php",
		method:'POST',
		data: {data: info},
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
			// <i class='fa-solid fa-circle-check'></i>
			var tests = document.getElementById('tests');
			var html = '<table style="text-align: center"> ';
			var contador = 1, op4=1;
			for (let i = 0; i < Object.keys(result).length; i++) {
				//tipo de pregunta
				switch (result[i][2]){
					case "1":
						//console.log("i'm in case 1");
						html+="<tr><th widht='50'></th>";
						if(op4==1){
							op4=0;
							for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
								html+="<th>"+result[i][3][j].adicion+"</th>";	
							}
						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+=
								"<td><span class='spanQ"+(i+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][j][2]+"' hidden></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					case "2":
						//console.log("i'm in case 2");
						html+="<tr><th widht='50'>"+result[i][1]+"</th><th>Sí</th><th>No</th></tr>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							if(result[i][3][j][1]=="sustancia")
								html+="<tr>"+
								"<td>"+result[i][3][j][0]+"</td>"+
								"<td>"+
									"<span class='spanQ"+(j+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value=3 hidden>"+
								"</td><td>"+
									"<span class='spanQ"+(j+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value=3 hidden>"+
									"<input type='radio' name='question"+(contador)+"' value=0 hidden>"+
								"</td>";
						}
						
						html+="</tr>";
						break;
					case "3":
						//console.log("i'm in case 3");
						html+="<tr><th widht='50'>"+result[i][1]+"</th>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							if(result[i][3][j][1]=="frecuencia")
								html+="<th>"+result[i][3][j].adicion+"</th>";	
						}
						html+="</tr>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++,contador++) {
							if(result[i][3][j][1]=="sustancia"){
								html+="<tr><td>"+result[i][3][j].adicion+"</td>";
								for (let k = 0; k < 5; k++) {
									html+="<td>"+
									"<span class='spanQ"+(j+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][k][2]+"' hidden>"
									"<input type='radio' name='question"+(contador)+"' value='"+result[i][3][k][2]+"'></td>";	
									
								}
								html+="</tr>";
							}
						}
						html+="</tr>";
						break;
					case "4":
						//console.log("i'm in case 1");
						html+="<tr><th widht='50'></th>";
						if (op4==1){
							op4 = 0;
							for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
								html+="<th>"+result[i][3][j].adicion+"</th>";	
							}
						}else{

						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+="<td>"+
							"<span class='spanQ"+(i+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
							"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
							"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][j][2]+"' hidden>"
							"<input type='radio' name='question"+(contador)+"' value="+result[i][3][j][2]+"></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					default:
						//console.log("i'm in default case "+ result[i][2]);
						break;
				}
				html+="</tr>";
				console.log("pregunta: "+result[i][2]);
			}
			document.getElementById("noPreguntas").value = result.length;
			html+="</table><div class='opciones' style='padding: 5%'><button onclick='evaluar()'>kekw</button></div>";
			//console.log(html);
			tests.innerHTML=html;
		}
	});
}

function buttonChecked(disButton){
	console.log(disButton);
	console.log(document.getElementsByClassName(disButton.className));
	var spans = Array.from(document.getElementsByClassName(disButton.className));
	spans.forEach(element => {	
		element.innerHTML="<i class='fa-regular fa-circle radioQ1'></i>";
	});
	var id = 'ipQ'+(disButton.id.substring(5));
	console.log(id);
	document.getElementById(id).checked=true;
	disButton.innerHTML= "<i class='fa-solid fa-circle-check'></i>";
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

function evaluar(){
	var noElementos = document.getElementById('noPreguntas').value;
	var total = 0;
	console.log("noEl: "+document.getElementById('idCuestionario').value);
	for (let i = 1; i <= noElementos; i++) {
		if(document.querySelector('input[name="question'+i+'"]:checked')==null){
			alert("Por favor conteste todas las preguntas");
			break;
		}else{	
			console.log(document.querySelector('input[name="question'+i+'"]:checked'));	
			total += parseInt(document.querySelector('input[name="question'+i+'"]:checked').value);
			console.log(total);
			//adaptar forma de obtener el número de elementos
			var apdata={id: document.getElementById('idCuestionario').value,
						resultados: total};
			$.ajax({
				url: "/is/evaluacion.php",
				method:'POST',
				data: apdata,
				success: function(data) {
					console.log(data);
					var result = JSON.parse(data);
					if(result!=undefined)
						document.getElementById('mensaje').innerHTML=result;
				}
			});
		}
	}
}

function evaluar2(){
	var noElementos = document.getElementById('noPreguntas').value;
	var total = 0;
	console.log("noEl: "+document.getElementById('idCuestionario').value);
	for (let i = 1; i <= noElementos; i++) {
		if(document.querySelector('input[name="question'+i+'"]:checked')==null){
			alert("Por favor conteste todas las preguntas");
			break;
		}else{	
			console.log(document.querySelector('input[name="question'+i+'"]:checked'));	
			total += parseInt(document.querySelector('input[name="question'+i+'"]:checked').value);
			console.log(total);
			//adaptar forma de obtener el número de elementos
			var apdata={id: document.getElementById('idCuestionario').value,
						resultados: total};
			$.ajax({
				url: "/is/evaluacion.php",
				method:'POST',
				data: apdata,
				success: function(data) {
					console.log(data);
					var result = JSON.parse(data);
					if(result!=undefined)
						document.getElementById('mensaje').innerHTML=result;
				}
			});
		}
	}
}