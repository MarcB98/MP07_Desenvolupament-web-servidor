<?php
session_start();
class Connection
{

    function __construct() {

        $server="localhost";
        $user="root";
        $pass="usbw";
        $bd="pw-php";

        $con = mysqli_connect($server, $user, $pass, $bd);

        if (!$con) {
            die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
        }
    }
    
}

?>