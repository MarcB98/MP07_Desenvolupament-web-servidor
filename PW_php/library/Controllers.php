<?php

class Controllers 
{

    public function __construct() {
        $this->view = new Views();
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