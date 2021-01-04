<?php

class ConexionDB{

    public function getConexion()
    {

        $cnx = new PDO("mysql:host = localhost;dbname=tienda_php","root","usbw");
        return $cnx;

    }

}

?>