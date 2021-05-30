<?php

include('../Negocio/DocumentoNeg.php');

if(isset($_POST['btnInsertFactura'])){

    $fecha = $_POST["txtFecha"];
    $rutEmpresa = $_POST["rutEmpresa"];
    $rutCliente = $_POST["rutCliente"];
    $productos = $_POST["productos"];
    $referencia = $_POST["txtRefrencia"];
    $tipoPago = $_POST["tipoPago"];


    if(DocumentoNeg::crearDocumento("", 1 /*1 factura en bbdd*/ ,$fecha, $rutEmpresa, $rutCliente, $productos, $referencia, $tipoPago, "Creada")){
        echo '<script language="javascript">alert("Error al insertar La factura");window.location.href="../Presentacion/admin/FacAgregar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Factura agregada");window.location.href="../Presentacion/admin/FacAgregar.php";</script>';
    }

}

if (isset($_POST['btnBuscar'])) {
    $rut = $_POST["TxtRut"];
    header("Location: ../Presentacion/admin/ClientModificar.php?Rut=$rut");
}

if(isset($_POST['btnModificar'])){

    $Rut = $_POST["TxtRut"];
    $Nombre = $_POST["TxtNombre"];
    $Giro = $_POST["TxtGiro"];  
    $Direccion = $_POST["TxtDireccion"];
    $Comuna = $_POST["TxtComuna"];
    $Ciudad = $_POST["TxtCiudad"];
    $Region = $_POST["TxtRegion"];

    if(ClienteNeg::modificarCliente($Rut, $Nombre, $Giro, $Direccion, $Comuna, $Ciudad, $Region)){
        echo '<script language="javascript">alert("Error al modificar el cliente");window.location.href="../Presentacion/admin/ClientModificar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Cliente agregado Modificado");window.location.href="../Presentacion/admin/ClientModificar.php";</script>';
    }

}

if(isset($_POST['btnEliminar'])){

    $Rut = $_POST["txtRut"];
   
    if(ClienteNeg::eliminarCliente($Rut)){
        echo '<script language="javascript">alert("Error al Eliminar el cliente");window.location.href="../Presentacion/admin/ClientEliminar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Cliente Eliminado");window.location.href="../Presentacion/admin/ClientEliminar.php";</script>';
    }

}

echo '<script language="javascript">alert("Error desconocido");window.location.href="../index.php";</script>';

?>
