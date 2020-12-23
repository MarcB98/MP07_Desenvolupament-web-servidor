<?php

class AnonymousClasses{

    public function TUser(array $array)
    {
        return new class($array){
            public $DNI;
            public $Nombre;
            public $Apellidos;
            public $Email;
            public $Contra;
            public $Contra1;
            public $User;
            public $Is_active;
            public $State;
            public $Date;

            function __construct($array)
            {
                if (0 < count($array)) {

                    if (!empty($array["DNI"])){$this->DNI = $array["DNI"];}
                    if (!empty($array["Nombre"])){$this->DNI = $array["Nombre"];}
                    if (!empty($array["Apellidos"])){$this->DNI = $array["Apellidos"];}
                    if (!empty($array["Email"])){$this->DNI = $array["Email"];}
                    if (!empty($array["Contra"])){$this->DNI = $array["Contra"];}
                    if (!empty($array["Contra1"])){$this->DNI = $array["Contra1"];}
                    if (!empty($array["User"])){$this->DNI = $array["User"];}
                    if (!empty($array["Is_active"])){$this->DNI = $array["Is_active"];}
                    if (!empty($array["State"])){$this->DNI = $array["State"];}
                    if (!empty($array["Date"])){$this->DNI = $array["Date"];}

                }
            }
        };
    }

}

?>
