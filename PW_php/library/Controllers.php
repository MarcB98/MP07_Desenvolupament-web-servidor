<?php

class Controllers extends AnonymousClasses
{

    public function __construct() {
        Session::star();
        $this->view = new Views();
        //$this->role = new Roles();
        $this->loadClassmodels();
    }

    public function loadClassmodels()
    {        
        $array = explode("Controller",get_class($this)); 
        $model = $array[0].'_model';
        $path = 'models/'.$model.'.php';        

        if (file_exists($path)) {
            require $path;
            $this-> $model = new $model;
        }

    }

}

?>