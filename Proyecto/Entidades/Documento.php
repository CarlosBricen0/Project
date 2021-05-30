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
        private $productos;
        private $referencia;
        private $tipo_pago;
        private $estado;

        function __construct($fecha_emision,$numero_documento, $tipo_documento, $rut_empresa,  $rut_cliente,
          $productos , $referencia , $tipo_pago , $estado){
          
            $this->setTipoDocumento($tipo_documento);
            $this-> setFechaEmision ($fecha_emision);
            $this-> setRutEmpresa($rut_empresa);
            $this->setRutCliente($rut_cliente);
            $this-> setProducto($productos);
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
        function getProducto(){
            return $this->productos;
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


        function setFechaEmision($fecha_emision){
            $this-> fecha_emision = $fecha_emision;
        }

        function setProducto($productos){
            $this-> productos = $productos;
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