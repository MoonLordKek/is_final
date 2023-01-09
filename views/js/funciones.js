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
	var nom_usu = document.getElementById("nombre").value;
	var pass_2 = document.getElementById("pass2").value;
	var bdate = document.getElementById("bdate").value;
	apdata = {email : email, pass: pass, pass2 : pass_2, nom_usu: nom_usu, bdate: bdate}
	console.log(apdata);
	$.ajax({
		url: "/is/registro.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			console.log(result);
			if (result.result==true) {
				alert("El usuario se ha registrado exitosamente.");
				window.location.href = "iniciar_sesion.php";
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
			var html = '<table style="text-align: center" class="tabla"> ';
			var contador = 1, op4=1,flag=1;
			for (let i = 0; i < Object.keys(result).length; i++) {
				//tipo de pregunta
				switch (result[i][2]){
					case "1":
						console.log("i'm in case 1");
						html+="<tr id='q"+(i)+"'><th widht='50'></th>";
						if(op4==1){
							op4=0;
							for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
								html+="<th>"+result[i][3][j].adicion+"</th>";	
							}
						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+=
								"<td><a href='#q"+(i)+"'><span class='spanQ"+(i+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span></a>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][j][2]+"' hidden></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					case "2":
						console.log("i'm in case 2");
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
						flag=0;
						console.log("i'm in case 3");
						html+="<tr id='q"+(i)+"'><th widht='50'>"+result[i][1]+"</th>";
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
									"<span class='spanQ"+(i+1)+(j-4)+"' id='spanQ"+(i+1)+(j-4)+(k+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span>"+
									"<input id='ipQ"+(i+1)+(j-4)+(k+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][k][2]+"' hidden>"
									"<input type='radio' name='question"+(contador)+"' value='"+result[i][3][k][2]+"'></td>";	
									
								}
								html+="</tr>";
							}
						}
						html+="</tr>";
						break;
					case "4":
						console.log("i'm in case 4");
						html+="<tr id='q"+(i)+"'><th widht='50'></th>";
						if (op4==1){
							op4 = 0;
							for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
								html+="<th>"+result[i][3][j].adicion+"</th>";	
							}
						}else{

						}
						html+="</tr><tr><td>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+="<td><a href='#q"+(i)+"'>"+
							"<span class='spanQ"+(i+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
							"<i class='fa-regular fa-circle radioQ1' ></i></span></a>"+
							"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][j][2]+"' hidden>"
							"<input type='radio' name='question"+(contador)+"' value="+result[i][3][j][2]+"></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					default:
						console.log("i'm in case 3");
						html+="<tr id='q"+(i)+"'><th widht='50'>"+(i+1)+"</th>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							if(result[i][3][j][1]=="intensidad") 
								html+="<th>"+result[i][3][j].adicion+"</th>";	
						}
						html+="</tr><tr><td class='pregunta'>"+result[i][1]+"</td>";
						for (let j = 0; j < Object.keys(result[i][3]).length; j++) {
							html+=
								"<td><a href='#q"+(i)+"'><span class='spanQ"+(i+1)+"' id='spanQ"+(i+1)+(j+1)+"' onclick='buttonChecked(this)'>"+
									"<i class='fa-regular fa-circle radioQ1' ></i></span></a>"+
									"<input id='ipQ"+(i+1)+(j+1)+"' type='radio' name='question"+(contador)+"' value='"+result[i][3][j][2]+"' hidden></td>";	
						}
						(contador++);
						html+="</tr>";
						break;
					
				}
				html+="</tr>";
				console.log("pregunta: "+result[i][2]);
			}
			document.getElementById("noPreguntas").value = result.length;
			if(flag ==1)
				html+="</table><div class='opciones' style='padding: 5%'><button onclick='evaluar()'>Enviar</button></div><div id='mensaje' class='contenedor texto'></div>";
			else
				html+="</table><div class='opciones' style='padding: 5%'><button onclick='evaluar2()'>Enviar</button></div><div id='mensaje' class='contenedor texto'></div>";
			console.log(html);
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
	var total = 0, flag=1;
	console.log("noEl: "+document.getElementById('idCuestionario').value);
	for (let i = 1; i <= noElementos; i++) {
		if(document.querySelector('input[name="question'+i+'"]:checked')==null){
			alert("Por favor conteste todas las preguntas");
			flag=0;
			break;
		}else{	
			console.log(document.querySelector('input[name="question'+i+'"]:checked'));	
			total += parseInt(document.querySelector('input[name="question'+i+'"]:checked').value);
			console.log(total);
			//adaptar forma de obtener el número de elementos
			
		}
	}
	var apdata={id: document.getElementById('idCuestionario').value,
						resultados: total, tipo: 1};
		if(flag==1){
			$.ajax({
				url: "/is/evaluacion.php",
				method:'POST',
				data: apdata,
				success: function(data) {
					console.log(data);
					var diag = JSON.parse(data)
					console.log(diag);
					
					var result = "<h1>El resultado del test es: </h1><br>"+
						"<h2>"+JSON.parse(data)+"</h2>";
					if(diag=="Extremadamente severo" || diag=="Severo" || diag=="Severa"){
						result+="<p>Los resultados de test anterior son preocupantes, por lo que recomendamos que veas a un especialista para poder tratar los problemas que puedas tener</p>"+
							"<p>Puedes dar click en el siguiente botón que te mostrará algunas instituciones que podrían ayudarte</p>"+
							"<a href='./instituciones.php'><button class=''>Instituciones</button></a>";
					}
					if(result!=undefined)
						document.getElementById('mensaje').innerHTML=result;
				}
			});
		}
}

function evaluar2(){
	var noElementos = document.getElementById('noPreguntas').value;
	var texto;
	var arreglo_resultados=[];
	console.log("noEl: "+document.getElementById('idCuestionario').value);
	for (let i = 1; i <= noElementos; i++) {
		for (let j = 1; j < 11; j++) {
			if(i==1)
				texto = 'input[name="question'+(i)+'"]:checked'
			else
				texto = 'input[name="question'+(i)+(j)+'"]:checked'	
			console.log(texto);
			if(document.querySelector(texto)==null){
				alert("Por favor conteste todas las preguntas "+i);
				break;
			}else{	
				if(i!=1){
					//console.log(document.querySelector('input[name="question'+(i)+(j)+'"]:checked'));	
					arreglo_resultados[j-1] += parseInt(document.querySelector('input[name="question'+(i)+(j)+'"]:checked').value);
				}else{
					//console.log(document.querySelector('input[name="question'+(i)+'"]:checked'));	
					arreglo_resultados[j-1] += parseInt(document.querySelector('input[name="question'+(i)+'"]:checked').value);
				}
			}
		}		
	}
	var apdata={id: document.getElementById('idCuestionario').value, resultados: arreglo_resultados, tipo: 2};
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

function addTecUsu(element){
	var apdata = {id: element.id}
	console.log(apdata);
	$.ajax({
		url: "/is/yomecuido.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			console.log(result)
			if(result["error"]!=undefined){
				alert(result["error"][1]);
				element.disabled;
			}else{
				alert("Técnica registrada");
				element.disabled;
			}
			$(element).hide();
		}
	});
}