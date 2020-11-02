<?php

session_start();

	//Parámetros de conexión
	$server="localhost";
	$user="root";
	$pass="usbw";
	$bd="test";
	//realizamos la conexión
	$con = mysqli_connect($server, $user, $pass, $bd);

	$logueado = 0;

	header("Content-Type: text/html;charset=utf-8");


	$usuario = $_GET["usuario"];
	$contra = $_GET["contra"];

	if (!$con) {
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}

	$instruccion = "select COUNT(usuario) AS usuarios from clientes where usuario = '$usuario'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["usuarios"];
	}

	if($numero==0){
		echo
		'<script type="text/javascript">
    		alert("El usuario no existe!");
    		window.location.href="index.html";
    	</script>';
	}else {
		$instruccion = "select pass as usuarios from clientes where usuario = '$usuario'";
		$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
			$password2=$fila["usuarios"];
		}
	
		if (!strcmp($password2 , $contra) == 0){
				
		echo
		'<script type="text/javascript">
    		alert("Contraseña incorrecta!");
    		window.location.href="index.html";
    	</script>';
		}else {
			$_SESSION["nick_logueado"]=$usuario;
			$logueado=1;

			$instruccion = "select tipo as usuarios from clientes where usuario = '$usuario'";
			$resultado = mysqli_query($con, $instruccion);

			while ($fila = $resultado->fetch_assoc()) {
				$tipo=$fila["usuarios"];
            }
            
			if($tipo="admin") {
				header('Location: consultar-tabla.html');
			}else{
				header('Location: home.html');
			}
		}
	}

?>