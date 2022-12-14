<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('views/pruebas.view.php');
    }else{
        require('funciones.php');

        $result = ["resul"=>false];
		$lat = $_POST['lat'];
        $long = $_POST['long'];
        $handler = curl_init();

        curl_setopt($handler, CURLOPT_URL, "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat."%2C".$long."&destinations=Mexico+57500&key=AIzaSyBKg1E6WSklgCXN2Oyqm9ahBeqSZ56IaMw");
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, false);
        curl_exec($handler);  
        
    }
?>