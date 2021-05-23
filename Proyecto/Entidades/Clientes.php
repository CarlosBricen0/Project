<?php
    class Clientes
    {
        private $Rut;
        private $Nombre;
        private $Giro;
        private $Direccion;
        private $Comuna;
        private $Ciudad;
        private $Region;

        function __construct($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region)
        {
            $this->setRut($Rut);
            $this->setNombre($Nombre);
            $this->setGiro($Giro);
            $this->setDireccion($Direccion);
            $this->setComuna($Comuna);
            $this->setCiudad($Ciudad);
            $this->setRegion($Region);

        }

        function getRut(){
            return $this->Rut;
        }
        
        function getNombre(){
            return $this->Nombre;
        }

        function getGiro(){
            return $this->Giro;
        }

        function getDireccion(){
            return $this->Direccion;
        }
        
        function getComuna(){
            return $this->Comuna;
        }
        function getCiudad(){
            return $this->Ciudad;
        }
        function getRegion(){
            return $this->Region;
        }


        function getNombreCompleto(){
            return $this->Nombre . " " . $this->Giro;
        }


        function setRut($Rut){
            $this->Rut = $Rut;
        }
        
        function setNombre($Nombre){
            $this->Nombre = $Nombre;
        }

        function setGiro($Giro){
            $this->Giro = $Giro;
        }

        function setDireccion($Direccion){
            $this->Direccion = $Direccion;
        }

        function setComuna($Comuna){
            $this->Comuna = $Comuna;
        }

        function setCiudad($Ciudad){
            $this->Ciudad = $Ciudad;
        }

        function setRegion($Region){
            $this->Region = $Region;
        }
           
    }
    
?>