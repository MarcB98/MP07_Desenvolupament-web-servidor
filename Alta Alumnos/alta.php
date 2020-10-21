<?php

    require_once("usuarios.php");

    //Crear Objeto (Instancia de la clase)

    $objUsuario = new Usuario();
    $objUsuario->setUsuario($_POST["usuario"]);
    $objUsuario->setContrasena($_POST["contra"]);
    $objUsuario->setNombre($_POST["nombre"]);
    $objUsuario->setEmail($_POST["email"]);
    $objUsuario->setApellido($_POST["apellido"]);
    $objUsuario->setEdad($_POST["edad"]);
    $objUsuario->setSexo($_POST["sexo"]);
    $objUsuario->setDni($_POST["dni"]);
    
    $objUsuario->mostrarDatos();
    
?>