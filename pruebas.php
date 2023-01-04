<?php session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require('funciones.php');
        require('views/pruebas.view.php');
    }else{
        require('funciones.php');
        $preguntas = array();
        $adiciones = array();
        
        $conexion = conexion();
        $statement = $conexion->prepare('SELECT pregunta.id_pregunta, pregunta.pregunta,cuestionario_pregunta.tipo_pregunta FROM pregunta 
            JOIN cuestionario_pregunta ON pregunta.id_pregunta = cuestionario_pregunta.id_pregunta
            JOIN cuestionarios ON cuestionarios.id_cuestionario = cuestionario_pregunta.id_cuestionario 
            WHERE cuestionarios.id_cuestionario= :id_cuestionario');//se puede dar el nombre o el id del cuestionario, cambiar WHERE según sea el caso
        $statement->execute(array(':id_cuestionario'=>$_POST['id']));
        
        while($resultados = $statement->fetch()){
            $conexion2 = conexion();
            $statement2 = $conexion2->prepare('SELECT adicion, adiciones.tipo, adiciones.valor FROM adiciones 
                JOIN cr_adicion ON adiciones.id_adicion = cr_adicion.id_adicion
                JOIN cuestionario_pregunta ON cuestionario_pregunta.id_cp=cr_adicion.id_cr
                WHERE cuestionario_pregunta.id_pregunta=:id_pregunta');
            $statement2->execute(array(':id_pregunta'=>$resultados[0]));
            $resulta2 = $statement2->fetchAll();
            array_push($resultados,$resulta2);
            array_push($preguntas,$resultados);
        }
        echo json_encode($preguntas);
    }
?>