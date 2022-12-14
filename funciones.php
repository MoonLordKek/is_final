<?php 

  function conexion(){
    try {
      $conexion = new PDO('mysql:host=127.0.0.1;port=3306;dbname=curarte','root','230302');
      return $conexion;
    } catch (PDOException $e) {
      return false;
    }
  }

  function filtrado($datos){
      $datos = trim($datos); // Elimina espacios antes y después de los datos
      $datos = stripslashes($datos); // Elimina backslashes \
      $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
      return $datos;
  }

  function valPass($datos){
    return !preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-\.]).{6,}$/", $datos);
  }

  function valEmail($datos){
    return !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9]+)+(\.)[a-zA-Z]{2,}$/",$datos);
  }
  
  //AIzaSyBKg1E6WSklgCXN2Oyqm9ahBeqSZ56IaMw
  //codigo para usar la api de gugul maps
?>