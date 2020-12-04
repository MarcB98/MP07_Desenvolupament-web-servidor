<?php

class UserController extends Controllers{

    public function __construct() {
        parent:: __construct();
    }

    public function Registro(){
        $this->view->Render($this,"registro",null);
    }

}

?>