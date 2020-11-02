<?php

session_start();

	//Parámetros de conexión
	$server="localhost";
	$user="root";
	$pass="usbw";
	$bd="test";
	//realizamos la conexión
	$con=mysqli_connect($server,$user,$pass,$bd);

	$logueado=0;

	header("Content-Type: text/html;charset=utf-8");


	$usuario = $_GET["usuario"];
	$contra = $_GET["contra"];
	$con = mysqli_connect($server, $user, $pass, $bd);

	if (!$con) {
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}

	$instruccion = "select COUNT(nombre) AS usuarios from usuarios where nombre = '$usuario'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["usuarios"];
	}

	if($numero==0){
		echo
		'<script type="text/javascript">
    		alert("El usuario no existe!");
    		window.location.href="../index.php";
    	</script>';
	}else {
		$instruccion = "select contrasena as usuarios from usuarios where nombre = '$nick'";
		$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
			$password2=$fila["usuarios"];
		}
	
		if (!strcmp($password2 , $password) == 0){
				
		echo
		'<script type="text/javascript">
    		alert("Contraseña incorrecta!");
    		window.location.href="../index.php";
    	</script>';
		}else {
			$_SESSION["nick_logueado"]=$nick;
			$logueado=1;

			$instruccion = "select tipo as usuarios from usuarios where nombre = '$nick'";
			$resultado = mysqli_query($con, $instruccion);

			while ($fila = $resultado->fetch_assoc()) {
				$tipo=$fila["usuarios"];
            }
            
			if($tipo="admin") {
				header('Location: ../administracion.html');
			}else{
				header('Location: ../usuario.html');
			}
		}
	}


public function cambiarLInicio(){

}

?>