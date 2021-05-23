<?php
    include ("Tipo_documento.php");
    include ("Empresa.php");
    include ("Clientes.php");
    include ("Producto.php");


    class Documento {
        private $numero_documento;
        private $tipo_documento;
        private $fecha_emision;
        private $rut_empresa;
        private $rut_cliente;
        private $cod_producto;
        private $referencia;
        private $tipo_pago;
        private $estado;

        function __construct($numero_documento,Tipo_Documento $tipo_documento,$fecha_emision,Empresa $rut_empresa, Cliente $rut_cliente,
         Producto $cod_producto , $referencia , $tipo_pago , $estado){
             $this->setNumeroDocumento($numero_documento);
            $this->setTipoDocumento($tipo_documento);
            $this-> setFechaEmision ($fecha_emision);
            $this-> setRutEmpresa($rut_empresa);
            $this->setRutCliente($rut_cliente);
            $this-> setCodProducto($cod_producto);
            $this-> setReferencia($referencia);
            $this-> setTipoPago($tipo_pago);
            $this->setEstado($estado);

        
        }
       
        function getNumeroDocumento(){
            return $this->numero_documento;
        }
        function getRutEmpresa(){
            return $this->rut_empresa;
        }
        function getRutCliente(){
            return $this->rut_cliente;
        }
        function getTipoDocumento(){
            return $this->tipo_documento;
        }
        function getFechaEmision(){
            return $this->fecha_emision;
        }
        function getCodProducto(){
            return $this->cod_producto;
        }
        function getReferencia(){
            return $this->referencia;
        }
        function getTipoPago(){
            return $this->tipo_pago;
        }
        function getEstado(){
            return $this->estado;
        }

        

        
        function setNumeroDocumento($numero_documento){
            $this-> numero_documento = $numero_documento;
        }
        function setRutEmpresa($rut_empresa){
            $this-> rut_empresa = $rut_empresa;
        }

        function setRutCliente($rut_cliente){
            $this-> rut_cliente = $rut_cliente;
        }

        function setTipoDocumento($tipo_documento){
            $this-> tipo_documento = $tipo_documento;
        }

        function setRutEmpresa($rut_empresa){
            $this-> rut_empresa = $rut_empresa;
        }

        function setFechaEmision($fecha_emision){
            $this-> fecha_emision = $fecha_emision;
        }

        function setCodProducto($cod_producto){
            $this-> cod_producto = $cod_producto;
        }
        function setReferencia($referencia){
            $this-> referencia = $referencia;
        }
        function setTipoPago($tipo_pago){
            $this-> tipo_pago = $tipo_pago;
        }
        function setEstado($estado){
            $this-> estado = $estado;
        }
        

    }

?>