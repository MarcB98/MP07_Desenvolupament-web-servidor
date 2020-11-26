<?php
session_start();
class Connection
{
    public $con;
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

    public function Select1($attr,$table,$where,$param)
    {
        try {
            $where = $where ?? "";
            $query = "SELECT ".$attr." FORM ".$table.$where;
            $sth = $this->con->prepare($query);
            $sth->execute($param);
            $response = $sth->fetchAll(CON::FETCH_ASSOC);
            return array("results" => $response);
        } catch (\Throwable $th) {
            return $e->getMessage();
        }
        $con = null;
    }
    
}

?>