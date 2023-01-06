<?php session_start();
	require('funciones.php');
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['id'];
		$conexion = conexion();
		$statement = $conexion->prepare('SELECT * FROM tecnicas_usuario WHERE id_tecnica=:id AND email=:email');
		$statement->execute(array(':email'=>$_SESSION['email'],':id'=>$id));
		if(!$statement->fetch()){
			$statement = $conexion->prepare('INSERT (email,id_tecnica,estado) INTO tecnicas_usuario VALUES (:email, :id,1)');
			if($statement->execute(array(':email'=>$_SESSION['email'],':id'=>$id))){
				$result["result"]=true;
			}else{
				$result["error"][0]="Error al ejecutar la query";
			}
			echo $result;
		}else{
			$result["error"][1]="Técnica ya registrada";
		}
	}else{
		require('views/yomecuido.php');
	}
?>