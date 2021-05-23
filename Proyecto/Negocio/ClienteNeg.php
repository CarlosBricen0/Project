<?php

include('../Persistencia/ClienteDao.php');

class ClienteNeg{   

    public static function crearCliente($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region){

        $cliente = new Clientes($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region);
        ClienteDao::sqlInsert($cliente);

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