<?php

require_once("con_bd.php");

session_start();

header("Content-Type: text/html;charset=utf-8");


$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

$con = mysqli_connect($servidor,$user,$pass,$bd) or die(mysqli_connect_error());

if (!$con) {
	die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
}

$instruccion = "select COUNT(*) AS usuarios from usuarios where usuario = '$usuario'";
$resultado = mysqli_query($con, $instruccion);

while ($fila = $resultado->fetch_assoc()) {
	$numero = $fila["usuarios"];
}

if ($numero == 0) {
	echo
		'<script type="text/javascript">
    		alert("El usuario no existe!");
    		window.location.href="index.html";
    	</script>';
} else {
	$instruccion = "select contra as usuarios from usuarios where usuario = '$usuario'";
	$resultado = mysqli_query($con, $instruccion);
	while ($fila = $resultado->fetch_array()) {
		$password2 = $fila["usuarios"];
	}

	if (!strcmp($password2, $contra) == 0) {

		echo
			'<script type="text/javascript">
    		alert("Contraseña incorrecta!");
    		window.location.href="index.html";
    	</script>';
	} else {
		$_SESSION["nick_logueado"] = $usuario;
		$logueado = 1;

		$instruccion = "select tipo as usuarios from usuarios where usuario = '$usuario'";
		$resultado = mysqli_query($con, $instruccion);

		while ($fila = $resultado->fetch_assoc()) {
			$tipo = $fila["usuarios"];
		}

		if ($tipo == "admin") {
			header('Location: home-admin.php');
		} else if ($tipo == "") {

			header('Location: home.php');
		}
	}
}
