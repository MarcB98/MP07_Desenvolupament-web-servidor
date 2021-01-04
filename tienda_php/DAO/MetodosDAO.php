<?php
include '../Utils/ConexionDB.php';
class MetodosDAO
{
    public function ListarProductos()
    {
        $cnx = new ConexionDB();
        $cn=$cnx->getConexion();

        $res = $cn->prepare("select * from productos");
        $res->execute();

        foreach ($res as $row) {
            $lista[]=$row;
        }

        return $lista;

    }
}

?>