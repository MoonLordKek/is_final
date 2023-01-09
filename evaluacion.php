<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        require('funciones.php');
        $id = $_POST['id'];
        $respuestas = $_POST['resultados'];
        if(is_array($_POST['resultados']))
            $total = array_sum($respuestas);
        else
            $total = $respuestas;
        $conexion = conexion();
        $statement = $conexion->prepare("SELECT valor_escala,resultado FROM escalas_cuestionario WHERE id_cuestionario=:id_cuestionario ORDER BY valor_escala ASC");
        $statement->execute(array(':id_cuestionario'=>$id));
        while($resultado = $statement->fetch()){
            if($total<=$resultado[0]){
                $respuesta = $resultado[1];
                break;
            }
        }
        echo json_encode($respuesta);
        if(isset($_SESSION['email'])){
            $conexion = conexion();
            $statement = $conexion->prepare('SELECT * FROM resultados_cuestionarios WHERE id_cuestionario=:id_cuestionario AND email=:email');
            $statement->execute(array(':id_cuestionario'=>$id,':email'=>$_SESSION['email']));
            if(!$statement->fetch()){
                $statement = $conexion->prepare('INSERT INTO resultados_cuestionarios (email,id_cuestionario,resultados,diagnostico) VALUES (:email,:id,:resultados,:diagnostico)');
                $statement->execute(array(':email'=>$_SESSION['email'],':id'=>$id,':resultados'=>$total,':diagnostico'=>$respuesta));
            }else{
                $statement = $conexion->prepare('UPDATE resultados_cuestionarios SET resultados=:resultados, diagnostico=:diagnostico WHERE  email=:email AND id_cuestionario=:id');
                $statement->execute(array(':email'=>$_SESSION['email'],':id'=>$id,':resultados'=>$total,':diagnostico'=>$respuesta));
            }
        }
    }else{
       require('views/evaluacion.php');
    }
?>