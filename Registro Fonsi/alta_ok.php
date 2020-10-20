<?php

header("Content-Type: text/html;charset=utf-8");

//Parámetros que vienen del POST
$dni=$_POST["DNI"];
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$curso=$_POST["curso"];

//Parámetros de conexión
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";

//realizamos la conexión
$con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$con)
{
	die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
}
else
{
	mysqli_set_charset($con,"utf8");
	echo "Felicidades lerdo! te has conectado a la BD";
	$_SESSION["con"]=$con;
}

$consulta=mysqli_query($con,"insert into alumnos values ('$dni','$nombre','$edad','$curso')");

if(!$consulta)
{
	die("awiki wiki");
}
else
{
		echo "Datos insertados!";
}




?>


