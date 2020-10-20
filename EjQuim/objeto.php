<?php

    require_once("usuarios.php");

    //Crear Objeto (Instancia de la clase)

    $objUsuario = new Usuario();
    $objUsuario->setNombre($_POST["nombre"]);
    $objUsuario->setApellido($_POST["apellido"]);
    $objUsuario->setEdad($_POST["edad"]);
    $objUsuario->setSexo($_POST["sexo"]);
    $objUsuario->setDni($_POST["dni"]);
	
	$objUsuario->mostrarDatos();
	
	
	$objUsuario2 = new Usuario();
	$objUsuario3 = new Usuario();
	$objUsuario4 = new Usuario();
	$objUsuario5 = new Usuario();

	

?>