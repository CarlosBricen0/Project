<?php

include('../Persistencia/EmpresaDao.php');

class EmpresaNeg{   

    public static function CrearEmpresa($Rut, $RazonSocial, $Giro, $Direccion){

        $Empresa = new Empresa($Rut, $RazonSocial, $Giro, $Direccion);
        EmpresaDao::sqlInsert($Empresa);

    }

    public static function ModificarEmpresa($Rut, $RazonSocial, $Giro, $Direccion){

        $Empresa = new Empresa($Rut, $RazonSocial, $Giro, $Direccion);
        EmpresaDao::sqlUpdate($Empresa);

    }

    public static function EliminarEmpresa($Rut){

        EmpresaDao::sqlDelete($Rut);

    }
    

}

?>