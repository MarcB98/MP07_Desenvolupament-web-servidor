<?php

class User_model extends Connection{

    public function __construct()
    {
        parent::__construct();
    }

    public function AddUser($model)
    {
        echo var_dump($model);
    }

}

?>