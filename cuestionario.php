<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('funciones.php');
        require('views/cuestionario.view.php');
    }else{
        require('funciones.php');
        $id_cuest = $_POST['id_cuestionario'];
    }
?>