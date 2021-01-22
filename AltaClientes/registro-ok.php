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
$bd="marcb1";

//FUNCION MOSTRAR ALERT DE ERROR
function alert($message) { 
    echo "<script>alert('$message');</script>"; 
} 

//REALIZAMOS LA CONEXIÓN
$con=mysqli_connect($servidor,$user,$pass,$bd);

if(!$con) {
	die(alert("Error al realizar la conexión: ". mysqli_connect_error() . "<br>"));
} else {
	alert("Conexión BBDD correcta");
	mysqli_set_charset($con,"utf8");
}

//CREAMOS OBJETO USUARIO Y LO INICIALIZAMOS
$usuario = new Usuarios();
$usuario -> constructor($_POST["usuario"], $_POST["contra"], $_POST["nombre"], $_POST["email"], $_POST["dni"]);

//LLAMAMOS A LAS COMPOVACIONES DEL ARCHIVO usuario.php
$usuario -> validarPassword($_POST["contra"]);
//$usuario -> validarDNI($_GET["dni"]);
$usuario -> validarNombreApellido($_POST["nombre"],$_POST["apellido"]);
$usuario -> validarCorreo($_POST["email"]);

//INSERT DE LOS DATOS A LA BBDD
$consulta = mysqli_query($con,"INSERT INTO 'usuarios' ( `codUsu` , `nomUsu` , `correo` , `pasUsu` , `tipo` , `dni` , `nick`')VALUES ('null', '".$usuario -> getNombre()."' , '".$usuario -> getEmail()."' , '".$usuario -> getContrasena()."' , '".$usuario -> getUsuario()."' , 'user' , '".$usuario -> getDni()."')");

if(!$consulta) {
	die(alert("¡¡Error en la consulta!! "));
} else {
	alert("Registro correcto!!");
	header("Location: ../index.html");
}

?>