<?php

include('../Negocio/EmpresaNeg.php');

//($Rut, $RazonSocial, $Direccion)

if(isset($_POST['btnInsert'])){

    $Rut = $_POST["TxtRut"];
    $RazonSocial = $_POST["TxtRazon"];
    $Giro = $_POST["TxtGiro"];
    $Direccion = $_POST["TxtDireccion"];

    if(EmpresaNeg::CrearEmpresa($Rut, $RazonSocial, $Giro, $Direccion)){
        echo '<script language="javascript">alert("Error al insertar la empresa");window.location.href="../Presentacion/admin/EmpAgregar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Empresa agregada");window.location.href="../Presentacion/admin/EmpAgregar.php";</script>';
    }

}

if (isset($_POST['btnBuscar'])) {
    $rut = $_POST["TxtRut"];
    header("Location: ../Presentacion/admin/EmpModificar.php?Rut=$rut");
}

if(isset($_POST['btnModificar'])){

    $Rut = $_POST["TxtRut"];
    $RazonSocial = $_POST["TxtRazon"];
    $Giro = $_POST["TxtGiro"];
    $Direccion = $_POST["TxtDireccion"];
    
    if(EmpresaNeg::ModificarEmpresa($Rut,$Giro, $RazonSocial, $Direccion)){
        echo '<script language="javascript">alert("Error al modificar la empresa");window.location.href="../Presentacion/admin/EmpModificar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Se ha modificado la Empresa");window.location.href="../Presentacion/admin/EmpModificar.php";</script>';
    }

}

if(isset($_POST['btnEliminar'])){

    $Rut = $_POST["txtRut"];
 
    
    if(EmpresaNeg::EliminarEmpresa($Rut)){
        echo '<script language="javascript">alert("Error al Eliminar la empresa");window.location.href="../Presentacion/admin/EmpEliminar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Se ha Eliminado la Empresa");window.location.href="../Presentacion/admin/EmpEliminar.php";</script>';
    }

}


echo '<script language="javascript">alert("Error desconocido");window.location.href="../index.php";</script>';
?>
