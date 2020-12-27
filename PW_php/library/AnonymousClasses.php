<?php
declare (strict_types = 1);
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

                    $this->DNI = $array[0];
                    $this->Nombre = $array[1];
                    $this->Apellidos = $array[2];
                    $this->Email = $array[3];
                    $this->User = $array[4];
                    $this->Contra = $array[5];
                    $this->Contra1 = $array[6];

                }

            }

        };
        
    }

}

?>
