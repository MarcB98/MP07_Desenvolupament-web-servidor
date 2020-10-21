<?php
    require_once __DIR__ . '/db_config.php';
	
header("Content-Type: text/html;charset=utf-8");
if (isset($_POST["nick"]))
{
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
		echo "Se ha conectado a la base de datos"."<br>";
	}
	//////////////////////////////////////
	
	//Inserción de datos
	
	//Primero compruebo si el nick existe
	$instruccion = "select count(*) as cuantos from profesores where nick = '$nick'";
	$res = mysqli_query($con, $instruccion);
	$datos = mysqli_fetch_assoc($res);
	
	if ($datos['cuantos'] == 0)
	{
		$instruccion = "insert into profesores values (null,'$nick','$password')";
		$res = mysqli_query($con, $instruccion);
		if (!$res) 
		{
			die("No se ha pordido crear el usuario");
		}
		else
		{
			echo "Usuario creado";
			//me lleva al login para que pruebe mi contraseña
			echo "<script>alert('Usuario creado correctamente');</script>";
			include_once("login.html");
		}
	}
	else
	{
		echo "El nick $nick no está disponible";
	}

}
else 
{
	echo ("ERROR: No se puede introducir un nick en blanco");
}
?>