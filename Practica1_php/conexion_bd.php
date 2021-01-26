<?php

//Parametros de Conexion de la BBDD
$servidor="localhost";
$user="root";
$pass="usbw";
$bd="bd_tienda";

$con = mysqli_connect($servidor,$user,$pass,$bd) or die(mysqli_connect_error());

if (!$con) {
    die("Error en la conexion con la BBDD" . mysqli_connect_error() . "<br>");
    require_once("index.html");
}

?>