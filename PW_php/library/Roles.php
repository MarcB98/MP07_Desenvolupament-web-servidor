<?php
declare (strict_types = 1);
class Roles extends Connection
{
    public function __construct() {
        parent::__construct();
    }

    public function SetRoles(){
        try {
            $this->con->beginTransaction();
            $listRoles = array("Admin","User");
            $where = "WHERE Tipo = :Tipo";

            foreach ($listRoles as $key => $value) {
                $roles = $this->con->Select1("Tipo","roles",$where,array('Tipo' => $value));
                if (is_array($roles)) {
                    if (0 == count($roles['results'])) {
                        $query = "INSERT INTO roles (Tipo) VALUES (:Tipo)";
                        $sth = $this->con->prepare($query);
                        $sth->execute((array)$this->TRoles(array($value)));
                    }                   
                }else {
                    break;
                    return $roles;
                }
            }

            $this->con->commit();

        } catch (\Throwable $th) {
            //$this->con->rollBack();
            return $th->getMessage();
        }
    }

    public function TRoles(array $array)
    {
        return new class($array){
            var $Tipo;
            function __construct($array){
                if(0<count($array)){
                    $this->Tipo = $array[0];
                }
            }
        };
    }

}

?>