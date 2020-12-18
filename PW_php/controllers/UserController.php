<?php

class UserController extends Controllers{

    public function __construct() {
        parent:: __construct();

        session_start();

    }

    public function Registro(){

        if (isset($_SESSION['model1']) && isset($_SESSION['model2'])) {
            $array1 = unserialize($_SESSION['model1']);
            $array2 = unserialize($_SESSION['model2']);
            if ($array1 != null && $array2 != null) {
                $model1 = $this->TUser($array1);
                $model2 = $this->TUser($array2);
                $this->view->Render($this,"registro",$model1,$model2);
            }else{
                $this->view->Render($this,"registro",null,null);
            }
        }else {
            $this->view->Render($this,"registro",null,null);
        }

    }

    public function AddUser(){
        $execute = true;

        if (empty($_POST["dni"])) {
            $dni = "Ingrese un DNI";
            $execute = false;
        }

        if (empty($_POST["nombre"])) {
            $nombre = "Ingrese un Nombre";
            $execute = false;
        }

        if (empty($_POST["apellido"])) {
            $apellido = "Ingrese un Apellido";
            $execute = false;
        }

        if (empty($_POST["email"])) {
            $email = "Ingrese un Correo";
            $execute = false;
        }else {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $email = "Ingrese un Correo valido";
                $execute = false;
            }
        }

        if (empty($_POST["pass"])) {
            $pass = "Ingrese una Contraseña";
            $execute = false;
        }

        if (empty($_POST["user"])) {
            $user = "Campo vacio";
            $execute = false;
        }

        $_SESSION['model1'] = serialize(array(
            $_POST["dni"],
            $_POST["nombre"],
            $_POST["apellido"],
            $_POST["email"],
            $_POST["pass"],
            $_POST["user"]
        ));

        $_SESSION['model2'] = serialize(array(
            $dni,
            $nombre,
            $apellido,
            $email,
            $pass,
            $user,
        ));

        header('Location: registro');

    }

}

?>