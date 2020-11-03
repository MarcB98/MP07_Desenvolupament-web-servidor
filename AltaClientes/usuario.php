<?php

    class Clientes
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

        //CONSTRUCTOR
        function constructor(){
            $this -> setUsuario($usuario);
            $this -> setContrasena($contra);
            $this -> setEmail($email);
            $this -> setNombre($nombre);
            $this -> setApellido($apellido);
            $this -> setEdad($edad);
            $this -> setSexo($sexo);
            $this -> setDni($dni);
        }

        /*FUNCIONES DE VALIDACION DE LOS CAMPOS */
        
        //COMPORVAR PASSWORD
        function validarPassword($contra) {
            if(strlen($contra) < 6){
                alert("La contrasena debe tener al menos 6 caracteres");
               return false;
            }
            if(strlen($contra) > 16){
                alert("La contrasena no puede tener más de 16 caracteres");
               return false;
            }
            if (!preg_match('`[a-z]`',$contra)){
                alert("La contrasena debe tener al menos una letra minúscula");
               return false;
            }
            if (!preg_match('`[A-Z]`',$contra)){
                alert("La contrasena debe tener al menos una letra mayúscula");
               return false;
            }
            if (!preg_match('`[0-9]`',$contra)){
                alert("La contrasena debe tener al menos un caracter numérico");
               return false;
            }
            alert("Correct Password");
            return true;
        }   

        //COMPROVAR DNI
        function validarDNI($dni){
            $letra = substr($dni, -1);
            $numeros = substr($dni, 0, -1);
            if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
                alert("DNI Correcto");
            }else{
                alert("DNI Incorrecto");
            }
        }

        //COMPROVAR NOMBRE Y APELLIDOS
        function validarNombreApellido($nombre,$apellido){
            if(!preg_match("/^([A-Za-zÑñ]+[áéíóú]?[A-Za-z]*){3,18}\s+([A-Za-zÑñ]+[áéíóú]?[A-Za-z]*){3,36}$/iu", $nombre,$apellido)) {
                alert("¡El formato del nombre y apellido es incorrecto!");
            } else {
                alert("Nombre y Apellidos, Correctos!");
            }
        }
        
        
        //COMPROVAR CORREO ELECTRONICO
        function validarCorreo ($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<br>Email correcto";
            } else {
                echo "<br>Email incorrecto";
            }
        }

        //GETTERS Y SETTERS
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
		   
    }

?>