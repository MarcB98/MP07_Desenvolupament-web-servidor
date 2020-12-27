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

        if (isset($_SESSION['model1'])) {
            $array1 = unserialize($_SESSION['model1']);
            if ($array1 != null) {
                $model1 = $this->TUser($array1);
                $this->view->Render($this, "registro", $model1, null, null);
            }else {
                $this->view->Render($this, "registro", null, null, null);
            }
        }else {
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

        $_SESSION['model1'] = serialize(array(
            $_POST["dni"],
            $_POST["nombre"],
            $_POST["apellido"],
            $_POST["email"],
            $_POST["user"],
            $_POST["pass"],
            $_POST["repass"],
        ));

        header('Location: registro');
    }
}
