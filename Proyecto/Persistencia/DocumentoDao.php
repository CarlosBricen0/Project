<?php

include('../Entidades/Documento.php');
include('../Base/Conexion.php');


class DocumentoDao{

    public static function sqlInsert($documento) {
        $cone = new Conexion;
        //$rut, $nomb, $Giro, $direcci, $correo, $telefono, $contra
        $tipoDocumento = $documento->getTipoDocumento();
        $fechaEmision = $documento->getFechaEmision();
        $rutEmpresa = $documento->getRutEmpresa();
        $rutCliente = $documento->getRutCliente();
        $referencia = $documento ->getReferencia();
        $tipoPago = $documento ->getTipoPago();
        $estado = $documento ->getEstado();
        $productos =  $documento ->getProducto();
        $sqlIc = "insert into documento values(null,'$tipoDocumento','$fechaEmision','$rutEmpresa','$rutCliente','$referencia','$tipoPago','$estado')";
        
        $cone->query($sqlIc);

        $sqlGetIdDocument =   "SELECT id_documento FROM documento order by id_documento desc LIMIT 1";

       $results =   $cone->query($sqlGetIdDocument);
        
       foreach($results as $row){
            $id = $row[0];
       }
        

        foreach($productos as $producto)
        {
           // echo "<script>console.log('Dato' +$id  + ' dato 2' +$producto[0]  ) </script></br>";
            $queryInsertProductos = "INSERT INTO documento_producto VALUES ($id ,$producto[0])";
            $cone->query($queryInsertProductos);
            
        }



        



    }
    
    public static function sqlUpdate($cliente) {
        $cone = new Conexion;
        $rut = $cliente->getRut();
        $nomb = $cliente->getNombre();
        $Giro = $cliente->getGiro();
        $direcci = $cliente->getDireccion();
        $comuna = $cliente ->getComuna();
        $ciudad = $cliente ->getCiudad();
        $region = $cliente ->getRegion();
        $sqlIc = "UPDATE cliente SET nombre = '$nomb',Giro = '$Giro',direccion = '$direcci',comuna = '$comuna',ciudad = '$ciudad',region= '$region' WHERE rut = '$rut'";
        $cone->query($sqlIc);
    }

    public static function sqlDelete($Rut){

        $cone = new Conexion;
        $sqlIc = "DELETE FROM CLIENTE WHERE rut = '$Rut'";
        $cone->query($sqlIc);
    }

    
    

}

?>

