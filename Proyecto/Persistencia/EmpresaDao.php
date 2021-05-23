<?php

include('../Entidades/Empresa.php');
include('../Base/Conexion.php');


class EmpresaDao{

    public static function sqlInsert($empresa) {
        $cone = new Conexion;
        $rut = $empresa->getRut();
        $razon= $empresa->getRazonSocial();
        $Giro = $empresa->getGiro();
        $direcci = $empresa->getDireccion();
        $sqlIc = "insert into empresa values('$rut','$razon', '$Giro' ,'$direcci')";
        $cone->query($sqlIc);
    }
    
    public static function sqlUpdate($empresa) {
        $cone = new Conexion;
        $rut = $empresa->getRut();
        $razon= $empresa->getRazonSocial();
        $Giro = $empresa->getGiro();
        $direcci = $empresa->getDireccion();

        
        $sqlIc = "UPDATE empresa SET RazonSocial = '$razon', Giro = '$Giro',direccion = '$direcci' WHERE rut = '$rut'";
        
        $cone->query($sqlIc);
    }

    public static function sqlDelete($rut){
        $cone = new Conexion;

        $sqlIc = "DELETE FROM EMPRESA WHERE rut = '$rut'";
        
        $cone->query($sqlIc);


    }
    

}

?>

