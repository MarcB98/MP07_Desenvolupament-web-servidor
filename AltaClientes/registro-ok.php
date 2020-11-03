<?php

//Requisitos
require_once("usuario.php");
header("Content-Type: text/html;charset=utf-8");

//Para comprobar contraseña
$error = null;
$comp = false;

//PARAMETROS DE CONEXION BBDD
$servidor="localhost";
$user="root";
$pass="usbw";
$bd="test";

//FUNCION MOSTRAR ALERT DE ERROR
function alert($message) { 
    echo "<script>alert('$message');</script>"; 
} 

//REALIZAMOS LA CONEXIÓN
$con=mysqli_connect($servidor,$user,$pass,$bd);
if(!$con) {
	die(alert("Error al realizar la conexión: ". mysqli_connect_error() . "<br>"));
} else {
	mysqli_set_charset($con,"utf8");
}

//CREAMOS OBJETO USUARIO Y LO INICIALIZAMOS
$usuario = new Usuario();
$usuario -> constructor($_GET["usuario"], $_GET["contra"], $_GET["nombre"], $_GET["apellido"], $_GET["email"], $_GET["edad"], $_GET["sexo"], $_GET["dni"]);

//LLAMAMOS A LAS COMPOVACIONES DEL ARCHIVO usuario.php
$usuario -> validarPassword($_GET["contra"]);
$usuario -> validarDNI($_GET["dni"]);
$usuario -> validarNombreApellido($_GET["nombre"],$_GET["apellido"]);
$usuario -> validarCorreo($_GET["email"]);

?>