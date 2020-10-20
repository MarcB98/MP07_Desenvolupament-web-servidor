<?php
session_start();
header("Content-Type: text/html;charset=utf-8");

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
	include_once("alta.html");
}


?>






?>