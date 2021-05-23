<?php

    class Tipo_Documento {

        private $Documento;
       

        function __construct($Documento)
        {
            $this-> Documento = $Documento;
    
        }

        function getDocumento (){
            return $this-> Documento;
        }
        function setDocumento($Documento){
            $this-> Documento = $Documento;
        }


    }


?>