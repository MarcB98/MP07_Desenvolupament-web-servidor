<?php

class UserController extends Controllers
{

    public function __construct()
    {

        parent::__construct();
        //session_start();

    }

    public function Registro()
    {

        //$roles = $this->role->getRoles();
        $model1 = Session::getSession("model1");
        $model2 = Session::getSession("model2");

        if (null != $model1 || null != $model2) {

            $array1 = unserialize($model1);
            $array2 = unserialize($model2);

            Session::setSession('model1', "");
            Session::setSession('model2', "");

            if ($array1 != null && $array2 != null) {

                $model1 = $this->TUser($array1);
                $model2 = $this->TUser($array2);
                $this->view->Render($this, "registro", $model1, $model2, null);
            } else {

                $this->view->Render($this, "registro", null, null, null);
            }
        } else {

            $this->view->Render($this, "registro", null, null, null);
        }
    }

    public function AddUser()
    {

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
        } else {

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

                $email = "Ingrese un Correo valido";
                $execute = false;
            }
        }

        if (empty($_POST["pass"])) {
            $pass = "Ingrese una Contraseña";
            $execute = false;
        }

        if (empty($_POST["repass"])) {
            $repass = "Campo obligatorio";
            $execute = false;
        }
        if ($_POST["repass"] != $_POST["pass"]) {
            $repass = "Las contraseñas no coinciden";
            $execute = false;
        }
        if (empty($_POST["user"])) {
            $user = "Ingrese un Usuario";
            $execute = false;
        }

        $model1 = array(
            $_POST["dni"],
            $_POST["nombre"],
            $_POST["apellido"],
            $_POST["email"],
            $_POST["pass"],
            $_POST["repass"],
            $_POST["user"]
        );

        Session::setSession('model1', serialize($model1));

        Session::setSession('model2', serialize(array(
            $dni,
            $nombre,
            $apellido,
            $email,
            $pass,
            $repass,
            $user,
        )));

        header('Location: registro');
    }
}
