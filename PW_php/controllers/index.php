<?php

class Index extends controllers
{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render($this,"index");
    }

}

?>