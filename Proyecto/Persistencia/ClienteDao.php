<?php

include('../Entidades/Clientes.php');
include('../Base/Conexion.php');


class ClienteDao{

    public static function sqlInsert($cliente) {
        $cone = new Conexion;
        //$rut, $nomb, $Giro, $direcci, $correo, $telefono, $contra
        $rut = $cliente->getRut();
        $nomb = $cliente->getNombre();
        $Giro = $cliente->getGiro();
        $direcci = $cliente->getDireccion();
        $comuna = $cliente ->getComuna();
        $ciudad = $cliente ->getCiudad();
        $region = $cliente ->getRegion();
        $sqlIc = "insert into cliente values('$rut','$nomb','$Giro','$direcci','$comuna','$ciudad','$region')";
        $cone->query($sqlIc);
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

