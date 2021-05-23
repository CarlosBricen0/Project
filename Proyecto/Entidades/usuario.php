<?php

    class Usuario{
        private $usuario;
        private $password;
        private $tipo;

        function __construct( $usuario, $password, $tipo)
        {
            $this->usuario=$usuario;
            $this->password=$password;
            $this->$tipo;
        }

        function getUsuario(){
            return $this->usuario;
        }

        function getPassword(){
            return $this->password;
        }

        function getTipo(){
            return $this->tipo;
        }
    }
?>