<?php session_start();
    require('funciones.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['email']) && isset($_POST['pass'])) {
            require 'funciones.php';
            $result = ["result"=>false];
            $email = filtrado($_POST['email']);
            $pass = $_POST['pass'];
            $pass = hash('sha512',$pass);
            $errores = '';
            //debería funcionar para validar emails
            /*if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9]+)+(\.)[a-zA-Z]{2,}$/",$email){
            }*/
            if(($email=="") or $pass==""){
                $result["error"][0]="Es necesario que se llenen todos los campos.";
            }
            if (!isset($result["error"])) {
                $conexion = conexion();
                if ($conexion) {
                    $statement = $conexion->prepare('SELECT * FROM usuario WHERE email = :email');
                    $statement->execute(array(':email' => $email));
                    $resultado = $statement->fetch();
                    if($resultado != false){
                        if ($resultado[2]!=$pass) {
                            $result['error'][1]="La contraseña ingresada es incorrecta.";
                        }else{
                            $_SESSION['email'] = $email;
                            $_SESSION['usuario'] = $resultado[2];
                            $result['result']=true;
                        }
                        //header('Location: index.php');
                    }else{
                        $result["error"][1]= "Correo electrónico no encontrado.";
                    }

                }else {
                    $result["error"][2]= "Error desconocido";
                }

            }else{
                $result["error"][0]= "Es necesario que se llenen todos los campos.";
            }
        }
        echo json_encode($result);
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        require 'views/iniciar_sesion.view.php';
    }
    
?>