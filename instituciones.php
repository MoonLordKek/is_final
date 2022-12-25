<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('views/instituciones.view.php');
    }else{
        require('funciones.php');

        $result = ["resul"=>false];
		$lat = $_POST['lat'];
        $long = $_POST['long'];
        $handler = curl_init();

        $conexion = conexion();
        $statement = $conexion->prepare('SELECT * FROM instituciones LIMIT 10');
        $statement->execute();
        
        $z=1;
        $obj="{\n";
        while($resultado = $statement->fetch()){
            $obj = $obj.'"'.$z.'"'.":";
            $direccion = $resultado[4];
            curl_setopt($handler, CURLOPT_URL, "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat."%2C".$long."&destinations=".$direccion."&key=AIzaSyBKg1E6WSklgCXN2Oyqm9ahBeqSZ56IaMw");
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
            $obj = $obj.curl_exec($handler).",";
            $z++;
        } 
        $obj = $obj."}";
        //echo '"'.$z.'"'.":".'""'."}";
        echo substr_replace($obj,"",-2,-1);
    }
?>