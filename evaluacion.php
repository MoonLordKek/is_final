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
    }else{
       require('views/evaluacion.php');
    }
?>