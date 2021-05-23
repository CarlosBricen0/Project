<?php

    class Empresa
    {
        private $Rut;
        private $RazonSocial;
        private $Giro;
        private $Direccion;

        public function __construct($Rut, $RazonSocial, $Giro, $Direccion)
        {
            $this->setRut($Rut);
            $this->setRazonSocial($RazonSocial);
            $this->setGiro($Giro);
            $this->setDireccion($Direccion);
        }

        function getRut(){
            return $this->Rut;
        }

        function getRazonSocial(){
            return $this->RazonSocial;
        }

        function getGiro(){
            return $this->Giro;
        }
        

        function getDireccion(){
            return $this->Direccion;
        }      
        
        function setRut($Rut){
            $this->Rut=$Rut;
        }

        function setRazonSocial($RazonSocial){
            $this->RazonSocial=$RazonSocial;
        }

        function setGiro($Giro){
             $this->Giro=$Giro;
        }

        function setDireccion($Direccion){
            $this->Direccion=$Direccion;
        }  
    }
?>