<?php
    require_once __DIR__ . '/db_config.php';
	
session_start();

$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");


		$nick = $_POST["nick"];
		$password = $_POST["password"];

	$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die(mysql_error());
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	
	$instruccion = "select count(*) as cuantos from profesores where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}
	if($numero==0){
		echo "El usuario no existe";
	}
	else{
	$instruccion = "select password as cuantos from profesores where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password2=$fila["cuantos"];
	}
	
	/////////////////

	if (!strcmp($password2 , $password) == 0){
			echo "Contraseña incorrecta";
	}
	
	else{
		echo "Login OK";
		$_SESSION["nick_logueado"]=$nick;
		?> 
		
		<a href="menu_profesor.php">Acceder al menu</a>
		
		<?php
		
		
		$logueado=1;
	}
	}
	
	





?>