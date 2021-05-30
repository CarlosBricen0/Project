<?php

include('../Persistencia/DocumentoDao.php');

class DocumentoNeg{   

    public static function crearDocumento($numero_documento, $tipoDocumento, $fecha_emision, $rut_empresa, $rut_cliente, $productos,
     $referencia,$tipo_pago,$estado){

        $documento = new Documento($fecha_emision, $numero_documento, $tipoDocumento, $rut_empresa, $rut_cliente, $productos,
        $referencia,$tipo_pago,$estado);

        DocumentoDao::sqlInsert($documento);

    }

    public static function modificarCliente($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region){

        $cliente = new Clientes($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region);
        ClienteDao::sqlUpdate($cliente);

    }

    public static function eliminarCliente($Rut){

       
        ClienteDao::sqlDelete($Rut);

    }

}

?>