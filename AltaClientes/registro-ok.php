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
$usuario = new Clientes();
$usuario -> constructor($_GET["usuario"], $_GET["contra"], $_GET["nombre"], $_GET["apellido"], $_GET["email"], $_GET["edad"], $_GET["sexo"], $_GET["dni"]);

//LLAMAMOS A LAS COMPOVACIONES DEL ARCHIVO usuario.php
// $usuario -> validarPassword($_GET["contra"]);
// $usuario -> validarDNI($_GET["dni"]);
// $usuario -> validarNombreApellido($_GET["nombre"],$_GET["apellido"]);
// $usuario -> validarCorreo($_GET["email"]);

//INSERT DE LOS DATOS A LA BBDD
$consulta = mysqli_query($con,"INSERT INTO 'usuarios' ( `usuario` , `contra` , `email` , `nombre` , `apellido` , `edad` , `sexo` , `dni`, ')VALUES ( '".$usuario -> getUsuario()."' , '".$usuario -> getContrasena()."' , '".$usuario -> getEmail()."' , '".$usuario -> getNombre()."' , '".$usuario -> getApellido()."' , '".$usuario -> getEdad()."' , '".$usuario -> getSexo()."' , '".$usuario -> getDni()."')");

if(!$consulta) {
	die(alert("¡¡Error en la consulta!! "));
} else {
	alert("Registro correcto!!");
	header("Location: ../index.html");
}

?>