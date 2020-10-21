<?php

    class Usuario
    {
        // Atributos
        private $usuario = null;
        private $contra = null;
        private $email = null;
        private $nombre = null;
        private $apellido = null;
        private $edad = null;
        private $sexo = null;
        private $dni = null;

        function Usuario(){

        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        public function getContrasena() {
            return $this->contrasena;
        }

        public function setContrasena($contra) {
            $this->contrasena = $contra;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
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
            
            echo "Usuario: " . $this->getUsuario() . "<br>";
            echo "Password: " . $this->getContrasena() . "<br>";
			echo "Nombre: " . $this->getNombre() . "<br>";
            echo "Apellido: " . $this->getApellido() . "<br>";
            echo "Correo Electronico: " . $this->getEmail() . "<br>";
			echo "Edad: " . $this->getEdad() . "<br>";
			echo "Sexo: " . $this->getSexo() . "<br>";
			echo "DNI: " . $this->getDni() . "<br>";
        }
        
        
    }

?>