<?php

    class Usuario
    {
        // Atributos
        private $nombre = null;
        private $apellido = null;
        private $edad = null;
        private $sexo = null;
        private $dni = null;

        function Usuario(){

        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function getDni() {
            return $this->dni;
        }

        public function setDni($dni) {
            $this->dni = $dni;
        }
		
		public function mostrarDatos() {
			
			
			echo "Nombre: " . $this->getNombre() . "<br>";
			echo "Apellido: " . $this->getApellido() . "<br>";
			echo "Edad: " . $this->getEdad() . "<br>";
			echo "Sexo: " . $this->getSexo() . "<br>";
			echo "DNI: " . $this->getDni() . "<br>";
		}
    }



?>