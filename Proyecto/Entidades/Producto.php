<?php

    class Producto{
        
        private $Id;
        private $Codigo;
        private $Descricpion;
        private $Stock;
        private $Precio_Unitario;
        private $Unidad_Medida;

        public function __construct($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida)
        {
            $this->setId($Id);
            $this->setCodigo($Codigo);
            $this->setDescripcion($Descricpion);
            $this->setStock($Stock);
            $this->setPrecio_Unitario($Precio_Unitario);  
            $this->setUnidad_Medida($Unidad_Medida);
        }

        function getId(){
            return $this->Id;
        }

        function getCodigo(){
            return $this->Codigo;
        }

        function getDescripcion(){
            return $this->Descripcion;
        }

        function getStock(){
            return $this->Stock;
        }

        function getPrecio_Unitario(){
            return $this->Precio_Unitario;
        }
        function getUnidad_Medida(){
            return $this->Unidad_Medida;
        }


        function setId($Id){
             $this->Id = $Id;
        }

        function setCodigo($Codigo){
            $this->Codigo = $Codigo;
        }

        function setDescripcion($Descripcion){
             $this->Descripcion =$Descripcion;
        }

        function setStock($Stock){
             $this->Stock = $Stock;
        }

        function setPrecio_Unitario($Precio_Unitario){
             $this->Precio_Unitario = $Precio_Unitario;
        }
        function setUnidad_Medida($Unidad_Medida){
            $this->Unidad_Medida = $Unidad_Medida;
       }
    }
    
?>