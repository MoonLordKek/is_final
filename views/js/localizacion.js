var lat;
var longi;	
var distancias=[];

$(document).ready(function(){
    if(!!navigator.geolocation){
        navigator.geolocation.getCurrentPosition(
            function(position){
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

function getdist(lat,long){
	apdata = {lat : lat, long: long, opcion: 1}
	$.ajax({
		url: "/is/instituciones.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			var result = data;
			console.log(data);
			var result = JSON.parse(data);
			var i=1;
            var obj ={};
			while(result[i]!=undefined){
                obj = {dist:result[i].rows[0].elements[0].distance.value, it: (i-1), km: result[i].rows[0].elements[0].distance.text};
				distancias.push(obj);
				console.log(distancias);
                i++;
			}
			distancias.sort((a,b)=>{
                if(a.dist<b.dist)
                    return -1;
                if(b.dist<a.dist)
                    return 1;
                return 0;
            });
            console.log(distancias);
		}
	});
    apdata = {opcion:2};
    $.ajax({
		url: "/is/instituciones.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			
			var result = JSON.parse(data);
            console.log(result);
			console.log(distancias);
			var html="";
			distancias.forEach(element=>{
                html += "<div class='institucion contenedor'>"+
                            "<div class='imagen'>"+
                                "<img src='"+result[element.it][5]+"' alt='institucion' style='width: 30rem;'>"+
                            "</div>"+
                            "<div class='texto'>"+
                                "<h1>"+result[element.it][1]+"</h1>"+
                                "<p>"+result[element.it][2]+", "+result[element.it][3]+"</p>"+
                                "<p>Distancia: "+element.km+"</p>"+
                            "</div>"+
                        "</div>";
            });
            
			console.log(html);
			document.getElementById('instituciones').innerHTML = html;
		}
	});
}