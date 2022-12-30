<?php session_start();
	if($_SERVER['REQUEST_METHOD']=="GET")
		require('views/informacion.view.php');
	else{
		require('funciones.php');
		$respuesta = array();

		$conexion = conexion();
		$statement = $conexion->prepare('SELECT urlvideo,urlarticulo FROM temas WHERE id_tema=:id_tema');
		$statement->execute(array(':id_tema'=>$_POST['id']));
		$respuesta = $statement->fetch();
		$conexion=null;

		$conexion = conexion();
		$statement = $conexion->prepare('SELECT ruta_imagen FROM temas_imagenes WHERE id_tema=:id_tema');
		$statement->execute(array(':id_tema'=>$_POST['id']));
		array_push($respuesta,$statement->fetchAll());

		echo json_encode($respuesta);
	}
?>