<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('views/pruebas.view.php');
    }else{
        echo $_POST["data"];
    }
?>