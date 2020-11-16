<?php

class Controllers
{

    public function __construct(){
        $this->view=new Views();
        $this->loadClassmodels();
    }

    function loadClassmodels(){
        $model = get_class($this).'_model';
        $path = 'models/'.$model.'.php';
        if (file_exists($path)) {
            require $path;
            $this->$model = new $model();
        }
    }

}

?>