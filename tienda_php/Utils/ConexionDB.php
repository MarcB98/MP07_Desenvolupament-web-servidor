<?php

class ConexionDB{

    public function getConexion()
    {

        $cnx = new PDO("mysql:host = localhost;dbname=marcb1","root","usbw");
        return $cnx;

    }

}

?>