<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('views/instituciones.view.php');
    }else{
        require('funciones.php');
    }
?>