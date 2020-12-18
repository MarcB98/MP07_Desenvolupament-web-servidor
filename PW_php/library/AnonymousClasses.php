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
            public $User;
            public $Image;

            function __construct($array)
            {
                if (0 < count($array)) {
                    $this->DNI = $array[0];
                    $this->Nombre = $array[1];
                    $this->Apellidos = $array[2];
                    $this->Email = $array[3];
                    $this->Contra = $array[4];
                    $this->User = $array[5];
                }
            }
        };
    }

}

?>
