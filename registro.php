<?php session_start();

    /*if(isset($_SESSION['usuario'])){
        header('Location: index.php');
    }*/

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = ["result"=>false];
        require 'funciones.php';

        if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2']) && isset($_POST['nom_usu']) && isset($_POST['bdate'])) {
            $email = filtrado($_POST['email']);
            $pass = filtrado($_POST['pass']);
            $pass2 = filtrado($_POST['pass2']);
            $nom_usu = filtrado($_POST['nom_usu']);
            $bdate = filtrado($_POST['bdate']);

            if(empty($email) or empty($pass) or empty($pass2) or empty($nom_usu) or empty($bdate)){
                $result["error"][0]="Es necesario que se llenen todos los campos.";
            }elseif (valEmail($email)) {

                $result["error"][1]="Formato de correo invalido. \n Intente: example@ejemplo.com";

            }else if(valPass($pass)){
                $result["error"][1]="Formato invalido de contraseña.\nLa contraseña debe tener al menos 6 carácteres, una mayúscula, una minúscula, un número y un símbolo especial.";
            }else{
                $conexion = conexion();
                if ($conexion) {
                    $statement = $conexion->prepare('SELECT * FROM usuario Where email = :email LIMIT 1');
                    $statement->execute(array(':email' => $email));
                    $resultado = $statement->fetch();
                } else {
                    $result["error"][2]="Error al conectar a la base de datos.";
                }
                if($resultado != false){
                    $result["error"][3]="El correo electrónico que ha ingresado ya está vinculado a una cuenta existente.";
                }
                    $pass = hash('sha512', $pass);
                    $pass2 = hash('sha512', $pass2);
                if($pass != $pass2){
                    $result["error"][4]="Las contraseñas no coinciden.";
                }
            } 
            $flag = false;
            if (isset($result["error"])) {
                $flag = true;
            }
            if($flag != true){
                $conexion = conexion();
                if ($conexion) {
                    $insert = 'INSERT INTO usuario (email, password, nombre,fecha_nacimiento) VALUES ("'.$email.'","'.$pass.'","'.$nom_usu.'","'.$bdate.'")';
                    //$statement = $conexion->prepare('INSERT INTO usuario (email, pass, nom_usu) VALUES (:email,:pass,:nom_usu)');
                    //if($statement->execute(array(':email' => $email,':pass' => $pass, ':nom_usu' => $nom_usu))===false){
                    if ($conexion->query($insert)!=false) {
                        $result["num"] = "cero";
                    }else{
                        $result["num"] = $insert;
                    }
                    $result["result"] = true;
                } else {
                    $result["error"][2]="Error al conectar a la base de datos.";
                }
            }
        }
        echo json_encode($result);
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        require "views/registro.view.php";
    }
    
?>